<?php /*External Style Section*/ ?>
<?php $__env->startSection('style'); ?>
    <?php echo Html::style("assets/libs/data-table/datatables.min.css"); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <section class="wrapper-bottom-sec">
        <div class="p-30">
            <h2 class="page-title"><?php echo e(language_data('Employee Summery')); ?></h2>
        </div>
        <div class="p-30 p-t-none p-b-none">

            <?php echo $__env->make('notification.notify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="row">

                <div class="col-lg-4">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo e($employee->fname); ?> <?php echo e($employee->lname); ?> </h3>
                        </div>
                        <div class="panel-body">
                            <div class="thumbnail-user m-b-5">
                                <?php if($employee->avatar!=''): ?>
                                    <img class="p-2 bg-complete"
                                         src="<?php echo asset('assets/employee_pic/' . $employee->avatar); ?>"
                                         alt="Profile Page" width="200px" height="200px">
                                <?php else: ?>
                                    <img class="p-2 bg-complete"
                                         src="<?php echo asset('assets/employee_pic/user.png');?>" alt="Profile Page"
                                         width="200px" height="200px">
                                <?php endif; ?>
                            </div>
                            <div class="form-block">

                                <div class="form-group">
                                    <label><?php echo e(language_data('First Name')); ?>:</label>
                                    <span><?php echo e($employee->fname); ?></span>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Last Name')); ?>:</label>
                                    <span><?php echo e($employee->lname); ?></span>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Employee Code')); ?>:</label>
                                    <span><?php echo e($employee->employee_code); ?></span>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('User name')); ?>:</label>
                                    <span><?php echo e($employee->user_name); ?></span>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Department')); ?>:</label>
                                    <span><?php echo e($employee->department_name->department); ?></span>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Designation')); ?>:</label>
                                    <span><?php echo e($employee->designation_name->designation); ?></span>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Email')); ?>:</label>
                                    <span><?php echo e($employee->email); ?></span>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Father Name')); ?>:</label>
                                    <span><?php echo e($employee->father_name); ?></span>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Mother Name')); ?>:</label>
                                    <span><?php echo e($employee->mother_name); ?></span>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Date of Birth')); ?>:</label>
                                    <span><?php echo e($employee->dob); ?></span>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Date of Join')); ?>:</label>
                                    <span><?php echo e($employee->doj); ?></span>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Phone')); ?>:</label>
                                    <span><?php echo e($employee->phone); ?></span>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Alternative Phone')); ?>:</label>
                                    <span><?php echo e($employee->phone2); ?></span>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Present Address')); ?>:</label>
                                    <span><?php echo e($employee->pre_address); ?></span>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Permanent Address')); ?>:</label>
                                    <span><?php echo e($employee->per_address); ?></span>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Status')); ?>:</label>
                                    <?php if($employee->status=='active'): ?>
                                        <span class="label label-success"><?php echo e($employee->status); ?></span>
                                    <?php else: ?>
                                        <span class="label label-danger"><?php echo e($employee->status); ?></span>
                                    <?php endif; ?>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Gender')); ?>:</label>
                                    <span><?php echo e($employee->gender); ?></span>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Payment Type')); ?>:</label>
                                    <span><?php echo e($employee->payment_type); ?></span>
                                </div>


                                <?php if($employee->payment_type=='Monthly'): ?>

                                    <div class="form-group">
                                        <label><?php echo e(language_data('Basic Salary')); ?>:</label>
                                        <span><?php echo e(app_config('Currency')); ?> <?php echo e($employee->basic_salary+$employee->basic_salary_increment); ?></span>
                                    </div>

                                    <div class="form-group">
                                        <label><?php echo e(language_data('Overtime Salary')); ?>:</label>
                                        <span><?php echo e(app_config('Currency')); ?> <?php echo e($employee->overtime_salary+$employee->overtime_salary_increment); ?></span>
                                        <span class="help"><?php echo e(language_data('Hourly')); ?></span>
                                    </div>

                                <?php else: ?>

                                    <div class="form-group">
                                        <label><?php echo e(language_data('Working Hourly Rate')); ?>:</label>
                                        <span><?php echo e(app_config('Currency')); ?> <?php echo e($employee->working_hourly_rate+$employee->working_hourly_increment_rate); ?></span>
                                    </div>

                                    <div class="form-group">
                                        <label><?php echo e(language_data('Overtime Hourly Rate')); ?>:</label>
                                        <span><?php echo e(app_config('Currency')); ?> <?php echo e($employee->overtime_hourly_rate+$employee->overtime_hourly_increment_rate); ?></span>
                                    </div>

                                <?php endif; ?>


                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">

                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo e(language_data('Leave')); ?></h3>
                        </div>
                        <div class="panel-body">
                            <table class="table data-table table-hover table-ultra-responsive">
                                <thead>
                                <tr>
                                    <th style="width: 10%;"><?php echo e(language_data('SL')); ?>#</th>
                                    <th style="width: 30%;"><?php echo e(language_data('Leave Type')); ?></th>
                                    <th style="width: 20%;"><?php echo e(language_data('Leave From')); ?></th>
                                    <th style="width: 20%;"><?php echo e(language_data('Leave To')); ?></th>
                                    <th style="width: 20%;"><?php echo e(language_data('Status')); ?></th>
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
                                    </tr>

                                <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo e(language_data('Provident Fund')); ?></h3>
                        </div>
                        <div class="panel-body">
                            <table class="table data-table table-hover table-ultra-responsive">
                                <thead>
                                <tr>
                                    <th style="width: 40%;"><?php echo e(language_data('Provident Fund Type')); ?></th>
                                    <th style="width: 20%;"><?php echo e(language_data('Employee Share')); ?></th>
                                    <th style="width: 20%;"><?php echo e(language_data('Organization Share')); ?></th>
                                    <th style="width: 20%;"><?php echo e(language_data('Status')); ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($provident_fund as $pf): ?>
                                    <tr>

                                        <td data-label="Fund Type"><p><?php echo e($pf->provident_fund_type); ?></p></td>
                                        <td data-label="Employee Share">
                                            <p>
                                                <?php if($pf->provident_fund_type=='Fixed Amount'): ?>
                                                    <?php echo e(app_config('CurrencyCode')); ?> <?php echo e($pf->employee_share); ?>

                                                <?php else: ?>
                                                    <?php echo e($pf->employee_share); ?> %
                                                <?php endif; ?>
                                            </p>
                                        </td>
                                        <td data-label="Organization Share">
                                            <p>
                                                <?php if($pf->provident_fund_type=='Fixed Amount'): ?>
                                                    <?php echo e(app_config('CurrencyCode')); ?> <?php echo e($pf->organization_share); ?>

                                                <?php else: ?>
                                                    <?php echo e($pf->organization_share); ?> %
                                                <?php endif; ?>
                                            </p>
                                        </td>
                                        <?php if($pf->status=='Paid'): ?>
                                            <td data-label="Status"><p class="btn btn-success btn-xs"><?php echo e(language_data('Paid')); ?></p></td>
                                        <?php else: ?>
                                            <td data-label="Status"><p class="btn btn-warning btn-xs"><?php echo e(language_data('Unpaid')); ?></p></td>
                                        <?php endif; ?>
                                    </tr>

                                <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo e(language_data('Loan')); ?></h3>
                        </div>
                        <div class="panel-body">
                            <table class="table data-table table-hover table-ultra-responsive">
                                <thead>
                                <tr>
                                    <th style="width: 25%;"><?php echo e(language_data('Title')); ?></th>
                                    <th style="width: 15%;"><?php echo e(language_data('Loan')); ?> <?php echo e(language_data('Date')); ?></th>
                                    <th style="width: 15%;"><?php echo e(language_data('Repayment Start Date')); ?></th>
                                    <th style="width: 15%;"><?php echo e(language_data('Amount')); ?></th>
                                    <th style="width: 15%;"><?php echo e(language_data('Remaining Amount')); ?></th>
                                    <th style="width: 15%;"><?php echo e(language_data('Status')); ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($loan as $l): ?>
                                    <tr>
                                        <td data-label=Title"><?php echo e($l->title); ?></td>
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
                                    </tr>

                                <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo e(language_data('Award')); ?></h3>
                        </div>
                        <div class="panel-body">
                            <table class="table data-table table-hover table-ultra-responsive">
                                <thead>
                                <tr>
                                    <th style="width: 15%;"><?php echo e(language_data('SL')); ?>#</th>
                                    <th style="width: 30%;"><?php echo e(language_data('Award Name')); ?></th>
                                    <th style="width: 30%;"><?php echo e(language_data('Gift')); ?></th>
                                    <th style="width: 25%;"><?php echo e(language_data('Month')); ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($award as $d): ?>
                                    <tr>
                                        <td data-label="SL"><?php echo e($d->id); ?></td>
                                        <td data-label="Award"><p><?php echo e($d->award_name->award); ?></p></td>
                                        <td data-label="gift"><p><?php echo e($d->gift); ?></p></td>
                                        <td data-label="month"><p><?php echo e($d->month); ?> <?php echo e($d->year); ?> </p></td>
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

    <?php echo Html::script("assets/js/form-elements-page.js"); ?>

    <?php echo Html::script("assets/libs/data-table/datatables.min.js"); ?>

    <?php echo Html::script("assets/js/bootbox.min.js"); ?>

    <script>
        $(document).ready(function () {
            $('.data-table').DataTable();
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>