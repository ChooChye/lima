<?php $__env->startSection('content'); ?>

    <section class="wrapper-bottom-sec">
        <div class="p-30">
            <h2 class="page-title"><?php echo e(language_data('Edit Award')); ?></h2>
        </div>
        <div class="p-30 p-t-none p-b-none">

            <?php echo $__env->make('notification.notify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="row">

                <div class="col-lg-6">
                    <div class="panel">
                        <div class="panel-body">
                            <form class="" role="form" action="<?php echo e(url('award/award-edit-post')); ?>" method="post">
                                <div class="panel-heading">
                                    <h3 class="panel-title"> <?php echo e(language_data('Edit Award')); ?></h3>
                                </div>
                                <div class="form-group">
                                    <label><?php echo e(language_data('Award Name')); ?></label>
                                    <select name="award_name" id="e20" class="form-control selectpicker" data-live-search="true">
                                        <?php foreach($award_name as $an): ?>
                                            <option value="<?php echo e($an->id); ?>" <?php if($an->id == $award->award): ?> selected <?php endif; ?> ><?php echo e($an->award); ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Employee Name')); ?></label>
                                    <select name="emp_name" class="form-control selectpicker" data-live-search="true">
                                        <?php foreach($employee as $e): ?>
                                            <option value="<?php echo e($e->employee_code); ?>" <?php if($e->employee_code == $award->emp_id): ?> selected <?php endif; ?>><?php echo e($e->fname); ?> <?php echo e($e->lname); ?> (<?php echo e($e->employee_code); ?>)</option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Gift Item')); ?></label>
                                    <input type="text" class="form-control" required="" name="gift_item" value="<?php echo e($award->gift); ?>">
                                </div>


                                <div class="form-group">
                                    <label><?php echo e(language_data('Cash Price')); ?></label>
                                    <input type="text" class="form-control" name="cash_price" value="<?php echo e($award->cash); ?>">
                                </div>

                                <div class="form-group m-none">
                                    <label for="e20">Month</label>
                                    <select name="month" class="form-control selectpicker" data-live-search="true">
                                        <option value="January" <?php if($award->month=='January'): ?> selected <?php endif; ?>><?php echo e(language_data('January')); ?></option>
                                        <option value="February"  <?php if($award->month=='February'): ?> selected <?php endif; ?>><?php echo e(language_data('February')); ?></option>
                                        <option value="March"  <?php if($award->month=='March'): ?> selected <?php endif; ?>><?php echo e(language_data('March')); ?></option>
                                        <option value="April"  <?php if($award->month=='April'): ?> selected <?php endif; ?>><?php echo e(language_data('April')); ?></option>
                                        <option value="May"  <?php if($award->month=='May'): ?> selected <?php endif; ?>><?php echo e(language_data('May')); ?></option>
                                        <option value="June"  <?php if($award->month=='June'): ?> selected <?php endif; ?>><?php echo e(language_data('June')); ?></option>
                                        <option value="July"  <?php if($award->month=='July'): ?> selected <?php endif; ?>><?php echo e(language_data('July')); ?></option>
                                        <option value="August"  <?php if($award->month=='August'): ?> selected <?php endif; ?>><?php echo e(language_data('August')); ?></option>
                                        <option value="September"  <?php if($award->month=='September'): ?> selected <?php endif; ?>><?php echo e(language_data('September')); ?></option>
                                        <option value="October"  <?php if($award->month=='October'): ?> selected <?php endif; ?>><?php echo e(language_data('October')); ?></option>
                                        <option value="November"  <?php if($award->month=='November'): ?> selected <?php endif; ?>><?php echo e(language_data('November')); ?></option>
                                        <option value="December"  <?php if($award->month=='December'): ?> selected <?php endif; ?>><?php echo e(language_data('December')); ?></option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Year')); ?></label>
                                    <?php echo e(yearDropdown(1900,date('Y'),'year',$award->year)); ?>

                                </div>

                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                <input type="hidden" value="<?php echo e($award->id); ?>" name="cmd">
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

    <?php echo Html::script("assets/js/form-elements-page.js"); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>