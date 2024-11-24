<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'class' => 'btn btn-dark'
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'class' => 'btn btn-dark'
]); ?>
<?php foreach (array_filter(([
    'class' => 'btn btn-dark'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<button <?php echo e($attributes); ?> class="<?php echo e($class); ?>" type="submit"> <?php echo e($slot); ?> </button>
<?php /**PATH D:\roocket\Back\PHP\Laravel\youtube\yelo code\ideas\resources\views/components/layouts/btn.blade.php ENDPATH**/ ?>