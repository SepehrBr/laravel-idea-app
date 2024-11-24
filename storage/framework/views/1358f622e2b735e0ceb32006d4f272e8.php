
<?php if(session('message') == 'Idea Edited Successfully!'): ?>
<?php if (isset($component)) { $__componentOriginale347e7e707c787182615ea8f140fbb19 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale347e7e707c787182615ea8f140fbb19 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.alerts','data' => ['type' => 'success']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.alerts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'success']); ?>
    <?php echo e(session('message')); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale347e7e707c787182615ea8f140fbb19)): ?>
<?php $attributes = $__attributesOriginale347e7e707c787182615ea8f140fbb19; ?>
<?php unset($__attributesOriginale347e7e707c787182615ea8f140fbb19); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale347e7e707c787182615ea8f140fbb19)): ?>
<?php $component = $__componentOriginale347e7e707c787182615ea8f140fbb19; ?>
<?php unset($__componentOriginale347e7e707c787182615ea8f140fbb19); ?>
<?php endif; ?>
<?php endif; ?>
<?php if(session('message') == 'Sth Went Wrong Please try Again Later ...'): ?>
<?php if (isset($component)) { $__componentOriginale347e7e707c787182615ea8f140fbb19 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale347e7e707c787182615ea8f140fbb19 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.alerts','data' => ['type' => 'danger']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.alerts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'danger']); ?>
    <?php echo e(session('message')); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale347e7e707c787182615ea8f140fbb19)): ?>
<?php $attributes = $__attributesOriginale347e7e707c787182615ea8f140fbb19; ?>
<?php unset($__attributesOriginale347e7e707c787182615ea8f140fbb19); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale347e7e707c787182615ea8f140fbb19)): ?>
<?php $component = $__componentOriginale347e7e707c787182615ea8f140fbb19; ?>
<?php unset($__componentOriginale347e7e707c787182615ea8f140fbb19); ?>
<?php endif; ?>
<?php endif; ?>


<?php if(session('message') == 'Comment Successfully Posted!'): ?>
<?php if (isset($component)) { $__componentOriginale347e7e707c787182615ea8f140fbb19 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale347e7e707c787182615ea8f140fbb19 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.alerts','data' => ['type' => 'success']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.alerts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'success']); ?>
    <?php echo e(session('message')); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale347e7e707c787182615ea8f140fbb19)): ?>
<?php $attributes = $__attributesOriginale347e7e707c787182615ea8f140fbb19; ?>
<?php unset($__attributesOriginale347e7e707c787182615ea8f140fbb19); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale347e7e707c787182615ea8f140fbb19)): ?>
<?php $component = $__componentOriginale347e7e707c787182615ea8f140fbb19; ?>
<?php unset($__componentOriginale347e7e707c787182615ea8f140fbb19); ?>
<?php endif; ?>
<?php endif; ?>
<?php if(session('message') == 'Sth Went Wrong Please try Again Later ...'): ?>
<?php if (isset($component)) { $__componentOriginale347e7e707c787182615ea8f140fbb19 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale347e7e707c787182615ea8f140fbb19 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.alerts','data' => ['type' => 'danger']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.alerts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'danger']); ?>
    <?php echo e(session('message')); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale347e7e707c787182615ea8f140fbb19)): ?>
<?php $attributes = $__attributesOriginale347e7e707c787182615ea8f140fbb19; ?>
<?php unset($__attributesOriginale347e7e707c787182615ea8f140fbb19); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale347e7e707c787182615ea8f140fbb19)): ?>
<?php $component = $__componentOriginale347e7e707c787182615ea8f140fbb19; ?>
<?php unset($__componentOriginale347e7e707c787182615ea8f140fbb19); ?>
<?php endif; ?>
<?php endif; ?>


<?php if(str_contains(session('message'), 'Created Successfully!') && (url()->previous() == "http://localhost:8000/auth/register")): ?>
    <?php if (isset($component)) { $__componentOriginale347e7e707c787182615ea8f140fbb19 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale347e7e707c787182615ea8f140fbb19 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.alerts','data' => ['type' => 'success']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.alerts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'success']); ?>
        <?php echo e(session('message')); ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale347e7e707c787182615ea8f140fbb19)): ?>
