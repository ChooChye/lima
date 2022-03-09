<?php /*External Style Section*/ ?>
<?php $__env->startSection('style'); ?>
    <?php echo Html::style("assets/libs/bootstrap3-wysihtml5-bower/bootstrap3-wysihtml5.min.css"); ?>

    <?php echo Html::style("assets/libs/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"); ?>

    <?php echo Html::style("assets/libs/data-table/datatables.min.css"); ?>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>

    <section class="wrapper-bottom-sec">
        <div class="p-30">
            <h2 class="page-title"><?php echo e(language_data('View Profile')); ?></h2>
        </div>
        <div class="p-30 p-t-none p-b-none">
            <?php echo $__env->make('notification.notify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="row">

                <div class="col-lg-12">
                    <div class="panel">
                        <div class="panel-body p-t-20">
                            <div class="clearfix">
                                <div class="pull-left m-r-30">
                                    <div class="thumbnail m-b-none">

                                        <?php if($employee->avatar!=''): ?>
                                            <img src="<?php echo asset('assets/employee_pic/'.$employee->avatar); ?>" alt="Profile Page" width="200px" height="200px">
                                        <?php else: ?>
                                            <img src="<?php echo asset('assets/employee_pic/user.png');?>" alt="Profile Page" width="200px" height="200px">
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="pull-left">
                                    <h3 class="bold font-color-1"><?php echo e($employee->fname); ?> <?php echo e($employee->lname); ?></h3>
                                    <ul class="info-list">
                                        <?php if($employee->email!=''): ?>
                                        <li><span class="info-list-title"><?php echo e(language_data('Email')); ?></span><span class="info-list-des"><?php echo e($employee->email); ?></span></li>
                                        <?php endif; ?>

                                        <?php if($employee->phone!=''): ?>
                                            <li><span class="info-list-title"><?php echo e(language_data('Phone')); ?></span><span class="info-list-des"><?php echo e($employee->phone); ?></span></li>
                                        <?php endif; ?>

                                        <?php if($employee->user_name!=''): ?>
                                            <li><span class="info-list-title"><?php echo e(language_data('Username')); ?></span><span class="info-list-des"><?php echo e($employee->user_name); ?></span></li>
                                        <?php endif; ?>

                                        <?php if($employee->pre_address!=''): ?>
                                        <li><span class="info-list-title"><?php echo e(language_data('Address')); ?></span><span class="info-list-des"><?php echo e($employee->pre_address); ?></span></li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="p-30 p-t-none p-b-none">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#personal_details" aria-controls="home" role="tab" data-toggle="tab"><?php echo e(language_data('Personal Details')); ?></a></li>
                        <li role="presentation"><a href="#bank_information" aria-controls="profile" role="tab" data-toggle="tab"><?php echo e(language_data('Bank Info')); ?></a></li>
                        <li role="presentation"><a href="#document" aria-controls="messages" role="tab" data-toggle="tab"><?php echo e(language_data('Document')); ?></a></li>
                        <li role="presentation"><a href="#change-picture" aria-controls="settings" role="tab" data-toggle="tab"><?php echo e(language_data('Change Picture')); ?></a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content panel p-20">


                        <?php /*Personal Details*/ ?>

                        <div role="tabpanel" class="tab-pane active" id="personal_details">
                            <form role="form" method="post" action="<?php echo e(url('employees/post-employee-personal-info')); ?>">

                                <div class="row">
                                    <div class="col-md-4">

                                        <div class="form-group">
                                            <label><?php echo e(language_data('First Name')); ?></label>
                                            <input type="text" class="form-control" required="" value="<?php echo e($employee->fname); ?>" name="fname">
                                        </div>

                                        <div class="form-group">
                                            <label><?php echo e(language_data('Last Name')); ?></label>
                                            <input type="text" class="form-control" value="<?php echo e($employee->lname); ?>" name="lname">
                                        </div>


                                        <div class="form-group">
                                            <label><?php echo e(language_data('Employee Code')); ?></label>
                                            <span class="help">e.g. "546814" (<?php echo e(language_data('Unique For every User')); ?>)</span>
                                            <input type="text" class="form-control" required name="employee_code" value="<?php echo e($employee->employee_code); ?>">
                                        </div>

                                        <div class="form-group">
                                            <label><?php echo e(language_data('Username')); ?></label>
                                            <span class="help">e.g. "employee" (<?php echo e(language_data('Unique For every User')); ?>)</span>
                                            <input type="text" class="form-control" required name="username" value="<?php echo e($employee->user_name); ?>">
                                        </div>


                                        <div class="form-group">
                                            <label><?php echo e(language_data('Email')); ?></label>
                                            <span class="help">e.g. "coderpixel@gmail.com" (<?php echo e(language_data('Unique For every User')); ?>)</span>
                                            <input type="email" class="form-control" required name="email" value="<?php echo e($employee->email); ?>">
                                        </div>

                                        <div class="form-group">
                                            <label><?php echo e(language_data('Password')); ?></label>
                                            <span class="help"><?php echo e(language_data('Leave blank if you no need to change password')); ?></span>
                                            <input type="password" class="form-control" name="password">
                                        </div>

                                        <div class="form-group">
                                            <label><?php echo e(language_data('Confirm Password')); ?></label>
                                            <span class="help"><?php echo e(language_data('Leave blank if you no need to change password')); ?></span>
                                            <input type="password" class="form-control" name="rpassword">
                                        </div>


                                <div class="form-group">
                                    <label><?php echo e(language_data('Tax Template')); ?></label>
                                    <select class="selectpicker form-control" name="tax" data-live-search="true">
                                    <?php foreach($tax as $t): ?>
                                        <option value="<?php echo e($t->id); ?>" <?php if($employee->tax_id==$t->id): ?> selected <?php endif; ?>><?php echo e($t->tax_name); ?></option>
                                    <?php endforeach; ?>
                                    </select>
                                </div>


                                    </div>




                                    <div class="col-md-4">


                                        <div class="form-group">
                                            <label for="el3"><?php echo e(language_data('Department')); ?></label>
                                            <select class="selectpicker form-control" data-live-search="true" name="department" id="department_id">
                                                <option><?php echo e(language_data('Select Department')); ?></option>
                                                <?php foreach($department as $d): ?>
                                                    <option value="<?php echo e($d->id); ?>" <?php if($employee->department==$d->id): ?> selected <?php endif; ?>>  <?php echo e($d->department); ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="el3"><?php echo e(language_data('Designation')); ?></label>
                                            <select class="selectpicker form-control" data-live-search="true" name="designation" id="designation">
                                                <option value="<?php echo e($employee->designation); ?>"><?php echo e($employee->designation_name->designation); ?></option>
                                            </select>
                                        </div>


                                        <div class="form-group">
                                            <label><?php echo e(language_data('User Role')); ?></label>
                                            <select class="selectpicker form-control" data-live-search="true" name="role">
                                                    <option value="0" <?php if($employee->role_id=='0'): ?> selected <?php endif; ?>><?php echo e(language_data('Employee')); ?></option>
                                                <?php foreach($role as $r): ?>
                                                    <option value="<?php echo e($r->id); ?>" <?php if($employee->role_id==$r->id): ?> selected <?php endif; ?>><?php echo e($r->role_name); ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>



                                        <div class="form-group">
                                            <label><?php echo e(language_data('Date Of Join')); ?></label>
                                            <input type="text" class="form-control datePicker" required="" name="doj" value="<?php echo e(get_date_format($employee->doj)); ?>">
                                        </div>

                                        <div class="form-group">
                                            <label><?php echo e(language_data('Date Of Leave')); ?></label>
                                            <input type="text" class="form-control datePicker" name="dol"  value="<?php echo e(get_date_format($employee->dol)); ?>">
                                        </div>

                                        <div class="form-group">
                                            <label><?php echo e(language_data('Phone Number')); ?></label>
                                            <input type="text" class="form-control"  value="<?php echo e($employee->phone); ?>" name="phone">
                                        </div>

                                        <div class="form-group">
                                            <label><?php echo e(language_data('Alternative Phone')); ?></label>
                                            <input type="text" class="form-control"  value="<?php echo e($employee->phone2); ?>" name="phone2">
                                        </div>

                                        <div class="form-group">
                                            <label><?php echo e(language_data('Status')); ?></label>
                                            <select class="selectpicker form-control" data-live-search="true" name="status">
                                                <option value="active" <?php if($employee->status=='active'): ?> selected <?php endif; ?>><?php echo e(language_data('Active')); ?></option>
                                                <option value="inactive" <?php if($employee->status=='inactive'): ?> selected <?php endif; ?>><?php echo e(language_data('Inactive')); ?></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">





                                        <div class="form-group">
                                            <label><?php echo e(language_data('Father Name')); ?></label>
                                            <input type="text" class="form-control"  value="<?php echo e($employee->father_name); ?>" name="father_name">
                                        </div>



                                        <div class="form-group">
                                            <label><?php echo e(language_data('Mother Name')); ?></label>
                                            <input type="text" class="form-control"  value="<?php echo e($employee->mother_name); ?>" name="mother_name">
                                        </div>

                                        <div class="form-group">
                                            <label><?php echo e(language_data('Date Of Birth')); ?></label>
                                            <input type="text" class="form-control datePicker" name="dob" value="<?php echo e(get_date_format($employee->dob)); ?>">
                                        </div>


                                <div class="form-group">
                                    <label><?php echo e(language_data('Gender')); ?></label>
                                    <select class="selectpicker form-control" name="gender">
                                        <option value="Male" <?php if($employee->gender=='Male'): ?> selected <?php endif; ?>><?php echo e(language_data('Male')); ?></option>
                                        <option value="Female" <?php if($employee->gender=='Female'): ?> selected <?php endif; ?>><?php echo e(language_data('Female')); ?></option>
                                    </select>
                                </div>


                                        <div class="form-group">
                                            <label><?php echo e(language_data('Present Address')); ?></label>
                                            <textarea class="form-control" rows="6" name="pre_address"><?php echo e($employee->pre_address); ?></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label><?php echo e(language_data('Permanent Address')); ?></label>
                                            <textarea class="form-control" rows="6" name="per_address"><?php echo e($employee->per_address); ?></textarea>
                                        </div>

                                    </div>

                                    <div class="col-md-12">
                                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                        <input type="hidden" value="<?php echo e($employee->id); ?>" name="cmd">
                                        <input type="submit" value="<?php echo e(language_data('Update')); ?>" class="btn btn-success pull-right">

                                    </div>
                                </div>


                            </form>

                        </div>



                        <div role="tabpanel" class="tab-pane" id="bank_information">
                            <div class="row">

                                <div class="col-lg-3">
                                    <div class="panel">
                                        <div class="panel-body">
                                            <form class="" role="form" method="post" action="<?php echo e(url('employee/add-bank-account')); ?>">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title"> <?php echo e(language_data('Add Bank Account')); ?></h3>
                                                </div>

                                                <div class="form-group">
                                                    <label><?php echo e(language_data('Bank Name')); ?></label>
                                                    <span class="help">e.g. "United State Bank"</span>
                                                    <input type="text" class="form-control" required name="bank_name">
                                                </div>

                                                <div class="form-group">
                                                    <label><?php echo e(language_data('Branch Name')); ?></label>
                                                    <span class="help">e.g. "Washington Branch"</span>
                                                    <input type="text" class="form-control" required name="branch_name">
                                                </div>

                                                <div class="form-group">
                                                    <label><?php echo e(language_data('Account Name')); ?></label>
                                                    <span class="help">e.g. "Abul Kashem Shamim"</span>
                                                    <input type="text" class="form-control" required name="account_name">
                                                </div>

                                                <div class="form-group">
                                                    <label><?php echo e(language_data('Account Number')); ?></label>
                                                    <span class="help">e.g. "1015463115661214"</span>
                                                    <input type="text" class="form-control" required name="account_number">
                                                </div>

                                                <div class="form-group">
                                                    <label><?php echo e(language_data('IFSC Code')); ?></label>
                                                    <input type="text" class="form-control" name="ifsc_code">
                                                </div>

                                                <div class="form-group">
                                                    <label><?php echo e(language_data('PAN Number')); ?></label>
                                                    <input type="text" class="form-control" name="pan_number">
                                                </div>

                                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                                <input type="hidden" value="<?php echo e($employee->id); ?>" name="cmd">
                                                <button type="submit" class="btn btn-success btn-sm pull-right"><i class="fa fa-plus"></i> <?php echo e(language_data('Add')); ?> </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-9">
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <h3 class="panel-title"><?php echo e(language_data('All Bank Accounts')); ?></h3>
                                        </div>
                                        <div class="panel-body p-none">
                                            <table class="table data-table table-hover table-ultra-responsive">
                                                <thead>
                                                <tr>
                                                    <th style="width: 25%;"><?php echo e(language_data('Bank Name')); ?></th>
                                                    <th style="width: 20%;"><?php echo e(language_data('Branch')); ?></th>
                                                    <th style="width: 20%;"><?php echo e(language_data('Account Name')); ?></th>
                                                    <th style="width: 10%;"><?php echo e(language_data('Account No')); ?></th>
                                                    <th style="width: 10%;"><?php echo e(language_data('IFSC Code')); ?></th>
                                                    <th style="width: 10%;"><?php echo e(language_data('PAN No')); ?></th>
                                                    <th style="width: 5%;" class="text-right"></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php foreach($bank_accounts as $ba): ?>
                                                    <tr>
                                                        <td data-label="Bank Name"><?php echo e($ba->bank_name); ?></td>
                                                        <td data-label="Branch Name"><p><?php echo e($ba->branch_name); ?></p></td>
                                                        <td data-label="Account Name"><p><?php echo e($ba->account_name); ?></p></td>
                                                        <td data-label="Account No"><p><?php echo e($ba->account_number); ?></p></td>
                                                        <td data-label="IFSC Code"><p><?php echo e($ba->ifsc_code); ?></p></td>
                                                        <td data-label="PAN No"><p><?php echo e($ba->pan_no); ?></p></td>
                                                        <td class="text-right">
                                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Delete" class="btn btn-danger btn-xs deleteBankAccount" id="<?php echo e($ba->id); ?>"><i class="fa fa-trash"></i></a>
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

                        <div role="tabpanel" class="tab-pane" id="document">

                            <div class="row">

                                <div class="col-lg-3">
                                    <div class="panel">
                                        <div class="panel-body">
                                            <form class="" role="form" method="post" action="<?php echo e(url('employee/add-document')); ?>" enctype="multipart/form-data">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title"> <?php echo e(language_data('Add Document')); ?></h3>
                                                </div>

                                                <div class="form-group">
                                                    <label><?php echo e(language_data('Document Name')); ?></label>
                                                    <span class="help">e.g. "Resume, Joining Letter etc"</span>
                                                    <input type="text" class="form-control" required name="document_name">
                                                </div>

                                                <div class="form-group">

                                                    <label><?php echo e(language_data('Select Document')); ?></label>
                                                    <div class="input-group input-group-file">
                                                            <span class="input-group-btn">
                                                                <span class="btn btn-primary btn-file">
                                                                    <?php echo e(language_data('Browse')); ?> <input type="file" class="form-control" name="file">
                                                                </span>
                                                            </span>
                                                        <input type="text" class="form-control" readonly="">
                                                    </div>
                                                </div>

                                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                                <input type="hidden" value="<?php echo e($employee->id); ?>" name="cmd">
                                                <button type="submit" class="btn btn-success btn-sm pull-right"><i class="fa fa-plus"></i> <?php echo e(language_data('Add')); ?> </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-9">
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <h3 class="panel-title"><?php echo e(language_data('All Documents')); ?></h3>
                                        </div>
                                        <div class="panel-body p-none">
                                            <table class="table data-table table-hover table-ultra-responsive">
                                                <thead>
                                                <tr>
                                                    <th style="width: 65%;"><?php echo e(language_data('Document Name')); ?></th>
                                                    <th style="width: 35%;" class="text-right"><?php echo e(language_data('Actions')); ?></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php foreach($employee_doc as $ed): ?>
                                                    <tr>
                                                        <td data-label="Document Name"><?php echo e($ed->file_title); ?></td>
                                                        <td class="text-right">
                                                            <a href="<?php echo e(url('employee/download-employee-document/'.$ed->id)); ?>" class="btn btn-success btn-xs"><i class="fa fa-download"></i> <?php echo e(language_data('Download')); ?></a>
                                                            <a href="#" class="btn btn-danger btn-xs deleteEmployeeDoc" id="<?php echo e($ed->id); ?>"><i class="fa fa-trash"></i> <?php echo e(language_data('Delete')); ?></a>
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

                        <div role="tabpanel" class="tab-pane" id="change-picture">
                            <form role="form" action="<?php echo e(url('employees/update-employee-avatar')); ?>" method="post" enctype="multipart/form-data">

                                <div class="row">
                                    <div class="col-md-4">

                                        <div class="form-group input-group input-group-file">
                                                <span class="input-group-btn">
                                                    <span class="btn btn-primary btn-file">
                                                        <?php echo e(language_data('Browse')); ?> <input type="file" class="form-control" name="image">
                                                    </span>
                                                </span>
                                            <input type="text" class="form-control" readonly="">
                                        </div>

                                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                        <input type="hidden" value="<?php echo e($employee->id); ?>" name="cmd">
                                        <input type="submit" value="<?php echo e(language_data('Update')); ?>" class="btn btn-primary">

                                    </div>

                                </div>

                            </form>
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

    <?php echo Html::script("assets/libs/wysihtml5x/wysihtml5x-toolbar.min.js"); ?>

    <?php echo Html::script("assets/libs/bootstrap3-wysihtml5-bower/bootstrap3-wysihtml5.min.js"); ?>

    <?php echo Html::script("assets/libs/data-table/datatables.min.js"); ?>

    <?php echo Html::script("assets/js/form-elements-page.js"); ?>

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
                    url: _url + '/employee/get-designation',
                    data: dataString,
                    cache: false,
                    success: function ( data ) {
                        $("#designation").html( data).removeAttr('disabled').selectpicker('refresh');
                    }
                });
            });


            /*For Delete Bank Account*/
            $(".deleteBankAccount").click(function (e) {
                e.preventDefault();
                var id = this.id;
                bootbox.confirm("Are you sure?", function (result) {
                    if (result) {
                        var _url = $("#_url").val();
                        window.location.href = _url + "/employee/delete-bank-account/" + id;
                    }
                });
            });

            /*For Delete Employee Doc*/
            $(".deleteEmployeeDoc").click(function (e) {
                e.preventDefault();
                var id = this.id;
                bootbox.confirm("Are you sure?", function (result) {
                    if (result) {
                        var _url = $("#_url").val();
                        window.location.href = _url + "/employee/delete-employee-doc/" + id;
                    }
                });
            });


        });
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>