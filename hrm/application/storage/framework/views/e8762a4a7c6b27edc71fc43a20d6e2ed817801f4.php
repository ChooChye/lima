<?php $__env->startSection('content'); ?>

    <section class="wrapper-bottom-sec">
        <div class="p-30">
            <h2 class="page-title"><?php echo e(language_data('Edit Employee Salary')); ?></h2>
        </div>
        <div class="p-30 p-t-none p-b-none">

            <?php echo $__env->make('notification.notify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="row">

                <div class="col-lg-6">
                    <div class="panel">
                        <div class="panel-body">
                            <form class="" role="form" action="<?php echo e(url('payroll/edit-employee-salary-post')); ?>" method="post">
                                <div class="panel-heading">
                                    <h3 class="panel-title"> <?php echo e(language_data('Edit Employee Salary')); ?></h3>
                                </div>

                                <div class="form-group m-none">
                                    <label for="e20"><?php echo e(language_data('Salary Type')); ?></label>
                                    <select name="payment_type" class="form-control selectpicker paymentType">
                                        <option value="Monthly" <?php if($employee->payment_type=='Monthly'): ?> selected <?php endif; ?>><?php echo e(language_data('Monthly')); ?></option>
                                        <option value="Hourly"  <?php if($employee->payment_type=='Hourly'): ?> selected <?php endif; ?>><?php echo e(language_data('Hourly')); ?></option>
                                    </select>
                                </div>

                                <div class="show-monthly">
                                    <div class="form-group">
                                        <label><?php echo e(language_data('Basic Salary')); ?></label>
                                        <span class="help">e.g. "50000"</span>
                                        <input type="text" class="form-control" name="basic_salary" value="<?php echo e($employee->basic_salary); ?>">
                                    </div>

                                    <div class="form-group">
                                        <label><?php echo e(language_data('Overtime Salary')); ?></label>
                                        <span class="help"> (<?php echo e(language_data('Hourly')); ?>) e.g. "20"</span>
                                        <input type="text" class="form-control" name="overtime_salary" value="<?php echo e($employee->overtime_salary); ?>">
                                    </div>

                                </div>


                                <div class="show-hourly">
                                    <div class="form-group">
                                        <label><?php echo e(language_data('Hourly Working Rate')); ?></label>
                                        <span class="help">e.g. "16"</span>
                                        <input type="text" class="form-control" name="hourly_working_rate" value="<?php echo e($employee->working_hourly_rate); ?>">
                                    </div>

                                    <div class="form-group">
                                        <label><?php echo e(language_data('Hourly Overtime Rate')); ?></label>
                                        <span class="help">e.g. "20"</span>
                                        <input type="text" class="form-control" name="hourly_overtime_rate" value="<?php echo e($employee->overtime_hourly_rate); ?>">
                                    </div>

                                </div>


                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                <input type="hidden" value="<?php echo e($employee->id); ?>" name="cmd">
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

    <?php echo Html::script("assets/js/form-elements-page.js"); ?>


    <script>
        $(document).ready(function(){

            var FundType = $('.paymentType');

            if (FundType.val() == 'Monthly') {
                $('.show-hourly').hide();
            }else{
                $('.show-monthly').hide();
            }

            FundType.on('change', function () {
                var value = $(this).val();
                if (value == 'Hourly') {
                    $('.show-hourly').show();
                    $('.show-monthly').hide();
                } else {
                    $('.show-hourly').hide();
                    $('.show-monthly').show();
                }

            });


        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>