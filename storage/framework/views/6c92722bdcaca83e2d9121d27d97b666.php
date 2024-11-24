

<?php $__env->startSection('title', "Idea's Panel"); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-9">
        <h1>Idea's Panel</h1>
        <table class="table table-striped mt-3">
            <thead class="table-dark">
                <th>ID</th>
                <th>Content</th>
                <th>Author</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th>
            </thead>
            <tbody>
                <?php $__currentLoopData = $ideas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($idea->id); ?></td>
                        <td><?php echo e(Str::length($idea->content) > 30 ? Str::limit($idea->content, 20, ' ...') : $idea->content); ?></td>
                        <td>
                            <a href="<?php echo e(route('users.show', $idea->user->id)); ?>"><?php echo e($idea->user->name); ?></a>
                        </td>
                        <td><?php echo e($idea->created_at->toDateTimeString()); ?></td>
                        <td><?php echo e(($idea->created_at == $idea->updated_at) ? "---" : $idea->updated_at->toDateTimeString()); ?></td>
                        <td>
                            <div class="d-flex align-items-center justify-content-between">
                                <a href="<?php echo e(route('ideas.show', $idea->id)); ?>">View</a>
                                <a href="<?php echo e(route('ideas.edit', $idea->id)); ?>">Edit</a>
                                <form action="<?php echo e(route('ideas.destroy', $idea->id)); ?>" method="post">
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
            <?php echo e($ideas->links()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\roocket\Back\PHP\Laravel\youtube\yelo code\ideas\resources\views/admin/ideas/index.blade.php ENDPATH**/ ?>