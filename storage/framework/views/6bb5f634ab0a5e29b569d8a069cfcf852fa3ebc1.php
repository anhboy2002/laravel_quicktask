<?php $__env->startSection('content'); ?>

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->


    <!-- New Task Form -->
        <form action="" method="POST" class="form-horizontal">
        <?php echo e(csrf_field()); ?>


        <!-- Task Name -->
            <div class="form-group">
                <label for="task-name" class="col-sm-3 control-label">Task</label>

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

    <!-- TODO: Current Tasks -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Current Tasks
            </div>
            <div class="panel-body">
                <table class="table table-striped task-table">
                    <!-- Table Headings -->
                    <thead>
                    <th>Task</th>
                    <th>&nbsp;</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>

                        <tr>
                            <!-- Task Name -->
                            <td class="table-text">
                                <div></div>
                            </td>

                            <td>
                                <!-- TODO: Delete Button -->
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>