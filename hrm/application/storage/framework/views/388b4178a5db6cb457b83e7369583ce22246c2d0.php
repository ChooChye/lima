<?php $__env->startSection('content'); ?>

    <section class="wrapper-bottom-sec">
        <div class="p-30">
            <h2 class="page-title"><?php echo e(language_data('Language Manage')); ?></h2>
        </div>
        <div class="p-30 p-t-none p-b-none">

            <?php echo $__env->make('notification.notify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="row">

                <div class="col-lg-6">
                    <div class="panel">
                        <div class="panel-body">
                            <form class="" role="form" action="<?php echo e(url('settings/language-settings-manage-post')); ?>" method="post" enctype="multipart/form-data">
                                <div class="panel-heading">
                                    <h3 class="panel-title"> <?php echo e(language_data('Language Manage')); ?></h3>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Language Name')); ?></label>
                                    <span class="help">e.g. "English"</span>
                                    <input type="text" class="form-control" required name="language_name" value="<?php echo e($lan->language); ?>">
                                </div>

                                 <div class="form-group">
                                    <label><?php echo e(language_data('Status')); ?></label>
                                    <select class="selectpicker form-control" name="status">
                                        <option value="Active" <?php if($lan->status=='Active'): ?> selected <?php endif; ?>>Active</option>
                                        <option value="Inactive"  <?php if($lan->status=='Inactive'): ?> selected <?php endif; ?>>Inactive</option>
                                    </select>
                                 </div>


                                <div class="form-group">
                                    <label><?php echo e(language_data('Flag')); ?></label>
                                    <div class="input-group input-group-file">
                                        <span class="input-group-btn">
                                            <span class="btn btn-primary btn-file">
                                                <?php echo e(language_data('Browse')); ?> <input type="file" class="form-control" name="flag">
                                            </span>
                                        </span>
                                        <input type="text" class="form-control" readonly="">
                                    </div>
                                </div>

                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                <input type="hidden" value="<?php echo e($lan->id); ?>" name="cmd">
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