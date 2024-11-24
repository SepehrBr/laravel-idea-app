
<?php $__env->startSection('title', 'Search'); ?>

<?php $__env->startSection('content'); ?>
<div class="col-6">

    <h1 class="fw-bold text-center">Searched Jobs - (<?php echo e($ideas->count()); ?>)</h1>
    <?php $__empty_1 = true; $__currentLoopData = $ideas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <div class="card p-3 mt-3">
        
        <div class="d-flex align-items-center">
            <img style="width:50px" class="me-2 avatar-sm rounded-circle"
            src="<?php echo e($idea->user->getProfileUrl()); ?>" alt="Avatar">
            <div class="w-100 d-flex justify-content-between align-items-center">
                    <a href="<?php echo e(route('users.show', $idea->user->id)); ?>">
                        <?php echo e($idea->user->name); ?>

                    </a>
                    
                    <div>
                        <form action="<?php echo e(route('delete-idea', $idea->id )); ?>" method="post" id="delete-idea">
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
                    
                </h5>
            </div>
        </div>


        
        <div class="card-body">
            <div>
                <p class="fs-6 fw-light text-muted">
                    <?php echo e($idea->content); ?>

                    <?php if(Route::is('home')): ?>
                    <a href="<?php echo e(route('show-idea', $idea->id)); ?>" class="mx-3 text-sm text-muted">
                        View Idea
                    </a>
                    <?php else: ?>
                    
                        <a href="<?php echo e(route('edit-idea', $idea->id)); ?>" class="mx-3 text-sm text-muted">
                            Edit
                        </a>
                        
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
                <a href="<?php echo e(route('show-idea', $idea->id)); ?>" class="btn btn-dark" >Load More Comments</a>
                <a href="<?php echo e(route('show-idea', $idea->id)); ?>" class="btn btn-success" >Add Comment</a>
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
                    <a href="<?php echo e(route('show-idea', $idea->id)); ?>" class="btn btn-success" >Add Comment</a>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <h3 class="fw-bold text-center">Nothing Found!</h3>
    <?php endif; ?>
    <a href="/" class="fw-bold text-center my-3">Back To Ideas</a>

</div>
<div class="col-3">
    <?php echo $__env->make('layouts.rightbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\roocket\Back\PHP\Laravel\youtube\yelo code\ideas\resources\views/components/idea/search.blade.php ENDPATH**/ ?>