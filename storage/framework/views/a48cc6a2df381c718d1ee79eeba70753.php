

<?php $__env->startSection('title', "User's Panel"); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-9">
        <h1>User's Panel</h1>
        <table class="table table-striped mt-3">
            <thead class="table-dark">
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Joined At</th>
                <th>Edited At</th>
                <th>Actions</th>
            </thead>
            <tbody>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($user->id); ?></td>
                        <td><?php echo e($user->name); ?></td>
                        <td><?php echo e($user->email); ?></td>
                        <td><?php echo e($user->created_at->toDateTimeString()); ?></td>
                        <td><?php echo e(($user->created_at == $user->updated_at) ? "---" : $user->updated_at->toDateString()); ?></td>
                        <td>
                            <div class="d-flex align-items-center justify-content-between">
                                <a href="<?php echo e(route('users.show', $user->id)); ?>">View</a>
                                <a href="<?php echo e(route('users.edit', $user->id)); ?>">Edit</a>
                                <form action="<?php echo e(route('users.destroy', $user->id)); ?>" method="post">
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
            <?php echo e($users->links()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\roocket\Back\PHP\Laravel\youtube\yelo code\ideas\resources\views/admin/users/index.blade.php ENDPATH**/ ?>