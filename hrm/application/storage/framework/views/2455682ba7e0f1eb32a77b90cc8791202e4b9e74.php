<?php /*External Style Section*/ ?>
<?php $__env->startSection('style'); ?>
    <?php echo Html::style("assets/libs/bootstrap-calendar/css/calendar.css"); ?>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>

    <section class="wrapper-bottom-sec">

        <div class="p-30"></div>

        <div class="p-15 p-t-none p-b-none m-l-10 m-r-10">
            <?php echo $__env->make('notification.notify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>

        <div class="p-30 p-t-none p-b-none">
            <div class="row ">

                <div class="col-lg-4">
                    <div class="bg-success text-white p-30 clearfix text-center">
                        <span class="font-15"><?php echo e(language_data('Today is')); ?> <?php echo e(date('l dS F - Y')); ?>, <?php echo e(language_data('Time')); ?> : <?php echo e(date('g:i A')); ?> </span>
                    </div>

                    <br>

                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo e(language_data('Recent')); ?> <?php echo e(language_data('Support Tickets')); ?></h3>
                        </div>
                        <div class="panel-body p-none">
                            <table class="table table-hover table-ultra-responsive">
                                <thead>
                                <tr>
                                    <th style="width: 10%;"><?php echo e(language_data('SL')); ?>#</th>
                                    <th style="width: 50%;"><?php echo e(language_data('Subject')); ?></th>
                                    <th style="width: 40px;"><?php echo e(language_data('Date')); ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($recent_tickets as $rt): ?>
                                    <tr>
                                        <td data-label="SL">
                                            <p><?php echo e($rt->id); ?></p>
                                        </td>
                                        <td data-label="title">
                                            <p><a href="<?php echo e(url('employee/support-tickets/view-ticket/'.$rt->id)); ?>"> <?php echo e($rt->subject); ?> </a></p>
                                        </td>
                                        <td data-label="action">
                                            <p><?php echo e(get_date_format($rt->date)); ?> </p>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>


                </div>


                <div class="col-sm-5">
                    <div class="bg-complete p-15 text-white font-15 text-center">
                        <div class="row">
                            <div class="col-sm-4">
                                <span><?php echo e(language_data('Attendance')); ?></span><br>
                                <span><?php echo e($attendance); ?>/<?php echo e(date('t')); ?></span>
                            </div>
                            <div class="col-sm-4">
                                <span><?php echo e(language_data('Holiday')); ?></span><br>
                                <span><?php echo e($holiday); ?></span>
                            </div>
                            <div class="col-sm-4">
                                <span><?php echo e(language_data('Award')); ?></span><br>
                                <span><?php echo e($award); ?></span>
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo e(language_data('Recent')); ?> <?php echo e(language_data('Notice')); ?></h3>
                        </div>
                        <div class="panel-body p-none">
                            <table class="table table-hover table-ultra-responsive">
                                <thead>
                                <tr>
                                    <th style="width: 10%;"><?php echo e(language_data('SL')); ?>#</th>
                                    <th style="width: 70%;"><?php echo e(language_data('Title')); ?></th>
                                    <th style="width: 20px;"><?php echo e(language_data('Actions')); ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($recent_notice as $rn): ?>
                                <tr>
                                    <td data-label="SL">
                                        <p><?php echo e($rn->id); ?></p>
                                    </td>
                                    <td data-label="title">
                                        <p><?php echo e($rn->title); ?></p>
                                    </td>
                                    <td data-label="action">
                                        <p><button class="btn btn-xs btn-success"><i class="fa fa-eye"></i> <?php echo e(language_data('View')); ?></button> </p>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <div class="col-sm-3">
                    <div class="panel panel-30 p-t-30 text-center">
                        <div class="panel-body">

                            <?php if(Auth::user()->avatar==''): ?>
                            <img class="user-thumb m-b-15 p-2 bg-success" src="<?php echo asset('assets/employee_pic/user.png'); ?>" alt="user" width="200px" height="200px">
                            <?php else: ?>
                                <img class="user-thumb m-b-15 p-2 bg-success" src="<?php echo asset('assets/employee_pic/'.Auth::user()->avatar); ?>" alt="user" width="200px" height="200px">
                            <?php endif; ?>
                            <h4 class="text-uppercase text-info m-b-5 font-15"><?php echo e(Auth::user()->fname); ?> <?php echo e(Auth::user()->lname); ?></h4>

                            <p class="text-info font-15 m-b-5"><?php echo e($user_info->designation_name->designation); ?></p>

                            <form action="<?php echo e(url('employee/attendance/set_clocking')); ?>" method="post">
                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                            <?php if($clock_status=='Clock Out'): ?>
                                    <input type="hidden" value="Clock In" name="clock_state">
                                    <button  class="btn btn-success text-uppercase" type="submit"><i class="fa fa-arrow-circle-right"></i> Clock In</button>
                            <?php else: ?>
                                    <input type="hidden" value="Clock Out" name="clock_state">
                                    <button  class="btn btn-warning text-uppercase" type="submit"><i class="fa fa-arrow-circle-left"></i> Clock Out</button>

                            <?php endif; ?>
                            </form>
                        </div>

                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel">
                    <div class="panel-body">

                        <div class="panel-heading">
                            <h3 id="month" class="panel-title"></h3>
                            <div class="pull-right form-inline">
                                <div class="btn-group">
                                    <button class="btn btn-success btn-xs" data-calendar-nav="prev"><< <?php echo e(language_data('Prev')); ?></button>
                                    <button class="btn btn-default btn-xs" data-calendar-nav="today"><?php echo e(language_data('This Month')); ?></button>
                                    <button class="btn btn-complete btn-xs" data-calendar-nav="next"><?php echo e(language_data('Next')); ?> >></button>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div id="calendar"></div>
                    </div>
                </div>
                </div>
            </div>

            <input type="hidden" value="<?php echo asset('assets/libs/bootstrap-calendar/tmpls/'); ?>" id="_asset_path">

        </div>
    </section>

<?php $__env->stopSection(); ?>


<?php /*External Style Section*/ ?>
<?php $__env->startSection('script'); ?>

    <?php echo Html::script("assets/libs/bootstrap-calendar/js/underscore.js"); ?>

    <?php echo Html::script("assets/libs/bootstrap-calendar/js/calendar.min.js"); ?>

    <?php echo Html::script("assets/libs/handlebars/handlebars.runtime.min.js"); ?>


    <script>
        $(document).ready(function () {
            var _asset_url = $("#_asset_path").val() + '/';
            var _url = $("#_url").val();
            var calendar = $('#calendar').calendar({
                weekbox: false,
                tmpl_path: _asset_url,
                events_source: _url+'/employee/holiday/ajax-event-calendar',
                onAfterViewLoad: function(view) {
                    $('#month').text(this.getTitle());
                    $('.btn-group button').removeClass('active');
                }
            });

            $('.btn-group button[data-calendar-nav]').each(function () {
                var $this = $(this);
                $this.click(function () {
                    calendar.navigate($this.data('calendar-nav'));
                });
            });


        });
    </script>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('employee', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>