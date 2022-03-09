<?php /*External Style Section*/ ?>
<?php $__env->startSection('style'); ?>
    <?php echo Html::style("assets/libs/data-table/datatables.min.css"); ?>

    <?php echo Html::style("assets/libs/bootstrap3-wysihtml5-bower/bootstrap3-wysihtml5.min.css"); ?>

    <?php echo Html::style("assets/libs/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <section class="wrapper-bottom-sec">
        <div class="p-30">
            <h2 class="page-title"><?php echo e(language_data('Task List')); ?></h2>
        </div>
        <div class="p-30 p-t-none p-b-none">
            <?php echo $__env->make('notification.notify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="row">

                <div class="col-lg-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo e(language_data('Task List')); ?></h3>
                            <button class="btn btn-success btn-sm pull-right" data-toggle="modal" data-target="#add-new-task"><i class="fa fa-plus"></i> <?php echo e(language_data('Add New Task')); ?></button>
                            <br>
                        </div>
                        <div class="panel-body p-none">
                            <table class="table data-table table-hover table-ultra-responsive">
                                <thead>
                                <tr>
                                    <th style="width: 5%;"><?php echo e(language_data('SL')); ?>#</th>
                                    <th style="width: 25%;"><?php echo e(language_data('Task')); ?></th>
                                    <th style="width: 15%;"><?php echo e(language_data('Created Date')); ?></th>
                                    <th style="width: 15%;"><?php echo e(language_data('Due Date')); ?></th>
                                    <th style="width: 15%;"><?php echo e(language_data('Status')); ?></th>
                                    <th style="width: 25%;" class="text-right"><?php echo e(language_data('Actions')); ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($task as $d): ?>
                                    <tr>
                                        <td data-label="SL"><?php echo e($d->id); ?></td>
                                        <td data-label="task"><p><?php echo e($d->task); ?></p></td>
                                        <td data-label="CreatedDate"><p><?php echo e(get_date_format($d->start_date)); ?></p></td>
                                        <td data-label="DueDate"><p><?php echo e(get_date_format($d->due_date)); ?></p></td>
                                        <?php if($d->status=='completed'): ?>
                                            <td data-label="Status"><p class="btn btn-complete btn-xs"><?php echo e(language_data('Completed')); ?></p></td>
                                        <?php elseif($d->status=='pending'): ?>
                                            <td data-label="Status"><p class="btn btn-warning btn-xs"><?php echo e(language_data('Pending')); ?></p></td>
                                        <?php else: ?>
                                            <td data-label="Status"><p class="btn btn-success btn-xs"><?php echo e(language_data('Started')); ?></p></td>
                                        <?php endif; ?>

                                        <td data-label="Actions" class="text-right">
                                            <a class="btn btn-complete btn-xs" href="<?php echo e(url('task/view/'.$d->id)); ?>"><i class="fa fa-eye"></i> <?php echo e(language_data('View')); ?></a>
                                            <a class="btn btn-success btn-xs" href="<?php echo e(url('task/edit/'.$d->id)); ?>"><i class="fa fa-edit"></i> <?php echo e(language_data('Edit')); ?></a>
                                            <a href="#" class="btn btn-danger btn-xs cdelete" id="<?php echo e($d->id); ?>"><i class="fa fa-trash"></i> <?php echo e(language_data('Delete')); ?></a>
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
            <div class="modal fade" id="add-new-task" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel"><?php echo e(language_data('Add New Task')); ?></h4>
                        </div>
                        <form class="form-some-up" role="form" method="post" action="<?php echo e(url('task/post-new-task')); ?>">
                            <div class="modal-body">


                                <div class="form-group">
                                    <label><?php echo e(language_data('Task Title')); ?></label>
                                    <input type="text" class="form-control" required="" name="task_title">
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Assign To')); ?></label>
                                    <select class="form-control selectpicker" multiple data-live-search="true" name="employee[]">
                                        <?php foreach($employee as $e): ?>
                                            <option value="<?php echo e($e->id); ?>"><?php echo e($e->fname); ?> <?php echo e($e->lname); ?> (<?php echo e($e->employee_code); ?>)</option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Start Date')); ?></label>
                                    <input type="text" class="form-control datePicker" name="start_date">
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Due Date')); ?></label>
                                    <input type="text" class="form-control datePicker" name="due_date">
                                </div>


                                <div class="form-group">
                                    <label><?php echo e(language_data('Estimated Hour')); ?></label>
                                    <input type="number" class="form-control" name="estimated_hour">
                                </div>


                                <div class="form-group">
                                    <label><?php echo e(language_data('Progress')); ?></label>
                                    <input type="number" class="form-control" name="progress">
                                </div>



                                <div class="form-group m-none">
                                    <label for="e20"><?php echo e(language_data('Status')); ?></label>
                                    <select name="status" class="form-control selectpicker">
                                        <option value="pending"><?php echo e(language_data('Pending')); ?></option>
                                        <option value="started"><?php echo e(language_data('Started')); ?></option>
                                        <option value="completed"><?php echo e(language_data('Completed')); ?></option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Description')); ?></label>
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
                        window.location.href = _url + "/task/delete-task/" + id;
                    }
                });
            });


        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>