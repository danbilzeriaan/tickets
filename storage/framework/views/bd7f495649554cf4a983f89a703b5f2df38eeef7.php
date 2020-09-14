

<?php $__env->startSection('content'); ?>
  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Delete Ticket <?php echo e($ticket->id); ?></h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
          <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
          <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
        </div>
        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
          <span data-feather="calendar"></span>
          This week
        </button>
      </div>
    </div>
      <form action = "" method = "post">
        <?php echo e(csrf_field()); ?>

          <div class = "form-group">
              <label for="summary">Summary</label>
              <input type="text" id="summary" name="summary" class="form-control" value="<?php echo e($ticket->summary); ?>" disabled/>
          </div>
          <div class = "form-group">
              <label for="description">Description</label>
              <input type="text" id="description" name="description" class="form-control" value="<?php echo e($ticket->description); ?>" disabled/>
          </div>
          <div class = "form-group">
              <label for="status">Status</label>
              <input type="text" id="status" name="status" class="form-control" value="<?php echo e($ticket->status); ?>" disabled/>
          </div>
              <button class="btn btn-danger" type="submit">Delete Ticket</button>
              <a href="<?php echo e(route('tickets.index')); ?>" class="btn btn-primary">Return</a>
      </form>
  </main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\tickets\resources\views/tickets/delete.blade.php ENDPATH**/ ?>