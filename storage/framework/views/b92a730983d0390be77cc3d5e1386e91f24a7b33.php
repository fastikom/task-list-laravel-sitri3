<?php $__env->startSection('content'); ?>

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->

        <!-- New Task Form -->
        <form action="<?php echo e(route('tasks.create')); ?>" method="POST" class="form-horizontal">
            <?php echo e(csrf_field()); ?>


            <!-- Task Name -->
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Task</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control">
                </div>
            </div>

            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Task
                    </button>
                </div>
            </div>
        </form>
    </div>
    <div class="panel-body">
    	<table class="table table-stripped task-table">
        	<thead>
            	<td>ID</td>
                <td>Nama</td>
                <td>Action</td>
            </thead>
            <tbody>
            	<?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                	<td><?php echo e($job->id); ?></td>
                	<td><?php echo e($job->name); ?></td>
                    <td>
                    	<form action="<?php echo e(route('tasks.delete', $job->id)); ?>" method="post">
                        	<?php echo e(csrf_field()); ?>

                            
                            <button type="submit" class="btn btn-danger">
                            	<i class="fa fa-trash">Delete</i>
                            </button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    

    <!-- TODO: Current Tasks -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>