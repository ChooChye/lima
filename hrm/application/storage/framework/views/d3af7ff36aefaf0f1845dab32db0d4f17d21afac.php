<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo e(app_config('AppTitle')); ?></title>
    <link rel="icon" type="image/x-icon"  href="<?php echo asset(app_config('AppFav')); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />

    <?php /*Global StyleSheet Start*/ ?>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
    <?php echo Html::style("assets/libs/bootstrap/css/bootstrap.min.css"); ?>

    <?php echo Html::style("assets/libs/bootstrap-toggle/css/bootstrap-toggle.min.css"); ?>

    <?php echo Html::style("assets/libs/font-awesome/css/font-awesome.min.css"); ?>

    <?php echo Html::style("assets/libs/alertify/css/alertify.css"); ?>

    <?php echo Html::style("assets/libs/alertify/css/alertify-bootstrap-3.css"); ?>

    <?php echo Html::style("assets/libs/bootstrap-select/css/bootstrap-select.min.css"); ?>


    <?php /*Custom StyleSheet Start*/ ?>

    <?php echo $__env->yieldContent('style'); ?>

    <?php /*Global StyleSheet End*/ ?>

    <?php echo Html::style("assets/css/style.css"); ?>

    <?php echo Html::style("assets/css/admin.css"); ?>

    <?php echo Html::style("assets/css/responsive.css"); ?>



</head>



<body class="has-left-bar has-top-bar">

