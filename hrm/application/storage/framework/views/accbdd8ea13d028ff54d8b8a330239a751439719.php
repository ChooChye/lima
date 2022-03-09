<?php /*External Style Section*/ ?>
<?php $__env->startSection('style'); ?>
    <?php echo Html::style("assets/libs/bootstrap3-wysihtml5-bower/bootstrap3-wysihtml5.min.css"); ?>

    <?php echo Html::style("assets/libs/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <section class="wrapper-bottom-sec">
        <div class="p-30">
            <h2 class="page-title"><?php echo e(language_data('View')); ?> <?php echo e(language_data('Training Needs Assessment')); ?></h2>
        </div>
        <div class="p-30 p-t-none p-b-none">

            <?php echo $__env->make('notification.notify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="row">

                <div class="col-lg-7">
                    <div class="panel">
                        <div class="panel-body">
                            <form class="" role="form" action="<?php echo e(url('training/post-training-needs-assessment-update')); ?>" method="post">
                                <div class="panel-heading">
                                    <h3 class="panel-title"> <?php echo e(language_data('View')); ?> <?php echo e(language_data('Training Needs Assessment')); ?></h3>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Department')); ?></label>
                                    <select class="form-control selectpicker" data-live-search="true" name="department">
                                        <?php foreach($department as $e): ?>
                                            <option value="<?php echo e($e->id); ?>" <?php if($tnassessment->department==$e->id): ?> selected <?php endif; ?>><?php echo e($e->department); ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Training Type')); ?></label>
                                    <select class="form-control selectpicker" data-live-search="true" name="training_type">
                                        <option value="Online Training" <?php if($tnassessment->training_type=='Online Training'): ?> selected <?php endif; ?>><?php echo e(language_data('Online Training')); ?></option>
                                        <option value="Seminar"  <?php if($tnassessment->training_type=='Seminar'): ?> selected <?php endif; ?>><?php echo e(language_data('Seminar')); ?></option>
                                        <option value="Lecture"  <?php if($tnassessment->training_type=='Lecture'): ?> selected <?php endif; ?>><?php echo e(language_data('Lecture')); ?></option>
                                        <option value="Workshop"  <?php if($tnassessment->training_type=='Workshop'): ?> selected <?php endif; ?>><?php echo e(language_data('Workshop')); ?></option>
                                        <option value="Hands On Training"  <?php if($tnassessment->training_type=='Hands On Training'): ?> selected <?php endif; ?>><?php echo e(language_data('Hands On Training')); ?></option>
                                        <option value="Webinar"  <?php if($tnassessment->training_type=='Webinar'): ?> selected <?php endif; ?>><?php echo e(language_data('Webinar')); ?></option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Training')); ?> <?php echo e(language_data('Subject')); ?></label>
                                    <select class="form-control selectpicker" data-live-search="true" name="training_subject">
                                        <option value="HR Training" <?php if($tnassessment->training_subject=='HR Training'): ?> selected <?php endif; ?>><?php echo e(language_data('HR Training')); ?></option>
                                        <option value="Employees Development" <?php if($tnassessment->training_subject=='Employees Development'): ?> selected <?php endif; ?>><?php echo e(language_data('Employees Development')); ?></option>
                                        <option value="IT Training" <?php if($tnassessment->training_subject=='IT Training'): ?> selected <?php endif; ?>><?php echo e(language_data('IT Training')); ?></option>
                                        <option value="Finance Training" <?php if($tnassessment->training_subject=='Finance Training'): ?> selected <?php endif; ?>><?php echo e(language_data('Finance Training')); ?></option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Nature Of Training')); ?></label>
                                    <select class="form-control selectpicker" data-live-search="true" name="training_nature">
                                        <option value="Internal" <?php if($tnassessment->training_nature=='Internal'): ?> selected <?php endif; ?>><?php echo e(language_data('Internal')); ?></option>
                                        <option value="External" <?php if($tnassessment->training_nature=='External'): ?> selected <?php endif; ?>><?php echo e(language_data('External')); ?></option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Training')); ?> <?php echo e(language_data('Title')); ?></label>
                                    <input type="text" class="form-control" name="training_title" required="" value="<?php echo e($tnassessment->title); ?>">
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Training')); ?> <?php echo e(language_data('Employee')); ?></label>
                                    <select class="form-control selectpicker" multiple data-live-search="true" name="employee[]">
                                        <?php foreach($employee as $e): ?>
                                            <option value="<?php echo e($e->id); ?>" <?php if(in_array_r($e->id,$train_members)): ?> selected <?php endif; ?>><?php echo e($e->fname); ?> <?php echo e($e->lname); ?> (<?php echo e($e->employee_code); ?>)</option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label><?php echo e(language_data('Training')); ?> <?php echo e(language_data('Reason')); ?></label>
                                    <textarea class="textarea-wysihtml5 form-control" name="training_reason"><?php echo e($tnassessment->training_reason); ?></textarea>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Preferred')); ?> <?php echo e(language_data('Trainer')); ?></label>
                                    <select class="form-control selectpicker" data-live-search="true" name="trainer">
                                        <?php foreach($trainers as $t): ?>
                                            <option value="<?php echo e($t->id); ?>" <?php if($tnassessment->trainer==$t->id): ?> selected <?php endif; ?>><?php echo e($t->first_name); ?> <?php echo e($t->last_name); ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Preferred')); ?>  <?php echo e(language_data('Training Location')); ?></label>
                                    <input type="text" class="form-control" name="training_location" value="<?php echo e($tnassessment->training_location); ?>">
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Preferred')); ?>  <?php echo e(language_data('Start Date')); ?></label>
                                    <input type="text" class="form-control datePicker" name="training_from" value="<?php echo e($tnassessment->training_from); ?>">
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Preferred')); ?> <?php echo e(language_data('End Date')); ?></label>
                                    <input type="text" class="form-control datePicker" name="training_to" value="<?php echo e($tnassessment->training_to); ?>">
                                </div>


                                <div class="form-group">
                                    <label><?php echo e(language_data('Preferred')); ?>  <?php echo e(language_data('Training Cost')); ?></label>
                                    <input type="text" class="form-control" name="training_cost" value="<?php echo e($tnassessment->training_cost); ?>">
                                </div>


                                <div class="form-group">
                                    <label><?php echo e(language_data('Preferred')); ?>  <?php echo e(language_data('Travel Cost')); ?></label>
                                    <input type="text" class="form-control" name="travel_cost" value="<?php echo e($tnassessment->travel_cost); ?>">
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Status')); ?></label>
                                    <select class="form-control selectpicker" data-live-search="true" name="status">
                                        <option value="pending" <?php if($tnassessment->status=='pending'): ?> selected <?php endif; ?>><?php echo e(language_data('Pending')); ?></option>
                                        <option value="approved"  <?php if($tnassessment->status=='approved'): ?> selected <?php endif; ?>><?php echo e(language_data('Approved')); ?></option>
                                        <option value="rejected"  <?php if($tnassessment->status=='rejected'): ?> selected <?php endif; ?>><?php echo e(language_data('Rejected')); ?></option>
                                        <option value="completed"  <?php if($tnassessment->status=='completed'): ?> selected <?php endif; ?>><?php echo e(language_data('Completed')); ?></option>
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label><?php echo e(language_data('Training')); ?> <?php echo e(language_data('Description')); ?></label>
                                    <textarea class="textarea-wysihtml5 form-control" name="description"><?php echo e($tnassessment->description); ?></textarea>
                                </div>


                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                <input type="hidden" value="<?php echo e($tnassessment->id); ?>" name="cmd">
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