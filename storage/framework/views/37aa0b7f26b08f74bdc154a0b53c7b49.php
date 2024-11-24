
<?php $__env->startSection('title', 'Admin Pandel'); ?>

<?php $__env->startSection('content'); ?>
<div class="col-9">
    <h1>Admin Panel</h1>
    <div class="row">
        <div class="col-sm-6 col-md-4">
            <?php echo $__env->make('admin.layouts.widget', [
                'title' => 'Total Users:',
                'icon' => 'fas fa-users',
                'users' => $users->count(),
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="col-sm-6 col-md-4">
            <?php echo $__env->make('admin.layouts.widget', [
                'title' => 'Total Ideas:',
                'icon' => 'fas fa-lightbulb',
                'users' => $ideas->count(),
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="col-sm-6 col-md-4">
            <?php echo $__env->make('admin.layouts.widget', [
                'title' => 'Total Comments:',
                'icon' => 'fas fa-comment',
                'users' => $comments->count(),
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\roocket\Back\PHP\Laravel\youtube\yelo code\ideas\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>