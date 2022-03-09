<?php /*External Style Section*/ ?>
<?php $__env->startSection('style'); ?>
    <?php echo Html::style("assets/libs/data-table/datatables.min.css"); ?>

    <?php echo Html::style("assets/libs/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <section class="wrapper-bottom-sec">
        <div class="p-30">
            <h2 class="page-title"><?php echo e(language_data('Attendance')); ?></h2>
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
                            <form class="" role="form" method="post" action="<?php echo e(url('attendance/post-custom-search')); ?>">

                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="el2"><?php echo e(language_data('Date From')); ?></label>
                                            <input type="text" id="date_from" class="form-control datePicker" required="" name="date_from" value="<?php echo e(get_date_format($date_from)); ?>">
                                        </div>
                                    </div>

                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="el2"><?php echo e(language_data('Date To')); ?></label>
                                            <input type="text" id="date_to" class="form-control datePicker" required="" name="date_to" value="<?php echo e(get_date_format($date_to)); ?>">
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="el3"><?php echo e(language_data('Employee')); ?></label>
                                            <select class="selectpicker form-control" data-live-search="true" name="employee">
                                                <option value="0"><?php echo e(language_data('Select Employee')); ?></option>
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

                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="el3"><?php echo e(language_data('Designation')); ?></label>
                                            <select class="selectpicker form-control" data-live-search="true" <?php if( $des_id == '' ): ?> disabled <?php endif; ?> name="designation" id="designation">
                                                <option value="0"><?php echo e(language_data('Select Designation')); ?></option>
                                                <?php if($des_id!=0): ?>
                                                <?php foreach($designation as $des): ?>
                                                    <option value="<?php echo e($des->id); ?>" <?php if($des_id==$des->id): ?> selected <?php endif; ?>> <?php echo e($des->designation); ?></option>
                                                <?php endforeach; ?>
                                                <?php endif; ?>
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
                            <h3 class="panel-title"><?php echo e(language_data('Attendance')); ?></h3>
                            <?php if($date_from=='' && $date_to==''): ?>
                                <a href="<?php echo e(url('attendance/get-all-pdf-report')); ?>" class="btn btn-success btn-xs pull-right"><i class="fa fa-file-pdf-o"></i> <?php echo e(language_data('Generate PDF')); ?></a><br>
                            <?php else: ?>
                                <a href="<?php echo e(url('attendance/get-pdf-report/'.$date_from.'_'.$date_to.'/'.$emp_id.'/'.$dep_id.'/'.$des_id)); ?>" class="btn btn-success btn-xs pull-right"><i class="fa fa-file-pdf-o"></i> <?php echo e(language_data('Generate PDF')); ?></a><br>
                            <?php endif; ?>


                        </div>
                        <div class="panel-body p-none">
                            <table class="table data-table table-hover table-ultra-responsive">
                                <thead>
                                <tr>
                                    <th style="width: 17%;"><?php echo e(language_data('Employee Name')); ?></th>
<?php /*                                    <th style="width: 13%;"><?php echo e(language_data('Designation')); ?></th>*/ ?>
                                    <th style="width: 10%;"><?php echo e(language_data('Date')); ?></th>
                                    <th style="width: 10%;"><?php echo e(language_data('Clock In')); ?></th>
                                    <th style="width: 10%;"><?php echo e(language_data('Clock Out')); ?></th>
                                    <th style="width: 5%;"><?php echo e(language_data('Late')); ?></th>
                                    <th style="width: 5%;"><?php echo e(language_data('Early Leaving')); ?></th>
                                    <th style="width: 5%;"><?php echo e(language_data('Overtime')); ?></th>
                                    <th style="width: 10%;"><?php echo e(language_data('Total Work')); ?></th>
                                    <th style="width: 10%;"><?php echo e(language_data('Status')); ?></th>
                                    <th style="width: 5%;"><?php echo e(language_data('Actions')); ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($attendance as $d): ?>
                                <tr>
                                    <td data-label="employee_name"><a href="<?php echo e(url('employees/view/'.$d->emp_id)); ?>"><?php echo e($d->employee_info->fname); ?> <?php echo e($d->employee_info->lname); ?></a></td>
        <?php /*                            <td data-label="Designation"><?php echo e($d->designation_name->designation); ?></td>*/ ?>
                                    <td data-label="Date"><?php echo e(get_date_format($d->date)); ?></td>
                                    <td data-label="Clock_In"><?php echo e($d->clock_in); ?></td>
                                    <td data-label="Clock_out"><?php echo e($d->clock_out); ?></td>
                                    <td data-label="Late"><?php echo e(round($d->late/60,2)); ?> H</td>
                                    <td data-label="Early_leaving"><?php echo e(round($d->early_leaving/60,2)); ?> H</td>
                                    <td data-label="Overtime"><?php echo e($d->overtime); ?> H</td>
                                    <td data-label="Total_Work"><?php echo e(round($d->total/60,2)+$d->overtime); ?> H</td>
                                    <?php if($d->status=='Absent'): ?>
                                    <td data-label="Status"><p class="btn btn-danger btn-xs"><?php echo e(language_data('Absent')); ?></p></td>
                                    <?php elseif($d->status=='Holiday'): ?>
                                    <td data-label="Status"><p class="btn btn-complete btn-xs"><?php echo e(language_data('Holiday')); ?></p></td>
                                    <?php else: ?>
                                    <td data-label="Status"><p class="btn btn-success btn-xs"><?php echo e(language_data('Present')); ?></p></td>
                                    <?php endif; ?>
                                    <td data-label="Actions">


                                        <div class="btn-group btn-mini-group dropdown-default">
                                            <a class="btn btn-success btn-sm dropdown-toggle btn-animated from-top fa fa-caret-down" data-toggle="dropdown" href="#" aria-expanded="false"><span><i class="fa fa-bars"></i></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#" class="text-complete setOvertime" id="<?php echo e($d->id); ?>" data-overtime-val="<?php echo e($d->overtime); ?>"  data-toggle="tooltip" data-placement="right" title="<?php echo e(language_data('Set Overtime')); ?>"><i class="fa fa-clock-o"></i></a></li>
                                                <li><a href="<?php echo e(url('attendance/edit/'.$d->id)); ?>" data-toggle="tooltip" data-placement="right" title="<?php echo e(language_data('Edit')); ?>" class="text-success"><i class="fa fa-edit"></i></a></li>
                                                <li><a href="#" class="text-danger cdelete" data-toggle="tooltip" data-placement="right" title="<?php echo e(language_data('Delete')); ?>" id="<?php echo e($d->id); ?>"><i class="fa fa-trash"></i></a></li>
                                            </ul>
                                        </div>

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
    <?php echo Html::script("assets/libs/data-table/datatables.min.js"); ?>

    <?php echo Html::script("assets/libs/handlebars/handlebars.runtime.min.js"); ?>

    <?php echo Html::script("assets/libs/moment/moment.min.js"); ?>

    <?php echo Html::script("assets/libs/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"); ?>

    <?php echo Html::script("assets/js/form-elements-page.js"); ?>

    <?php echo Html::script("assets/js/bootbox.min.js"); ?>

    <script>
        $(document).ready(function () {

            /*For DataTable*/
            $('.data-table').DataTable();


            /*Linked Date*/

            $("#date_from").on("dp.change", function (e) {
                $('#date_to').data("DateTimePicker").minDate(e.date);
            });

            $("#date_to").on("dp.change", function (e) {
                $('#date_from').data("DateTimePicker").maxDate(e.date);
            });


            /*For Designation Loading*/
            $("#department_id").change(function () {
                var id = $(this).val();
                var _url = $("#_url").val();
                var dataString = 'dep_id=' + id;
                $.ajax
                ({
                    type: "POST",
                    url: _url + '/attendance/get-designation',
                    data: dataString,
                    cache: false,
                    success: function ( data ) {
                        $("#designation").html( data).removeAttr('disabled').selectpicker('refresh');
                    }
                });
            });


            /*For Delete Attendance*/

            $(".cdelete").click(function (e) {
                e.preventDefault();
                var id = this.id;
                bootbox.confirm("Are you sure?", function (result) {
                    if (result) {
                        var _url = $("#_url").val();
                        window.location.href = _url + "/attendance/delete-attendance/" + id;
                    }
                });
            });



            /*Set Overtime*/
            $(".setOvertime").click(function (e) {
                e.preventDefault();

                var id = this.id;
                var _url = $("#_url").val();
                var  overTimeVal= $(this).data('overtime-val');
                var redirectURL=window.location.href;

                bootbox.prompt({
                    title: "Set Overtime (In Hour)?",
                    value: overTimeVal,
                    callback: function(result) {
                        var dataString = 'attend_id=' + id+'&overTimeValue='+result;
                        $.ajax
                        ({
                            type: "POST",
                            url: _url + '/attendance/set-overtime',
                            data: dataString,
                            cache: false,
                            success: function ( data ) {
                                if(data=='success'){
                                    window.location=redirectURL;
                                }else{
                                    alert('Please Try Again');
                                }

                            }
                        });
                    }
                });
            });





        });
    </script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>