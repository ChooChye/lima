<?php $__env->startSection('content'); ?>

    <section class="wrapper-bottom-sec">
        <div class="p-30">
            <h2 class="page-title"><?php echo e(language_data('View Application')); ?></h2>
        </div>
        <div class="p-30 p-t-none p-b-none">

            <?php echo $__env->make('notification.notify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="row">

                <div class="col-lg-6">
                    <div class="panel">
                        <div class="panel-body">
                            <form class="" role="form" action="<?php echo e(url('leave/post-job-status')); ?>" method="post">
                                <div class="panel-heading">
                                    <h3 class="panel-title"> <?php echo e(language_data('View Application')); ?></h3>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Employee Name')); ?></label>
                                    <input type="text" class="form-control" readonly value="<?php echo e($leave->employee_id->fname); ?> <?php echo e($leave->employee_id->lname); ?> (<?php echo e($leave->employee_id->employee_code); ?>) ">
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Leave Type')); ?></label>
                                    <input type="text" class="form-control" readonly value="<?php echo e($leave->leave_type->leave); ?>">
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label><?php echo e(language_data('Leave From')); ?></label>
                                            <input type="text" class="form-control" readonly value="<?php echo e($leave->leave_from); ?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label><?php echo e(language_data('Leave To')); ?></label>
                                            <input type="text" class="form-control" readonly value="<?php echo e($leave->leave_to); ?>">
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label><?php echo e(language_data('Applied On')); ?></label>
                                    <input type="text" class="form-control" value="<?php echo e($leave->applied_on); ?>" readonly>
                                </div>


                                <div class="form-group">
                                    <label><?php echo e(language_data('Leave Reason')); ?></label>
                                    <textarea class="form-control" readonly rows="4"><?php echo e($leave->leave_reason); ?></textarea>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Current Status')); ?></label>
                                    <input type="text" class="form-control" value="<?php echo e($leave->status); ?>" readonly>
                                </div>


                                <div class="form-group">
                                    <label><?php echo e(language_data('Change Status')); ?></label>
                                    <select class="selectpicker form-control" name="status">
                                        <option value="approved" <?php if($leave->status=='approved'): ?> selected <?php endif; ?>><?php echo e(language_data('Approved')); ?></option>
                                        <option value="pending"  <?php if($leave->status=='pending'): ?> selected <?php endif; ?>><?php echo e(language_data('Pending')); ?></option>
                                        <option value="rejected" <?php if($leave->status=='rejected'): ?> selected <?php endif; ?>><?php echo e(language_data('Rejected')); ?></option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Remark')); ?></label>
                                    <textarea class="form-control" name="remark" rows="4"><?php echo e($leave->remark); ?></textarea>
                                </div>


                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                <input type="hidden" value="<?php echo e($leave->id); ?>" name="cmd">
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>