<nav id="left-nav" class="left-nav-bar">
    <div class="nav-top-sec">
        <div class="app-logo">
            <img src="<?php echo asset(app_config('AppLogo')); ?>" alt="logo" class="bar-logo">
        </div>

        <a href="#" id="bar-setting" class="bar-setting"><i class="fa fa-bars"></i></a>
    </div>
    <div class="nav-bottom-sec">
        <ul class="left-navigation" id="left-navigation">

            <?php /*Dashboard*/ ?>
            <li <?php if(Request::path()== 'employee/dashboard'): ?> class="active" <?php endif; ?>><a href="<?php echo e(url('employee/dashboard')); ?>"><span class="menu-text"><?php echo e(language_data('Dashboard')); ?></span> <span class="menu-thumb"><i class="fa fa-dashboard"></i></span></a></li>

            <?php if(menu_access('Attendance')): ?>
            <?php /*Attendance*/ ?>
            <li <?php if(Request::path()== 'employee/attendance'): ?> class="active" <?php endif; ?>><a href="<?php echo e(url('employee/attendance')); ?>"><span class="menu-text"><?php echo e(language_data('Attendance')); ?></span> <span class="menu-thumb"><i class="fa fa-calendar"></i></span></a></li>
            <?php endif; ?>

            <?php if(menu_access('Leave')): ?>
            <?php /*Leave*/ ?>
            <li <?php if(Request::path()== 'employee/leave'): ?> class="active" <?php endif; ?>><a href="<?php echo e(url('employee/leave')); ?>"><span class="menu-text"><?php echo e(language_data('Leave')); ?></span> <span class="menu-thumb"><i class="fa fa-bed"></i></span></a></li>
            <?php endif; ?>

            <?php if(menu_access('Holiday')): ?>
            <?php /*Holiday*/ ?>
            <li <?php if(Request::path()== 'employee/holiday'): ?> class="active" <?php endif; ?>><a href="<?php echo e(url('employee/holiday')); ?>"><span class="menu-text"><?php echo e(language_data('Holiday')); ?></span> <span class="menu-thumb"><i class="fa fa-plane"></i></span></a></li>
            <?php endif; ?>

            <?php if(menu_access('Award')): ?>
            <?php /*Award*/ ?>
            <li <?php if(Request::path()== 'employee/award'): ?> class="active" <?php endif; ?>><a href="<?php echo e(url('employee/award')); ?>"><span class="menu-text"><?php echo e(language_data('Award')); ?></span> <span class="menu-thumb"><i class="fa fa-trophy"></i></span></a></li>
            <?php endif; ?>

            <?php if(menu_access('Notice Board')): ?>
            <?php /*Notice Board*/ ?>
            <li <?php if(Request::path()== 'employee/notice-board'): ?> class="active" <?php endif; ?>><a href="<?php echo e(url('employee/notice-board')); ?>"><span class="menu-text"><?php echo e(language_data('Notice Board')); ?></span> <span class="menu-thumb"><i class="fa fa-sticky-note"></i></span></a></li>
            <?php endif; ?>

            <?php if(menu_access('Expense')): ?>
            <?php /*Expense*/ ?>
            <li <?php if(Request::path()== 'employee/expense'  OR Request::path()=='employee/expense/edit/'.view_id()): ?> class="active" <?php endif; ?>><a href="<?php echo e(url('employee/expense')); ?>"><span class="menu-text"><?php echo e(language_data('Expense')); ?></span> <span class="menu-thumb"><i class="fa fa-bar-chart"></i></span></a></li>
            <?php endif; ?>


            <?php if(menu_access('Payroll')): ?>
            <?php /*Loan*/ ?>
            <li <?php if(Request::path()== 'employee/loan/all'OR Request::path()=='employee/loan/view-details/'.view_id()): ?> class="active" <?php endif; ?>><a href="<?php echo e(url('employee/loan/all')); ?>"><span class="menu-text"><?php echo e(language_data('Loan')); ?></span> <span class="menu-thumb"><i class="fa fa-cube"></i></span></a></li>

            <?php /*Payroll*/ ?>
            <li <?php if(Request::path()== 'employee/payslip'  OR Request::path()=='employee/payslip/view/'.view_id()): ?> class="active" <?php endif; ?>><a href="<?php echo e(url('employee/payslip')); ?>"><span class="menu-text"><?php echo e(language_data('Payslip')); ?></span> <span class="menu-thumb"><i class="fa fa-dollar"></i></span></a></li>
            <?php endif; ?>

            <?php if(menu_access('Training')): ?>
            <?php /*Training*/ ?>
            <li <?php if(Request::path()== 'employee/training' OR Request::path()=='employee/training/view/'.view_id()): ?> class="active" <?php endif; ?>><a href="<?php echo e(url('employee/training')); ?>"><span class="menu-text"><?php echo e(language_data('Training')); ?></span> <span class="menu-thumb"><i class="fa fa-graduation-cap"></i></span></a></li>
            <?php endif; ?>

            <?php if(menu_access('Task')): ?>
            <?php /*Task*/ ?>
            <li <?php if(Request::path()== 'employee/task' OR Request::path()=='employee/task/view/'.view_id()): ?> class="active" <?php endif; ?>><a href="<?php echo e(url('employee/task')); ?>"><span class="menu-text"><?php echo e(language_data('Task')); ?></span> <span class="menu-thumb"><i class="fa fa-list"></i></span></a></li>
            <?php endif; ?>

            <?php if(menu_access('Support Tickets')): ?>
            <?php /*Support Ticket*/ ?>
            <li class="has-sub <?php if(Request::path()== 'employee/support-tickets/all' OR Request::path()=='employee/support-tickets/create-new' OR Request::path()=='employee/support-tickets/view-ticket/'.view_id()): ?> sub-open init-sub-open <?php endif; ?>">
                <a href="#"><span class="menu-text"><?php echo e(language_data('Support Tickets')); ?></span> <span class="arrow"></span><span class="menu-thumb"><i class="fa fa-envelope"></i></span></a>
                <ul class="sub">
                    <li <?php if(Request::path()== 'employee/support-tickets/all'  OR Request::path()=='employee/support-tickets/view-ticket/'.view_id()): ?> class="active" <?php endif; ?>><a href=<?php echo e(url('employee/support-tickets/all')); ?>><span class="menu-text"><?php echo e(language_data('All Support Tickets')); ?></span> <span class="menu-thumb"><i class="fa fa-list"></i></span></a></li>

                    <li <?php if(Request::path()== 'employee/support-tickets/create-new'): ?> class="active" <?php endif; ?>><a href=<?php echo e(url('employee/support-tickets/create-new')); ?>><span class="menu-text"><?php echo e(language_data('Create New Ticket')); ?></span> <span class="menu-thumb"><i class="fa fa-plus"></i></span></a></li>

                </ul>
            </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>

