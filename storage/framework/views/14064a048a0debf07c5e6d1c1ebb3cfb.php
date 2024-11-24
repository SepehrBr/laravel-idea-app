<div class="col-3">
    <div class="card overflow-hidden">
        <div class="card-body pt-3">
            <ul class="nav nav-link-secondary flex-column fw-bold gap-2">
                <?php if (isset($component)) { $__componentOriginal3151b870d94036221f701bfa733e80fd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3151b870d94036221f701bfa733e80fd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.links','data' => ['active' => Route::is('admin.dashboard'),'href' => ''.e(route('admin.dashboard')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.links'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Route::is('admin.dashboard')),'href' => ''.e(route('admin.dashboard')).'']); ?>Dashboard <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3151b870d94036221f701bfa733e80fd)): ?>
<?php $attributes = $__attributesOriginal3151b870d94036221f701bfa733e80fd; ?>
<?php unset($__attributesOriginal3151b870d94036221f701bfa733e80fd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3151b870d94036221f701bfa733e80fd)): ?>
<?php $component = $__componentOriginal3151b870d94036221f701bfa733e80fd; ?>
<?php unset($__componentOriginal3151b870d94036221f701bfa733e80fd); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal3151b870d94036221f701bfa733e80fd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3151b870d94036221f701bfa733e80fd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.links','data' => ['active' => Route::is('admin.users.index'),'href' => ''.e(route('admin.users.index')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.links'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Route::is('admin.users.index')),'href' => ''.e(route('admin.users.index')).'']); ?>Users <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3151b870d94036221f701bfa733e80fd)): ?>
<?php $attributes = $__attributesOriginal3151b870d94036221f701bfa733e80fd; ?>
<?php unset($__attributesOriginal3151b870d94036221f701bfa733e80fd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3151b870d94036221f701bfa733e80fd)): ?>
<?php $component = $__componentOriginal3151b870d94036221f701bfa733e80fd; ?>
<?php unset($__componentOriginal3151b870d94036221f701bfa733e80fd); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal3151b870d94036221f701bfa733e80fd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3151b870d94036221f701bfa733e80fd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.links','data' => ['active' => Route::is('admin.ideas.index'),'href' => ''.e(route('admin.ideas.index')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.links'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Route::is('admin.ideas.index')),'href' => ''.e(route('admin.ideas.index')).'']); ?>Ideas <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3151b870d94036221f701bfa733e80fd)): ?>
<?php $attributes = $__attributesOriginal3151b870d94036221f701bfa733e80fd; ?>
<?php unset($__attributesOriginal3151b870d94036221f701bfa733e80fd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3151b870d94036221f701bfa733e80fd)): ?>
<?php $component = $__componentOriginal3151b870d94036221f701bfa733e80fd; ?>
<?php unset($__componentOriginal3151b870d94036221f701bfa733e80fd); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal3151b870d94036221f701bfa733e80fd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3151b870d94036221f701bfa733e80fd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.links','data' => ['active' => Route::is('admin.comments.index'),'href' => ''.e(route('admin.comments.index')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.links'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Route::is('admin.comments.index')),'href' => ''.e(route('admin.comments.index')).'']); ?>Comments <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3151b870d94036221f701bfa733e80fd)): ?>
<?php $attributes = $__attributesOriginal3151b870d94036221f701bfa733e80fd; ?>
<?php unset($__attributesOriginal3151b870d94036221f701bfa733e80fd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3151b870d94036221f701bfa733e80fd)): ?>
<?php $component = $__componentOriginal3151b870d94036221f701bfa733e80fd; ?>
<?php unset($__componentOriginal3151b870d94036221f701bfa733e80fd); ?>
<?php endif; ?>
            </ul>
        </div>
    </div>
</div>
<?php /**PATH D:\roocket\Back\PHP\Laravel\youtube\yelo code\ideas\resources\views/admin/layouts/leftbar.blade.php ENDPATH**/ ?>