<?php $attributes = $__attributesOriginale347e7e707c787182615ea8f140fbb19; ?>
<?php unset($__attributesOriginale347e7e707c787182615ea8f140fbb19); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale347e7e707c787182615ea8f140fbb19)): ?>
<?php $component = $__componentOriginale347e7e707c787182615ea8f140fbb19; ?>
<?php unset($__componentOriginale347e7e707c787182615ea8f140fbb19); ?>
<?php endif; ?>
<?php endif; ?>


<?php if(str_contains(session('message'), 'Logged In')): ?>
    <?php if (isset($component)) { $__componentOriginale347e7e707c787182615ea8f140fbb19 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale347e7e707c787182615ea8f140fbb19 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.alerts','data' => ['type' => 'success']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.alerts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'success']); ?>
        <?php echo e(session('message')); ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale347e7e707c787182615ea8f140fbb19)): ?>
<?php $attributes = $__attributesOriginale347e7e707c787182615ea8f140fbb19; ?>
<?php unset($__attributesOriginale347e7e707c787182615ea8f140fbb19); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale347e7e707c787182615ea8f140fbb19)): ?>
<?php $component = $__componentOriginale347e7e707c787182615ea8f140fbb19; ?>
<?php unset($__componentOriginale347e7e707c787182615ea8f140fbb19); ?>
<?php endif; ?>
<?php endif; ?>


<?php if(str_contains(session('message'), 'Logged Out')): ?>
    <?php if (isset($component)) { $__componentOriginale347e7e707c787182615ea8f140fbb19 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale347e7e707c787182615ea8f140fbb19 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.alerts','data' => ['type' => 'success']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.alerts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'success']); ?>
        <?php echo e(session('message')); ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale347e7e707c787182615ea8f140fbb19)): ?>
<?php $attributes = $__attributesOriginale347e7e707c787182615ea8f140fbb19; ?>
<?php unset($__attributesOriginale347e7e707c787182615ea8f140fbb19); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale347e7e707c787182615ea8f140fbb19)): ?>
<?php $component = $__componentOriginale347e7e707c787182615ea8f140fbb19; ?>
<?php unset($__componentOriginale347e7e707c787182615ea8f140fbb19); ?>
<?php endif; ?>
<?php endif; ?>


<?php if(session('message') == 'Idea Created Successfully!'): ?>
    <?php if (isset($component)) { $__componentOriginale347e7e707c787182615ea8f140fbb19 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale347e7e707c787182615ea8f140fbb19 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.alerts','data' => ['type' => 'success']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.alerts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'success']); ?>
        <?php echo e(session('message')); ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale347e7e707c787182615ea8f140fbb19)): ?>
<?php $attributes = $__attributesOriginale347e7e707c787182615ea8f140fbb19; ?>
<?php unset($__attributesOriginale347e7e707c787182615ea8f140fbb19); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale347e7e707c787182615ea8f140fbb19)): ?>
<?php $component = $__componentOriginale347e7e707c787182615ea8f140fbb19; ?>
<?php unset($__componentOriginale347e7e707c787182615ea8f140fbb19); ?>
<?php endif; ?>
<?php endif; ?>
<?php if(session('message') == 'Sth Went Wrong Please try Again Later ...'): ?>
    <?php if (isset($component)) { $__componentOriginale347e7e707c787182615ea8f140fbb19 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale347e7e707c787182615ea8f140fbb19 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.alerts','data' => ['type' => 'danger']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.alerts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'danger']); ?>
        <?php echo e(session('message')); ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale347e7e707c787182615ea8f140fbb19)): ?>
<?php $attributes = $__attributesOriginale347e7e707c787182615ea8f140fbb19; ?>
<?php unset($__attributesOriginale347e7e707c787182615ea8f140fbb19); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale347e7e707c787182615ea8f140fbb19)): ?>
<?php $component = $__componentOriginale347e7e707c787182615ea8f140fbb19; ?>
<?php unset($__componentOriginale347e7e707c787182615ea8f140fbb19); ?>
<?php endif; ?>
<?php endif; ?>



<?php if(str_contains(session('message'), 'Updated Successfully') && (url()->previous() == "http://localhost:8000/users/".Auth::id()."/edit")): ?>
    <?php if (isset($component)) { $__componentOriginale347e7e707c787182615ea8f140fbb19 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale347e7e707c787182615ea8f140fbb19 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.alerts','data' => ['type' => 'success']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.alerts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'success']); ?>
        <?php echo e(session('message')); ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale347e7e707c787182615ea8f140fbb19)): ?>
