<x-layouts.app title="Blog">
    <x-front.header />

    <main class="pt-[72px] min-h-screen bg-white py-32">
        <div class="max-w-6xl mx-auto px-6 md:px-8 lg:px-12">
            <div class="mb-16">
                <span class="text-xs font-medium text-accent tracking-[0.3em] uppercase">Recursos</span>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold font-display text-primary mt-4 leading-[1.05]">Blog</h1>
                <div class="w-12 h-px bg-accent/60 mt-6"></div>
            </div>

            @if($categories->count())
                <div class="flex flex-wrap gap-3 mb-12">
                    <a href="{{ route('blog.index') }}"
                       class="px-4 py-2 text-sm font-medium transition {{ request()->routeIs('blog.index') ? 'bg-accent text-white' : 'bg-surface text-primary/60 hover:text-accent hover:bg-accent/10' }}">
                        Todas
                    </a>
                    @foreach ($categories as $cat)
                        <a href="{{ route('blog.category', $cat) }}"
                           class="px-4 py-2 text-sm font-medium transition {{ isset($category) && $category->id === $cat->id ? 'bg-accent text-white' : 'bg-surface text-primary/60 hover:text-accent hover:bg-accent/10' }}">
                            {{ $cat->name }}
                        </a>
                    @endforeach
                </div>
            @endif

            @if($posts->count())
                <div class="grid md:grid-cols-3 gap-px bg-[rgba(15,23,42,0.06)]">
                    @foreach($posts as $post)
                        <a href="{{ route('blog.show', $post) }}" class="group bg-white p-8 hover:bg-surface transition-colors">
                            @if($post->featured_image)
                                <img src="{{ Storage::url($post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-48 object-cover mb-6 grayscale group-hover:grayscale-0 transition duration-700">
                            @else
                                <div class="w-full h-48 bg-surface flex items-center justify-center mb-6">
                                    <span class="text-6xl font-bold font-display text-[rgba(15,23,42,0.06)]">{{ strtoupper(substr($post->title, 0, 1)) }}</span>
                                </div>
                            @endif
                            @if($post->categories->count())
                                <div class="flex flex-wrap gap-2 mb-3">
                                    @foreach ($post->categories as $cat)
                                        <span class="text-[10px] uppercase tracking-[0.15em] font-medium text-accent">{{ $cat->name }}</span>
                                    @endforeach
                                </div>
                            @endif
                            <time class="text-xs text-primary/30 tracking-wider uppercase">{{ $post->published_at?->format('d/m/Y') }}</time>
                            <h2 class="text-xl font-bold font-display text-primary mt-2 mb-3 group-hover:text-accent transition-colors">{{ $post->title }}</h2>
                            <p class="text-sm text-primary/50 leading-relaxed line-clamp-2">{{ $post->excerpt }}</p>
                            <div class="flex items-center gap-2 mt-6 text-xs font-medium text-accent tracking-[0.2em] uppercase">
                                <span>Leer</span>
                                <span class="w-6 h-px bg-accent/60 group-hover:w-10 transition-all"></span>
                            </div>
                        </a>
                    @endforeach
                </div>
                <div class="mt-16">{{ $posts->links() }}</div>
            @else
                <p class="text-center text-primary/30 text-lg">Próximamente más artículos.</p>
            @endif
        </div>
    </main>

    <x-front.footer :config="config('site.footer')" />
</x-layouts.app>
