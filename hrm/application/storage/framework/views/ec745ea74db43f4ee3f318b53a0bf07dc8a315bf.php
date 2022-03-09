<?php /*External Style Section*/ ?>
<?php $__env->startSection('style'); ?>
    <?php echo Html::style("assets/libs/data-table/datatables.min.css"); ?>

    <?php echo Html::style("assets/libs/bootstrap3-wysihtml5-bower/bootstrap3-wysihtml5.min.css"); ?>

    <?php echo Html::style("assets/libs/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <section class="wrapper-bottom-sec">
        <div class="p-30">
            <h2 class="page-title"><?php echo e(language_data('Training Needs Assessment')); ?></h2>
        </div>
        <div class="p-30 p-t-none p-b-none">
            <?php echo $__env->make('notification.notify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="row">

                <div class="col-lg-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo e(language_data('Training Needs Assessment')); ?></h3>
                            <button class="btn btn-success btn-sm pull-right" data-toggle="modal" data-target="#add-new-training"><i class="fa fa-plus"></i> <?php echo e(language_data('Add')); ?> <?php echo e(language_data('Training Needs Assessment')); ?></button>
                            <br>
                        </div>
                        <div class="panel-body p-none">
                            <table class="table data-table table-hover table-ultra-responsive">
                                <thead>
                                <tr>
                                    <th style="width: 10%;"><?php echo e(language_data('Department')); ?></th>
                                    <th style="width: 15%;"><?php echo e(language_data('Training Type')); ?></th>
                                    <th style="width: 20%;"><?php echo e(language_data('Training')); ?> <?php echo e(language_data('Subject')); ?></th>
                                    <th style="width: 20%;"><?php echo e(language_data('Title')); ?></th>
                                    <th style="width: 10%;"><?php echo e(language_data('Status')); ?></th>
                                    <th style="width: 25%;" class="text-right"><?php echo e(language_data('Actions')); ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($tnassessment as $et): ?>
                                    <tr>
                                        <td data-label="Department"><p><?php echo e($et->department_name->department); ?></p></td>
                                        <td data-label="Training Type"><p><?php echo e($et->training_type); ?></p></td>
                                        <td data-label="Training Subject"><p><?php echo e($et->training_subject); ?></p></td>
                                        <td data-label="Title"><p><?php echo e($et->title); ?></p></td>
                                        <td data-label="Status">
                                            <?php if($et->status=='pending'): ?>
                                                <span class="label label-warning"><?php echo e(language_data('Pending')); ?></span>
                                            <?php elseif($et->status=='approved'): ?>
                                                <span class="label label-success"><?php echo e(language_data('Approved')); ?></span>
                                            <?php elseif($et->status=='completed'): ?>
                                                <span class="label label-info"><?php echo e(language_data('Completed')); ?></span>
                                            <?php else: ?>
                                            <span class="label label-danger"><?php echo e(language_data('Rejected')); ?></span>
                                            <?php endif; ?>
                                        </td>
                                        <td data-label="Actions" class="text-right">
                                            <a class="btn btn-success btn-xs" href="<?php echo e(url('training/view-training-needs-assessment/'.$et->id)); ?>"><i class="fa fa-edit"></i> <?php echo e(language_data('Edit')); ?></a>
                                            <a href="#" class="btn btn-danger btn-xs cdelete" id="<?php echo e($et->id); ?>"><i class="fa fa-trash"></i> <?php echo e(language_data('Delete')); ?></a>
                                        </td>
                                    </tr>

                                <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>


            <!-- Modal -->
            <div class="modal fade" id="add-new-training" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel"><?php echo e(language_data('Add')); ?> <?php echo e(language_data('Training Needs Assessment')); ?></h4>
                        </div>
                        <form class="form-some-up" role="form" method="post" action="<?php echo e(url('training/post-new-training-needs-assessment')); ?>">
                            <div class="modal-body">


                                <div class="form-group">
                                    <label><?php echo e(language_data('Department')); ?></label>
                                    <select class="form-control selectpicker" data-live-search="true" name="department">
                                        <?php foreach($department as $e): ?>
                                            <option value="<?php echo e($e->id); ?>"><?php echo e($e->department); ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label><?php echo e(language_data('Training Type')); ?></label>
                                    <select class="form-control selectpicker" data-live-search="true" name="training_type">
                                        <option value="Online Training"><?php echo e(language_data('Online Training')); ?></option>
                                        <option value="Seminar"><?php echo e(language_data('Seminar')); ?></option>
                                        <option value="Lecture"><?php echo e(language_data('Lecture')); ?></option>
                                        <option value="Workshop"><?php echo e(language_data('Workshop')); ?></option>
                                        <option value="Hands On Training"><?php echo e(language_data('Hands On Training')); ?></option>
                                        <option value="Webinar"><?php echo e(language_data('Webinar')); ?></option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Training')); ?> <?php echo e(language_data('Subject')); ?></label>
                                    <select class="form-control selectpicker" data-live-search="true" name="training_subject">
                                        <option value="HR Training"><?php echo e(language_data('HR Training')); ?></option>
                                        <option value="Employees Development"><?php echo e(language_data('Employees Development')); ?></option>
                                        <option value="IT Training"><?php echo e(language_data('IT Training')); ?></option>
                                        <option value="Finance Training"><?php echo e(language_data('Finance Training')); ?></option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Nature Of Training')); ?></label>
                                    <select class="form-control selectpicker" data-live-search="true" name="training_nature">
                                        <option value="Internal"><?php echo e(language_data('Internal')); ?></option>
                                        <option value="External"><?php echo e(language_data('External')); ?></option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Training')); ?> <?php echo e(language_data('Title')); ?></label>
                                    <input type="text" class="form-control" name="training_title" required="">
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Training')); ?> <?php echo e(language_data('Employee')); ?></label>
                                    <select class="form-control selectpicker" multiple data-live-search="true" name="employee[]">
                                        <?php foreach($employee as $e): ?>
                                            <option value="<?php echo e($e->id); ?>"><?php echo e($e->fname); ?> <?php echo e($e->lname); ?> (<?php echo e($e->employee_code); ?>)</option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label><?php echo e(language_data('Training')); ?> <?php echo e(language_data('Reason')); ?></label>
                                    <textarea class="textarea-wysihtml5 form-control" name="training_reason"></textarea>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Preferred')); ?> <?php echo e(language_data('Trainer')); ?></label>
                                    <select class="form-control selectpicker" data-live-search="true" name="trainer">
                                        <?php foreach($trainers as $t): ?>
                                            <option value="<?php echo e($t->id); ?>"><?php echo e($t->first_name); ?> <?php echo e($t->last_name); ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Preferred')); ?>  <?php echo e(language_data('Training Location')); ?></label>
                                    <input type="text" class="form-control" name="training_location">
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Preferred')); ?>  <?php echo e(language_data('Start Date')); ?></label>
                                    <input type="text" class="form-control datePicker" name="training_from">
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Preferred')); ?> <?php echo e(language_data('End Date')); ?></label>
                                    <input type="text" class="form-control datePicker" name="training_to">
                                </div>


                                <div class="form-group">
                                    <label><?php echo e(language_data('Preferred')); ?>  <?php echo e(language_data('Training Cost')); ?></label>
                                    <input type="text" class="form-control" name="training_cost">
                                </div>


                                <div class="form-group">
                                    <label><?php echo e(language_data('Preferred')); ?>  <?php echo e(language_data('Travel Cost')); ?></label>
                                    <input type="text" class="form-control" name="travel_cost">
                                </div>


                                <div class="form-group">
                                    <label><?php echo e(language_data('Status')); ?></label>
                                    <select class="form-control selectpicker" data-live-search="true" name="status">
                                        <option value="pending"><?php echo e(language_data('Pending')); ?></option>
                                        <option value="approved"><?php echo e(language_data('Approved')); ?></option>
                                        <option value="rejected"><?php echo e(language_data('Rejected')); ?></option>
                                        <option value="completed"><?php echo e(language_data('Completed')); ?></option>
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label><?php echo e(language_data('Training')); ?> <?php echo e(language_data('Description')); ?></label>
                                    <textarea class="textarea-wysihtml5 form-control" name="description"></textarea>
                                </div>


                            </div>
                            <div class="modal-footer">
                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo e(language_data('Close')); ?></button>
                                <button type="submit" class="btn btn-primary"><?php echo e(language_data('Add')); ?></button>
                            </div>
                        </form>
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

    <?php echo Html::script("assets/libs/data-table/datatables.min.js"); ?>

    <?php echo Html::script("assets/js/bootbox.min.js"); ?>


    <script>
        $(document).ready(function () {
            /*For DataTable*/
            $('.data-table').DataTable();

            /*For Delete Job Info*/
            $(".cdelete").click(function (e) {
                e.preventDefault();
                var id = this.id;
                bootbox.confirm("Are you sure?", function (result) {
                    if (result) {
                        var _url = $("#_url").val();
                        window.location.href = _url + "/training/delete-training-needs-assessment/" + id;
                    }
                });
            });


        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>