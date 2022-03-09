<?php /*External Style Section*/ ?>
<?php $__env->startSection('style'); ?>
    <?php echo Html::style("assets/libs/bootstrap3-wysihtml5-bower/bootstrap3-wysihtml5.min.css"); ?>

    <?php echo Html::style("assets/libs/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <section class="wrapper-bottom-sec">
        <div class="p-30">
            <h2 class="page-title"><?php echo e(language_data('Edit Job')); ?></h2>
        </div>
        <div class="p-30 p-t-none p-b-none">

            <?php echo $__env->make('notification.notify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="row">

                <div class="col-lg-7">
                    <div class="panel">
                        <div class="panel-body">
                            <form class="" role="form" action="<?php echo e(url('jobs/job-edit-post')); ?>" method="post">
                                <div class="panel-heading">
                                    <h3 class="panel-title"> <?php echo e(language_data('Edit Job')); ?></h3>
                                </div>


                                <div class="form-group">
                                    <label><?php echo e(language_data('Position')); ?></label>
                                    <span class="help">e.g. "Software Engineer"</span>
                                    <select name="position" id="e20" class="form-control selectpicker"
                                            data-live-search="true">
                                        <?php foreach($designation as $des): ?>
                                            <option value="<?php echo e($des->id); ?>" <?php if($job->position == $des->id): ?> selected <?php endif; ?>><?php echo e($des->designation); ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Number Of Post')); ?></label>
                                    <span class="help">e.g. "2"</span>
                                    <input type="number" class="form-control" required="" name="no_position" value="<?php echo e($job->no_position); ?>">
                                </div>



                                <div class="form-group">
                                    <label><?php echo e(language_data('Job Type')); ?></label>
                                    <select name="job_type" class="form-control selectpicker">
                                        <option value="Contractual" <?php if($job->job_type=='Contractual'): ?> selected <?php endif; ?>><?php echo e(language_data('Contractual')); ?></option>
                                        <option value="Part Time" <?php if($job->job_type=='Part Time'): ?> selected <?php endif; ?>><?php echo e(language_data('Part Time')); ?></option>
                                        <option value="Full Time" <?php if($job->job_type=='Full Time'): ?> selected <?php endif; ?>><?php echo e(language_data('Full Time')); ?></option>
                                    </select>

                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Experience')); ?></label>
                                    <input type="text" class="form-control" name="experience" value="<?php echo e($job->experience); ?>">
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Age')); ?></label>
                                    <input type="text" class="form-control" name="age" value="<?php echo e($job->age); ?>">
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Job Location')); ?></label>
                                    <input type="text" class="form-control" name="job_location" value="<?php echo e($job->job_location); ?>">
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Salary Range')); ?></label>
                                    <input type="text" class="form-control" name="salary_range" value="<?php echo e($job->salary_range); ?>">
                                </div>


                                <div class="form-group">
                                    <label><?php echo e(language_data('Post Date')); ?></label>
                                    <input type="text" class="form-control datePicker" name="post_date" required="" value="<?php echo e($job->post_date); ?>">
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Last Date To Apply')); ?></label>
                                    <input type="text" class="form-control datePicker" name="apply_date" value="<?php echo e($job->apply_date); ?>">
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Close Date')); ?></label>
                                    <input type="text" class="form-control datePicker" name="close_date" value="<?php echo e($job->close_date); ?>">
                                </div>

                                <div class="form-group m-none">
                                    <label for="e20"><?php echo e(language_data('Status')); ?></label>
                                    <select name="status" class="form-control selectpicker">
                                        <option value="opening" <?php if($job->status == 'opening'): ?> selected <?php endif; ?>>Open</option>
                                        <option value="closed" <?php if($job->status == 'closed'): ?> selected <?php endif; ?>>Closed</option>
                                        <option value="drafted" <?php if($job->status == 'drafted'): ?> selected <?php endif; ?>>Draft</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Short Description')); ?></label>
                                    <textarea class="form-control" rows="5" name="short_description"><?php echo e($job->short_description); ?></textarea>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Description')); ?></label>
                                    <textarea class="textarea-wysihtml5 form-control" name="description"><?php echo e($job->description); ?></textarea>
                                </div>



                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                <input type="hidden" value="<?php echo e($job->id); ?>" name="cmd">
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