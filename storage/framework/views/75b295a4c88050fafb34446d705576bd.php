
<?php $__env->startSection('title', "Editing " . Str::headline(request()->user->name) . "'s Profile"); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-6">
        <div class="card">
            <div class="px-3 pt-4 pb-2">
                <div class="d-flex flex-column justify-content-center w-100">
                    <form action="<?php echo e(route('users.update', ['user' => $user->id])); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PATCH'); ?>
                        <div class="col-md-6 w-100 my-2">
                            <label for="name" class="form-label">Your Name</label>
                            <input type="name" class="form-control " id="name" value="<?php echo e($user->name); ?>"  name="name">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="text-danger"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="col-md-6 w-100 my-2">
                            <label for="email" class="form-label">Your Email</label>
                            <input type="email" class="form-control " id="email" value="<?php echo e($user->email); ?>"  name="email">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="text-danger"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="col-md-6 w-100 my-2">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control " id="password"   name="password">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="text-danger"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="col-md-6 w-100 my-2">
                            <label for="password_confirmation" class="form-label">Confirm New Password</label>
                            <input type="password" class="form-control " id="password_confirmation"   name="password_confirmation">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="text-danger"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="col-md-6 w-100 my-2">
                            <label for="profile" class="form-label">Your Profile Image</label>
                            <input type="file" class="form-control" id="profile" value="<?php echo e($user->getProfileUrl()); ?>"  name="profile">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <?php $__errorArgs = ['profile'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="text-danger"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <input type="hidden" name="about" id="about" value="<?php echo e($user->about); ?>">
                        <div class="col-md-6 w-100 my-3 d-flex align-items-center justify-content-center">
                            <button class="btn btn-info w-25 mx-4 " type="submit">Edit</button>
                            <a href="<?php echo e(route('users.show', $user->id )); ?>" class="btn btn-danger w-25 mx-4" type="submit">Cancel</a>
                        </div>
                        <div class="px-2 mt-4">
                            <h5 class="fs-5"> About : </h5>
                            <div class="mb-3">
                                <textarea class="form-control" rows="3" name="about"><?php echo e($user->about); ?></textarea>
                            </div>
                            <?php $__errorArgs = ['about'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-danger"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </form>
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
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete-idea', $idea)): ?>
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
                                                            <a href="#">
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
                                                            <a href="#">
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

                                        </p>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php if(Route::is('home')): ?>
                                <a href="<?php echo e(route('ideas.show', $idea->id)); ?>" class="btn btn-success" >Add Comment</a>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\roocket\Back\PHP\Laravel\youtube\yelo code\ideas\resources\views/users/edit-user.blade.php ENDPATH**/ ?>