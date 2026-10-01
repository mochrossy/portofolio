<div class="bg-grey-50" id="blog">
    <div class="container py-16 md:py-20">
        <h2 class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl">
            I also like to write
        </h2>
        <h4 class="pt-6 text-center font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl">
            Check out my latest posts!
        </h4>

        <div class="mx-auto grid w-full grid-cols-1 gap-6 pt-12 sm:w-3/4 lg:w-full lg:grid-cols-3 xl:gap-10">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                <a href="<?php echo e(route('blog.show', $post)); ?>"
                   class="group block overflow-hidden rounded-lg bg-white shadow transition-all hover:-translate-y-1 hover:shadow-xl">

                    
                    <div class="relative h-56 overflow-hidden bg-grey-50">
                        <img src="<?php echo e(asset('storage/' . $post->image)); ?>"
                             alt="<?php echo e($post->title); ?>"
                             loading="lazy"
                             class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-110" />

                        <span class="absolute right-4 bottom-4 rounded-full border-2 border-white px-5 py-2 text-center font-body text-xs font-bold uppercase text-white md:text-sm">
                            Read More
                        </span>
                    </div>

                    
                    <div class="p-6">
                        <span class="block font-body text-lg font-semibold text-black group-hover:text-primary">
                            <?php echo e($post->title); ?>

                        </span>
                        <span class="mt-2 block font-body text-sm text-grey-20">
                            <?php echo e(\Illuminate\Support\Str::limit($post->excerpt, 120)); ?>

                        </span>
                        <div class="mt-4 flex items-center justify-between text-xs text-grey-40">
                            <span><?php echo e($post->published_at?->format('d M Y')); ?></span>
                            <span class="font-bold uppercase text-primary"><?php echo e($post->category); ?></span>
                        </div>
                    </div>
                </a>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                <p class="col-span-3 text-center text-grey-40">
                    Belum ada post. Tambahkan di panel admin.
                </p>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>
    </div>
</div><?php /**PATH H:\Workspace\laragon\www\portofolio\resources\views/partials/blog.blade.php ENDPATH**/ ?>