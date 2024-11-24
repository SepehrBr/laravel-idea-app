<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'likes',
    'uploaded',
    'id'
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'likes',
    'uploaded',
    'id'
]); ?>
<?php foreach (array_filter(([
    'likes',
    'uploaded',
    'id'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div>
    <p class="fs-6 fw-light text-muted">
        <?php echo e($slot); ?>

        <?php if(Auth::user()->id == $id): ?>
            <?php if(request()->is('/')): ?>
                <a href="<?php echo e(route('show-idea', [ 'idea' => $id])); ?>" class="mx-3 text-sm text-muted">
                    View More
                </a>
            <?php else: ?>
                <a href="<?php echo e(route('edit-idea', [ 'idea' => $id])); ?>" class="mx-3 text-sm text-muted">
                    Edit
                </a>
            <?php endif; ?>
        <?php endif; ?>
    </p>
    <div class="d-flex justify-content-between">
        <div>
            <a href="#" class="fw-light nav-link fs-6">
                 <span class="fas fa-heart me-1"></span> <?php echo e($likes); ?>

            </a>
        </div>
        <div>
            <span class="fs-6 fw-light text-muted">
                <span class="fas fa-clock"></span>
                <?php echo e($uploaded); ?>

            </span>
        </div>
    </div>
    <?php if(!request()->is('/')): ?>
        <div class="my-3">
            <form action="<?php echo e(route('create-comment', [ 'idea' => $id ])); ?>" method="post">
                <?php echo csrf_field(); ?>
                <textarea class="fs-6 form-control mb-3" rows="1" name="content"><?php echo e(old('content')); ?></textarea>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.btn','data' => ['class' => 'btn btn-dark btn-sm']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.btn'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'btn btn-dark btn-sm']); ?> Post Comment  <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb3074c44b1fcb4568b511f712279a303)): ?>
<?php $attributes = $__attributesOriginalb3074c44b1fcb4568b511f712279a303; ?>
<?php unset($__attributesOriginalb3074c44b1fcb4568b511f712279a303); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb3074c44b1fcb4568b511f712279a303)): ?>
<?php $component = $__componentOriginalb3074c44b1fcb4568b511f712279a303; ?>
<?php unset($__componentOriginalb3074c44b1fcb4568b511f712279a303); ?>
<?php endif; ?>
            </form>
        </div>
    <?php endif; ?>
</div>
<?php /**PATH D:\roocket\Back\PHP\Laravel\youtube\yelo code\ideas\resources\views/components/card/idea-body.blade.php ENDPATH**/ ?>