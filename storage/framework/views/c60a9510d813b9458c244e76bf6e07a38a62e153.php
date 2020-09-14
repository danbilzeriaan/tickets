

<?php $__env->startSection('content'); ?>
  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Ticket Dashboard</h1>
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
    <div class="table-responsive">
      <a class="btn btn-primary" href="/tickets/create">Add New Ticket</a>
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th>Ticket #</th>
            <th>Summary</th>
            <th>Status</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php $__currentLoopData = $tickets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ticket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($ticket->id); ?></td>
            <td><?php echo e($ticket->summary); ?></td>
            <td><?php echo e($ticket->status); ?></td>
            <td><a href="/tickets/<?php echo e($ticket->id); ?>" class="btn btn-primary">Update</a></td>
            <td><a href="/tickets/delete/<?php echo e($ticket->id); ?>" class="btn btn-danger">Delete</a></td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>

          <?php echo e($tickets->links()); ?>

    </div>
  </main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\tickets\resources\views/tickets/index.blade.php ENDPATH**/ ?>