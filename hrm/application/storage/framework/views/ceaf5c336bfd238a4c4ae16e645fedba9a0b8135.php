<?php /*External Style Section*/ ?>
<?php $__env->startSection('style'); ?>
    <?php echo Html::style("assets/libs/bootstrap3-wysihtml5-bower/bootstrap3-wysihtml5.min.css"); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <section class="wrapper-bottom-sec">
        <div class="p-30">
            <h2 class="page-title"><?php echo e(language_data('Edit Notice')); ?></h2>
        </div>
        <div class="p-30 p-t-none p-b-none">

            <?php echo $__env->make('notification.notify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="row">

                <div class="col-lg-7">
                    <div class="panel">
                        <div class="panel-body">
                            <form class="" role="form" action="<?php echo e(url('notice-board/edit-notice-post')); ?>" method="post">
                                <div class="panel-heading">
                                    <h3 class="panel-title"> <?php echo e(language_data('Edit Notice')); ?></h3>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Notice Title')); ?></label>
                                    <input type="text" class="form-control" required="" name="notice_title" value="<?php echo e($notice->title); ?>">
                                </div>

                                <div class="form-group m-none">
                                    <label for="e20"><?php echo e(language_data('Notice Status')); ?></label>
                                    <select name="status" class="form-control selectpicker">
                                        <option value="Published" <?php if($notice->status=='Published'): ?> selected <?php endif; ?>><?php echo e(language_data('Published')); ?></option>
                                        <option value="Unpublished" <?php if($notice->status=='Unpublished'): ?> selected <?php endif; ?>><?php echo e(language_data('Unpublished')); ?></option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Description')); ?></label>
                                    <textarea class="textarea-wysihtml5 form-control" name="description"><?php echo e($notice->description); ?></textarea>
                                </div>




                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                <input type="hidden" value="<?php echo e($notice->id); ?>" name="cmd">
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

    <?php echo Html::script("assets/libs/wysihtml5x/wysihtml5x-toolbar.min.js"); ?>

    <?php echo Html::script("assets/libs/bootstrap3-wysihtml5-bower/bootstrap3-wysihtml5.min.js"); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>