<?php $attributes = $__attributesOriginale347e7e707c787182615ea8f140fbb19; ?>
<?php unset($__attributesOriginale347e7e707c787182615ea8f140fbb19); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale347e7e707c787182615ea8f140fbb19)): ?>
<?php $component = $__componentOriginale347e7e707c787182615ea8f140fbb19; ?>
<?php unset($__componentOriginale347e7e707c787182615ea8f140fbb19); ?>
<?php endif; ?>
<?php endif; ?>


<?php if(str_contains(session('message'), 'Following')): ?>
    <?php if (isset($component)) { $__componentOriginale347e7e707c787182615ea8f140fbb19 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale347e7e707c787182615ea8f140fbb19 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.alerts','data' => ['type' => 'success']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.alerts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'success']); ?>
        <?php echo e(session('message')); ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale347e7e707c787182615ea8f140fbb19)): ?>
<?php $attributes = $__attributesOriginale347e7e707c787182615ea8f140fbb19; ?>
<?php unset($__attributesOriginale347e7e707c787182615ea8f140fbb19); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale347e7e707c787182615ea8f140fbb19)): ?>
<?php $component = $__componentOriginale347e7e707c787182615ea8f140fbb19; ?>
<?php unset($__componentOriginale347e7e707c787182615ea8f140fbb19); ?>
<?php endif; ?>
<?php endif; ?>

<?php if(str_contains(session('message'), 'Unfollowed')): ?>
    <?php if (isset($component)) { $__componentOriginale347e7e707c787182615ea8f140fbb19 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale347e7e707c787182615ea8f140fbb19 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.alerts','data' => ['type' => 'success']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.alerts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'success']); ?>
        <?php echo e(session('message')); ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale347e7e707c787182615ea8f140fbb19)): ?>
<?php $attributes = $__attributesOriginale347e7e707c787182615ea8f140fbb19; ?>
<?php unset($__attributesOriginale347e7e707c787182615ea8f140fbb19); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale347e7e707c787182615ea8f140fbb19)): ?>
<?php $component = $__componentOriginale347e7e707c787182615ea8f140fbb19; ?>
<?php unset($__componentOriginale347e7e707c787182615ea8f140fbb19); ?>
<?php endif; ?>
<?php endif; ?>


<?php if(str_contains(session('message'), 'Comment Deleted') && (url()->previous() == "http://localhost:8000/admin/comments")): ?>
    <?php if (isset($component)) { $__componentOriginale347e7e707c787182615ea8f140fbb19 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale347e7e707c787182615ea8f140fbb19 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.alerts','data' => ['type' => 'success']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.alerts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'success']); ?>
        <?php echo e(session('message')); ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale347e7e707c787182615ea8f140fbb19)): ?>
<?php $attributes = $__attributesOriginale347e7e707c787182615ea8f140fbb19; ?>
<?php unset($__attributesOriginale347e7e707c787182615ea8f140fbb19); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale347e7e707c787182615ea8f140fbb19)): ?>
<?php $component = $__componentOriginale347e7e707c787182615ea8f140fbb19; ?>
<?php unset($__componentOriginale347e7e707c787182615ea8f140fbb19); ?>
<?php endif; ?>
<?php endif; ?>


<?php if(str_contains(session('message'), 'Comment Deleted') && (url()->previous() == "http://localhost:8000/admin/comments")): ?>
    <?php if (isset($component)) { $__componentOriginale347e7e707c787182615ea8f140fbb19 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale347e7e707c787182615ea8f140fbb19 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.alerts','data' => ['type' => 'success']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.alerts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'success']); ?>
        <?php echo e(session('message')); ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale347e7e707c787182615ea8f140fbb19)): ?>
<?php $attributes = $__attributesOriginale347e7e707c787182615ea8f140fbb19; ?>
<?php unset($__attributesOriginale347e7e707c787182615ea8f140fbb19); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale347e7e707c787182615ea8f140fbb19)): ?>
<?php $component = $__componentOriginale347e7e707c787182615ea8f140fbb19; ?>
<?php unset($__componentOriginale347e7e707c787182615ea8f140fbb19); ?>
<?php endif; ?>
<?php endif; ?>
<?php /**PATH D:\roocket\Back\PHP\Laravel\youtube\yelo code\ideas\resources\views/components/layouts/alert-messages.blade.php ENDPATH**/ ?>