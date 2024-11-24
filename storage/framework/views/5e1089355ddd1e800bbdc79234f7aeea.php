

<?php $__env->startSection('title', "Comment's Panel"); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-9">
        <h1>Comment's Panel</h1>
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
        <table class="table table-striped mt-3">
            <thead class="table-dark">
                <th>ID</th>
                <th>Content</th>
                <th>Author</th>
                <th>Idea</th>
                <th>Created At</th>
                <th>Actions</th>
            </thead>
            <tbody>
                <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($comment->id); ?></td>
                        <td><?php echo e(Str::length($comment->content) > 30 ? Str::limit($comment->content, 20, ' ...') : $comment->content); ?></td>
                        <td>
                            <a href="<?php echo e(route('users.show', $comment->user->id)); ?>"><?php echo e($comment->user->name); ?></a>
                        </td>
                        <td>
                            <a href="<?php echo e(route('ideas.show', $comment->idea->id)); ?>"><?php echo e(Str::limit($comment->idea->content, 15, ' ...')); ?></a>
                        </td>
                        <td><?php echo e($comment->created_at->toDateTimeString()); ?></td>
                        <td>
                            <div class="d-flex align-items-center justify-content-between">
                                <form action="<?php echo e(route('admin.comments.destroy', $comment->id)); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger">X</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <div class="">
            <?php echo e($comments->links()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\roocket\Back\PHP\Laravel\youtube\yelo code\ideas\resources\views/admin/comments/index.blade.php ENDPATH**/ ?>