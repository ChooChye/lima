<?php /*External Style Section*/ ?>
<?php $__env->startSection('style'); ?>
    <?php echo Html::style("assets/libs/bootstrap3-wysihtml5-bower/bootstrap3-wysihtml5.min.css"); ?>

    <?php echo Html::style("assets/libs/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <section class="wrapper-bottom-sec">
        <div class="p-30">
            <h2 class="page-title"><?php echo e(language_data('View Employee Training')); ?></h2>
        </div>
        <div class="p-30 p-t-none p-b-none">

            <?php echo $__env->make('notification.notify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="row">

                <div class="col-lg-7">
                    <div class="panel">
                        <div class="panel-body">
                            <form class="" role="form" action="<?php echo e(url('training/post-employee-training-info')); ?>" method="post">
                                <div class="panel-heading">
                                    <h3 class="panel-title"> <?php echo e(language_data('View Employee Training')); ?></h3>
                                </div>


                                <div class="form-group">
                                    <label><?php echo e(language_data('Employee')); ?></label>
                                    <select class="form-control selectpicker" multiple data-live-search="true" name="employee[]">
                                        <?php foreach($employee as $e): ?>
                                            <option value="<?php echo e($e->id); ?>" <?php if(in_array_r($e->id,$train_members)): ?> selected <?php endif; ?>><?php echo e($e->fname); ?> <?php echo e($e->lname); ?> (<?php echo e($e->employee_code); ?>)</option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Training Type')); ?></label>
                                    <select class="form-control selectpicker" data-live-search="true" name="training_type">
                                        <option value="Online Training" <?php if($emp_train->training_type=='Online Training'): ?> selected <?php endif; ?>><?php echo e(language_data('Online Training')); ?></option>
                                        <option value="Seminar"  <?php if($emp_train->training_type=='Seminar'): ?> selected <?php endif; ?>><?php echo e(language_data('Seminar')); ?></option>
                                        <option value="Lecture"  <?php if($emp_train->training_type=='Lecture'): ?> selected <?php endif; ?>><?php echo e(language_data('Lecture')); ?></option>
                                        <option value="Workshop"  <?php if($emp_train->training_type=='Workshop'): ?> selected <?php endif; ?>><?php echo e(language_data('Workshop')); ?></option>
                                        <option value="Hands On Training"  <?php if($emp_train->training_type=='Hands On Training'): ?> selected <?php endif; ?>><?php echo e(language_data('Hands On Training')); ?></option>
                                        <option value="Webinar"  <?php if($emp_train->training_type=='Webinar'): ?> selected <?php endif; ?>><?php echo e(language_data('Webinar')); ?></option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Training')); ?> <?php echo e(language_data('Subject')); ?></label>
                                    <select class="form-control selectpicker" data-live-search="true" name="training_subject">
                                        <option value="HR Training" <?php if($emp_train->training_subject=='HR Training'): ?> selected <?php endif; ?>><?php echo e(language_data('HR Training')); ?></option>
                                        <option value="Employees Development" <?php if($emp_train->training_subject=='Employees Development'): ?> selected <?php endif; ?>><?php echo e(language_data('Employees Development')); ?></option>
                                        <option value="IT Training" <?php if($emp_train->training_subject=='IT Training'): ?> selected <?php endif; ?>><?php echo e(language_data('IT Training')); ?></option>
                                        <option value="Finance Training" <?php if($emp_train->training_subject=='Finance Training'): ?> selected <?php endif; ?>><?php echo e(language_data('Finance Training')); ?></option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Nature Of Training')); ?></label>
                                    <select class="form-control selectpicker" data-live-search="true" name="training_nature">
                                        <option value="Internal" <?php if($emp_train->training_nature=='Internal'): ?> selected <?php endif; ?>><?php echo e(language_data('Internal')); ?></option>
                                        <option value="External" <?php if($emp_train->training_nature=='External'): ?> selected <?php endif; ?>><?php echo e(language_data('External')); ?></option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Training')); ?> <?php echo e(language_data('Title')); ?></label>
                                    <input type="text" class="form-control" name="training_title" required="" value="<?php echo e($emp_train->title); ?>">
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Trainer')); ?></label>
                                    <select class="form-control selectpicker" data-live-search="true" name="trainer">
                                        <?php foreach($trainers as $t): ?>
                                            <option value="<?php echo e($t->id); ?>" <?php if($emp_train->trainer==$t->id): ?> selected <?php endif; ?>><?php echo e($t->first_name); ?> <?php echo e($t->last_name); ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Training Location')); ?></label>
                                    <input type="text" class="form-control" name="training_location" value="<?php echo e($emp_train->training_location); ?>">
                                </div>


                                <div class="form-group">
                                    <label><?php echo e(language_data('Sponsored By')); ?></label>
                                    <input type="text" class="form-control" name="sponsored_by" value="<?php echo e($emp_train->sponsored_by); ?>">
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Organized By')); ?></label>
                                    <input type="text" class="form-control" name="organized_by" value="<?php echo e($emp_train->organized_by); ?>">
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Training From')); ?></label>
                                    <input type="text" class="form-control datePicker" name="training_from" value="<?php echo e($emp_train->training_from); ?>">
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Training To')); ?></label>
                                    <input type="text" class="form-control datePicker" name="training_to" value="<?php echo e($emp_train->training_to); ?>">
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Training')); ?> <?php echo e(language_data('Description')); ?></label>
                                    <textarea class="textarea-wysihtml5 form-control" name="description"><?php echo e($emp_train->description); ?></textarea>
                                </div>


                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                <input type="hidden" value="<?php echo e($emp_train->id); ?>" name="cmd">
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