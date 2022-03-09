<?php /*External Style Section*/ ?>
<?php $__env->startSection('style'); ?>
    <?php echo Html::style("assets/libs/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <section class="wrapper-bottom-sec">
        <div class="p-30">
            <h2 class="page-title"><?php echo e(language_data('Update Attendance')); ?></h2>
        </div>
        <div class="p-30 p-t-none p-b-none">

            <?php echo $__env->make('notification.notify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="row">

                <div class="col-lg-6">
                    <div class="panel">
                        <div class="panel-body">
                            <form class="" role="form" action="<?php echo e(url('attendance/post-update-attendance')); ?>" method="post">
                                <div class="panel-heading">
                                    <h3 class="panel-title"> <?php echo e(language_data('Update Attendance')); ?></h3>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Employee')); ?></label>
                                    <select class="selectpicker form-control" data-live-search="true" name="employee">
                                        <?php foreach($employee as $d): ?>
                                            <option value="<?php echo e($d->id); ?>"><?php echo e($d->fname); ?> <?php echo e($d->lname); ?> (<?php echo e($d->employee_code); ?>)</option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label><?php echo e(language_data('Date')); ?></label>
                                    <input type="text" class="form-control datePicker" name="date" required="" value="<?php echo e(get_date_format(date('Y-m-d'))); ?>">
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Clock In')); ?></label>
                                    <input type="text" class="form-control timePicker" required name="clock_in" value="<?php echo e(app_config('OfficeInTime')); ?>">
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Clock Out')); ?></label>
                                    <input type="text" class="form-control timePicker" required name="clock_out" value="<?php echo e(app_config('OfficeOutTime')); ?>">
                                </div>


                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                <button type="submit" class="btn btn-success btn-sm pull-right"><i class="fa fa-save"></i> <?php echo e(language_data('Update')); ?> </button>
                            </form>
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

    <?php echo Html::script("assets/libs/moment/moment.min.js"); ?>

    <?php echo Html::script("assets/libs/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"); ?>

    <?php echo Html::script("assets/js/form-elements-page.js"); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>