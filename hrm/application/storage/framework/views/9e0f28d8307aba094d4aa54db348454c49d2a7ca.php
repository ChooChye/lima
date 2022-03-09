<?php /*External Style Section*/ ?>
<?php $__env->startSection('style'); ?>
    <?php echo Html::style("assets/libs/data-table/datatables.min.css"); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <section class="wrapper-bottom-sec">
        <div class="p-30">
            <h2 class="page-title"><?php echo e(language_data('Task List')); ?></h2>
        </div>
        <div class="p-30 p-t-none p-b-none">
            <?php echo $__env->make('notification.notify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="row">

                <div class="col-lg-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo e(language_data('Task List')); ?></h3>
                        </div>
                        <div class="panel-body p-none">
                            <table class="table data-table table-hover table-ultra-responsive">
                                <thead>
                                <tr>
                                    <th style="width: 5%;"><?php echo e(language_data('SL')); ?>#</th>
                                    <th style="width: 25%;"><?php echo e(language_data('Task')); ?></th>
                                    <th style="width: 15%;"><?php echo e(language_data('Created Date')); ?></th>
                                    <th style="width: 15%;"><?php echo e(language_data('Due Date')); ?></th>
                                    <th style="width: 15%;"><?php echo e(language_data('Status')); ?></th>
                                    <th style="width: 25%;" class="text-right"><?php echo e(language_data('Actions')); ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($task as $d): ?>
                                    <tr>
                                        <td data-label="SL"><?php echo e($d->id); ?></td>
                                        <td data-label="task"><p><?php echo e($d->task); ?></p></td>
                                        <td data-label="CreatedDate"><p><?php echo e(get_date_format($d->start_date)); ?></p></td>
                                        <td data-label="DueDate"><p><?php echo e(get_date_format($d->due_date)); ?></p></td>
                                        <?php if($d->status=='completed'): ?>
                                            <td data-label="Status"><p class="btn btn-complete btn-xs"><?php echo e(language_data('Completed')); ?></p></td>
                                        <?php elseif($d->status=='pending'): ?>
                                            <td data-label="Status"><p class="btn btn-warning btn-xs"><?php echo e(language_data('Pending')); ?></p></td>
                                        <?php else: ?>
                                            <td data-label="Status"><p class="btn btn-success btn-xs"><?php echo e(language_data('Started')); ?></p></td>
                                        <?php endif; ?>

                                        <td data-label="Actions" class="text-right">
                                            <a class="btn btn-complete btn-xs" href="<?php echo e(url('employee/task/view/'.$d->id)); ?>"><i class="fa fa-eye"></i> <?php echo e(language_data('View')); ?></a>
                                        </td>
                                    </tr>

                                <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php /*External Style Section*/ ?>
<?php $__env->startSection('script'); ?>
    <?php echo Html::script("assets/libs/handlebars/handlebars.runtime.min.js"); ?>

    <?php echo Html::script("assets/js/form-elements-page.js"); ?>

    <?php echo Html::script("assets/libs/data-table/datatables.min.js"); ?>


    <script>
        $(document).ready(function () {
            /*For DataTable*/
            $('.data-table').DataTable();
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('employee', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>