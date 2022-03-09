<?php /*External Style Section*/ ?>
<?php $__env->startSection('style'); ?>
    <?php echo Html::style("assets/libs/bootstrap3-wysihtml5-bower/bootstrap3-wysihtml5.min.css"); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <section class="wrapper-bottom-sec">
        <div class="p-30">
            <h2 class="page-title"><?php echo e(language_data('Manage Task')); ?></h2>
        </div>
        <div class="p-30 p-t-none p-b-none">

            <?php echo $__env->make('notification.notify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="row">

                <div class="col-lg-4">
                    <div class="panel">
                        <div class="panel-body">

                            <div class="panel-heading">
                                <h3 class="panel-title"><?php echo e(language_data('Task Basic Info')); ?></h3>
                            </div>
                            <form class="" role="form" action="<?php echo e(url('task/task-basic-info-post')); ?>" method="post">

                                <div class="form-group">
                                    <label><?php echo e(language_data('Start Date')); ?></label>
                                    <input type="text" class="form-control" readonly value="<?php echo e($task->start_date); ?>">
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Due Date')); ?></label>
                                    <input type="text" class="form-control" readonly value="<?php echo e($task->due_date); ?>">
                                </div>


                                <div class="form-group">
                                    <label><?php echo e(language_data('Estimated Hour')); ?></label>
                                    <input type="number" class="form-control" readonly
                                           value="<?php echo e($task->estimated_hour); ?>">
                                </div>


                                <div class="form-group">
                                    <label><?php echo e(language_data('Progress')); ?></label>
                                    <input type="number" class="form-control" name="progress"
                                           value="<?php echo e($task->progress); ?>">
                                </div>


                                <div class="form-group m-none">
                                    <label for="e20"><?php echo e(language_data('Status')); ?></label>
                                    <select name="status" class="form-control selectpicker">
                                        <option value="pending" <?php if($task->status=='pending'): ?> selected <?php endif; ?>><?php echo e(language_data('Pending')); ?></option>
                                        <option value="started" <?php if($task->status=='started'): ?> selected <?php endif; ?>><?php echo e(language_data('Started')); ?></option>
                                        <option value="completed"  <?php if($task->status=='completed'): ?> selected <?php endif; ?>><?php echo e(language_data('Completed')); ?></option>
                                    </select>
                                </div>
                                <br>
                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                <input type="hidden" value="<?php echo e($task->id); ?>" name="cmd">
                                <button type="submit" class="btn btn-success btn-sm pull-right"><i class="fa fa-edit"></i> <?php echo e(language_data('Update')); ?></button>

                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">

                    <div class="panel">

                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo e(language_data('Task Management')); ?></h3>
                        </div>

                        <div class="p-30 p-t-none p-b-none">
                            <div class="row">
                                <div class="col-lg-12">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#task_details" aria-controls="home" role="tab" data-toggle="tab"><?php echo e(language_data('Task Details')); ?></a></li>
                                        <li role="presentation"><a href="#task_discussion" aria-controls="profile" role="tab" data-toggle="tab"><?php echo e(language_data('Task Discussion')); ?></a></li>
                                        <li role="presentation"><a href="#task_files" aria-controls="messages" role="tab" data-toggle="tab"><?php echo e(language_data('Task Files')); ?></a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content p-20">


                                        <?php /*Personal Details*/ ?>

                                        <div role="tabpanel" class="tab-pane active" id="task_details">

                                            <div class="form-group">
                                                <label><?php echo e(language_data('Task Title')); ?></label>
                                                <p> <?php echo e($task->task); ?></p>
                                            </div>

                                            <div class="form-group">
                                                <label><?php echo e(language_data('Task Description')); ?></label>
                                                <p><?php echo $task->description; ?></p>
                                            </div>


                                            <h3><?php echo e(language_data('Task Members')); ?>:</h3>
                                            <hr>
                                            <?php foreach($task_employee as $te): ?>
                                                <a href="<?php echo e(url('employees/view/'.$te->emp_id)); ?>" class="label label-success"><?php echo e($te->emp_name); ?></a><br>
                                            <?php endforeach; ?>
                                        </div>


                                        <div role="tabpanel" class="tab-pane" id="task_discussion">
                                            <form role="form" method="post" action="<?php echo e(url('task/post-task-comments')); ?>">

                                                <div class="row">
                                                    <div class="form-group">
                                                        <label><?php echo e(language_data('Leave Comment')); ?></label>
                                                        <textarea class="textarea-wysihtml5 form-control" rows="7" name="comment"></textarea>
                                                    </div>


                                                    <div class="col-md-12">
                                                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                                        <input type="hidden" value="<?php echo e($task->id); ?>" name="cmd">
                                                        <input type="submit" value="<?php echo e(language_data('Reply')); ?>" class="btn btn-success pull-right">

                                                    </div>
                                                </div>

                                            </form>
                                            <br>
                                            <hr>

                                            <table class="table table-hover">
                                                <thead>
                                                <tr>
                                                    <th style="width: 25%;"><?php echo e(language_data('Member')); ?></th>
                                                    <th style="width: 55%;"><?php echo e(language_data('Comment')); ?></th>
                                                    <th style="width: 20%;"><?php echo e(language_data('Last Update')); ?></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php foreach($task_comment as $tc): ?>
                                                <tr>
                                                    <td data-label="Member"><p><?php echo e($tc->employee_name->fname); ?>


                                                            <?php /*<span class="label label-success"> <?php echo e($tc->employee_name->role); ?></span>*/ ?>

                                                        </p></td>
                                                    <td data-label="Comment"><p><?php echo e($tc->comment); ?></p></td>
                                                    <td data-label="Last Update"><p><?php echo e(get_date_format($tc->updated_at)); ?></p></td>
                                                </tr>
                                                <?php endforeach; ?>
                                                </tbody>
                                            </table>

                                        </div>

                                        <div role="tabpanel" class="tab-pane" id="task_files">
                                            <form role="form" method="post" action="<?php echo e(url('task/post-task-files')); ?>" enctype="multipart/form-data">

                                                <div class="row">
                                                    <div class="form-group">
                                                        <label><?php echo e(language_data('File Title')); ?></label>
                                                        <input type="text" name="file_title" class="form-control">
                                                    </div>

                                                    <div class="form-group">

                                                        <label><?php echo e(language_data('Select File')); ?></label>
                                                        <div class="input-group input-group-file">
                                                            <span class="input-group-btn">
                                                                <span class="btn btn-primary btn-file">
                                                                    <?php echo e(language_data('Browse')); ?> <input type="file" class="form-control" name="file">
                                                                </span>
                                                            </span>
                                                            <input type="text" class="form-control" readonly="">
                                                        </div>
                                                    </div>


                                                    <div class="col-md-12">
                                                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                                        <input type="hidden" value="<?php echo e($task->id); ?>" name="cmd">
                                                        <input type="submit" value="<?php echo e(language_data('Upload')); ?>" class="btn btn-success pull-right">

                                                    </div>
                                                </div>

                                            </form>
                                            <br>
                                            <hr>

                                            <table class="table table-hover">
                                                <thead>
                                                <tr>
                                                    <th style="width: 20%;"><?php echo e(language_data('Files')); ?></th>
                                                    <th style="width: 20%;"><?php echo e(language_data('Size')); ?></th>
                                                    <th style="width: 20%;"><?php echo e(language_data('Date')); ?></th>
                                                    <th style="width: 20%;"><?php echo e(language_data('Upload By')); ?></th>
                                                    <th style="width: 20%;"><?php echo e(language_data('Actions')); ?></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php foreach($task_files as $tf): ?>
                                                    <tr>
                                                        <td data-label="Files"><p><?php echo e($tf->file_title); ?></p></td>
                                                        <td data-label="Size"><p><?php echo e(round($tf->file_size/1000,2)); ?> KB</p></td>
                                                        <td data-label="Size"><p><?php echo e(get_date_format($tf->updated_at)); ?></p></td>
                                                        <td data-label="Member"><p><?php echo e($tf->employee_name->fname); ?>


                                                                <?php /*<span class="label label-success"> <?php echo e($tf->employee_name->role); ?></span>*/ ?>

                                                            </p></td>
                                                        <td data-label="actions">
                                                            <a href="<?php echo e(url('task/download-file/'.$tf->id)); ?>" class="btn btn-success btn-xs"><i class="fa fa-download"></i> </a>
                                                            <a href="#" class="btn btn-danger btn-xs tFileDelete" id="<?php echo e($tf->id); ?>"><i class="fa fa-trash"></i></a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                                </tbody>
                                            </table>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php /*External Style Section*/ ?>
<?php $__env->startSection('script'); ?>
    <?php echo Html::script("assets/libs/wysihtml5x/wysihtml5x-toolbar.min.js"); ?>

    <?php echo Html::script("assets/libs/handlebars/handlebars.runtime.min.js"); ?>

    <?php echo Html::script("assets/libs/bootstrap3-wysihtml5-bower/bootstrap3-wysihtml5.min.js"); ?>

    <?php echo Html::script("assets/js/form-elements-page.js"); ?>

    <?php echo Html::script("assets/js/bootbox.min.js"); ?>


    <script>
        $(document).ready(function () {

            /*For Delete Application Info*/
            $(".tFileDelete").click(function (e) {
                e.preventDefault();
                var id = this.id;
                bootbox.confirm("Are you sure?", function (result) {
                    if (result) {
                        var _url = $("#_url").val();
                        window.location.href = _url + "/task/delete-task-file/" + id;
                    }
                });
            });


        });
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>