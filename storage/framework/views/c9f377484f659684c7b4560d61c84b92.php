<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'username',
    'src',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'username',
    'src',
]); ?>
<?php foreach (array_filter(([
    'username',
    'src',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div class="hstack gap-2 mb-3">
    <div class="avatar">
        <a href="#!">
            <img
                class="avatar-img rounded-circle"
                src="<?php echo e($src); ?>"
                alt=""
            />
        </a>
    </div>
    <div class="overflow-hidden">
        <a class="h6 mb-0" href="#!"><?php echo e($slot); ?></a>
        <p class="mb-0 small text-truncate"><?php echo e($username); ?></p>
    </div>
    <a class="btn btn-primary-soft rounded-circle icon-md ms-auto" href="#">
        <i class="fa-solid fa-plus"></i>
    </a>
</div>
<?php /**PATH D:\roocket\Back\PHP\Laravel\youtube\yelo code\ideas\resources\views/components/layouts/user.blade.php ENDPATH**/ ?>