<?php if (isset($component)) { $__componentOriginal5863877a5171c196453bfa0bd807e410 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5863877a5171c196453bfa0bd807e410 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.app','data' => ['title' => $post->title]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($post->title)]); ?>
    <?php if (isset($component)) { $__componentOriginale280ba8d55bbd76e5ea71c9ba0fc94c5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale280ba8d55bbd76e5ea71c9ba0fc94c5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.front.header','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('front.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale280ba8d55bbd76e5ea71c9ba0fc94c5)): ?>
<?php $attributes = $__attributesOriginale280ba8d55bbd76e5ea71c9ba0fc94c5; ?>
<?php unset($__attributesOriginale280ba8d55bbd76e5ea71c9ba0fc94c5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale280ba8d55bbd76e5ea71c9ba0fc94c5)): ?>
<?php $component = $__componentOriginale280ba8d55bbd76e5ea71c9ba0fc94c5; ?>
<?php unset($__componentOriginale280ba8d55bbd76e5ea71c9ba0fc94c5); ?>
<?php endif; ?>

    <main class="pt-[72px] min-h-screen bg-white py-32">
        <div x-data="blogActions({ slug: '<?php echo e($post->slug); ?>' })" x-init="initBlog" class="max-w-3xl mx-auto px-6 md:px-8">
            <a href="<?php echo e(route('blog.index')); ?>" class="inline-flex items-center gap-2 text-sm text-primary/40 hover:text-accent transition mb-12">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                Volver al blog
            </a>

            <?php if (isset($component)) { $__componentOriginal0aff76a2b67105c01ebe473813c6aff3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0aff76a2b67105c01ebe473813c6aff3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.front.blog-reader','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('front.blog-reader'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0aff76a2b67105c01ebe473813c6aff3)): ?>
<?php $attributes = $__attributesOriginal0aff76a2b67105c01ebe473813c6aff3; ?>
<?php unset($__attributesOriginal0aff76a2b67105c01ebe473813c6aff3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0aff76a2b67105c01ebe473813c6aff3)): ?>
<?php $component = $__componentOriginal0aff76a2b67105c01ebe473813c6aff3; ?>
<?php unset($__componentOriginal0aff76a2b67105c01ebe473813c6aff3); ?>
<?php endif; ?>

            <h1 class="text-4xl md:text-5xl font-bold font-display text-primary mt-4 mb-8 leading-[1.05]"><?php echo e($post->title); ?></h1>

            <div class="flex items-center justify-between border-b border-[rgba(15,23,42,0.06)] pb-4 mb-6">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-surface border border-[rgba(15,23,42,0.06)] flex items-center justify-center">
                        <svg class="w-5 h-5 text-primary/50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                    </div>
                    <span class="text-xs tracking-[0.3em] uppercase text-primary font-bold">Gestionalo</span>
                </div>

                <div class="flex gap-6">
                    <div class="relative">
                        <button @click="showAudio = !showAudio"
                                :class="showAudio ? 'text-accent' : 'text-primary/50 hover:text-accent'"
                                class="flex flex-col items-center gap-1 cursor-pointer transition-colors">
                            <span class="w-10 h-10 flex items-center justify-center border"
                                  :class="showAudio ? 'border-accent bg-accent/5' : 'border-[rgba(15,23,42,0.06)]'">
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M3 9v6h4l5 5V4L7 9H3zm13.5 3c0-1.77-1.02-3.29-2.5-4.03v8.05c1.48-.73 2.5-2.25 2.5-4.02zM14 3.23v2.06c2.89.86 5 3.54 5 6.71s-2.11 5.85-5 6.71v2.06c4.01-.91 7-4.49 7-8.77s-2.99-7.86-7-8.77z"/></svg>
                            </span>
                            <span class="text-[10px] uppercase">Escuchar</span>
                        </button>
                    </div>
                    <div class="relative">
                        <button @click="showSummary = !showSummary"
                                :class="showSummary ? 'text-accent' : 'text-primary/50 hover:text-accent'"
                                class="flex flex-col items-center gap-1 cursor-pointer transition-colors">
                            <span class="w-10 h-10 flex items-center justify-center border"
                                  :class="showSummary ? 'border-accent bg-accent/5' : 'border-[rgba(15,23,42,0.06)]'">
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/></svg>
                            </span>
                            <span class="text-[10px] uppercase">Resumen</span>
                        </button>
                    </div>
                    <div class="relative">
                        <button @click="showShare = !showShare"
                                :class="showShare ? 'text-accent' : 'text-primary/50 hover:text-accent'"
                                class="flex flex-col items-center gap-1 cursor-pointer transition-colors">
                            <span class="w-10 h-10 flex items-center justify-center border"
                                  :class="showShare ? 'border-accent bg-accent/5' : 'border-[rgba(15,23,42,0.06)]'">
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92 1.61 0 2.92-1.31 2.92-2.92s-1.31-2.92-2.92-2.92z"/></svg>
                            </span>
                            <span class="text-[10px] uppercase">Compartir</span>
                        </button>

                        <div x-show="showShare" x-cloak @click.away="showShare = false" class="absolute top-full right-0 mt-2 bg-white border border-[rgba(15,23,42,0.06)] z-50 w-48">
                            <button @click="copyLink" class="w-full flex items-center gap-3 px-4 py-3 hover:bg-surface transition border-b border-[rgba(15,23,42,0.06)] text-sm text-primary/70">
                                <svg class="w-5 h-5 fill-current text-primary/50" viewBox="0 0 24 24"><path d="M3.9 12c0-1.71 1.39-3.1 3.1-3.1h4V7H7c-2.76 0-5 2.24-5 5s2.24 5 5 5h4v-1.9H7c-1.71 0-3.1-1.39-3.1-3.1zM8 13h8v-2H8v2zm9-6h-4v1.9h4c1.71 0 3.1 1.39 3.1 3.1s-1.39 3.1-3.1 3.1h-4V17h4c2.76 0 5-2.24 5-5s-2.24-5-5-5z"/></svg>
                                <span x-text="copied ? '¡Copiado!' : 'Copiar enlace'"></span>
                            </button>
                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e(urlencode(request()->url())); ?>&quote=<?php echo e(urlencode($post->title)); ?>" target="_blank" rel="noopener noreferrer" class="flex items-center gap-3 px-4 py-3 hover:bg-surface transition border-b border-[rgba(15,23,42,0.06)] text-sm text-primary/70">
                                <svg class="w-5 h-5 fill-current text-[#1877F2]" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                                Facebook
                            </a>
                            <a href="https://twitter.com/intent/tweet?text=<?php echo e(urlencode($post->title)); ?>&url=<?php echo e(urlencode(request()->url())); ?>" target="_blank" rel="noopener noreferrer" class="flex items-center gap-3 px-4 py-3 hover:bg-surface transition border-b border-[rgba(15,23,42,0.06)] text-sm text-primary/70">
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                                X (Twitter)
                            </a>
                            <a href="https://wa.me/?text=<?php echo e(urlencode($post->title.' — '.request()->url())); ?>" target="_blank" rel="noopener noreferrer" class="flex items-center gap-3 px-4 py-3 hover:bg-surface transition border-b border-[rgba(15,23,42,0.06)] text-sm text-primary/70">
                                <svg class="w-5 h-5 fill-current text-[#25D366]" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                                WhatsApp
                            </a>
                            <a href="https://t.me/share/url?url=<?php echo e(urlencode(request()->url())); ?>&text=<?php echo e(urlencode($post->title)); ?>" target="_blank" rel="noopener noreferrer" class="flex items-center gap-3 px-4 py-3 hover:bg-surface transition text-sm text-primary/70">
                                <svg class="w-5 h-5 fill-current text-[#0088CC]" viewBox="0 0 24 24"><path d="M11.944 0A12 12 0 000 12a12 12 0 0012 12 12 12 0 0012-12A12 12 0 0012 0a12 12 0 00-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 01.171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z"/></svg>
                                Telegram
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div x-show="showAudio" x-cloak class="bg-surface border border-[rgba(15,23,42,0.06)] p-4 relative mb-6">
                <button @click="showAudio = false; stop()" class="absolute top-2 right-2 text-primary/50 hover:text-accent transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
                <div class="flex items-center gap-4">
                    <button @click="togglePlay" class="w-12 h-12 flex items-center justify-center bg-accent text-white hover:bg-accent-hover transition-colors border border-accent flex-shrink-0">
                        <svg x-show="!isPlaying" class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                        <svg x-show="isPlaying" x-cloak class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z"/></svg>
                    </button>
                    <button @click="prevSection" class="w-8 h-8 flex items-center justify-center text-primary/50 hover:text-accent transition-colors border border-[rgba(15,23,42,0.06)] flex-shrink-0">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M6 6h2v12H6zm3.5 6l8.5 6V6z"/></svg>
                    </button>
                    <button @click="nextSection" class="w-8 h-8 flex items-center justify-center text-primary/50 hover:text-accent transition-colors border border-[rgba(15,23,42,0.06)] flex-shrink-0">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M6 18l8.5-6L6 6v12zM16 6v12h2V6h-2z"/></svg>
                    </button>
                    <div class="flex-1 flex items-center gap-2">
                        <div class="flex items-end gap-[2px] h-8 flex-1 max-w-[200px]">
                            <template x-for="(h, i) in [4,8,12,16,20,18,14,10,6,8,12,16,20,18,14,10,6,8,12,16]" :key="i">
                                <div class="w-[3px] transition-colors duration-300"
                                     :class="(i / 20) <= (totalEstimatedSeconds > 0 ? elapsedSeconds / totalEstimatedSeconds : 0) ? 'bg-accent' : 'bg-[rgba(15,23,42,0.1)]'"
                                     :style="'height:' + h + 'px'">
                                </div>
                            </template>
                        </div>
                        <span class="text-xs text-primary/50 font-mono tabular-nums" x-text="formattedTime"></span>
                    </div>
                    <button @click="cycleSpeed" class="w-10 h-8 flex items-center justify-center text-xs font-bold text-primary bg-white border border-[rgba(15,23,42,0.06)] hover:bg-surface transition-colors flex-shrink-0" x-text="speedLabel"></button>
                </div>
            </div>

            <div x-show="showSummary" x-cloak class="border border-[rgba(15,23,42,0.06)] bg-white mb-6">
                <div @click="isSummaryExpanded = !isSummaryExpanded" class="flex items-center justify-between p-4 bg-surface/50 cursor-pointer select-none">
                    <div class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-accent fill-current" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        <span class="text-sm font-medium text-primary">Leer resumen y puntos destacados de la nota con IA</span>
                    </div>
                    <svg class="w-4 h-4 text-primary/50 transition-transform duration-200" :class="isSummaryExpanded ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </div>
                <div x-show="isSummaryExpanded" x-cloak class="p-4 border-t border-[rgba(15,23,42,0.06)]">
                    <div class="flex gap-2 mb-4">
                        <button @click="fetchSummary('highlights')" :disabled="summaryLoading" class="border border-primary text-primary px-4 py-2 hover:bg-surface text-sm font-medium transition-colors disabled:opacity-50">Puntos destacados</button>
                        <button @click="fetchSummary('summary')" :disabled="summaryLoading" class="border border-primary text-primary px-4 py-2 hover:bg-surface text-sm font-medium transition-colors disabled:opacity-50">Resumen</button>
                    </div>
                    <div x-show="summaryLoading" class="flex items-center gap-2 text-sm text-primary/50">
                        <svg class="w-4 h-4 animate-spin fill-current" viewBox="0 0 24 24"><path d="M12 4V2A10 10 0 002 12h2a8 8 0 018-8z"/></svg>
                        Generando...
                    </div>
                    <div x-show="summaryError" x-cloak class="text-sm text-red-500" x-text="summaryError"></div>
                    <div x-show="summaryText && !summaryLoading" x-cloak class="text-sm text-primary/70 leading-relaxed prose prose-sm max-w-none" x-html="summaryText"></div>
                </div>
            </div>

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($post->featured_image): ?>
                <img src="<?php echo e(Storage::url($post->featured_image)); ?>" alt="<?php echo e($post->title); ?>" class="w-full h-72 object-cover mb-12">
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($post->excerpt): ?>
                <p class="text-lg text-primary/60 mb-10 leading-relaxed font-light"><?php echo e($post->excerpt); ?></p>
                <div class="w-12 h-px bg-accent/40 mb-10"></div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            <article id="blog-content" class="prose prose-gray max-w-none leading-relaxed text-primary/70">
                <?php echo $post->body; ?>

            </article>
        </div>
    </main>

    <?php if (isset($component)) { $__componentOriginal3c480fe32eca01afa89706656753ba58 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3c480fe32eca01afa89706656753ba58 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.front.footer','data' => ['config' => config('site.footer')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('front.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['config' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(config('site.footer'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3c480fe32eca01afa89706656753ba58)): ?>
<?php $attributes = $__attributesOriginal3c480fe32eca01afa89706656753ba58; ?>
<?php unset($__attributesOriginal3c480fe32eca01afa89706656753ba58); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3c480fe32eca01afa89706656753ba58)): ?>
<?php $component = $__componentOriginal3c480fe32eca01afa89706656753ba58; ?>
<?php unset($__componentOriginal3c480fe32eca01afa89706656753ba58); ?>
<?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5863877a5171c196453bfa0bd807e410)): ?>
<?php $attributes = $__attributesOriginal5863877a5171c196453bfa0bd807e410; ?>
<?php unset($__attributesOriginal5863877a5171c196453bfa0bd807e410); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5863877a5171c196453bfa0bd807e410)): ?>
<?php $component = $__componentOriginal5863877a5171c196453bfa0bd807e410; ?>
<?php unset($__componentOriginal5863877a5171c196453bfa0bd807e410); ?>
<?php endif; ?>
<?php /**PATH C:\Users\idmr_\OneDrive\Escritorio\gestionalo\resources\views/pages/post.blade.php ENDPATH**/ ?>