<?php /*External Style Section*/ ?>
<?php $__env->startSection('style'); ?>
    <?php echo Html::style("assets/libs/data-table/datatables.min.css"); ?>

    <?php echo Html::style("assets/libs/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <section class="wrapper-bottom-sec">
        <div class="p-30">
            <h2 class="page-title"><?php echo e(language_data('Payslip')); ?></h2>
        </div>
        <div class="p-30 p-t-none p-b-none">
            <?php echo $__env->make('notification.notify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="row">

                <div class="col-lg-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo e(language_data('Search Condition')); ?></h3>
                        </div>
                        <div class="panel-body">
                            <form class="" role="form" method="post" action="<?php echo e(url('payroll/payslip/post-custom-search')); ?>">

                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="el2"><?php echo e(language_data('Date')); ?></label>
                                            <input type="text" id="el2" class="form-control monthPicker" required="" name="date" value="<?php echo e($date); ?>">
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="el3"><?php echo e(language_data('Employee')); ?></label>
                                            <select class="selectpicker form-control" data-live-search="true" name="employee">
                                                <option value="0">Select Employee</option>
                                                <?php foreach($employee as $d): ?>
                                                    <option value="<?php echo e($d->id); ?>" <?php if($d->id==$emp_id): ?> selected <?php endif; ?>><?php echo e($d->fname); ?> <?php echo e($d->lname); ?> (<?php echo e($d->employee_code); ?>)</option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="el3"><?php echo e(language_data('Department')); ?></label>
                                            <select class="selectpicker form-control" data-live-search="true" name="department" id="department_id">
                                                <option value="0"><?php echo e(language_data('Select Department')); ?></option>
                                                <?php foreach($department as $d): ?>
                                                <option value="<?php echo e($d->id); ?>" <?php if($dep_id==$d->id): ?> selected <?php endif; ?>> <?php echo e($d->department); ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="el3"><?php echo e(language_data('Designation')); ?></label>
                                            <select class="selectpicker form-control" data-live-search="true" disabled name="designation" id="designation">
                                                <option value="0"><?php echo e(language_data('Select Designation')); ?></option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                <button type="submit" class="btn btn-success pull-right"><i class="fa fa-search"></i> <?php echo e(language_data('Search')); ?></button>

                            </form>
                        </div>
                    </div>
                </div>

            </div>


                <div class="row">

                <div class="col-lg-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo e(language_data('All Payments')); ?></h3>
                        </div>
                        <div class="panel-body p-none">
                            <table class="table data-table table-hover table-ultra-responsive">
                                <thead>
                                <tr>
                                    <th style="width: 15%;"><?php echo e(language_data('Code')); ?></th>
                                    <th style="width: 25%;"><?php echo e(language_data('Name')); ?></th>
                                    <th style="width: 30%;"><?php echo e(language_data('Payment Type')); ?></th>
                                    <th style="width: 15%;"><?php echo e(language_data('Payment Amount')); ?></th>
                                    <th style="width: 15%;" class="text-right"><?php echo e(language_data('Actions')); ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($payroll as $d): ?>
                                    <tr>
                                        <td><?php echo e($d->employee_info->employee_code); ?></td>
                                        <td><?php echo e($d->employee_info->fname); ?> <?php echo e($d->employee_info->lname); ?></td>
                                        <td> <?php echo e($d->employee_info->payment_type); ?></td>
                                        <td><?php echo e(app_config('Currency')); ?> <?php echo e($d->total_salary); ?></td>
                                        <td class="text-right">
                                            <a href="<?php echo e(url('payroll/view-details/'.$d->id)); ?>" class="btn btn-complete btn-xs"><i class="fa fa-eye"></i> <?php echo e(language_data('Details')); ?></a>

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
    </section>

<?php $__env->stopSection(); ?>

<?php /*External Style Section*/ ?>
<?php $__env->startSection('script'); ?>
    <?php echo Html::script("assets/libs/handlebars/handlebars.runtime.min.js"); ?>

    <?php echo Html::script("assets/libs/moment/moment.min.js"); ?>

    <?php echo Html::script("assets/libs/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"); ?>

    <?php echo Html::script("assets/js/form-elements-page.js"); ?>

    <?php echo Html::script("assets/libs/data-table/datatables.min.js"); ?>

    <?php echo Html::script("assets/js/bootbox.min.js"); ?>

    <script>
        $(document).ready(function () {

            /*For DataTable*/
            $('.data-table').DataTable();

            /*For Designation Loading*/
            $("#department_id").change(function () {
                var id = $(this).val();
                var _url = $("#_url").val();
                var dataString = 'dep_id=' + id;
                $.ajax
                ({
                    type: "POST",
                    url: _url + '/payroll/get-designation',
                    data: dataString,
                    cache: false,
                    success: function ( data ) {
                        $("#designation").html( data).removeAttr('disabled').selectpicker('refresh');
                    }
                });
            });


            /*For Delete Payslip*/

            /*For Delete Job Info*/
            $(".makePayment").click(function (e) {
                e.preventDefault();
                var id = this.id;
                var paymentDate=$('#payment_date').val();
                bootbox.confirm("Are you sure?", function (result) {
                    if (result) {
                        var _url = $("#_url").val();
                        window.location.href = _url + "/payroll/pay-payment/" + id +"/"+paymentDate;
                    }
                });
            });

        });
    </script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>