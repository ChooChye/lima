<?php $__env->startSection('content'); ?>

<section class="wrapper-bottom-sec">
			<div class="p-30">
				<div class="row">
					<div class="col-sm-8">
						<h2 class="page-title p-b-15"><?php echo e(language_data('Payment Salary Details')); ?></h2>
					</div>
					<div class="col-sm-4 text-right">
						<a href="<?php echo e(url('payroll/print-payslip/'.$payslip->id)); ?>" target="_blank" class="btn btn-primary btn-animated from-left fa fa-print">
							<span><?php echo e(language_data('Print Payslip')); ?></span>
						</a>

						<a href="<?php echo e(url('payroll/download-pdf/'.$payslip->id)); ?>" target="_blank" class="btn btn-success btn-animated from-left fa fa-file-pdf-o">
							<span><?php echo e(language_data('Generate PDF')); ?></span>
						</a>
					</div>
				</div>
			</div>
			<div class="p-30 p-t-none p-b-none">

				<div class="panel">
					<div class="panel-heading p-b-none">
						<h3><?php echo e(language_data('Payslip')); ?><br><small><?php echo e(language_data('Salary Month')); ?>: <?php echo e($payslip->payment_month); ?></small></h3>
					</div>
					<div class="panel-body p-none m-b-10">
						<table class="table table-no-border table-condensed">
							<tbody>
								<tr>
									<td><strong class="help-split"><?php echo e(language_data('Employee ID')); ?>:</strong>#<?php echo e($payslip->employee_info->employee_code); ?></td>
									<td><strong class="help-split"><?php echo e(language_data('Employee Name')); ?>:</strong><?php echo e($payslip->employee_info->fname); ?> <?php echo e($payslip->employee_info->lname); ?></td>
									<td><strong class="help-split"><?php echo e(language_data('Payslip NO')); ?>:</strong>#<?php echo e($payslip->id); ?></td>
								</tr>
								<tr>
									<td><strong class="help-split"><?php echo e(language_data('Phone')); ?>:</strong><?php echo e($payslip->employee_info->phone); ?></td>
									<td><strong class="help-split"><?php echo e(language_data('Joining Date')); ?>:</strong><?php echo e(get_date_format($payslip->employee_info->doj)); ?></td>
									<td><strong class="help-split"><?php echo e(language_data('Payment By')); ?>:</strong><?php echo e($payslip->payment_type); ?></td>
								</tr>
								<tr>
									<td><strong class="help-split"><?php echo e(language_data('Department')); ?>:</strong><?php echo e($payslip->department_name->department); ?></td>
									<td><strong class="help-split"><?php echo e(language_data('Designation')); ?>:</strong><?php echo e($payslip->designation_name->designation); ?></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>


			<div class="row">
				<div class="col-sm-6">
					<div class="panel">
						<div class="panel-heading p-b-none">
							<h4 class="m-b-10"><strong><?php echo e(language_data('Payment Details')); ?></strong></h4>
						</div>
						<div class="panel-body p-none">
							<table class="table table-condensed">
								<tbody>
                                <?php if($payslip->employee_info->payment_type=='Hourly'): ?>
                                    <tr>
										<td><strong><?php echo e(language_data('Working Hourly Rate')); ?>:</strong> <span class="pull-right"><?php echo e(app_config('Currency')); ?> <?php echo e($payslip->employee_info->working_hourly_rate+$payslip->employee_info->working_hourly_increment_rate); ?></span></td>
									</tr>
									<tr>
										<td><strong><?php echo e(language_data('Overtime Hourly Rate')); ?>:</strong> <span class="pull-right"><?php echo e(app_config('Currency')); ?> <?php echo e($payslip->employee_info->overtime_hourly_rate+$payslip->employee_info->overtime_hourly_increment_rate); ?></span></td>
									</tr>
                                 <?php else: ?>
                                    <tr>
                                        <td><strong><?php echo e(language_data('Basic Salary')); ?>:</strong> <span class="pull-right"><?php echo e(app_config('Currency')); ?> <?php echo e($payslip->employee_info->basic_salary+$payslip->employee_info->basic_salary_increment); ?></span></td>
                                    </tr>
                                    <tr>
                                        <td><strong><?php echo e(language_data('Overtime Salary')); ?>:</strong> <span class="pull-right"><?php echo e(app_config('Currency')); ?> <?php echo e($payslip->employee_info->overtime_salary+$payslip->employee_info->overtime_salary_increment); ?> (<?php echo e(language_data('Hourly')); ?>)</span></td>
                                    </tr>

                                <?php endif; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="panel">
						<div class="panel-heading p-b-none">
							<h4 class="m-b-10"><strong><?php echo e(language_data('Earning')); ?></strong></h4>
						</div>
						<div class="panel-body p-none">
							<table class="table table-condensed">
								<tbody>
									<tr>
										<td><strong><?php echo e(language_data('Net Salary')); ?>:</strong> <span class="pull-right"><?php echo e(app_config('Currency')); ?> <?php echo e($payslip->net_salary); ?></span></td>
									</tr>
									<tr>
										<td><strong><?php echo e(language_data('Overtime Amount')); ?>:</strong> <span class="pull-right"><?php echo e(app_config('Currency')); ?> <?php echo e($payslip->overtime_salary); ?></span></td>
									</tr>
									<tr>
										<td><strong><?php echo e(language_data('TAX')); ?>:</strong> <span class="pull-right"><?php echo e(app_config('Currency')); ?> <?php echo e($payslip->tax); ?></span></td>
									</tr>
									<tr>
										<td><strong><?php echo e(language_data('Provident Fund')); ?>:</strong> <span class="pull-right"><?php echo e(app_config('Currency')); ?> <?php echo e($payslip->provident_fund); ?></span></td>
									</tr>
									<tr>
										<td><strong><?php echo e(language_data('Loan')); ?>:</strong> <span class="pull-right"><?php echo e(app_config('Currency')); ?> <?php echo e(str_replace('.00','',$payslip->loan)); ?></span></td>
									</tr>
									<tr>
										<td class="td-highlighted"><strong><?php echo e(language_data('Grand Total')); ?>:</strong> <span class="pull-right"><strong><?php echo e(app_config('Currency')); ?> <?php echo e($payslip->total_salary); ?></strong></span></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>

                </div>
		</section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>