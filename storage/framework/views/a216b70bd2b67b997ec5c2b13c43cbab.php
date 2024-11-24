<?php if (isset($component)) { $__componentOriginalc43c16768d40c05be613a314019be99d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc43c16768d40c05be613a314019be99d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.sidebar-search','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.sidebar-search'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc43c16768d40c05be613a314019be99d)): ?>
<?php $attributes = $__attributesOriginalc43c16768d40c05be613a314019be99d; ?>
<?php unset($__attributesOriginalc43c16768d40c05be613a314019be99d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc43c16768d40c05be613a314019be99d)): ?>
<?php $component = $__componentOriginalc43c16768d40c05be613a314019be99d; ?>
<?php unset($__componentOriginalc43c16768d40c05be613a314019be99d); ?>
<?php endif; ?>

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
            <div class="hstack gap-2 mb-3 d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="avatar">
                        <a href="<?php echo e(route('users.show', $user->id )); ?>">
                            <img
                            class="avatar-img rounded-circle"
                            src="<?php echo e($user->getProfileUrl()); ?>"
                            width="30"
                            alt=""
                            />
                        </a>
                    </div>
                    <div class="overflow-hidden ms-2">
                        <a class="h6 mb-0" href="<?php echo e(route('users.show', $user->id )); ?>"><?php echo e($user->name); ?></a>
                    </div>
                </div>
                <?php if(auth()->guard()->check()): ?>
                    <?php if(Auth::user()->isNot($user)): ?>
                        <?php if(Auth::user()->follows($user)): ?>
                            <form action="<?php echo e(route('users.unfollow', $user->id )); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="btn btn-danger-soft rounded-circle icon-md ms-auto"> Unfollow </button>
                            </form>
                        <?php else: ?>
                            <form action="<?php echo e(route('users.follow', $user->id )); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="btn btn-success-soft rounded-circle icon-md ms-auto"> Follow </button>
                            </form>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php /**PATH D:\roocket\Back\PHP\Laravel\youtube\yelo code\ideas\resources\views/layouts/rightbar.blade.php ENDPATH**/ ?>