<?php $__env->startSection('content'); ?>

    <div class="container-fluid app-body settings-page">
        <h3>Calendar (Coming Soon)</h3>
        <table class="table table-striped">
            <tr>
                <th>Group Name</th>
                <th>Group Type</th>
                <th>Account Name</th>
                <th>Post Text</th>
                <th>Time</th>
            </tr>
            <?php $__currentLoopData = $mesgs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($key->group->name); ?></td>
                <td><?php echo e($key->group->type); ?></td>
                <td>
                    <img src="<?php echo e(base_path($key->group->user->id)); ?>">
                    ">
                </td>
                <td><?php echo e($key->text); ?></td>
                <td><?php echo e($key->created_at); ?></td>
            </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
        <?php echo e($mesgs->links()); ?>

    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>