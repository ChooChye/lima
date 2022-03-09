<?php /*External Style Section*/ ?>
<?php $__env->startSection('style'); ?>
    <?php echo Html::style("assets/libs/data-table/datatables.min.css"); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <section class="wrapper-bottom-sec">
        <div class="p-30">
            <h2 class="page-title"><?php echo e(language_data('Attendance')); ?></h2>
        </div>
        <div class="p-30 p-t-none p-b-none">
            <?php echo $__env->make('notification.notify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <div class="row">

                <div class="col-lg-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo e(language_data('Attendance')); ?></h3>
                        </div>
                        <div class="panel-body p-none">
                            <table class="table data-table table-hover table-ultra-responsive">
                                <thead>
                                <tr>
                                    <th style="width: 15%;"><?php echo e(language_data('Date')); ?></th>
                                    <th style="width: 15%;"><?php echo e(language_data('Clock In')); ?></th>
                                    <th style="width: 15%;"><?php echo e(language_data('Clock Out')); ?></th>
                                    <th style="width: 10%;"><?php echo e(language_data('Late')); ?></th>
                                    <th style="width: 10%;"><?php echo e(language_data('Early Leaving')); ?></th>
                                    <th style="width: 10%;"><?php echo e(language_data('Overtime')); ?></th>
                                    <th style="width: 10%;"><?php echo e(language_data('Total Work')); ?></th>
                                    <th style="width: 15%;"><?php echo e(language_data('Status')); ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($attendance as $d): ?>
                                <tr>
                                    <td data-label="Date"><?php echo e(get_date_format($d->date)); ?></td>
                                    <td data-label="Clock_In"><?php echo e($d->clock_in); ?></td>
                                    <td data-label="Clock_out"><?php echo e($d->clock_out); ?></td>
                                    <td data-label="Late"><?php echo e(round($d->late/60,2)); ?> H</td>
                                    <td data-label="Early_leaving"><?php echo e(round($d->early_leaving/60,2)); ?> H</td>
                                    <td data-label="Overtime"><?php echo e($d->overtime); ?> H</td>
                                    <td data-label="Total_Work"><?php echo e(round($d->total/60,2)+$d->overtime); ?> H</td>
                                    <?php if($d->status=='Absent'): ?>
                                    <td data-label="Status"><p class="btn btn-danger btn-xs"><?php echo e(language_data('Absent')); ?></p></td>
                                    <?php elseif($d->status=='Holiday'): ?>
                                    <td data-label="Status"><p class="btn btn-complete btn-xs"><?php echo e(language_data('Holiday')); ?></p></td>
                                    <?php else: ?>
                                    <td data-label="Status"><p class="btn btn-success btn-xs"><?php echo e(language_data('Present')); ?></p></td>
                                    <?php endif; ?>
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