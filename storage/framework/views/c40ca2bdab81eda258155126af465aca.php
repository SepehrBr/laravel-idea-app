<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['active' => false ]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['active' => false ]); ?>
<?php foreach (array_filter((['active' => false ]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<li class="nav-item">
    <a
        <?php echo e($attributes); ?>

        class="nav-link <?php echo e($active ? 'text-white bg-primary rounded' : ''); ?>"
        aria-current="<?php echo e($active ? 'page' : 'false'); ?>"
    >
        <span><?php echo e($slot); ?></span>
    </a>
</li>
<?php /**PATH D:\roocket\Back\PHP\Laravel\youtube\yelo code\ideas\resources\views/components/layouts/links.blade.php ENDPATH**/ ?>