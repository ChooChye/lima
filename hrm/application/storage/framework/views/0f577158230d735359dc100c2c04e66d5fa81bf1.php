<?php /*External Style Section*/ ?>
<?php $__env->startSection('style'); ?>
    <?php echo Html::style("assets/libs/bootstrap3-wysihtml5-bower/bootstrap3-wysihtml5.min.css"); ?>

    <?php echo Html::style("assets/libs/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <section class="wrapper-bottom-sec">
        <div class="p-30">
            <h2 class="page-title"><?php echo e(language_data('View Trainer Info')); ?></h2>
        </div>
        <div class="p-30 p-t-none p-b-none">

            <?php echo $__env->make('notification.notify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="row">

                <div class="col-lg-7">
                    <div class="panel">
                        <div class="panel-body">
                            <form class="" role="form" action="<?php echo e(url('training/post-trainer-update-info')); ?>" method="post">
                                <div class="panel-heading">
                                    <h3 class="panel-title"> <?php echo e(language_data('View Trainer Info')); ?></h3>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('First Name')); ?></label>
                                    <input type="text" class="form-control" required="" name="first_name" value="<?php echo e($trainer->first_name); ?>">
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Last Name')); ?></label>
                                    <input type="text" class="form-control" name="last_name"  value="<?php echo e($trainer->last_name); ?>">
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Designation')); ?></label>
                                    <input type="text" class="form-control" required="" name="designation"  value="<?php echo e($trainer->designation); ?>">
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Organization')); ?></label>
                                    <input type="text" class="form-control" required="" name="organization"  value="<?php echo e($trainer->organization); ?>">
                                </div>


                                <div class="form-group">
                                    <label><?php echo e(language_data('Address')); ?></label>
                                    <input type="text" class="form-control" name="address"  value="<?php echo e($trainer->address); ?>">
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('City')); ?></label>
                                    <input type="text" class="form-control" name="city"  value="<?php echo e($trainer->city); ?>">
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('State')); ?></label>
                                    <input type="text" class="form-control" name="state"  value="<?php echo e($trainer->state); ?>">
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Zip Code')); ?></label>
                                    <input type="text" class="form-control" name="zip_code"  value="<?php echo e($trainer->zip); ?>">
                                </div>


                                <div class="form-group">
                                    <label for="Country"><?php echo e(language_data('Country')); ?></label>
                                    <select name="country" class="form-control selectpicker" data-live-search="true">
                                        <?php echo countries( $trainer->country); ?>

                                    </select>
                                </div>


                                <div class="form-group">
                                    <label><?php echo e(language_data('Email')); ?></label>
                                    <input type="email" class="form-control" required="" name="email"  value="<?php echo e($trainer->email_address); ?>">
                                </div>


                                <div class="form-group">
                                    <label><?php echo e(language_data('Phone')); ?></label>
                                    <input type="text" class="form-control" required="" name="phone"  value="<?php echo e($trainer->phone); ?>">
                                </div>


                                <div class="form-group">
                                    <label><?php echo e(language_data('Trainer Expertise')); ?></label>
                                    <textarea class="textarea-wysihtml5 form-control" name="trainer_expertise"><?php echo e($trainer->expertise); ?></textarea>
                                </div>


                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                <input type="hidden" value="<?php echo e($trainer->id); ?>" name="cmd">
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

    <?php echo Html::script("assets/libs/wysihtml5x/wysihtml5x-toolbar.min.js"); ?>

    <?php echo Html::script("assets/libs/handlebars/handlebars.runtime.min.js"); ?>

    <?php echo Html::script("assets/libs/bootstrap3-wysihtml5-bower/bootstrap3-wysihtml5.min.js"); ?>

    <?php echo Html::script("assets/js/form-elements-page.js"); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>