<?php $__env->startSection('content'); ?>

    <section class="wrapper-bottom-sec">
        <div class="p-30"></div>
        <div class="p-15 p-t-none p-b-none m-l-10 m-r-10">
        <?php echo $__env->make('notification.notify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
        <div class="row">

            <div class="col-lg-12">
                <div class="panel-body">
                    <div class="row text-center">

                        <div class="col-sm-3 m-b-15">
                            <div class="z-shad-1">
                                <div class="bg-success text-white p-15 clearfix">
                                    <span class="pull-left font-45 m-l-10"><i class="fa fa-users"></i></span>

                                    <div class="pull-right text-right m-t-15">
                                        <span class="small m-b-5 font-15"><?php echo e($employee); ?> <?php echo e(language_data('Employees')); ?></span>
                                        <br>
                                        <a href="<?php echo e(url('employees/add')); ?>" class="btn btn-complete btn-xs text-uppercase"><?php echo e(language_data('Add New')); ?></a>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="col-sm-3 m-b-15">
                            <div class="z-shad-1">
                                <div class="bg-complete text-white p-15 clearfix">
                                    <span class="pull-left font-45 m-l-10"><i class="fa fa-bed"></i></span>

                                    <div class="pull-right text-right m-t-15">
                                        <span class="small m-b-5 font-15"><?php echo e($leave); ?> <?php echo e(language_data('Leave Application')); ?></span>
                                        <br>
                                        <a href="<?php echo e(url('leave')); ?>" class="btn btn-success btn-xs text-uppercase"><?php echo e(language_data('View All')); ?></a>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="col-sm-3 m-b-15">
                            <div class="z-shad-1">
                                <div class="bg-primary text-white p-15 clearfix">
                                    <span class="pull-left font-45 m-l-10"><i class="fa fa-bar-chart"></i></span>

                                    <div class="pull-right text-right m-t-15">
                                        <span class="small m-b-5 font-15"><?php echo e($expense); ?> <?php echo e(language_data('Expense Request')); ?></span>
                                        <br>
                                        <a href="<?php echo e(url('expense')); ?>" class="btn btn-complete btn-xs text-uppercase"><?php echo e(language_data('View All')); ?></a>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="col-sm-3 m-b-15">
                            <div class="z-shad-1">
                                <div class="bg-complete-darker text-white p-15 clearfix">
                                    <span class="pull-left font-45 m-l-10"><i class="fa fa-envelope"></i></span>

                                    <div class="pull-right text-right m-t-15">
                                        <span class="small m-b-5 font-15"><?php echo e($tickets); ?> <?php echo e(language_data('Support Tickets')); ?></span>
                                        <br>
                                        <a href="<?php echo e(url('support-tickets/all')); ?>"
                                           class="btn btn-success btn-xs text-uppercase"><?php echo e(language_data('View All')); ?></a>
                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>




        <div class="p-15 p-t-none p-b-none">
            <div class="row">

                <div class="col-lg-6">
                    <div class="panel-body">
                        <div class="row">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo e(language_data('Support Tickets')); ?></h3>
                                </div>
                                <div class="panel-body p-none">
                                    <div id="supportTickets" style="width:100%; height:400px;"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="panel-body">
                        <div class="row">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo e(language_data('Expense')); ?></h3>
                                </div>
                                <div class="panel-body p-none">
                                    <div id="expense" style="width:100%; height:400px;"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="p-15 p-t-none p-b-none">
            <div class="row">

                <div class="col-lg-6">
                    <div class="panel-body">
                        <div class="row">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo e(language_data('Recent')); ?> <?php echo e(language_data('Leave Application')); ?></h3>
                                </div>
                                <div class="panel-body p-none">
                                    <table class="table table-hover table-ultra-responsive">
                                        <thead>
                                        <tr>
                                            <th style="width: 10px;"><?php echo e(language_data('SL')); ?>#</th>
                                            <th style="width: 30px;"><?php echo e(language_data('Employee')); ?></th>
                                            <th style="width: 30px;"><?php echo e(language_data('Leave Type')); ?></th>
                                            <th style="width: 15px;"><?php echo e(language_data('Leave From')); ?></th>
                                            <th style="width: 15px;"><?php echo e(language_data('Leave To')); ?></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($leave_application as $la): ?>
                                            <tr>
                                                <td data-label="SL">
                                                    <p><a href="<?php echo e(url('leave/edit/'.$la->id)); ?>"><?php echo e($la->id); ?></a></p>
                                                </td>
                                                <td data-label="employee">
                                                    <p>
                                                        <a href="<?php echo e(url('employees/view/'.$la->employee_id->id)); ?>"> <?php echo e($la->employee_id->fname); ?> <?php echo e($la->employee_id->lname); ?></a>
                                                    </p>
                                                </td>
                                                <td data-label="leave type">
                                                    <p><?php echo e($la->leave_type->leave); ?></p>
                                                </td>
                                                <td data-label="leave from">
                                                    <p><?php echo e(get_date_format($la->leave_from)); ?></p>
                                                </td>
                                                <td data-label="leave to">
                                                    <p><?php echo e(get_date_format($la->leave_to)); ?></p>
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

                <div class="col-lg-6">
                    <div class="panel-body">
                        <div class="row">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo e(language_data('Recent')); ?> <?php echo e(language_data('Expense Request')); ?></h3>
                                </div>
                                <div class="panel-body p-none">
                                    <table class="table table-hover table-ultra-responsive">
                                        <thead>
                                        <tr>
                                            <th style="width: 30px;"><?php echo e(language_data('Item Name')); ?></th>
                                            <th style="width: 30px;"><?php echo e(language_data('Purchase By')); ?></th>
                                            <th style="width: 20px;"><?php echo e(language_data('Purchase Date')); ?></th>
                                            <th style="width: 20px;"><?php echo e(language_data('Amount')); ?></th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <?php foreach($recent_expense as $re): ?>
                                            <tr>
                                                <td data-label="item name">
                                                    <p>
                                                        <a href="<?php echo e(url('expense/edit/'.$re->id)); ?>"> <?php echo e($re->item_name); ?></a>
                                                    </p>
                                                </td>
                                                <td data-label="purchase by">
                                                    <p>
                                                        <a href="<?php echo e(url('employees/view/'.$re->employee_info->id)); ?>"> <?php echo e($re->employee_info->fname); ?> <?php echo e($re->employee_info->lname); ?></a>
                                                    </p>
                                                </td>
                                                <td data-label="purchase date">
                                                    <p><?php echo e(get_date_format($re->purchase_date)); ?></p>
                                                </td>
                                                <td data-label="amount">
                                                    <p><?php echo e(app_config('Currency')); ?> <?php echo e($re->amount); ?></p>
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


        <div class="p-15 p-t-none p-b-none">
            <div class="row">

                <div class="col-lg-6">
                    <div class="panel-body">
                        <div class="row">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo e(language_data('Recent')); ?> <?php echo e(language_data('Tasks')); ?></h3>
                                </div>
                                <div class="panel-body p-none">
                                    <table class="table table-hover table-ultra-responsive">
                                        <thead>
                                        <tr>
                                            <th style="width: 45px;"><?php echo e(language_data('Task')); ?></th>
                                            <th style="width: 20px;"><?php echo e(language_data('Created Date')); ?></th>
                                            <th style="width: 20px;"><?php echo e(language_data('Due Date')); ?></th>
                                            <th style="width: 15px;"><?php echo e(language_data('Status')); ?></th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <?php foreach($recent_task as $rt): ?>
                                            <tr>
                                                <td data-label="task">
                                                    <p><a href="<?php echo e(url('task/view/'.$rt->id)); ?>"> <?php echo e($rt->task); ?> </a></p>
                                                </td>
                                                <td data-label="CreatedDate"><p><?php echo e(get_date_format($rt->start_date)); ?></p>
                                                </td>
                                                <td data-label="DueDate"><p><?php echo e(get_date_format($rt->due_date)); ?></p></td>
                                                <?php if($rt->status=='completed'): ?>
                                                    <td data-label="Status"><p class="btn btn-complete btn-xs"><?php echo e(language_data('Completed')); ?></p>
                                                    </td>
                                                <?php elseif($rt->status=='pending'): ?>
                                                    <td data-label="Status"><p class="btn btn-warning btn-xs"><?php echo e(language_data('Pending')); ?></p>
                                                    </td>
                                                <?php else: ?>
                                                    <td data-label="Status"><p class="btn btn-success btn-xs"><?php echo e(language_data('Started')); ?></p>
                                                    </td>
                                                <?php endif; ?>

                                            </tr>
                                        <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="panel-body">
                        <div class="row">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo e(language_data('Recent')); ?> <?php echo e(language_data('Support Tickets')); ?></h3>
                                </div>
                                <div class="panel-body p-none">
                                    <table class="table table-hover table-ultra-responsive">
                                        <thead>
                                        <tr>
                                            <th style="width: 30px;"><?php echo e(language_data('Email')); ?></th>
                                            <th style="width: 50px;"><?php echo e(language_data('Subject')); ?></th>
                                            <th style="width: 20px;"><?php echo e(language_data('Date')); ?></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($recent_tickets as $rtic): ?>
                                            <tr>
                                                <td data-label="email">
                                                    <p><a href="<?php echo e(url('employees/view/'.$rtic->emp_id)); ?>"> <?php echo e($rtic->email); ?></a></p>
                                                </td>
                                                <td data-label="subject">
                                                    <p><a href="<?php echo e(url('support-tickets/view-ticket/'.$rtic->id)); ?>"><?php echo e($rtic->subject); ?></a></p>
                                                </td>
                                                <td data-label="date">
                                                    <p><?php echo e(get_date_format($rtic->date)); ?></p>
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


    </section>

<?php $__env->stopSection(); ?>


<?php /*External Style Section*/ ?>
<?php $__env->startSection('script'); ?>

    <?php echo Html::script("assets/js/highcharts.js"); ?>


    <script>
        $(document).ready(function () {

            var get_expense = <?php echo $get_expense; ?>;

            var get_expense_data = [
                { month: 'Jan', val: [] },
                { month: 'Feb', val: [] },
                { month: 'Mar', val: [] },
                { month: 'Apr', val: [] },
                { month: 'May', val: [] },
                { month: 'Jun', val: [] },
                { month: 'Jul', val: [] },
                { month: 'Aug', val: [] },
                { month: 'Sep', val: [] },
                { month: 'Oct', val: [] },
                { month: 'Nov', val: [] },
                { month: 'Dec', val: [] }
            ];

            get_expense.forEach( function( item ) {
                get_expense_data[new Date(item.purchase_date).getMonth()].val.push( Number(item.amount) );
            });


            get_expense_data = get_expense_data.map( function( item ) {
                if ( item.val.length > 0 ) {
                    item.val = item.val.reduce(function(a, b) {
                        return a+b;
                    });
                } else {
                    item.val = 0;
                }

                return item;
            });

            var get_expense_months = get_expense_data.map(function(item){
                return item.month;
            });

            var get_expense_amounts = get_expense_data.map(function(item){
                return item.val;
            });


            Highcharts.chart('supportTickets', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie'
                },
                title: {
                    text: ''
                },
                credits: {
                    enabled: false
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.y}</b>'
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            format: '<b>{point.name}</b>: {point.y}',
                            style: {
                                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                            }
                        }
                    }
                },
                series: [{
                    name: 'SupportTickets',
                    colorByPoint: true,
                    data: [{
                        name: 'Pending',
                        y: <?php echo $st_pending;?>
                    }, {
                        name: 'Closed',
                        y: <?php echo $st_closed;?>
                    }, {
                        name: 'Customer Reply',
                        y: <?php echo $st_replied; ?>
                    }, {
                        name: 'Answered',
                        y: <?php echo $st_answered; ?>
                    }]
                }]
            });


            Highcharts.chart('expense', {

                title: {
                    text: ''
                },

                credits: {
                    enabled: false
                },

                xAxis: {
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
                },

                yAxis: {
                    title: {
                        text: 'Expense Amount'
                    }
                },
                plotOptions: {
                    series: {
                        dataLabels: {
                            enabled: false,
                            borderRadius: 5,
                            backgroundColor: 'rgba(252, 255, 197, 0.7)',
                            borderWidth: 1,
                            borderColor: '#AAA',
                            y: -6
                        }
                    }
                },

                series: [{
                    name: 'Expense',
                    data: get_expense_amounts
                }]

            });

        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>