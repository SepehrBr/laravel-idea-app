<div class="col-3">
    <div class="card overflow-hidden">
        <div class="card-body pt-3">
            <ul class="nav nav-link-secondary flex-column fw-bold gap-2">
                <?php if (isset($component)) { $__componentOriginal3151b870d94036221f701bfa733e80fd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3151b870d94036221f701bfa733e80fd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.links','data' => ['active' => Route::is('home'),'href' => ''.e(route('home')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.links'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Route::is('home')),'href' => ''.e(route('home')).'']); ?>Home <?php echo $__env->renderComponent(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.links','data' => ['active' => Route::is('terms'),'href' => ''.e(route('terms')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.links'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Route::is('terms')),'href' => ''.e(route('terms')).'']); ?>Terms <?php echo $__env->renderComponent(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.links','data' => ['active' => Route::is('feed'),'href' => ''.e(route('feed')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.links'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Route::is('feed')),'href' => ''.e(route('feed')).'']); ?>Feed <?php echo $__env->renderComponent(); ?>
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
        <?php if (isset($component)) { $__componentOriginalaf7731c19680a582458b47d8e4cd2f9e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalaf7731c19680a582458b47d8e4cd2f9e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.footer-btn','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.footer-btn'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>View Profile <?php echo $__env->renderComponent(); ?>
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
<?php /**PATH D:\roocket\Back\PHP\Laravel\youtube\yelo code\ideas\resources\views/layouts/leftbar.blade.php ENDPATH**/ ?>