
<div class="bg-grey-50" id="clients">
    <div class="container py-16 md:py-20">
        <div class="mx-auto w-full sm:w-3/4 lg:w-full">
            <h2 class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl">
                My latest clients
            </h2>

            <div class="flex flex-wrap items-center justify-center pt-4 sm:pt-4">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                    <span class="m-8 block">
                        <a href="<?php echo e($client->website_url ?? '#'); ?>"
                           target="_blank"
                           title="<?php echo e($client->name); ?>">
                            <img src="<?php echo e(asset('storage/' . $client->logo)); ?>"
                                 alt="<?php echo e($client->name); ?>"
                                 class="mx-auto block h-20 w-auto grayscale transition-all duration-300 hover:grayscale-0 hover:scale-110" />
                        </a>
                    </span>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                    <p class="py-8 text-center text-grey-40">
                        Belum ada klien. Tambahkan di panel admin.
                    </p>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>
        </div>
    </div>
</div>

<!--
<div class="bg-grey-50" id="clients">
    <div class="container py-16 md:py-20">
        <div class="mx-auto w-full sm:w-3/4 lg:w-full">
            <h2 class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl">
                My latest clients
            </h2>

            <div class="flex flex-wrap items-center justify-center pt-8 sm:pt-10">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                    <span class="m-6 block sm:m-8">
                        <a href="<?php echo e($client->website_url ?? '#'); ?>"
                           target="_blank"
                           title="<?php echo e($client->name); ?>">
                            <img src="<?php echo e(asset('storage/' . $client->logo)); ?>"
                                 alt="<?php echo e($client->name); ?>"
                                 class="mx-auto block h-24 w-auto object-contain grayscale transition-all duration-300 hover:grayscale-0 hover:scale-110" />
                        </a>
                    </span>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                    <p class="py-8 text-center text-grey-40">
                        Belum ada klien. Tambahkan di panel admin.
                    </p>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>
        </div>
    </div>
</div>
--><?php /**PATH H:\Workspace\laragon\www\portofolio\resources\views/partials/clients.blade.php ENDPATH**/ ?>