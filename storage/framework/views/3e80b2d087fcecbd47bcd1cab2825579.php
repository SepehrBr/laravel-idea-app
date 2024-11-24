<div class="card mt-3">
    <?php if (isset($component)) { $__componentOriginalcb511723466285f60f610185a2a8cfa8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcb511723466285f60f610185a2a8cfa8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.side-title','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.side-title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>Top Users <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcb511723466285f60f610185a2a8cfa8)): ?>
<?php $attributes = $__attributesOriginalcb511723466285f60f610185a2a8cfa8; ?>
<?php unset($__attributesOriginalcb511723466285f60f610185a2a8cfa8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcb511723466285f60f610185a2a8cfa8)): ?>
<?php $component = $__componentOriginalcb511723466285f60f610185a2a8cfa8; ?>
<?php unset($__componentOriginalcb511723466285f60f610185a2a8cfa8); ?>
<?php endif; ?>

    <div class="card-body">
        <?php $__currentLoopData = $top_users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="hstack gap-2 mb-3">
                <div class="avatar">
                    <a href="#!">
                        <img
                        class="avatar-img rounded-circle"
                        src="<?php echo e($user->getProfileUrl()); ?>"
                        width="20"
                        alt=""
                        />
                    </a>
                </div>
                <div class="overflow-hidden">
                    <a class="h6 mb-0" href="#!"><?php echo e($user->name); ?></a>
                </div>
                <a class="btn btn-primary-soft rounded-circle icon-md ms-auto" href="#">
                    <i class="fa-solid fa-plus"></i>
                </a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php if (isset($component)) { $__componentOriginalaf7731c19680a582458b47d8e4cd2f9e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalaf7731c19680a582458b47d8e4cd2f9e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.footer-btn','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.footer-btn'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>show more <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalaf7731c19680a582458b47d8e4cd2f9e)): ?>
<?php $attributes = $__attributesOriginalaf7731c19680a582458b47d8e4cd2f9e; ?>
<?php unset($__attributesOriginalaf7731c19680a582458b47d8e4cd2f9e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalaf7731c19680a582458b47d8e4cd2f9e)): ?>
<?php $component = $__componentOriginalaf7731c19680a582458b47d8e4cd2f9e; ?>
<?php unset($__componentOriginalaf7731c19680a582458b47d8e4cd2f9e); ?>
<?php endif; ?>
    </div>
</div>
<?php /**PATH D:\roocket\Back\PHP\Laravel\youtube\yelo code\ideas\resources\views/components/layouts/top-users.blade.php ENDPATH**/ ?>