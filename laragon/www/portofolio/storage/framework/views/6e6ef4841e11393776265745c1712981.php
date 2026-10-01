<div class="container py-16 md:py-20" id="portfolio">
    <h2 class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl">
        Check out my Portfolio
    </h2>
    <h3 class="pt-6 text-center font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl">
        Here's what I have done with the past
    </h3>

    <div class="mx-auto grid w-full grid-cols-1 gap-8 pt-12 sm:w-3/4 md:gap-10 lg:w-full lg:grid-cols-2">
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $portfolios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $portfolio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
            <a href="<?php echo e(route('portfolio.show', $portfolio)); ?>"
               class="group mx-auto block transform overflow-hidden rounded-lg bg-white shadow transition-all hover:scale-105 md:mx-0">

                <div class="relative">
                    <img src="<?php echo e(asset('storage/' . $portfolio->image)); ?>"
                         loading="lazy"
                         class="w-full"
                         alt="<?php echo e($portfolio->title); ?>" />

                    <div class="absolute inset-0 flex flex-col items-center justify-center bg-primary bg-opacity-80 opacity-0 transition-opacity group-hover:opacity-100">
                        <h4 class="px-6 text-center font-header text-lg font-bold uppercase text-white">
                            <?php echo e($portfolio->title); ?>

                        </h4>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($portfolio->category): ?>
                            <span class="mt-2 rounded-full bg-yellow px-4 py-1 font-body text-xs font-bold uppercase text-primary">
                                <?php echo e($portfolio->category); ?>

                            </span>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>
                </div>
            </a>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
            <p class="col-span-2 text-center text-grey-40">
                Belum ada portfolio. Tambahkan di panel admin.
            </p>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </div>

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($portfolios->count() > 0): ?>
        <div class="mt-12 text-center">
            <a href="<?php echo e(route('portfolio.index')); ?>"
               class="inline-flex items-center rounded bg-primary px-8 py-3 font-header text-sm font-bold uppercase text-white hover:bg-grey-20">
                Lihat Semua Portfolio
                <i class="bx bx-right-arrow-alt ml-2 text-xl"></i>
            </a>
        </div>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
</div><?php /**PATH H:\Workspace\laragon\www\portofolio\resources\views/partials/portfolio.blade.php ENDPATH**/ ?>