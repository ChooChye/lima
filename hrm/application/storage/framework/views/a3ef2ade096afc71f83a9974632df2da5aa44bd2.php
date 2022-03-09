<?php /*External Style Section*/ ?>
<?php $__env->startSection('style'); ?>
    <?php echo Html::style("assets/libs/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"); ?>

    <?php echo Html::style("assets/libs/data-table/datatables.min.css"); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <section class="wrapper-bottom-sec">
        <div class="p-30">
            <h2 class="page-title"><?php echo e(language_data('Leave Application')); ?></h2>
        </div>
        <div class="p-30 p-t-none p-b-none">
            <?php echo $__env->make('notification.notify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="row">

                <div class="col-lg-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo e(language_data('Leave Application')); ?></h3>
                            <button class="btn btn-success btn-sm pull-right" data-toggle="modal" data-target="#new-leave"><i class="fa fa-plus"></i> <?php echo e(language_data('New Leave')); ?>

                            </button>
                            <br>
                        </div>
                        <div class="panel-body p-none">
                            <table class="table data-table table-hover table-ultra-responsive">
                                <thead>
                                <tr>
                                    <th style="width: 5%;"><?php echo e(language_data('SL')); ?>#</th>
                                    <th style="width: 10%;"><?php echo e(language_data('Employee Code')); ?></th>
                                    <th style="width: 20%;"><?php echo e(language_data('Leave Type')); ?></th>
                                    <th style="width: 15%;"><?php echo e(language_data('Leave From')); ?></th>
                                    <th style="width: 15%;"><?php echo e(language_data('Leave To')); ?></th>
                                    <th style="width: 15%;"><?php echo e(language_data('Status')); ?></th>
                                    <th style="width: 20%;"><?php echo e(language_data('Actions')); ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($leave as $d): ?>
                                    <tr>
                                        <td data-label="SL"><?php echo e($d->id); ?></td>
                                        <td data-label="emoployeCode"><p><a href="<?php echo e(url('employees/view/'.$d->employee_id->id)); ?>"> <?php echo e($d->employee_id->employee_code); ?></a></p></td>
                                        <td data-label="leaveType"><p><?php echo e($d->leave_type->leave); ?></p></td>
                                        <td data-label="LeaveFrom"><p><?php echo e(get_date_format($d->leave_from)); ?></p></td>
                                        <td data-label="LeaveTo"><p><?php echo e(get_date_format($d->leave_to)); ?></p></td>
                                        <?php if($d->status=='approved'): ?>
                                            <td data-label="Status"><p class="btn btn-success btn-xs"><?php echo e(language_data('Approved')); ?></p></td>
                                        <?php elseif($d->status=='pending'): ?>
                                            <td data-label="Status"><p class="btn btn-warning btn-xs"><?php echo e(language_data('Pending')); ?></p></td>
                                        <?php else: ?>
                                            <td data-label="Status"><p class="btn btn-danger btn-xs"><?php echo e(language_data('Rejected')); ?></p></td>
                                        <?php endif; ?>

                                        <td data-label="Actions">
                                            <a class="btn btn-success btn-xs" href="<?php echo e(url('leave/edit/'.$d->id)); ?>"><i class="fa fa-eye"></i> <?php echo e(language_data('View')); ?></a>
                                            <a href="#" class="btn btn-danger btn-xs cdelete" id="<?php echo e($d->id); ?>"><i class="fa fa-trash"></i> <?php echo e(language_data('Delete')); ?></a>
                                        </td>
                                    </tr>

                                <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>


                        <!-- Modal -->
                        <div class="modal fade" id="new-leave" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel"><?php echo e(language_data('Add')); ?> <?php echo e(language_data('New Leave')); ?></h4>
                                    </div>
                                    <form class="form-some-up" role="form" method="post" action="<?php echo e(url('leave/post-new-leave')); ?>">

                                        <div class="modal-body">

                                            <div class="form-group">
                                                <label><?php echo e(language_data('Employee')); ?></label>
                                                <select name="employee" class="form-control selectpicker" data-live-search="true">
                                                    <?php foreach($employee as $e): ?>
                                                        <option value="<?php echo e($e->id); ?>"><?php echo e($e->fname); ?> <?php echo e($e->lname); ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>


                                            <div class="form-group">
                                                <label><?php echo e(language_data('Leave Type')); ?></label>
                                                <select name="leave_type" id="e20" class="form-control selectpicker" data-live-search="true">
                                                    <?php foreach($leave_type as $lt): ?>
                                                        <option value="<?php echo e($lt->id); ?>"><?php echo e($lt->leave); ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>


                                            <div class="form-group">
                                                <label><?php echo e(language_data('Leave From')); ?></label>
                                                <input type="text" class="form-control datePicker" name="leave_from" required="">
                                            </div>

                                            <div class="form-group">
                                                <label><?php echo e(language_data('Leave To')); ?></label>
                                                <input type="text" class="form-control datePicker" name="leave_to" required="">
                                            </div>

                                            <div class="form-group">
                                                <label><?php echo e(language_data('Status')); ?></label>
                                                <select class="selectpicker form-control" name="status">
                                                    <option value="approved"><?php echo e(language_data('Approved')); ?></option>
                                                    <option value="pending"><?php echo e(language_data('Pending')); ?></option>
                                                    <option value="rejected"><?php echo e(language_data('Rejected')); ?></option>
                                                </select>
                                            </div>


                                            <div class="form-group">
                                                <label><?php echo e(language_data('Leave Reason')); ?></label>
                                                <textarea class="form-control" rows="5" name="leave_reason"></textarea>
                                            </div>


                                        </div>
                                        <div class="modal-footer">
                                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                            <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo e(language_data('Close')); ?></button>
                                            <button type="submit" class="btn btn-primary"><?php echo e(language_data('Send')); ?></button>
                                        </div>
                                    </form>
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
    <?php echo Html::script("assets/libs/handlebars/handlebars.runtime.min.js"); ?>

    <?php echo Html::script("assets/libs/moment/moment.min.js"); ?>

    <?php echo Html::script("assets/libs/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"); ?>

    <?php echo Html::script("assets/libs/data-table/datatables.min.js"); ?>

    <?php echo Html::script("assets/js/form-elements-page.js"); ?>

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
                        window.location.href = _url + "/leave/delete-leave-application/" + id;
                    }
                });
            });


        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>