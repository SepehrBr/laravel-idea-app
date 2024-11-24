<!DOCTYPE html>
<html lang="EN" dir="<?php echo e(App::getLocale() == 'fa' ? 'rtl' : 'ltr'); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title> <?php echo e(config('app.name')); ?> | <?php echo $__env->yieldContent('title'); ?> </title>
    <link href="https://bootswatch.com/5/sketchy/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <?php if (isset($component)) { $__componentOriginal175ed005090f7ec43c4ebe7c43db5768 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal175ed005090f7ec43c4ebe7c43db5768 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.header.nav','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('header.nav'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal175ed005090f7ec43c4ebe7c43db5768)): ?>
<?php $attributes = $__attributesOriginal175ed005090f7ec43c4ebe7c43db5768; ?>
<?php unset($__attributesOriginal175ed005090f7ec43c4ebe7c43db5768); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal175ed005090f7ec43c4ebe7c43db5768)): ?>
<?php $component = $__componentOriginal175ed005090f7ec43c4ebe7c43db5768; ?>
<?php unset($__componentOriginal175ed005090f7ec43c4ebe7c43db5768); ?>
<?php endif; ?>

    <div class="container py-4">
        <div class="row">
        
            <?php echo $__env->make('layouts.leftbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>
</html>
<?php /**PATH D:\roocket\Back\PHP\Laravel\youtube\yelo code\ideas\resources\views/layouts/master.blade.php ENDPATH**/ ?>