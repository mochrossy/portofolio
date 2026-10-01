

<?php $__env->startSection('title', $post->title); ?>
<?php $__env->startSection('description', $post->excerpt); ?>
<?php $__env->startSection('og_image', $post->image ? asset('storage/' . $post->image) : asset('assets/img/social.jpg')); ?>
<?php $__env->startSection('og_type', 'article'); ?>

<?php $__env->startSection('page-title', $post->title); ?>
<?php $__env->startSection('page-subtitle', $post->published_at?->format('d M Y') . ' · ' . $post->category); ?>

<?php $__env->startSection('content'); ?>

    <article class="prose max-w-none">

        
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($post->image): ?>
            <img src="<?php echo e(asset('storage/' . $post->image)); ?>"
                 alt="<?php echo e($post->title); ?>"
                 class="mb-8 w-full rounded-lg shadow" />
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

        
        <div class="mb-6 flex flex-wrap items-center gap-4 border-b border-grey-50 pb-6 text-sm text-grey-40">
            <span><i class="bx bx-user"></i> <?php echo e($post->author); ?></span>
            <span><i class="bx bx-calendar"></i> <?php echo e($post->published_at?->format('d M Y')); ?></span>
            <span><i class="bx bx-purchase-tag"></i> <?php echo e($post->category); ?></span>
        </div>

        
        <div class="font-body leading-relaxed text-grey-20">
            <?php echo $post->body; ?>

        </div>

    </article>

    
    <div class="mt-12 border-t border-grey-50 pt-6">
        <a href="<?php echo e(route('blog.index')); ?>"
           class="inline-flex items-center font-header font-bold uppercase text-primary hover:text-yellow">
            <i class="bx bx-left-arrow-alt mr-2 text-2xl"></i>
            Kembali ke daftar blog
        </a>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.blog', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH H:\Workspace\laragon\www\portofolio\resources\views/pages/blog/show.blade.php ENDPATH**/ ?>