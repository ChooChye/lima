<?php /*External Style Section*/ ?>
<?php $__env->startSection('style'); ?>
    <?php echo Html::style("assets/libs/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <section class="wrapper-bottom-sec">
        <div class="p-30">
            <h2 class="page-title"><?php echo e(language_data('Edit Expense')); ?></h2>
        </div>
        <div class="p-30 p-t-none p-b-none">

            <?php echo $__env->make('notification.notify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="row">

                <div class="col-lg-6">
                    <div class="panel">
                        <div class="panel-body">
                            <form role="form" action="<?php echo e(url('expense/expense-edit-post')); ?>" method="post" enctype="multipart/form-data">
                                <div class="panel-heading">
                                    <h3 class="panel-title"> <?php echo e(language_data('Edit Expense')); ?></h3>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Item Name')); ?></label>
                                    <input type="text" class="form-control" required="" name="item_name" value="<?php echo e($expense->item_name); ?>">
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Purchase From')); ?></label>
                                    <input type="text" class="form-control" required="" name="purchase_from"  value="<?php echo e($expense->purchase_from); ?>">
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Purchase By')); ?></label>
                                    <select name="emp_name" class="form-control selectpicker" data-live-search="true">
                                        <?php foreach($employee as $e): ?>
                                            <option value="<?php echo e($e->id); ?>" <?php if($expense->purchase_by==$e->id): ?> selected <?php endif; ?>><?php echo e($e->fname); ?> <?php echo e($e->lname); ?> (<?php echo e($e->employee_code); ?>)</option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Purchase Date')); ?></label>
                                    <input type="text" class="form-control datePicker" required="" name="purchase_date" value="<?php echo e($expense->purchase_date); ?>">
                                </div>


                                <div class="form-group">
                                    <label><?php echo e(language_data('Amount')); ?></label>
                                    <input type="text" class="form-control" name="amount"  value="<?php echo e($expense->amount); ?>">
                                </div>

                                <div class="form-group m-none">
                                    <label for="e20"><?php echo e(language_data('Status')); ?></label>
                                    <select name="status" class="form-control selectpicker">
                                        <option value="Pending" <?php if($expense->status=='Pending'): ?> selected <?php endif; ?>>Pending</option>
                                        <option value="Approved"  <?php if($expense->status=='Approved'): ?> selected <?php endif; ?>>Approved</option>
                                        <option value="Cancel"  <?php if($expense->status=='Cancel'): ?> selected <?php endif; ?>>Cancel</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Select Document')); ?></label>
                                    <div class="input-group input-group-file">
                                        <span class="input-group-btn">
                                            <span class="btn btn-primary btn-file">
                                                <?php echo e(language_data('Browse')); ?> <input type="file" class="form-control" name="bill_copy">
                                            </span>
                                        </span>
                                        <input type="text" class="form-control" readonly="">
                                    </div>
                                </div>

                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                <input type="hidden" value="<?php echo e($expense->id); ?>" name="cmd">
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

    <?php echo Html::script("assets/libs/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"); ?>

    <?php echo Html::script("assets/libs/handlebars/handlebars.runtime.min.js"); ?>

    <?php echo Html::script("assets/js/form-elements-page.js"); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>