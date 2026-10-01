<?php
    $metaTitle = trim($__env->yieldContent('title', config('app.name'))) . ' | ' . config('app.name');
    $metaDescription = trim($__env->yieldContent('description', 'Portofolio dan blog pribadi.'));
    $metaImage = trim($__env->yieldContent('og_image', asset('assets/img/social.jpg')));
    $metaUrl = url()->current();
    $metaType = trim($__env->yieldContent('og_type', 'website'));
?>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="theme-color" content="#5540af" />

<title><?php echo e($metaTitle); ?></title>
<meta name="description" content="<?php echo e($metaDescription); ?>" />
<link rel="canonical" href="<?php echo e($metaUrl); ?>" />

<meta property="og:type" content="<?php echo e($metaType); ?>" />
<meta property="og:title" content="<?php echo e($metaTitle); ?>" />
<meta property="og:description" content="<?php echo e($metaDescription); ?>" />
<meta property="og:url" content="<?php echo e($metaUrl); ?>" />
<meta property="og:image" content="<?php echo e($metaImage); ?>" />
<meta property="og:site_name" content="<?php echo e(config('app.name')); ?>" />
<meta property="og:locale" content="id_ID" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="<?php echo e($metaTitle); ?>" />
<meta name="twitter:description" content="<?php echo e($metaDescription); ?>" />
<meta name="twitter:image" content="<?php echo e($metaImage); ?>" />

<link rel="icon" type="image/png" href="<?php echo e(asset('assets/img/favicon.png')); ?>" />

<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(config('services.google.analytics_id')): ?>
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo e(config('services.google.analytics_id')); ?>"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '<?php echo e(config('services.google.analytics_id')); ?>');
    </script>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?><?php /**PATH H:\Workspace\laragon\www\portofolio\resources\views/partials/meta.blade.php ENDPATH**/ ?>