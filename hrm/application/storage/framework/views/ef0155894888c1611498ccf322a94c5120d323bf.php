<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title><?php echo e(app_config('AppName')); ?> - <?php echo e(language_data('Print Payslip')); ?></title>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
<?php echo Html::style("assets/libs/bootstrap/css/bootstrap.min.css"); ?>

<?php echo Html::style("assets/libs/bootstrap-toggle/css/bootstrap-toggle.min.css"); ?>

<?php echo Html::style("assets/libs/font-awesome/css/font-awesome.min.css"); ?>

<?php echo Html::style("assets/libs/alertify/css/alertify.css"); ?>

<?php echo Html::style("assets/libs/alertify/css/alertify-bootstrap-3.css"); ?>

<?php echo Html::style("assets/css/style.css"); ?>


<head>
    <style>
        .help-split {
            display: inline-block;
            width: 30%;
        }
    </style>
</head>
<body class="printable-page">

<main id="wrapper" class="wrapper">
    <div class="container container-printable">
        <div class="p-30 p-t-none p-b-none">

            <div class="p-t-30"></div>

            <table width="100%">
                <tbody>
                <tr>
                    <td style="border: 0;  text-align: left" width="62%">
                        <span style="font-size: 18px;"><strong><?php echo e(language_data('Payslip NO')); ?> #<?php echo e($payslip->id); ?></strong></span>
                        <br>
                        <span><strong><?php echo e(language_data('Date')); ?>:</strong> <?php echo e(get_date_format($payslip->payment_date)); ?></span>
                    </td>
                    <td style="border: 0;  text-align: right" width="62%">
                        <div>
                            <img src="<?php echo asset(app_config('AppLogo')); ?>" alt="logo">
                            <div style="height: 15px;"></div>
                            <?php echo app_config('Address'); ?>

                        </div>
                    </td>
                </tr>
                </tbody>
            </table>

            <div class="m-b-20"></div>

            <table width="100%">
                <tbody>
                <tr>
                    <td>
                        <div class="row">
                            <div class="col-xs-6">
                                <strong><?php echo e(language_data('Employee ID')); ?>:</strong>
                            </div>
                            <div class="col-xs-6">
                                <span>#<?php echo e($payslip->employee_info->employee_code); ?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <strong><?php echo e(language_data('Employee Name')); ?> :</strong>
                            </div>
                            <div class="col-xs-6">
                                <span><?php echo e($payslip->employee_info->fname); ?> <?php echo e($payslip->employee_info->lname); ?></span>
                            </div>
                        </div>

                        <?php if($payslip->employee_info->phone!=''): ?>
                            <div class="row">
                                <div class="col-xs-6">
                                    <strong><?php echo e(language_data('Phone')); ?> :</strong>
                                </div>
                                <div class="col-xs-6">
                                    <span><?php echo e($payslip->employee_info->phone); ?></span>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="row">
                            <div class="col-xs-6">
                                <strong><?php echo e(language_data('Payment By')); ?> :</strong>
                            </div>
                            <div class="col-xs-6">
                                <span><?php echo e($payslip->payment_type); ?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <strong><?php echo e(language_data('Department')); ?> :</strong>
                            </div>
                            <div class="col-xs-6">
                                <span><?php echo e($payslip->department_name->department); ?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <strong><?php echo e(language_data('Designation')); ?> :</strong>
                            </div>
                            <div class="col-xs-6">
                                <span><?php echo e($payslip->designation_name->designation); ?></span>
                            </div>
                        </div>
                    </td>
                    <td class="p-l-100">
                        <table class="table table-condensed table-transparent table-condensed-slim table-bordered">
                            <tr>
                                <td>
                                    <strong><?php echo e(language_data('Payslip NO')); ?> # :</strong>
                                </td>
                                <td class="text-right">
                                    <span>#<?php echo e($payslip->id); ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong><?php echo e(language_data('Salary Month')); ?> :</strong>
                                </td>
                                <td class="text-right">
                                    <span><?php echo e($payslip->payment_month); ?></span>
                                </td>
                            </tr>


                            <?php if($payslip->employee_info->payment_type=='Hourly'): ?>


                                <tr>
                                    <td>
                                        <strong><?php echo e(language_data('Working Hourly Rate')); ?> :</strong>
                                    </td>
                                    <td class="text-right">
                                        <span><?php echo e(app_config('Currency')); ?> <?php echo e($payslip->employee_info->working_hourly_rate+$payslip->employee_info->working_hourly_increment_rate); ?></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong><?php echo e(language_data('Overtime Hourly Rate')); ?> :</strong>
                                    </td>
                                    <td class="text-right">
                                        <span><?php echo e(app_config('Currency')); ?> <?php echo e($payslip->employee_info->overtime_hourly_rate+$payslip->employee_info->overtime_hourly_increment_rate); ?></span>
                                    </td>
                                </tr>

                            <?php else: ?>


                                <tr>
                                    <td>
                                        <strong><?php echo e(language_data('Basic Salary')); ?> :</strong>
                                    </td>
                                    <td class="text-right">
                                        <span><?php echo e(app_config('Currency')); ?> <?php echo e($payslip->employee_info->basic_salary+$payslip->employee_info->basic_salary_increment); ?></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong><?php echo e(language_data('Overtime Salary')); ?> :</strong>
                                    </td>
                                    <td class="text-right">
                                        <span><?php echo e(app_config('Currency')); ?> <?php echo e($payslip->employee_info->overtime_salary+$payslip->employee_info->overtime_salary_increment); ?> (<?php echo e(language_data('Hourly')); ?>)</span>
                                    </td>
                                </tr>


                            <?php endif; ?>



                        </table>
                    </td>
                </tr>
                </tbody>
            </table>

            <div class="m-b-20"></div>

            <table class="table table-condensed table-transparent table-condensed-slim table-bordered">

                <tbody>

                <tr>
                    <th width="65%"><?php echo e(language_data('Item Name')); ?></th>
                    <th class="text-right" colspan="3"><?php echo e(language_data('Total')); ?></th>
                </tr>

                <tr class="item-row">
                    <td class="description"><?php echo e(language_data('Net Salary')); ?></td>
                    <td align="right" colspan="3"><?php echo e(app_config('CurrencyCode')); ?> <?php echo e($payslip->net_salary); ?></td>
                </tr>

                <tr class="item-row">
                    <td class="description"><?php echo e(language_data('Overtime Amount')); ?></td>
                    <td align="right" colspan="3"><?php echo e(app_config('CurrencyCode')); ?> <?php echo e($payslip->overtime_salary); ?></td>
                </tr>

                <tr>
                    <td class="td-b-none"></td>
                    <td align="right" colspan="2" class="td-b-r-none"><?php echo e(language_data('Subtotal')); ?></td>
                    <td align="right" class="td-b-l-none"><?php echo e(app_config('CurrencyCode')); ?> <?php echo e($payslip->net_salary+$payslip->overtime_salary); ?></td>
                </tr>

                <tr>
                    <td class="td-b-none"></td>
                    <td align="right" colspan="2" class="td-b-r-none"><?php echo e(language_data('TAX')); ?></td>
                    <td align="right" class="td-b-l-none"><?php echo e(app_config('CurrencyCode')); ?> <?php echo e($payslip->tax); ?></td>
                </tr>

                <tr>
                    <td class="td-b-none"></td>
                    <td align="right" colspan="2" class="td-b-r-none"><?php echo e(language_data('Provident Fund')); ?></td>
                    <td align="right" class="td-b-l-none"><?php echo e(app_config('CurrencyCode')); ?> <?php echo e($payslip->provident_fund); ?></td>
                </tr>

                <tr>
                    <td class="td-b-none"></td>
                    <td align="right" colspan="2" class="td-b-r-none"><?php echo e(language_data('Loan')); ?></td>
                    <td align="right" class="td-b-l-none"><?php echo e(app_config('CurrencyCode')); ?> <?php echo e($payslip->loan); ?></td>
                </tr>


                <tr>
                    <td class="td-b-none"></td>
                    <td align="right" colspan="2" class="td-b-r-none"><?php echo e(language_data('Grand Total')); ?></td>
                    <td align="right" class="td-b-l-none"><?php echo e(app_config('CurrencyCode')); ?> <?php echo e($payslip->total_salary); ?></td>
                </tr>

                </tbody>
            </table>
            <div style="height: 60px"></div>
        </div>
    </div>
</main>

<?php echo Html::script("assets/libs/jquery-1.10.2.min.js"); ?>

<?php echo Html::script("assets/libs/jquery.slimscroll.min.js"); ?>

<?php echo Html::script("assets/libs/bootstrap/js/bootstrap.min.js"); ?>

<?php echo Html::script("assets/libs/bootstrap-toggle/js/bootstrap-toggle.min.js"); ?>

<?php echo Html::script("assets/libs/alertify/js/alertify.js"); ?>

<?php echo Html::script("assets/js/scripts.js"); ?>


</body>
</html>