<nav class="navbar navbar-expand-lg bg-dark border-bottom border-bottom-dark ticky-top bg-body-tertiary"
data-bs-theme="dark">
    <div class="container">
        
        <a class="navbar-brand fw-light" href="/"><span class="fas fa-brain me-1"> </span>Ideas</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav d-flex align-items-center">
                <li class="nav-item dropdown mx-1">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-language" aria-hidden="true"></i></a>
                    <div class="dropdown-menu">
                        <h6 class="dropdown-header">Select Language</h6>
                        <a class="dropdown-item" href="<?php echo e(route('lang', 'en')); ?>">
                            <img src="<?php echo e(asset('vendor/blade-flags/language-en.svg')); ?>" width="32" height="32"/> English
                        </a>
                        <a class="dropdown-item" href="<?php echo e(route('lang', 'fa')); ?>">
                            <img src="<?php echo e(asset('vendor/blade-flags/language-fa.svg')); ?>" width="32" height="32"/> فارسی
                        </a>
                    </div>
                  </li>
                <?php if(auth()->guard()->guest()): ?>
                    <?php if (isset($component)) { $__componentOriginalc68f438700c86135d7882f6da26017ea = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc68f438700c86135d7882f6da26017ea = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.header.nav-link','data' => ['href' => ''.e(route('login')).'','active' => Route::is('login')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('header.nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('login')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Route::is('login'))]); ?>Login <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc68f438700c86135d7882f6da26017ea)): ?>
<?php $attributes = $__attributesOriginalc68f438700c86135d7882f6da26017ea; ?>
<?php unset($__attributesOriginalc68f438700c86135d7882f6da26017ea); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc68f438700c86135d7882f6da26017ea)): ?>
<?php $component = $__componentOriginalc68f438700c86135d7882f6da26017ea; ?>
<?php unset($__componentOriginalc68f438700c86135d7882f6da26017ea); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginalc68f438700c86135d7882f6da26017ea = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc68f438700c86135d7882f6da26017ea = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.header.nav-link','data' => ['href' => ''.e(route('register')).'','active' => Route::is('register')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('header.nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('register')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Route::is('register'))]); ?>Register <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc68f438700c86135d7882f6da26017ea)): ?>
<?php $attributes = $__attributesOriginalc68f438700c86135d7882f6da26017ea; ?>
<?php unset($__attributesOriginalc68f438700c86135d7882f6da26017ea); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc68f438700c86135d7882f6da26017ea)): ?>
<?php $component = $__componentOriginalc68f438700c86135d7882f6da26017ea; ?>
<?php unset($__componentOriginalc68f438700c86135d7882f6da26017ea); ?>
<?php endif; ?>
                <?php endif; ?>
                <?php if(auth()->guard()->check()): ?>
                <li class="nav-item dropdown mx-1">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?php echo e(Auth::user()->name); ?><i class="ms-2 far fa-user-circle" aria-hidden="true"></i></a>
                    <div class="dropdown-menu mb-0 p-0 pt-2 ">
                            <?php if(Auth::user()->is_admin): ?>
                                <a class="dropdown-item" href="<?php echo e(route('admin.dashboard')); ?>" :active="Route::is('admin.dashboard')">
                                    <i class="fas fa-home" aria-hidden="true"></i> Amin Panel
                                </a>
                            <?php endif; ?>
                          <a class="dropdown-item" href="<?php echo e(route('users.show', [ 'user' => Auth::user()->id ])); ?>" :active="Route::is('users.show') && Auth::user()->is(request()->user)">
                            <i class="fas fa-user" aria-hidden="true"></i> Profile
                          </a>
                          <form action="<?php echo e(route('logout')); ?>" method="post" id="logout-user">
                              <?php echo csrf_field(); ?>
                              <?php echo method_field('DELETE'); ?>
                          </form>
                          <a class="dropdown-item bg-danger " href="#" onclick="event.preventDefault();document.getElementById('logout-user').submit();">Logout</a>
                        </div>
                      </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH D:\roocket\Back\PHP\Laravel\youtube\yelo code\ideas\resources\views/components/header/nav.blade.php ENDPATH**/ ?>