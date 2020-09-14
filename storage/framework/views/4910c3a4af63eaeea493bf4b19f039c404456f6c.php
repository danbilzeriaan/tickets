 <div class="form-group">
    <label for="status">Status</label>
        <select class="form-control" id="status" name="status" value="<?php echo e(!empty($ticket) ? $tickets->status : ''); ?>">
            <?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($status->name); ?>" <?php echo e(!empty($ticket) && $tickets->status == $status->name ? "selected" : ""); ?>><?php echo e($status->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
        </select>
</div><?php /**PATH C:\wamp64\www\tickets\resources\views/layouts/partials/statuses.blade.php ENDPATH**/ ?>