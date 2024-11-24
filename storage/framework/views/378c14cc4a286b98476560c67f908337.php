<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>
<div class="col-6">
    <?php if(auth()->guard()->check()): ?>
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
    <h4> <?php echo e(__('idea.dashborad.header')); ?> </h4>
    <?php if (isset($component)) { $__componentOriginald2e24412101c71c2af6b7bf7b44904e2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald2e24412101c71c2af6b7bf7b44904e2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.idea.create-idea','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('idea.create-idea'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald2e24412101c71c2af6b7bf7b44904e2)): ?>
<?php $attributes = $__attributesOriginald2e24412101c71c2af6b7bf7b44904e2; ?>
<?php unset($__attributesOriginald2e24412101c71c2af6b7bf7b44904e2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald2e24412101c71c2af6b7bf7b44904e2)): ?>
<?php $component = $__componentOriginald2e24412101c71c2af6b7bf7b44904e2; ?>
<?php unset($__componentOriginald2e24412101c71c2af6b7bf7b44904e2); ?>
<?php endif; ?>
    <hr>
    <?php endif; ?>

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
                        </h5>
                    </div>
                </div>


                
                <div class="card-body">
                    <div>
                        <p class="fs-6 fw-light text-muted">
                            <?php echo e($idea->content); ?>

                            <a href="<?php echo e(route('ideas.show', $idea->id)); ?>" class="mx-3 text-sm text-muted">
                                View Idea
                            </a>
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
                                    <?php echo e($idea->created_at->diffForHumans()); ?>

                                </span>
                            </div>
                        </div>
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
                        <?php if($idea->comments->count() == 0): ?>
                        <h4 class="fs-5 fw-bold text-center d-flex justify-content-center align-items-center mt-4">
                            No Comments   );
                        </h4>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <div class="my-2">
            <?php echo e($ideas->links()); ?>

        </div>
    </div>
</div>
<div class="col-3">
    <?php echo $__env->make('layouts.rightbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\roocket\Back\PHP\Laravel\youtube\yelo code\ideas\resources\views/dashboard.blade.php ENDPATH**/ ?>