<?php /*External Style Section*/ ?>
<?php $__env->startSection('style'); ?>
    <?php echo Html::style("assets/libs/data-table/datatables.min.css"); ?>

    <?php echo Html::style("assets/libs/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"); ?>

    <?php echo Html::style("assets/libs/bootstrap3-wysihtml5-bower/bootstrap3-wysihtml5.min.css"); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <section class="wrapper-bottom-sec">
        <div class="p-30">
            <h2 class="page-title"><?php echo e(language_data('Leave Application')); ?></h2>
        </div>
        <div class="p-30 p-t-none p-b-none">
            <?php echo $__env->make('notification.notify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="row">

                <div class="col-lg-3">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo e(language_data('All Leave Details')); ?></h3>
                        </div>
                        <div class="panel-body p-none">
                            <table class="table table-hover">
                                <?php foreach($leave_type as $lt): ?>
                                <tr>
                                    <td><?php echo e($lt->leave); ?></td>
                                    <td><?php echo e($lt->leave_quota); ?></td>
                                </tr>
                                <?php endforeach; ?>
                                <tr>
                                    <td><?php echo e(language_data('Total Leave')); ?></td>
                                    <td><?php echo e($total_leave); ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
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
                                    <th style="width: 20%;"><?php echo e(language_data('Leave Type')); ?></th>
                                    <th style="width: 15%;"><?php echo e(language_data('Leave From')); ?></th>
                                    <th style="width: 15%;"><?php echo e(language_data('Leave To')); ?></th>
                                    <th style="width: 15%;"><?php echo e(language_data('Status')); ?></th>
                                    <th style="width: 30%;"><?php echo e(language_data('Remark')); ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($leave as $d): ?>
                                    <tr>
                                        <td data-label="SL"><?php echo e($d->id); ?></td>
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

                                        <td data-label="remark">
                                            <?php echo e($d->remark); ?>

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
            <div class="modal fade" id="new-leave" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel"><?php echo e(language_data('Request For New Leave')); ?></h4>
                        </div>
                        <form class="form-some-up" role="form" method="post" action="<?php echo e(url('employee/leave/post-new-leave')); ?>">

                            <div class="modal-body">

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
                                    <label><?php echo e(language_data('Leave Reason')); ?></label>
                                    <textarea class="textarea-wysihtml5 form-control" name="leave_reason"></textarea>
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


    <script>
        $(document).ready(function () {
            /*For DataTable*/
            $('.data-table').DataTable();
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('employee', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>