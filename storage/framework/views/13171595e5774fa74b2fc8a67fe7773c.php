
<?php $__env->startSection('title', Str::headline(request()->user->name) . "'s Profile"); ?>

<?php $__env->startSection('content'); ?>
<div class="col-6">
    <?php if (isset($component)) { $__componentOriginal77d7a0e960d6d1521d13a3ff2a966832 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal77d7a0e960d6d1521d13a3ff2a966832 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.alert-messages','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.alert-messages'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal77d7a0e960d6d1521d13a3ff2a966832)): ?>
<?php $attributes = $__attributesOriginal77d7a0e960d6d1521d13a3ff2a966832; ?>
<?php unset($__attributesOriginal77d7a0e960d6d1521d13a3ff2a966832); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal77d7a0e960d6d1521d13a3ff2a966832)): ?>
<?php $component = $__componentOriginal77d7a0e960d6d1521d13a3ff2a966832; ?>
<?php unset($__componentOriginal77d7a0e960d6d1521d13a3ff2a966832); ?>
<?php endif; ?>
        <div class="card">
            <div class="px-3 pt-4 pb-2">
                <div>
                    <div class="d-flex align-items-center justify-content-around">
                        <div class="d-flex align-items-center justify-content-center w-100">
                            <img style="width:100px" class="me-3 avatar-sm rounded-circle"
                            src="<?php echo e($user->getProfileUrl()); ?>" alt="<?php echo e($user->name); ?>">
                            <div>
                                <h3 class="card-title mb-0">
                                    <a href="<?php echo e(route('users.show', $user->id )); ?>" > <?php echo e($user->name); ?> </a>
                                </h3>
                            </div>
                        </div>
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <?php if(Auth::id() == $user->id): ?>
                            <a href="<?php echo e(route('users.edit', ['user' => $user->id])); ?>" class="btn btn-dark mb-3">Edit Profile</a>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete', $user)): ?>
                            <form action="<?php echo e(route('users.destroy', [ 'user' => $user->id ])); ?>" method="post" id="delete-user">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <?php if (isset($component)) { $__componentOriginalb3074c44b1fcb4568b511f712279a303 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb3074c44b1fcb4568b511f712279a303 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.btn','data' => ['class' => 'btn btn-danger btn-sm']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.btn'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'btn btn-danger btn-sm']); ?> Delete Account  <?php echo $__env->renderComponent(); ?>
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
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="px-2 mt-4">
                        <h5 class="fs-5"> About : </h5>
                        <p class="fs-6 fw-light">
                            <?php echo e($user->about); ?>

                        </p>
                        <div class="d-flex justify-content-start align-items-center mb-3">
                            <a href="#" class="fw-light nav-link fs-6 me-3"> <span class="fas fa-user me-1">
                                </span> <?php echo e($user->followers()->count()); ?> Followers </a>
                            <a href="#" class="fw-light nav-link fs-6 me-3"> <span class="fas fa-brain me-1">
                                </span> <?php echo e($user->ideas->count()); ?> Ideas</a>
                            <a href="#" class="fw-light nav-link fs-6"> <span class="fas fa-comment me-1">
                                </span> <?php echo e($user->comments->count()); ?> Comments</a>
                                <?php if(auth()->guard()->check()): ?>
                                    <?php if(Auth::user()->isNot($user)): ?>
                                        <?php if(Auth::user()->follows($user)): ?>
                                            <form action="<?php echo e(route('users.unfollow', $user->id )); ?>" method="POST">
                                                <?php echo csrf_field(); ?>
                                                <button type="submit" class="btn btn-danger btn-sm ms-2"> Unfollow </button>
                                            </form>
                                        <?php else: ?>
                                            <form action="<?php echo e(route('users.follow', $user->id )); ?>" method="POST">
                                                <?php echo csrf_field(); ?>
                                                <button type="submit" class="btn btn-success btn-sm ms-2"> Follow </button>
                                            </form>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <h4 class="fs-4 fw-bold text-center"> Shared Ideas: <?php echo e($ideas->count()); ?></h4>
        <?php if($ideas->count() > 0): ?>
            <div class="mt-3">
                <?php $__currentLoopData = $ideas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card p-3 mt-3">
                    
                    <div class="d-flex align-items-center">
                        <img style="width:50px" class="me-2 avatar-sm rounded-circle"
                        src="<?php echo e($idea->user->getProfileUrl()); ?>" alt="Avatar">
                        <div class="w-100 d-flex justify-content-between align-items-center">
                                <a href="<?php echo e(route('users.show', $idea->user->id)); ?>">
                                    <?php echo e($idea->user->name); ?>

                                </a>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete', $idea)): ?>
                                <div>
                                    <form action="<?php echo e(route('ideas.destroy', $idea->id )); ?>" method="post" id="delete-idea">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <?php if (isset($component)) { $__componentOriginalb3074c44b1fcb4568b511f712279a303 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb3074c44b1fcb4568b511f712279a303 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.btn','data' => ['class' => 'btn btn-danger btn-sm']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.btn'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'btn btn-danger btn-sm']); ?> Delete  <?php echo $__env->renderComponent(); ?>
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
                            </h5>
                        </div>
                    </div>

                    
                    <div class="card-body">
                        <div>
                            <p class="fs-6 fw-light text-muted">
                                <?php echo e($idea->content); ?>

                                <?php if(Route::is('home')): ?>
                                <a href="<?php echo e(route('ideas.show', $idea->id)); ?>" class="mx-3 text-sm text-muted">
                                    View Idea
                                </a>
                                <?php else: ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $idea)): ?>
                                        <a href="<?php echo e(route('ideas.edit', $idea->id)); ?>" class="mx-3 text-sm text-muted">
                                            Edit
                                        </a>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </p>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <?php if($idea->liked(Auth::user())): ?>
                                        <form action="<?php echo e(route('ideas.dislike', $idea->id )); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <button class="fw-light nav-link fs-6">
                                                <span class="fas fa-heart me-1"></span> <?php echo e($idea->likes_count); ?>

                                            </button>
                                        </form>
                                    <?php else: ?>
                                        <form action="<?php echo e(route('ideas.like', $idea->id )); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <button class="fw-light nav-link fs-6">
                                                <span class="far fa-heart me-1"></span> <?php echo e($idea->likes_count); ?>

                                            </button>
                                        </form>
                                    <?php endif; ?>
                                </div>
                                <div>
                                    <span class="fs-6 fw-light text-muted">
                                        <span class="fas fa-clock"></span>
                                        <?php echo e(\Carbon\Carbon::parse($idea->created_at)->format('Y/m/d h:m')); ?>

                                    </span>
                                </div>
                            </div>
                            <?php if(!Route::is('home')): ?>
                                <div class="my-3">
                                    <form action="<?php echo e(route('create-comment', $idea->id)); ?>" method="post">
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
                        <hr>
                        <?php if($idea->comments->count() > 2 && Route::is('home')): ?>
                            
                            <?php $__currentLoopData = [$idea->comments[1], $idea->comments[0]]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="d-flex align-items-start">
                                    <div class="w-100">
                                        <div class="px-3 pt-4 pb-2">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <img style="width:50px" class="me-2 avatar-sm rounded-circle"
                                                    src="<?php echo e($comment->user->getProfileUrl()); ?>" alt="Avatar">
                                                    <div class="w-100 d-flex justify-content-between align-items-center">
                                                            <a href="<?php echo e(route('users.show', $comment->user->id)); ?>">
                                                                <?php echo e($comment->user->name); ?>

                                                            </a>
                                                        </h5>
                                                    </div>
                                                </div>
                                                <small class="fs-6 fw-light text-muted"> <?php echo e($comment->created_at); ?> </small>
                                            </div>
                                        </div>
                                        <p class="fs-6 mt-3 fw-light ">
                                            <?php echo e($comment->content); ?>

                                            <?php if(Auth::user()->id == $comment->user->id): ?>
                                            <div class="d-flex align-items-center">
                                                
                                                <a href="#" class="mx-2 text-sm text-muted">
                                                    Edit
                                                </a>
                                                
                                                <form action="" method="post">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <a href="#" class="mx-2 text-sm text-danger">
                                                        Delete
                                                    </a>
                                                </form>
                                            </div>
                                        <?php endif; ?>
                                        </p>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e(route('ideas.show', $idea->id)); ?>" class="btn btn-dark" >Load More Comments</a>
                            <a href="<?php echo e(route('ideas.show', $idea->id)); ?>" class="btn btn-success" >Add Comment</a>
                        <?php else: ?>
                            <?php $__currentLoopData = $idea->comments->sortDesc(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="d-flex align-items-start">
                                    <div class="w-100">
                                        <div class="px-3 pt-4 pb-2">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <img style="width:50px" class="me-2 avatar-sm rounded-circle"
                                                    src="<?php echo e($comment->user->getProfileUrl()); ?>" alt="Avatar">
                                                    <div class="w-100 d-flex justify-content-between align-items-center">
                                                        <a href="<?php echo e(route('users.show', $comment->user->id)); ?>">
                                                            <?php echo e($comment->user->name); ?>

                                                        </a>
                                                    </div>
                                                </div>
                                                <small class="fs-6 fw-light text-muted"> <?php echo e($comment->created_at); ?> </small>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <p class="fs-6 mt-3 fw-light">
                                                <?php echo e($comment->content); ?>

                                            </p>
                                            <?php if(Auth::id() == $comment->user->id): ?>
                                                <div class="d-flex align-items-center">
                                                    
                                                    <a href="#" class="mx-2 text-sm text-muted">
                                                        Edit
                                                    </a>
                                                    
                                                    <form action="" method="post">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('DELETE'); ?>
                                                        <a href="#" class="mx-2 text-sm text-danger">
                                                            Delete
                                                        </a>
                                                    </form>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php if($idea->comments->count() == 0): ?>
                                <h4 class="fs-5 fw-bold text-center d-flex justify-content-center align-items-center mt-4">
                                    No Comments   );
                                </h4>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <?php echo e($ideas->links()); ?>

        <?php else: ?>
            <?php if(Auth::user()->id == $user->id): ?>
                <h4 class="fs-5 fw-bold text-center d-flex flex-column justify-content-center align-items-center mt-5">
                    Empty   );
                    <a href="<?php echo e(route('home')); ?>" class="btn btn-dark my-2">
                        Add New Idea
                    </a>
                </h4>
            <?php endif; ?>
        <?php endif; ?>
</div>
<div class="col-3">
    <?php echo $__env->make('layouts.rightbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\roocket\Back\PHP\Laravel\youtube\yelo code\ideas\resources\views/users/show-user.blade.php ENDPATH**/ ?>