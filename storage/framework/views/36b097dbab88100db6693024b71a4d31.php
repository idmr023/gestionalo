<div class="space-y-6">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="bg-white p-6 border border-[rgba(15,23,42,0.06)]">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 flex items-center justify-center text-accent">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
                </div>
                <div>
                    <p class="text-sm text-primary/50">Servicios</p>
                    <p class="text-2xl font-bold font-display text-primary"><?php echo e($counts['services']); ?></p>
                </div>
            </div>
        </div>
        <div class="bg-white p-6 border border-[rgba(15,23,42,0.06)]">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 flex items-center justify-center text-accent">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5"/></svg>
                </div>
                <div>
                    <p class="text-sm text-primary/50">Proyectos</p>
                    <p class="text-2xl font-bold font-display text-primary"><?php echo e($counts['projects']); ?></p>
                </div>
            </div>
        </div>
        <div class="bg-white p-6 border border-[rgba(15,23,42,0.06)]">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 flex items-center justify-center text-accent">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9"/></svg>
                </div>
                <div>
                    <p class="text-sm text-primary/50">Blog</p>
                    <p class="text-2xl font-bold font-display text-primary"><?php echo e($counts['posts']); ?></p>
                </div>
            </div>
        </div>
        <div class="bg-white p-6 border border-[rgba(15,23,42,0.06)]">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 flex items-center justify-center text-accent">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                </div>
                <div>
                    <p class="text-sm text-primary/50">Contactos</p>
                    <p class="text-2xl font-bold font-display text-primary"><?php echo e($counts['contacts']); ?></p>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($counts['unread_contacts'] > 0): ?>
                        <p class="text-xs text-accent font-medium mt-1"><?php echo e($counts['unread_contacts']); ?> sin leer</p>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="bg-white p-6 border border-[rgba(15,23,42,0.06)]">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 flex items-center justify-center text-accent">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                </div>
                <div>
                    <p class="text-sm text-primary/50">Citas</p>
                    <p class="text-2xl font-bold font-display text-primary"><?php echo e($counts['appointments']); ?></p>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($counts['pending_appointments'] > 0): ?>
                        <p class="text-xs text-accent font-medium mt-1"><?php echo e($counts['pending_appointments']); ?> pendientes</p>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>
            </div>
        </div>
        <div class="bg-white p-6 border border-[rgba(15,23,42,0.06)]">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 flex items-center justify-center text-accent">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                </div>
                <div>
                    <p class="text-sm text-primary/50">Usuarios</p>
                    <p class="text-2xl font-bold font-display text-primary"><?php echo e($counts['users']); ?></p>
                </div>
            </div>
        </div>
        <a href="<?php echo e(route('admin.chats-ia.index')); ?>" class="bg-white p-6 border border-[rgba(15,23,42,0.06)] hover:border-accent/30 transition group col-span-1 md:col-span-2">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 flex items-center justify-center bg-accent/10 text-accent">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>
                </div>
                <div>
                    <p class="text-sm text-primary/50">Consultas IA</p>
                    <p class="text-2xl font-bold font-display text-primary group-hover:text-accent transition"><?php echo e($counts['chat_sessions']); ?> <span class="text-sm font-medium text-primary/40">sesiones · <?php echo e($counts['chat_messages']); ?> mensajes</span></p>
                    <p class="text-xs text-primary/40 mt-1"><?php echo e($counts['chat_users']); ?> clientes han usado la asesoría</p>
                </div>
            </div>
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-white p-6 border border-[rgba(15,23,42,0.06)]">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-semibold font-display text-primary">Contactos recientes</h3>
                <a href="<?php echo e(route('admin.contacts')); ?>" class="text-sm text-accent hover:text-accent-hover">Ver todos</a>
            </div>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($recentContacts->isNotEmpty()): ?>
                <div class="space-y-3">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $recentContacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="flex items-center justify-between py-2 <?php echo e(!$loop->last ? 'border-b border-[rgba(15,23,42,0.04)]' : ''); ?>">
                            <div>
                                <p class="text-sm font-medium text-primary <?php echo e(!$contact->is_read ? 'font-semibold' : ''); ?>">
                                    <?php echo e($contact->name); ?>

                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!$contact->is_read): ?>
                                        <span class="ml-2 px-1.5 py-0.5 text-xs bg-accent/10 text-accent font-medium">Nuevo</span>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                </p>
                                <p class="text-xs text-primary/40"><?php echo e($contact->created_at->diffForHumans()); ?></p>
                            </div>
                            <p class="text-xs text-primary/50 truncate max-w-[200px]"><?php echo e($contact->message); ?></p>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>
            <?php else: ?>
                <p class="text-sm text-primary/40 py-4">No hay contactos aún.</p>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>

        <div class="bg-white p-6 border border-[rgba(15,23,42,0.06)]">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-semibold font-display text-primary">Próximas citas</h3>
                <a href="<?php echo e(route('admin.appointments')); ?>" class="text-sm text-accent hover:text-accent-hover">Ver todas</a>
            </div>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($upcomingAppointments->isNotEmpty()): ?>
                <div class="space-y-3">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $upcomingAppointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="flex items-center justify-between py-2 <?php echo e(!$loop->last ? 'border-b border-[rgba(15,23,42,0.04)]' : ''); ?>">
                            <div>
                                <p class="text-sm font-medium text-primary"><?php echo e($appointment->title); ?></p>
                                <p class="text-xs text-primary/40"><?php echo e($appointment->user->name); ?> · <?php echo e($appointment->scheduled_at->format('d/m/Y H:i')); ?></p>
                            </div>
                            <?php $statusColors = ['pending' => 'bg-yellow-100 text-yellow-700', 'confirmed' => 'bg-accent/10 text-accent']; ?>
                            <span class="px-2 py-0.5 text-xs font-medium <?php echo e($statusColors[$appointment->status] ?? 'bg-surface text-primary/50'); ?>">
                                <?php echo e(__($appointment->status)); ?>

                            </span>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>
            <?php else: ?>
                <p class="text-sm text-primary/40 py-4">No hay próximas citas.</p>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>
    </div>

    <div class="bg-white p-6 border border-[rgba(15,23,42,0.06)]">
        <h3 class="text-lg font-semibold font-display text-primary mb-4">Accesos rápidos</h3>
        <div class="flex flex-wrap gap-4">
            <a href="<?php echo e(route('admin.services.create')); ?>" class="inline-flex items-center gap-2 bg-accent hover:bg-accent-hover text-white px-5 py-2.5 text-sm font-medium transition tracking-wide">+ Nuevo Servicio</a>
            <a href="<?php echo e(route('admin.projects.create')); ?>" class="inline-flex items-center gap-2 bg-accent hover:bg-accent-hover text-white px-5 py-2.5 text-sm font-medium transition tracking-wide">+ Nuevo Proyecto</a>
            <a href="<?php echo e(route('admin.posts.create')); ?>" class="inline-flex items-center gap-2 bg-accent hover:bg-accent-hover text-white px-5 py-2.5 text-sm font-medium transition tracking-wide">+ Nuevo Artículo</a>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\idmr_\OneDrive\Escritorio\gestionalo\resources\views/livewire/admin/dashboard.blade.php ENDPATH**/ ?>