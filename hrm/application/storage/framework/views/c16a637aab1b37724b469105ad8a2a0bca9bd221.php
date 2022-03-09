<?php /*External Style Section*/ ?>
<?php $__env->startSection('style'); ?>
    <?php echo Html::style("assets/libs/bootstrap3-wysihtml5-bower/bootstrap3-wysihtml5.min.css"); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <section class="wrapper-bottom-sec">
        <div class="p-30">
            <h2 class="page-title"><?php echo e(language_data('Edit')); ?> <?php echo e(language_data('Provident Fund')); ?></h2>
        </div>
        <div class="p-30 p-t-none p-b-none">

            <?php echo $__env->make('notification.notify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="row">

                <div class="col-lg-6">
                    <div class="panel">
                        <div class="panel-body">
                            <form class="" role="form" action="<?php echo e(url('provident-fund/edit-post')); ?>" method="post">
                                <div class="panel-heading">
                                    <h3 class="panel-title"> <?php echo e(language_data('Edit')); ?> <?php echo e(language_data('Provident Fund')); ?></h3>
                                </div>


                                <div class="form-group">
                                    <label><?php echo e(language_data('Employee Name')); ?></label>
                                    <select name="emp_name" class="form-control selectpicker" data-live-search="true">
                                        <?php foreach($employee as $e): ?>
                                            <option value="<?php echo e($e->id); ?>" <?php if($e->id==$pfund->emp_id): ?> selected <?php endif; ?>><?php echo e($e->fname); ?> <?php echo e($e->lname); ?> (<?php echo e($e->employee_code); ?>)</option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>


                                <div class="form-group m-none">
                                    <label for="e20"><?php echo e(language_data('Provident Fund Type')); ?></label>
                                    <select name="fund_type" class="form-control selectpicker fundType">
                                        <option value="Fixed Amount" <?php if($pfund->provident_fund_type=='Fixed Amount'): ?> selected <?php endif; ?>>Fixed Amount</option>
                                        <option value="Percentage of Basic Salary"  <?php if($pfund->provident_fund_type=='Percentage of Basic Salary'): ?> selected <?php endif; ?>>Percentage of Basic Salary</option>
                                    </select>
                                </div>

                                <div class="show-fixed-amount">

                                    <div class="form-group">
                                        <label for="Employee Share"><?php echo e(language_data('Employee Share')); ?></label>
                                        <span class="help">(<?php echo e(language_data('Amount')); ?>)</span>
                                        <input type="text" class="form-control" name="emp_share_fixed" value="<?php echo e($pfund->employee_share); ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="Organization Share"><?php echo e(language_data('Organization Share')); ?></label>
                                        <span class="help">(<?php echo e(language_data('Amount')); ?>)</span>
                                        <input type="text" class="form-control" name="org_share_fixed"  value="<?php echo e($pfund->organization_share); ?>">
                                    </div>

                                </div>


                                <div class="show-basic-salary">

                                    <div class="form-group">
                                        <label for="fname"><?php echo e(language_data('Employee Share')); ?></label>
                                        <span class="help">(%)</span>
                                        <input type="text" class="form-control" name="emp_share_per" value="<?php echo e($pfund->employee_share); ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="fname"><?php echo e(language_data('Organization Share')); ?></label>
                                        <span class="help">(%)</span>
                                        <input type="text" class="form-control" name="org_share_per"  value="<?php echo e($pfund->organization_share); ?>">
                                    </div>

                                </div>


                                <div class="form-group m-none">
                                    <label for="e20"><?php echo e(language_data('Status')); ?></label>
                                    <select name="status" class="form-control selectpicker">
                                        <option value="Paid" <?php if($pfund->status=='Paid'): ?> selected <?php endif; ?>><?php echo e(language_data('Paid')); ?></option>
                                        <option value="Unpaid"  <?php if($pfund->status=='Unpaid'): ?> selected <?php endif; ?>><?php echo e(language_data('Unpaid')); ?></option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Description')); ?></label>
                                    <textarea class="form-control textarea-wysihtml5" name="description"><?php echo $pfund->description; ?></textarea>
                                </div>



                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                <input type="hidden" value="<?php echo e($pfund->id); ?>" name="cmd">
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
    <?php echo Html::script("assets/libs/handlebars/handlebars.runtime.min.js"); ?>

    <?php echo Html::script("assets/libs/wysihtml5x/wysihtml5x-toolbar.min.js"); ?>

    <?php echo Html::script("assets/libs/bootstrap3-wysihtml5-bower/bootstrap3-wysihtml5.min.js"); ?>

    <?php echo Html::script("assets/js/form-elements-page.js"); ?>



    <script>
        $(document).ready(function(){

            var FundType = $('.fundType');

            if (FundType.val() == 'Fixed Amount') {
                $('.show-basic-salary').hide();
            }else{
                $('.show-fixed-amount').hide();
            }

            FundType.on('change', function () {
                var value = $(this).val();
                if (value == 'Percentage of Basic Salary') {
                    $('.show-basic-salary').show();
                    $('.show-fixed-amount').hide();
                } else {
                    $('.show-basic-salary').hide();
                    $('.show-fixed-amount').show();
                }

            });


        });
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>