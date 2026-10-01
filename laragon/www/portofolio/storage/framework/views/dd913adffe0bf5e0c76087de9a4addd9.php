
<div class="bg-grey-50" id="about">
    <div class="container flex flex-col items-center py-16 md:py-20 lg:flex-row">

        
        <div class="w-full text-center sm:w-3/4 lg:w-3/5 lg:text-left">
            <h2 class="font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl">
                Who am I?
            </h2>
            <h4 class="pt-6 font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl">
                I'm Moch. Rossy Avian I., a System Engineer, DevOps and CloudeCode learner
            </h4>
            <p class="pt-6 font-body leading-relaxed text-grey-20">
                Senior IT Consultant & DevOps Project Leader with over 19 years of expertise spanning IT infrastructure, database engineering, and enterprise project delivery. Proven track record of architecting resilient system solutions and leading nationwide infrastructure rollouts for major financial, mining, and telecommunications organizations. Hands-on technical mastery in DevOps containerization (Docker), database migrations (MS SQL to MariaDB), and reverse proxy optimization, combined with strong strategic leadership in ITSM, DRP/BCP, and cross-functional team management. Adept at bridging technical operations with business objectives to maximize system performance, security, and uptime.
            </p>

            
            <div class="flex flex-col justify-center pt-6 sm:flex-row lg:justify-start">
                <div class="flex items-center justify-center sm:justify-start">
                    <p class="font-body text-lg font-semibold uppercase text-grey-20">
                        Connect with me
                    </p>
                    <div class="hidden sm:block">
                        <i class="bx bx-chevron-right text-2xl text-primary"></i>
                    </div>
                </div>
                <div class="flex items-center justify-center pt-5 pl-2 sm:justify-start sm:pt-0">
                    <a href="#" class="pl-4 first:pl-0">
                        <i class="bx bxl-facebook-square text-2xl text-primary hover:text-yellow"></i>
                    </a>
                    <a href="#" class="pl-4">
                        <i class="bx bxl-twitter text-2xl text-primary hover:text-yellow"></i>
                    </a>
                    <a href="#" class="pl-4">
                        <i class="bx bxl-github text-2xl text-primary hover:text-yellow"></i>
                    </a>
                    <a href="#" class="pl-4">
                        <i class="bx bxl-linkedin text-2xl text-primary hover:text-yellow"></i>
                    </a>
                    <a href="#" class="pl-4">
                        <i class="bx bxl-instagram text-2xl text-primary hover:text-yellow"></i>
                    </a>
                </div>
            </div>
        </div>

        
        <div class="w-full pl-0 pt-10 sm:w-3/4 lg:w-2/5 lg:pl-12 lg:pt-0">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                <div class="<?php echo e($loop->first ? '' : 'pt-6'); ?>">
                    <div class="flex items-end justify-between">
                        <h4 class="font-body font-semibold uppercase text-black">
                            <?php echo e($skill->name); ?>

                        </h4>
                        <h3 class="font-body text-3xl font-bold text-primary">
                            <?php echo e($skill->level); ?>%
                        </h3>
                    </div>
                    <div class="mt-2 h-3 w-full rounded-full bg-lila">
                        <div class="h-3 rounded-full bg-primary" style="width: <?php echo e($skill->level); ?>%"></div>
                    </div>
                </div>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                <p class="text-center text-grey-40">
                    Belum ada skill. Tambahkan di panel admin.
                </p>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>

    </div>
</div><?php /**PATH H:\Workspace\laragon\www\portofolio\resources\views/partials/about.blade.php ENDPATH**/ ?>