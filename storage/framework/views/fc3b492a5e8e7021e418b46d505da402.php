<div class="row">
    <div class="mb-3">
        <form action="<?php echo e(route('ideas.create')); ?>" method="post" id="create-idea">
            <?php echo csrf_field(); ?>
            <textarea class="form-control" id="idea" rows="3" name="content"></textarea>
        </form>
    </div>
    
    <?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p class="text-danger"><?php echo e($message); ?></p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    <?php if (isset($component)) { $__componentOriginalb3074c44b1fcb4568b511f712279a303 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb3074c44b1fcb4568b511f712279a303 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.btn','data' => ['onclick' => 'document.getElementById(\'create-idea\').submit();']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.btn'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['onclick' => 'document.getElementById(\'create-idea\').submit();']); ?>Share <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb3074c44b1fcb4568b511f712279a303)): ?>
<?php $attributes = $__attributesOriginalb3074c44b1fcb4568b511f712279a303; ?>
<?php unset($__attributesOriginalb3074c44b1fcb4568b511f712279a303); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb3074c44b1fcb4568b511f712279a303)): ?>
<?php $component = $__componentOriginalb3074c44b1fcb4568b511f712279a303; ?>
<?php unset($__componentOriginalb3074c44b1fcb4568b511f712279a303); ?>
<?php endif; ?>
</div>
<?php /**PATH D:\roocket\Back\PHP\Laravel\youtube\yelo code\ideas\resources\views/components/idea/create-idea.blade.php ENDPATH**/ ?>