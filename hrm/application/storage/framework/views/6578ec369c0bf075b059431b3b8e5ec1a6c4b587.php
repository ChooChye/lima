<?php /*External Style Section*/ ?>
<?php $__env->startSection('style'); ?>
    <?php echo Html::style("assets/libs/bootstrap3-wysihtml5-bower/bootstrap3-wysihtml5.min.css"); ?>

    <?php echo Html::style("assets/libs/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"); ?>

    <?php echo Html::style("assets/libs/data-table/datatables.min.css"); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <section class="wrapper-bottom-sec">
        <div class="p-30">
            <h2 class="page-title"><?php echo e(language_data('Loan')); ?></h2>
        </div>
        <div class="p-30 p-t-none p-b-none">
            <?php echo $__env->make('notification.notify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="row">

                <div class="col-lg-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo e(language_data('Loan')); ?></h3>
                            <button class="btn btn-success btn-sm pull-right" data-toggle="modal" data-target="#add-load"><i class="fa fa-plus"></i> <?php echo e(language_data('Add')); ?> <?php echo e(language_data('Loan')); ?></button>
                            <br>
                        </div>
                        <div class="panel-body p-none">
                            <table class="table data-table table-hover table-ultra-responsive">
                                <thead>
                                <tr>
                                    <th style="width: 15%;"><?php echo e(language_data('Title')); ?></th>
                                    <th style="width: 15%;"><?php echo e(language_data('Employee Name')); ?></th>
                                    <th style="width: 10%;"><?php echo e(language_data('Loan')); ?> <?php echo e(language_data('Date')); ?></th>
                                    <th style="width: 10%;"><?php echo e(language_data('Repayment Start Date')); ?></th>
                                    <th style="width: 10%;"><?php echo e(language_data('Amount')); ?></th>
                                    <th style="width: 10%;"><?php echo e(language_data('Remaining Amount')); ?></th>
                                    <th style="width: 10%;"><?php echo e(language_data('Status')); ?></th>
                                    <th style="width: 20%;"><?php echo e(language_data('Actions')); ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($loan as $l): ?>
                                <tr>
                                    <td data-label=Title"><?php echo e($l->title); ?></td>
                                    <td data-label="Employee Name"><a href="<?php echo e(url('employees/view/'.$l->emp_id)); ?>"><?php echo e($l->employee_info->fname); ?> <?php echo e($l->employee_info->lname); ?></a> </td>
                                    <td data-label="Loan Date"><p><?php echo e(get_date_format($l->loan_date)); ?></p></td>
                                    <td data-label="Repayment Start Date"><?php echo e(get_date_format($l->repayment_start_date)); ?></td>
                                    <td data-label="Amount"><?php echo e(app_config('CurrencyCode')); ?> <?php echo e($l->amount); ?></td>
                                    <td data-label="Remaining Amount"><?php echo e(app_config('CurrencyCode')); ?> <?php echo e($l->remaining_amount); ?></td>
                                    <?php if($l->status=='ongoing'): ?>
                                    <td data-label="Status"><p class="btn btn-success btn-xs"><?php echo e(language_data('Ongoing')); ?></p></td>
                                    <?php elseif($l->status=='pending'): ?>
                                    <td data-label="Status"><p class="btn btn-warning btn-xs"><?php echo e(language_data('Pending')); ?></p></td>
                                    <?php elseif($l->status=='rejected'): ?>
                                    <td data-label="Status"><p class="btn btn-danger btn-xs"><?php echo e(language_data('Rejected')); ?></p></td>
                                    <?php else: ?>
                                    <td data-label="Status"><p class="btn btn-complete btn-xs"><?php echo e(language_data('Completed')); ?></p></td>
                                    <?php endif; ?>
                                    <td data-label="Actions">
                                        <a class="btn btn-success btn-xs" href="<?php echo e(url('loan/view-details/'.$l->id)); ?>" ><i class="fa fa-edit"></i> <?php echo e(language_data('Edit')); ?></a>
                                        <a href="#" class="btn btn-danger btn-xs cdelete" id="<?php echo e($l->id); ?>"><i class="fa fa-trash"></i> <?php echo e(language_data('Delete')); ?></a>
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
            <div class="modal fade" id="add-load" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel"><?php echo e(language_data('Add')); ?> <?php echo e(language_data('Loan')); ?></h4>
                        </div>
                        <form class="form-some-up" role="form" method="post" action="<?php echo e(url('loan/post-new-loan')); ?>">
                            <div class="modal-body">

                                <div class="form-group">
                                    <label><?php echo e(language_data('Employee Name')); ?></label>
                                    <select name="emp_name" class="form-control selectpicker" data-live-search="true">
                                        <?php foreach($employee as $e): ?>
                                            <option value="<?php echo e($e->id); ?>"><?php echo e($e->fname); ?> <?php echo e($e->lname); ?> (<?php echo e($e->employee_code); ?>)</option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>



                                <div class="form-group">
                                    <label for="fname"><?php echo e(language_data('Title')); ?></label>
                                    <input type="text" class="form-control" name="title" required="">
                                </div>

                                <div class="form-group">
                                    <label for="fname"><?php echo e(language_data('Loan')); ?> <?php echo e(language_data('Date')); ?></label>
                                    <input type="text" class="form-control datePicker" name="loan_date" required="">
                                </div>

                                <div class="form-group">
                                    <label for="fname"><?php echo e(language_data('Loan')); ?> <?php echo e(language_data('Amount')); ?></label>
                                    <input type="number" class="form-control" name="loan_amount" required="">
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Include Loan Amount in Payslip')); ?></label>
                                    <div class="form-group">
                                        <div class="coder-radiobox radio-inline">
                                            <input type="radio" name="payslip" value="yes" checked><span class="co-radio-ui"></span><label>Yes</label>
                                        </div>

                                        <div class="coder-radiobox radio-inline">
                                            <input type="radio" name="payslip" value="no"><span class="co-radio-ui"></span><label>No</label>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="fname"><?php echo e(language_data('Monthly Repayment Amount')); ?></label>
                                    <input type="number" class="form-control" name="repayment_amount" required="">
                                </div>


                                <div class="form-group">
                                    <label for="fname"><?php echo e(language_data('Repayment Start Date')); ?></label>
                                    <input type="text" class="form-control datePicker" name="repayment_start_date" required="">
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Status')); ?></label>
                                    <select name="status" class="form-control selectpicker">
                                        <option value="pending"><?php echo e(language_data('Pending')); ?></option>
                                        <option value="ongoing"><?php echo e(language_data('Ongoing')); ?></option>
                                        <option value="completed"><?php echo e(language_data('Completed')); ?></option>
                                        <option value="rejected"><?php echo e(language_data('Rejected')); ?></option>
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label><?php echo e(language_data('Description')); ?></label>
                                    <textarea class="form-control textarea-wysihtml5" name="description"></textarea>
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

    <?php echo Html::script("assets/libs/handlebars/handlebars.runtime.min.js"); ?>

    <?php echo Html::script("assets/libs/wysihtml5x/wysihtml5x-toolbar.min.js"); ?>

    <?php echo Html::script("assets/libs/bootstrap3-wysihtml5-bower/bootstrap3-wysihtml5.min.js"); ?>

    <?php echo Html::script("assets/libs/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"); ?>

    <?php echo Html::script("assets/js/form-elements-page.js"); ?>

    <?php echo Html::script("assets/libs/data-table/datatables.min.js"); ?>

    <?php echo Html::script("assets/js/bootbox.min.js"); ?>


    <script>
        $(document).ready(function(){
            $('.data-table').DataTable();

            /*For Delete Designation*/
            $(".cdelete").click(function (e) {
                e.preventDefault();
                var id = this.id;
                bootbox.confirm("Are you sure?", function (result) {
                    if (result) {
                        var _url = $("#_url").val();
                        window.location.href = _url + "/loan/delete/" + id;
                    }
                });
            });

        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>