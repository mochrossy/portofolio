<div class="relative bg-cover bg-center bg-no-repeat py-8"
     style="background-image: url(<?php echo e(asset('assets/img/bg-hero.jpg')); ?>)">
    <div class="absolute inset-0 z-20 bg-gradient-to-r from-hero-gradient-from to-hero-gradient-to"></div>

    <div class="container relative z-30 pt-20 pb-12 sm:pt-56 sm:pb-48 lg:pt-64 lg:pb-48">
        <div class="flex flex-col items-center justify-center lg:flex-row">
            <div class="rounded-full border-8 border-primary shadow-xl">
                <img src="<?php echo e(asset('assets/img/blog-author.jpg')); ?>"
                     class="h-48 rounded-full sm:h-56"
                     alt="author" />
            </div>
            <div class="pt-8 sm:pt-10 lg:pl-8 lg:pt-0">
                <h1 class="text-center font-header text-4xl text-white sm:text-left sm:text-5xl md:text-6xl">
                    Hello I'm M. Rossy Avian!
                </h1>
                <div class="flex flex-col justify-center pt-3 sm:flex-row sm:pt-5 lg:justify-start">
                    <div class="flex items-center justify-center pl-0 sm:justify-start md:pl-1">
                        <p class="font-body text-lg uppercase text-white">Let's connect</p>
                        <div class="hidden sm:block">
                            <i class="bx bx-chevron-right text-3xl text-yellow"></i>
                        </div>
                    </div>
                    <div class="flex items-center justify-center pt-5 pl-2 sm:justify-start sm:pt-0">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = [
                            'bxl-facebook-square' => '#',
                            'bxl-twitter' => '#',
                            'bxl-dribbble' => '#',
                            'bxl-linkedin' => '#',
                            'bxl-instagram' => '#',
                        ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $icon => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                            <a href="<?php echo e($url); ?>" class="pl-4 first:pl-0">
                                <i class="bx <?php echo e($icon); ?> text-2xl text-white hover:text-yellow"></i>
                            </a>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH H:\Workspace\laragon\www\portofolio\resources\views/partials/hero.blade.php ENDPATH**/ ?>