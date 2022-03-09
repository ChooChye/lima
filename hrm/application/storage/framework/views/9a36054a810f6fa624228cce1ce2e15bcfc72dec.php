<?php /*External Style Section*/ ?>
<?php $__env->startSection('style'); ?>
    <?php echo Html::style("assets/libs/bootstrap3-wysihtml5-bower/bootstrap3-wysihtml5.min.css"); ?>

    <?php echo Html::style("assets/libs/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <section class="wrapper-bottom-sec">
        <div class="p-30">
            <h2 class="page-title"><?php echo e(language_data('System Settings')); ?></h2>
        </div>
        <div class="p-30 p-t-none p-b-none">
            <?php echo $__env->make('notification.notify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#general" aria-controls="general" role="tab" data-toggle="tab"><i class="fa fa-cog"></i> <?php echo e(language_data('General')); ?></a></li>
                        <li role="presentation"><a href="#officeTime" aria-controls="officeTime" role="tab"
                                                   data-toggle="tab"><i
                                        class="fa fa-clock-o"></i> <?php echo e(language_data('Office Time')); ?></a></li>
                        <li role="presentation"><a href="#expense" aria-controls="expense" role="tab" data-toggle="tab"><i
                                        class="fa fa-bar-chart"></i> <?php echo e(language_data('Expense')); ?></a></li>
                        <li role="presentation"><a href="#leave" aria-controls="leave" role="tab" data-toggle="tab"><i
                                        class="fa fa-bed"></i> <?php echo e(language_data('Leave')); ?></a></li>
                        <li role="presentation"><a href="#award" aria-controls="award" role="tab" data-toggle="tab"><i
                                        class="fa fa-trophy"></i> <?php echo e(language_data('Award')); ?></a></li>
                        <li role="presentation"><a href="#job" aria-controls="job" role="tab" data-toggle="tab"><i
                                        class="fa fa-briefcase"></i> <?php echo e(language_data('Job')); ?></a></li>
                    </ul>

                    <div class="tab-content panel p-20">

                        <?php /*General tab*/ ?>
                        <div role="tabpanel" class="tab-pane active" id="general">
                            <div class="row">
                                <div class="col-md-7">
                                    <form class="" role="form" action="<?php echo e(url('settings/post-general-setting')); ?>" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label><?php echo e(language_data('Application Name')); ?></label>
                                            <input type="text" class="form-control" required name="app_name"
                                                   value="<?php echo e(app_config('AppName')); ?>">
                                        </div>

                                        <div class="form-group">
                                            <label><?php echo e(language_data('Application Title')); ?></label>
                                            <input type="text" class="form-control" name="app_title" required=""
                                                   value="<?php echo e(app_config('AppTitle')); ?>">
                                        </div>

                                        <div class="form-group">
                                            <label><?php echo e(language_data('Address')); ?></label>
                                            <textarea class="form-control textarea-wysihtml5"
                                                      name="address"><?php echo e(app_config('Address')); ?></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label><?php echo e(language_data('System Email')); ?></label>
                                            <span class="help"><?php echo e(language_data('Remember: All Email Going to the Receiver from this Email')); ?></span>
                                            <input type="email" class="form-control" required name="email"
                                                   value="<?php echo e(app_config('Email')); ?>">
                                        </div>

                                        <div class="form-group">
                                            <label><?php echo e(language_data('Footer Text')); ?></label>
                                            <input type="text" class="form-control" required name="footer"
                                                   value="<?php echo e(app_config('FooterTxt')); ?>">
                                        </div>


                                        <div class="form-group">
                                            <label><?php echo e(language_data('Application Logo')); ?></label>
                                            <div class="input-group input-group-file">
                                        <span class="input-group-btn">
                                            <span class="btn btn-primary btn-file">
                                                <?php echo e(language_data('Browse')); ?> <input type="file" class="form-control" name="app_logo">
                                            </span>
                                        </span>
                                                <input type="text" class="form-control" readonly="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label><?php echo e(language_data('Application Favicon')); ?></label>
                                            <div class="input-group input-group-file">
                                        <span class="input-group-btn">
                                            <span class="btn btn-primary btn-file">
                                                <?php echo e(language_data('Browse')); ?> <input type="file" class="form-control" name="app_fav">
                                            </span>
                                        </span>
                                                <input type="text" class="form-control" readonly="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label><?php echo e(language_data('Email Gateway')); ?></label>
                                            <select class="selectpicker form-control gateway" name="email_gateway">
                                                <option value="default" <?php if(app_config('Gateway')=='default'): ?>
                                                        selected <?php endif; ?>>Server Default
                                                </option>
                                                <option value="smtp" <?php if(app_config('Gateway')=='smtp'): ?> selected <?php endif; ?>>
                                                    SMTP
                                                </option>
                                            </select>
                                        </div>

                                        <div class="show-smtp">

                                            <div class="form-group">
                                                <label for="fname"><?php echo e(language_data('SMTP Host Name')); ?></label>
                                                <input type="text" class="form-control" required="" name="host_name"
                                                       value="<?php echo e(app_config('SMTPHostName')); ?>">
                                            </div>

                                            <div class="form-group">
                                                <label for="fname"><?php echo e(language_data('SMTP User Name')); ?></label>
                                                <input type="text" class="form-control" required="" name="user_name"
                                                       value="<?php echo e(app_config('SMTPUserName')); ?>">
                                            </div>

                                            <div class="form-group">
                                                <label for="fname"><?php echo e(language_data('SMTP Password')); ?></label>
                                                <input type="text" class="form-control" required="" name="password"
                                                       value="<?php echo e(app_config('SMTPPassword')); ?>">
                                            </div>


                                            <div class="form-group">
                                                <label for="fname"><?php echo e(language_data('SMTP Port')); ?></label>
                                                <input type="text" class="form-control" required="" name="port"
                                                       value="<?php echo e(app_config('SMTPPort')); ?>">
                                            </div>


                                            <div class="form-group">
                                                <label for="Default Gateway"><?php echo e(language_data('SMTP Secure')); ?></label>
                                                <select name="secure" class="selectpicker form-control">
                                                    <option value="tls" <?php if(app_config('SMTPSecure')=='tls'): ?>
                                                            selected <?php endif; ?>>TLS
                                                    </option>
                                                    <option value="ssl"
                                                            <?php if(app_config('SMTPSecure')=='ssl'): ?>selected <?php endif; ?>>
                                                        SSL
                                                    </option>
                                                </select>
                                            </div>


                                        </div>

                                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                        <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> <?php echo e(language_data('Update')); ?></button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <?php /*Office Time Tab*/ ?>
                        <div role="tabpanel" class="tab-pane" id="officeTime">
                            <div class="row">
                                <div class="col-md-7">
                                    <form class="" role="form" action="<?php echo e(url('settings/post-office-time')); ?>" method="post">

                                        <div class="form-group">
                                            <label for="officetime"><?php echo e(language_data('Office In Time')); ?></label>
                                            <input type='text' class="form-control timePicker" name="office_in_time" value="<?php echo e(app_config('OfficeInTime')); ?>"/>
                                        </div>

                                        <div class="form-group">
                                            <label for="officetime"><?php echo e(language_data('Office Out Time')); ?></label>
                                            <input type='text' class="form-control timePicker" name="office_out_time" value="<?php echo e(app_config('OfficeOutTime')); ?>"/>
                                        </div>

                                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                        <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> <?php echo e(language_data('Update')); ?></button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <?php /*Expense Tab*/ ?>
                        <div role="tabpanel" class="tab-pane" id="expense">
                            <div class="row">
                                <div class="col-lg-4">
                                    <form class="" role="form" method="post"
                                          action="<?php echo e(url('settings/post-expense-title')); ?>">
                                        <h3 class="panel-title"> <?php echo e(language_data('Add New Expense Title')); ?></h3>

                                        <div class="form-group">
                                            <label><?php echo e(language_data('Expense Title')); ?></label>
                                            <span class="help">e.g. "<?php echo e(language_data('Employee Salary')); ?>"</span>
                                            <input type="text" class="form-control" required name="expense">
                                        </div>


                                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                        <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> <?php echo e(language_data('Add')); ?> </button>
                                    </form>
                                </div>
                                <div class="col-lg-8">
                                    <h3 class="panel-title"><?php echo e(language_data('Expense Title List')); ?></h3>
                                    <table class="table data-table table-hover table-ultra-responsive">
                                        <thead>
                                        <tr>
                                            <th style="width: 10%;"><?php echo e(language_data('SL')); ?>#</th>
                                            <th style="width: 65%;"><?php echo e(language_data('Expense Title')); ?></th>
                                            <th style="width: 25%;"><?php echo e(language_data('Actions')); ?></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($expense_title as $d): ?>
                                            <tr>
                                                <td data-label="SL"><?php echo e($d->id); ?></td>
                                                <td data-label="Expense"><p><?php echo e($d->expense); ?></p></td>
                                                <td>

                                                    <a class="btn btn-success btn-xs" href="#" data-toggle="modal" data-target=".modal_edit_expense_type_<?php echo e($d->id); ?>"><i class="fa fa-edit"></i> <?php echo e(language_data('Edit')); ?></a>
                                                    <?php echo $__env->make('admin.modal-expense-type', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                                                    <a href="#" class="btn btn-danger btn-xs deleteExpense" id="<?php echo e($d->id); ?>"><i class="fa fa-trash"></i> <?php echo e(language_data('Delete')); ?></a>
                                                </td>
                                            </tr>

                                        <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <?php /*Leave Tab*/ ?>
                        <div role="tabpanel" class="tab-pane" id="leave">
                            <div class="row">
                                <div class="col-lg-4">
                                    <form class="" role="form" method="post"
                                          action="<?php echo e(url('settings/post-leave-type')); ?>">
                                        <h3 class="panel-title"> <?php echo e(language_data('Leave Type')); ?></h3>

                                        <div class="form-group">
                                            <label><?php echo e(language_data('Leave Title')); ?></label>
                                            <span class="help">e.g. "<?php echo e(language_data('Sick Leave')); ?>"</span>
                                            <input type="text" class="form-control" required name="leave">
                                        </div>

                                        <div class="form-group">
                                            <label><?php echo e(language_data('Leave Quota')); ?></label>
                                            <span class="help">e.g. "12" Days/Year</span>
                                            <input type="number" class="form-control" required name="leave_quota">
                                        </div>


                                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                        <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> <?php echo e(language_data('Add')); ?> </button>
                                    </form>
                                </div>

                                <div class="col-lg-8">
                                    <h3 class="panel-title"><?php echo e(language_data('Leave Title List')); ?></h3>
                                    <table class="table data-table table-hover table-ultra-responsive">
                                        <thead>
                                        <tr>
                                            <th style="width: 10%;"><?php echo e(language_data('SL')); ?>#</th>
                                            <th style="width: 40%;"><?php echo e(language_data('Leave Type')); ?></th>
                                            <th style="width: 20%;"><?php echo e(language_data('Leave Quota')); ?></th>
                                            <th style="width: 25%;"><?php echo e(language_data('Actions')); ?></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($leave_type as $d): ?>
                                            <tr>
                                                <td data-label="SL"><?php echo e($d->id); ?></td>
                                                <td data-label="Leave"><p><?php echo e($d->leave); ?></p></td>
                                                <td data-label="LeaveQuota"><p><?php echo e($d->leave_quota); ?></p></td>
                                                <td>

                                                    <a class="btn btn-success btn-xs" href="#" data-toggle="modal" data-target=".modal_edit_leave_type_<?php echo e($d->id); ?>"><i class="fa fa-edit"></i> <?php echo e(language_data('Edit')); ?></a>
                                                    <?php echo $__env->make('admin.modal-leave-type', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


                                                    <a href="#" class="btn btn-danger btn-xs deleteLeave" id="<?php echo e($d->id); ?>"><i class="fa fa-trash"></i> <?php echo e(language_data('Delete')); ?></a>
                                                </td>
                                            </tr>

                                        <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>

                        <?php /*Award Tab*/ ?>
                        <div role="tabpanel" class="tab-pane" id="award">
                            <div class="row">

                                <div class="col-lg-4">
                                    <form class="" role="form" method="post"
                                          action="<?php echo e(url('settings/post-award-name')); ?>">
                                        <h3 class="panel-title"> <?php echo e(language_data('Award Name')); ?></h3>

                                        <div class="form-group">
                                            <label><?php echo e(language_data('Award Name')); ?></label>
                                            <span class="help">e.g. "<?php echo e(language_data('Best Employee')); ?>"</span>
                                            <input type="text" class="form-control" required name="award">
                                        </div>


                                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                        <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> <?php echo e(language_data('Add')); ?> </button>
                                    </form>
                                </div>

                                <div class="col-lg-8">
                                    <h3 class="panel-title"><?php echo e(language_data('Award Name List')); ?></h3>
                                    <table class="table data-table table-hover table-ultra-responsive">
                                        <thead>
                                        <tr>
                                            <th style="width: 10%;"><?php echo e(language_data('SL')); ?>#</th>
                                            <th style="width: 65%;"><?php echo e(language_data('Award Name')); ?></th>
                                            <th style="width: 25%;"><?php echo e(language_data('Actions')); ?></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($award as $d): ?>
                                            <tr>
                                                <td data-label="SL"><?php echo e($d->id); ?></td>
                                                <td data-label="Expense"><p><?php echo e($d->award); ?></p></td>
                                                <td>


                                                    <a class="btn btn-success btn-xs" href="#" data-toggle="modal" data-target=".modal_edit_award_type_<?php echo e($d->id); ?>"><i class="fa fa-edit"></i> <?php echo e(language_data('Edit')); ?></a>
                                                    <?php echo $__env->make('admin.modal-award-type', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


                                                    <a href="#" class="btn btn-danger btn-xs deleteAward" id="<?php echo e($d->id); ?>"><i class="fa fa-trash"></i> <?php echo e(language_data('Delete')); ?></a>
                                                </td>
                                            </tr>

                                        <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                        <?php /*Job tab*/ ?>
                        <div role="tabpanel" class="tab-pane" id="job">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form class="" role="form" method="post"
                                          action="<?php echo e(url('settings/post-job-file-extension')); ?>">
                                        <h3 class="panel-title"> <?php echo e(language_data('Job File Extension')); ?></h3>

                                        <div class="form-group">
                                            <label><?php echo e(language_data('Supported File Extension')); ?></label>
                                            <span class="help">e.g. "Doc,PDF" (<?php echo e(language_data('Remember: File Extension Separated By Comma')); ?>

                                                )</span>
                                            <input type="text" class="form-control" required name="file_extension"
                                                   value="<?php echo e(app_config('JobFileExtension')); ?>">
                                        </div>


                                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                        <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-save"></i> <?php echo e(language_data('Save')); ?> </button>
                                    </form>
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

    <?php echo Html::script("assets/libs/moment/moment.min.js"); ?>

    <?php echo Html::script("assets/libs/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"); ?>

    <?php echo Html::script("assets/libs/wysihtml5x/wysihtml5x-toolbar.min.js"); ?>

    <?php echo Html::script("assets/libs/handlebars/handlebars.runtime.min.js"); ?>

    <?php echo Html::script("assets/libs/bootstrap3-wysihtml5-bower/bootstrap3-wysihtml5.min.js"); ?>

    <?php echo Html::script("assets/js/form-elements-page.js"); ?>

    <?php echo Html::script("assets/js/bootbox.min.js"); ?>

    <script>
        $(document).ready(function () {

            /*For Delete Expense*/
            $(".deleteExpense").click(function (e) {
                e.preventDefault();
                var id = this.id;
                bootbox.confirm("Are you sure?", function (result) {
                    if (result) {
                        var _url = $("#_url").val();
                        window.location.href = _url + "/settings/delete-expense/" + id;
                    }
                });
            });

            /*For Delete Leave*/
            $(".deleteLeave").click(function (e) {
                e.preventDefault();
                var id = this.id;
                bootbox.confirm("Are you sure?", function (result) {
                    if (result) {
                        var _url = $("#_url").val();
                        window.location.href = _url + "/settings/delete-leave/" + id;
                    }
                });
            });


            /*For Delete Award*/
            $(".deleteAward").click(function (e) {
                e.preventDefault();
                var id = this.id;
                bootbox.confirm("Are you sure?", function (result) {
                    if (result) {
                        var _url = $("#_url").val();
                        window.location.href = _url + "/settings/delete-award/" + id;
                    }
                });
            });




            var EmailGatewaySV = $('.gateway');
            if (EmailGatewaySV.val() == 'default') {
                $('.show-smtp').hide();
            }

            EmailGatewaySV.on('change', function () {
                var value = $(this).val();
                if (value == 'smtp') {
                    $('.show-smtp').show();
                } else {
                    $('.show-smtp').hide();
                }

            });

        });

    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>