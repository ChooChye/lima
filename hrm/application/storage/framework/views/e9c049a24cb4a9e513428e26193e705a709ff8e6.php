<?php /*External Style Section*/ ?>
<?php $__env->startSection('style'); ?>
    <?php echo Html::style("assets/libs/bootstrap3-wysihtml5-bower/bootstrap3-wysihtml5.min.css"); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <section class="wrapper-bottom-sec">
        <div class="p-30">
            <h2 class="page-title"><?php echo e(language_data('Manage')); ?> <?php echo e(language_data('SMS Gateways')); ?></h2>
        </div>
        <div class="p-30 p-t-none p-b-none">

            <?php echo $__env->make('notification.notify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="row">

                <div class="col-lg-7">
                    <div class="panel">
                        <div class="panel-body">
                            <form method="POST" action="<?php echo e(url('settings/sms-gateway-update')); ?>">
                                <div class="panel-heading">
                                    <h3 class="panel-title"> <?php echo e(language_data('Manage')); ?> <?php echo e(language_data('SMS Gateways')); ?></h3>
                                </div>


                                <div class="form-group">
                                    <label for="name"><?php echo e(language_data('Gateway Name')); ?></label>
                                    <input type="text" class="form-control" name="name" disabled value="<?php echo e($sg->name); ?>">
                                </div>
                                <?php if($sg->name!='Twilio'): ?>
                                <div class="form-group">
                                    <label for="username"><?php echo e(language_data('API Link')); ?></label>
                                    <input type="text" class="form-control" name="api_link" value="<?php echo e($sg->api_link); ?>">
                                </div>
                                <?php endif; ?>
                                <div class="form-group">
                                    <label for="username"><?php echo e(language_data('User name')); ?></label>
                                    <input type="text" class="form-control" name="user_name" value="<?php echo e($sg->user_name); ?>">
                                </div>

                                <div class="form-group">
                                    <label for="password"><?php echo e(language_data('Password')); ?></label>
                                    <input type="text" class="form-control" name="password" value="<?php echo e($sg->password); ?>">
                                </div>

                                <div class="form-group">
                                    <label for="Status"><?php echo e(language_data('Status')); ?></label>
                                    <select name="status" class="selectpicker form-control">
                                        <option value="Active" <?php if($sg->status=='Active'): ?> selected <?php endif; ?>><?php echo e(language_data('Active')); ?></option>
                                        <option value="Inactive" <?php if($sg->status=='Inactive'): ?> selected <?php endif; ?>><?php echo e(language_data('Inactive')); ?></option>
                                    </select>
                                </div>


                                <input type="hidden" value="<?php echo e($sg->id); ?>" name="cmd">
                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                <button type="submit" name="update" class="btn btn-success"><i class="fa fa-edit"></i> <?php echo e(language_data('Update')); ?></button>
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>