<main id="wrapper" class="wrapper">

    <div class="top-bar clearfix">
        <ul class="top-info-bar">
            <li class="dropdown bar-notification <?php if(count(latest_five_employee_leave_application())>0): ?> active <?php endif; ?>">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-bed"></i></a>
                <ul class="dropdown-menu user-dropdown arrow" role="menu">
                    <li class="title"><?php echo e(language_data('Recent 5 Leave Applications')); ?></li>

                    <?php foreach(latest_five_employee_leave_application() as $l): ?>
                    <li>
                        <a href="<?php echo e(url('leave/edit/'.$l->id)); ?>">
                            <?php if($l->employee_id->avatar!=''): ?>
                                <img class="user-thumb" src="<?php echo asset('assets/employee_pic/'.$l->employee_id->avatar); ?>" alt="<?php echo e($l->employee_id->fname); ?> <?php echo e($l->employee_id->lname); ?>">
                            <?php else: ?>
                                <img class="user-thumb" src="<?php echo asset('assets/employee_pic/user.png'); ?>" alt="<?php echo e($l->employee_id->fname); ?> <?php echo e($l->employee_id->lname); ?>">
                            <?php endif; ?>

                            <div class="user-name"><?php echo e($l->employee_id->fname); ?> <?php echo e($l->employee_id->lname); ?></div>
                        </a>
                    </li>

                    <?php endforeach; ?>

                    <li class="footer"><a href="<?php echo e(url('employee/leave')); ?>"><?php echo e(language_data('See All Applications')); ?></a></li>
                </ul>
            </li>

            <li class="dropdown bar-notification <?php if(count(latest_five_employee_tickets())>0): ?> active <?php endif; ?>">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-envelope"></i></a>
                <ul class="dropdown-menu arrow message-dropdown" role="menu">
                    <li class="title"><?php echo e(language_data('Recent 5 Pending Tickets')); ?></li>
                    <?php foreach(latest_five_employee_tickets() as $st): ?>
                    <li>
                        <a href="<?php echo e(url('employee/support-tickets/view-ticket/'.$st->id)); ?>">
                            <div class="name"><?php echo e($st->name); ?> <span><?php echo e($st->date); ?></span></div>
                            <div class="message"><?php echo e($st->subject); ?></div>
                        </a>
                    </li>

                    <?php endforeach; ?>

                    <li class="footer"><a href="<?php echo e(url('employee/support-tickets/all')); ?>"><?php echo e(language_data('See All Tickets')); ?></a></li>
                </ul>
            </li>
        </ul>

        <div class="navbar-right">
            <div class="dropdown user-profile">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    <span class="user-info"><?php echo e(Auth::user()->fname); ?> <?php echo e(Auth::user()->lname); ?></span>

                    <?php if(Auth::user()->avatar!=''): ?>
                        <img class="user-image" src="<?php echo asset('assets/employee_pic/'.Auth::user()->avatar); ?>" alt="<?php echo e(Auth::user()->fname); ?> <?php echo e(Auth::user()->lname); ?>">
                    <?php else: ?>
                        <img class="user-image" src="<?php echo asset('assets/employee_pic/user.png'); ?>" alt="<?php echo e(Auth::user()->fname); ?> <?php echo e(Auth::user()->lname); ?>">
                    <?php endif; ?>

                </a>
                <ul class="dropdown-menu arrow right-arrow" role="menu">
                    <li><a href="<?php echo e(url('employee/edit-profile')); ?>"><i class="fa fa-edit"></i><?php echo e(language_data('Update Profile')); ?></a></li>
                    <li><a href="<?php echo e(url('employee/change-password')); ?>"><i class="fa fa-lock"></i><?php echo e(language_data('Change Password')); ?></a></li>
                    <li class="bg-dark">
                        <a href="<?php echo e(url('employee/logout')); ?>" class="clearfix">
                            <span class="pull-left"><?php echo e(language_data('Logout')); ?></span>
                            <span class="pull-right"><i class="fa fa-power-off"></i></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <?php /*Content File Start Here*/ ?>

    <?php echo $__env->yieldContent('content'); ?>

    <?php /*Content File End Here*/ ?>

    <input type="hidden" id="_url" value="<?php echo e(url('/')); ?>">
    <input type="hidden" id="_DatePicker" value="<?php echo e(app_config('DateFormat')); ?>">
</main>

<?php /*Global JavaScript Start*/ ?>
<?php echo Html::script("assets/libs/jquery-1.10.2.min.js"); ?>

<?php echo Html::script("assets/libs/jquery.slimscroll.min.js"); ?>

<?php echo Html::script("assets/libs/bootstrap/js/bootstrap.min.js"); ?>

<?php echo Html::script("assets/libs/bootstrap-toggle/js/bootstrap-toggle.min.js"); ?>

<?php echo Html::script("assets/libs/alertify/js/alertify.js"); ?>

<?php echo Html::script("assets/libs/bootstrap-select/js/bootstrap-select.min.js"); ?>

<?php echo Html::script("assets/js/scripts.js"); ?>

<?php /*Global JavaScript End*/ ?>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-Token': $('input[name="_token"]').val()
        }
    });
</script>

<?php /*Custom JavaScript Start*/ ?>

<?php echo $__env->yieldContent('script'); ?>

<?php /*Custom JavaScript End Here*/ ?>
</body>

</html>
