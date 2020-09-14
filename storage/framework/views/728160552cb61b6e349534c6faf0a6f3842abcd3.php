<?php if(session()->has('success')): ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <?php echo e(session ('success')); ?>

  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php endif; ?>
<?php if(session()->has('error')): ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <?php echo e(session ('error')); ?>

  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php endif; ?><?php /**PATH C:\wamp64\www\tickets\resources\views/layouts/partials/alerts.blade.php ENDPATH**/ ?>