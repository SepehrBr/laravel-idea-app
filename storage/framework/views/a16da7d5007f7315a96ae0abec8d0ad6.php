<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'username',
    'src',
    'posted'
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'username',
    'src',
    'posted'
]); ?>
<?php foreach (array_filter(([
    'username',
    'src',
    'posted'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div class="d-flex align-items-start">
    <div class="w-100">
        <div class="px-3 pt-4 pb-2">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <img style="width:50px" class="me-2 avatar-sm rounded-circle"
                    src="<?php echo e($src); ?>" alt="Avatar">
                    <div class="w-100 d-flex justify-content-between align-items-center">
                            <a href="#">
                                <?php echo e($username); ?>

                            </a>
                        </h5>
                    </div>
                </div>
                <small class="fs-6 fw-light text-muted"> <?php echo e($posted); ?> </small>
            </div>
        </div>

        <p class="fs-6 mt-3 fw-light ">
            <?php echo e($slot); ?>

        </p>
    </div>
</div>
<?php /**PATH D:\roocket\Back\PHP\Laravel\youtube\yelo code\ideas\resources\views/components/card/comments.blade.php ENDPATH**/ ?>