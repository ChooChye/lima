<?php /*External Style Section*/ ?>
<?php $__env->startSection('style'); ?>
    <?php echo Html::style("assets/libs/bootstrap3-wysihtml5-bower/bootstrap3-wysihtml5.min.css"); ?>

    <?php echo Html::style("assets/libs/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <section class="wrapper-bottom-sec">
        <div class="p-30">
            <h2 class="page-title"><?php echo e(language_data('Edit')); ?> <?php echo e(language_data('Loan')); ?></h2>
        </div>
        <div class="p-30 p-t-none p-b-none">

            <?php echo $__env->make('notification.notify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="row">

                <div class="col-lg-6">
                    <div class="panel">
                        <div class="panel-body">
                            <form class="" role="form" action="<?php echo e(url('loan/edit-post')); ?>" method="post">
                                <div class="panel-heading">
                                    <h3 class="panel-title"> <?php echo e(language_data('Edit')); ?> <?php echo e(language_data('Loan')); ?></h3>
                                </div>


                                <div class="form-group">
                                    <label><?php echo e(language_data('Employee Name')); ?></label>
                                    <select name="emp_name" class="form-control selectpicker" data-live-search="true">
                                        <?php foreach($employee as $e): ?>
                                            <option value="<?php echo e($e->id); ?>" <?php if($e->id==$loan->emp_id): ?> selected <?php endif; ?>><?php echo e($e->fname); ?> <?php echo e($e->lname); ?> (<?php echo e($e->employee_code); ?>)</option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label for="fname"><?php echo e(language_data('Title')); ?></label>
                                    <input type="text" class="form-control" name="title" required="" value="<?php echo e($loan->title); ?>">
                                </div>


                                <div class="form-group">
                                    <label for="fname"><?php echo e(language_data('Loan')); ?> <?php echo e(language_data('Date')); ?></label>
                                    <input type="text" class="form-control datePicker" name="loan_date" required="" value="<?php echo e($loan->loan_date); ?>">
                                </div>

                                <div class="form-group">
                                    <label for="fname"><?php echo e(language_data('Loan')); ?> <?php echo e(language_data('Amount')); ?></label>
                                    <input type="number" class="form-control" name="loan_amount" required="" value="<?php echo e($loan->amount); ?>">
                                </div>



                                <div class="form-group">
                                    <label><?php echo e(language_data('Include Loan Amount in Payslip')); ?></label>
                                    <div class="form-group">
                                        <div class="coder-radiobox radio-inline">
                                            <input type="radio" name="payslip" value="yes" <?php if($loan->enable_payslip=='yes'): ?> checked <?php endif; ?>><span class="co-radio-ui"></span><label><?php echo e(language_data('Yes')); ?></label>
                                        </div>

                                        <div class="coder-radiobox radio-inline">
                                            <input type="radio" name="payslip" value="no"  <?php if($loan->enable_payslip=='no'): ?> checked <?php endif; ?>><span class="co-radio-ui"></span><label><?php echo e(language_data('No')); ?></label>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="fname"><?php echo e(language_data('Monthly Repayment Amount')); ?></label>
                                    <input type="number" class="form-control" name="repayment_amount" required="" value="<?php echo e($loan->repayment_amount); ?>">
                                </div>


                                <div class="form-group">
                                    <label for="fname"><?php echo e(language_data('Repayment Start Date')); ?></label>
                                    <input type="text" class="form-control datePicker" name="repayment_start_date" required="" value="<?php echo e($loan->repayment_start_date); ?>">
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Status')); ?></label>
                                    <select name="status" class="form-control selectpicker">
                                        <option value="pending" <?php if($loan->status=='pending'): ?> selected <?php endif; ?>><?php echo e(language_data('Pending')); ?></option>
                                        <option value="ongoing" <?php if($loan->status=='ongoing'): ?> selected <?php endif; ?>><?php echo e(language_data('Ongoing')); ?></option>
                                        <option value="completed" <?php if($loan->status=='completed'): ?> selected <?php endif; ?>><?php echo e(language_data('Completed')); ?></option>
                                        <option value="rejected" <?php if($loan->status=='rejected'): ?> selected <?php endif; ?>><?php echo e(language_data('Rejected')); ?></option>
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label><?php echo e(language_data('Description')); ?></label>
                                    <textarea class="form-control textarea-wysihtml5" name="description"><?php echo $loan->description; ?></textarea>
                                </div>



                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                <input type="hidden" value="<?php echo e($loan->id); ?>" name="cmd">
                                <button type="submit" class="btn btn-success btn-sm pull-right"><i class="fa fa-edit"></i> <?php echo e(language_data('Update')); ?> </button>
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
    <?php echo Html::script("assets/libs/moment/moment.min.js"); ?>

    <?php echo Html::script("assets/libs/handlebars/handlebars.runtime.min.js"); ?>

    <?php echo Html::script("assets/libs/wysihtml5x/wysihtml5x-toolbar.min.js"); ?>

    <?php echo Html::script("assets/libs/bootstrap3-wysihtml5-bower/bootstrap3-wysihtml5.min.js"); ?>

    <?php echo Html::script("assets/libs/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"); ?>

    <?php echo Html::script("assets/js/form-elements-page.js"); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>