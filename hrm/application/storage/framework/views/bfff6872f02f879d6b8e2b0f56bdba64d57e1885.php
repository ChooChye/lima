<?php $__env->startSection('content'); ?>

    <section class="wrapper-bottom-sec">
        <div class="p-30">
            <h2 class="page-title"><?php echo e($emp_roles->role_name); ?></h2>
        </div>
        <div class="p-30 p-t-none p-b-none">

            <?php echo $__env->make('notification.notify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="row">

                <div class="col-lg-6">
                    <div class="panel">
                        <div class="panel-body">
                            <form class="" role="form" action="<?php echo e(url('employees/update-employee-set-roles')); ?>" method="post">
                                <div class="panel-heading">
                                    <h3 class="panel-title"> <?php echo e(language_data('Set Roles')); ?></h3>
                                </div>


                                <div class="form-group">
                                    <div class="coder-checkbox">
                                        <input type="checkbox" <?php if(permission($emp_roles->id,1)): ?> checked <?php endif; ?> name="perms[]" value="1">
                                        <span class="co-check-ui"></span>
                                        <label><?php echo e(language_data('Dashboard')); ?></label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="coder-checkbox">
                                        <input type="checkbox"  <?php if(permission($emp_roles->id,2)): ?> checked <?php endif; ?> name="perms[]" value="2">
                                        <span class="co-check-ui"></span>
                                        <label><?php echo e(language_data('Departments')); ?></label>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="coder-checkbox">
                                        <input type="checkbox"  <?php if(permission($emp_roles->id,3)): ?> checked <?php endif; ?> name="perms[]" value="3">
                                        <span class="co-check-ui"></span>
                                        <label><?php echo e(language_data('Designations')); ?></label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="coder-checkbox">
                                        <input type="checkbox"  <?php if(permission($emp_roles->id,4)): ?> checked <?php endif; ?> name="perms[]" value="4">
                                        <span class="co-check-ui"></span>
                                        <label><?php echo e(language_data('Employees')); ?></label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="coder-checkbox">
                                        <input type="checkbox"  <?php if(permission($emp_roles->id,5)): ?> checked <?php endif; ?> name="perms[]" value="5">
                                        <span class="co-check-ui"></span>
                                        <label><?php echo e(language_data('Add Employee')); ?></label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="coder-checkbox">
                                        <input type="checkbox"  <?php if(permission($emp_roles->id,6)): ?> checked <?php endif; ?> name="perms[]" value="6">
                                        <span class="co-check-ui"></span>
                                        <label><?php echo e(language_data('Update')); ?> <?php echo e(language_data('Employee')); ?></label>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="coder-checkbox">
                                        <input type="checkbox"  <?php if(permission($emp_roles->id,7)): ?> checked <?php endif; ?> name="perms[]" value="7">
                                        <span class="co-check-ui"></span>
                                        <label><?php echo e(language_data('Delete')); ?> <?php echo e(language_data('Employee')); ?></label>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="coder-checkbox">
                                        <input type="checkbox"  <?php if(permission($emp_roles->id,8)): ?> checked <?php endif; ?> name="perms[]" value="8">
                                        <span class="co-check-ui"></span>
                                        <label><?php echo e(language_data('Employee Roles')); ?></label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="coder-checkbox">
                                        <input type="checkbox"  <?php if(permission($emp_roles->id,9)): ?> checked <?php endif; ?> name="perms[]" value="9">
                                        <span class="co-check-ui"></span>
                                        <label><?php echo e(language_data('Add')); ?> <?php echo e(language_data('Employee Roles')); ?></label>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="coder-checkbox">
                                        <input type="checkbox"  <?php if(permission($emp_roles->id,10)): ?> checked <?php endif; ?> name="perms[]" value="10">
                                        <span class="co-check-ui"></span>
                                        <label><?php echo e(language_data('Delete')); ?> <?php echo e(language_data('Employee Roles')); ?></label>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="coder-checkbox">
                                        <input type="checkbox"  <?php if(permission($emp_roles->id,11)): ?> checked <?php endif; ?> name="perms[]" value="11">
                                        <span class="co-check-ui"></span>
                                        <label><?php echo e(language_data('Job Application')); ?></label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="coder-checkbox">
                                        <input type="checkbox"  <?php if(permission($emp_roles->id,12)): ?> checked <?php endif; ?> name="perms[]" value="12">
                                        <span class="co-check-ui"></span>
                                        <label><?php echo e(language_data('Add New Job')); ?></label>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="coder-checkbox">
                                        <input type="checkbox"  <?php if(permission($emp_roles->id,13)): ?> checked <?php endif; ?> name="perms[]" value="13">
                                        <span class="co-check-ui"></span>
                                        <label><?php echo e(language_data('Job Applicants')); ?></label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="coder-checkbox">
                                        <input type="checkbox"  <?php if(permission($emp_roles->id,14)): ?> checked <?php endif; ?> name="perms[]" value="14">
                                        <span class="co-check-ui"></span>
                                        <label><?php echo e(language_data('Attendance Report')); ?></label>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="coder-checkbox">
                                        <input type="checkbox"  <?php if(permission($emp_roles->id,15)): ?> checked <?php endif; ?> name="perms[]" value="15">
                                        <span class="co-check-ui"></span>
                                        <label><?php echo e(language_data('Update Attendance')); ?></label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="coder-checkbox">
                                        <input type="checkbox"  <?php if(permission($emp_roles->id,16)): ?> checked <?php endif; ?> name="perms[]" value="16">
                                        <span class="co-check-ui"></span>
                                        <label><?php echo e(language_data('Leave Application')); ?></label>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="coder-checkbox">
                                        <input type="checkbox"  <?php if(permission($emp_roles->id,17)): ?> checked <?php endif; ?> name="perms[]" value="17">
                                        <span class="co-check-ui"></span>
                                        <label><?php echo e(language_data('Holiday')); ?></label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="coder-checkbox">
                                        <input type="checkbox"  <?php if(permission($emp_roles->id,18)): ?> checked <?php endif; ?> name="perms[]" value="18">
                                        <span class="co-check-ui"></span>
                                        <label><?php echo e(language_data('Add New Holiday')); ?></label>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="coder-checkbox">
                                        <input type="checkbox"  <?php if(permission($emp_roles->id,19)): ?> checked <?php endif; ?> name="perms[]" value="19">
                                        <span class="co-check-ui"></span>
                                        <label><?php echo e(language_data('Award List')); ?></label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="coder-checkbox">
                                        <input type="checkbox"  <?php if(permission($emp_roles->id,20)): ?> checked <?php endif; ?> name="perms[]" value="20">
                                        <span class="co-check-ui"></span>
                                        <label><?php echo e(language_data('Add New Award')); ?></label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="coder-checkbox">
                                        <input type="checkbox"  <?php if(permission($emp_roles->id,21)): ?> checked <?php endif; ?> name="perms[]" value="21">
                                        <span class="co-check-ui"></span>
                                        <label><?php echo e(language_data('Notice Board')); ?></label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="coder-checkbox">
                                        <input type="checkbox"  <?php if(permission($emp_roles->id,22)): ?> checked <?php endif; ?> name="perms[]" value="22">
                                        <span class="co-check-ui"></span>
                                        <label><?php echo e(language_data('Add New Notice')); ?></label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="coder-checkbox">
                                        <input type="checkbox"  <?php if(permission($emp_roles->id,23)): ?> checked <?php endif; ?> name="perms[]" value="23">
                                        <span class="co-check-ui"></span>
                                        <label><?php echo e(language_data('Expense')); ?></label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="coder-checkbox">
                                        <input type="checkbox"  <?php if(permission($emp_roles->id,24)): ?> checked <?php endif; ?> name="perms[]" value="24">
                                        <span class="co-check-ui"></span>
                                        <label><?php echo e(language_data('Add New Expense')); ?></label>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="coder-checkbox">
                                        <input type="checkbox"  <?php if(permission($emp_roles->id,25)): ?> checked <?php endif; ?> name="perms[]" value="25">
                                        <span class="co-check-ui"></span>
                                        <label><?php echo e(language_data('Employee Salary List')); ?></label>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="coder-checkbox">
                                        <input type="checkbox"  <?php if(permission($emp_roles->id,26)): ?> checked <?php endif; ?> name="perms[]" value="26">
                                        <span class="co-check-ui"></span>
                                        <label><?php echo e(language_data('Employee Salary Increment')); ?></label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="coder-checkbox">
                                        <input type="checkbox"  <?php if(permission($emp_roles->id,27)): ?> checked <?php endif; ?> name="perms[]" value="27">
                                        <span class="co-check-ui"></span>
                                        <label><?php echo e(language_data('Make Payment')); ?></label>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="coder-checkbox">
                                        <input type="checkbox"  <?php if(permission($emp_roles->id,28)): ?> checked <?php endif; ?> name="perms[]" value="28">
                                        <span class="co-check-ui"></span>
                                        <label><?php echo e(language_data('Generate Payslip')); ?></label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="coder-checkbox">
                                        <input type="checkbox"  <?php if(permission($emp_roles->id,29)): ?> checked <?php endif; ?> name="perms[]" value="29">
                                        <span class="co-check-ui"></span>
                                        <label><?php echo e(language_data('Provident Fund')); ?></label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="coder-checkbox">
                                        <input type="checkbox"  <?php if(permission($emp_roles->id,30)): ?> checked <?php endif; ?> name="perms[]" value="30">
                                        <span class="co-check-ui"></span>
                                        <label><?php echo e(language_data('Loan')); ?></label>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="coder-checkbox">
                                        <input type="checkbox"  <?php if(permission($emp_roles->id,31)): ?> checked <?php endif; ?> name="perms[]" value="31">
                                        <span class="co-check-ui"></span>
                                        <label><?php echo e(language_data('Employee Training')); ?></label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="coder-checkbox">
                                        <input type="checkbox"  <?php if(permission($emp_roles->id,32)): ?> checked <?php endif; ?> name="perms[]" value="32">
                                        <span class="co-check-ui"></span>
                                        <label><?php echo e(language_data('Add')); ?> <?php echo e(language_data('Employee Training')); ?></label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="coder-checkbox">
                                        <input type="checkbox"  <?php if(permission($emp_roles->id,33)): ?> checked <?php endif; ?> name="perms[]" value="33">
                                        <span class="co-check-ui"></span>
                                        <label><?php echo e(language_data('Training Needs Assessment')); ?></label>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="coder-checkbox">
                                        <input type="checkbox"  <?php if(permission($emp_roles->id,34)): ?> checked <?php endif; ?> name="perms[]" value="34">
                                        <span class="co-check-ui"></span>
                                        <label><?php echo e(language_data('Add')); ?> <?php echo e(language_data('Training Needs Assessment')); ?></label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="coder-checkbox">
                                        <input type="checkbox"  <?php if(permission($emp_roles->id,35)): ?> checked <?php endif; ?> name="perms[]" value="35">
                                        <span class="co-check-ui"></span>
                                        <label><?php echo e(language_data('Training Events')); ?></label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="coder-checkbox">
                                        <input type="checkbox"  <?php if(permission($emp_roles->id,36)): ?> checked <?php endif; ?> name="perms[]" value="36">
                                        <span class="co-check-ui"></span>
                                        <label><?php echo e(language_data('Add')); ?> <?php echo e(language_data('Training Events')); ?></label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="coder-checkbox">
                                        <input type="checkbox"  <?php if(permission($emp_roles->id,37)): ?> checked <?php endif; ?> name="perms[]" value="37">
                                        <span class="co-check-ui"></span>
                                        <label><?php echo e(language_data('Trainers')); ?></label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="coder-checkbox">
                                        <input type="checkbox"  <?php if(permission($emp_roles->id,38)): ?> checked <?php endif; ?> name="perms[]" value="38">
                                        <span class="co-check-ui"></span>
                                        <label><?php echo e(language_data('Add New Trainer')); ?></label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="coder-checkbox">
                                        <input type="checkbox"  <?php if(permission($emp_roles->id,39)): ?> checked <?php endif; ?> name="perms[]" value="39">
                                        <span class="co-check-ui"></span>
                                        <label><?php echo e(language_data('Training Evaluations')); ?></label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="coder-checkbox">
                                        <input type="checkbox"  <?php if(permission($emp_roles->id,40)): ?> checked <?php endif; ?> name="perms[]" value="40">
                                        <span class="co-check-ui"></span>
                                        <label><?php echo e(language_data('Task')); ?></label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="coder-checkbox">
                                        <input type="checkbox"  <?php if(permission($emp_roles->id,41)): ?> checked <?php endif; ?> name="perms[]" value="41">
                                        <span class="co-check-ui"></span>
                                        <label><?php echo e(language_data('Add New Task')); ?></label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="coder-checkbox">
                                        <input type="checkbox"  <?php if(permission($emp_roles->id,42)): ?> checked <?php endif; ?> name="perms[]" value="42">
                                        <span class="co-check-ui"></span>
                                        <label><?php echo e(language_data('Support Tickets')); ?></label>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="coder-checkbox">
                                        <input type="checkbox"  <?php if(permission($emp_roles->id,43)): ?> checked <?php endif; ?> name="perms[]" value="43">
                                        <span class="co-check-ui"></span>
                                        <label><?php echo e(language_data('Create New Ticket')); ?></label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="coder-checkbox">
                                        <input type="checkbox"  <?php if(permission($emp_roles->id,44)): ?> checked <?php endif; ?> name="perms[]" value="44">
                                        <span class="co-check-ui"></span>
                                        <label><?php echo e(language_data('Manage Support Ticket')); ?></label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="coder-checkbox">
                                        <input type="checkbox"  <?php if(permission($emp_roles->id,45)): ?> checked <?php endif; ?> name="perms[]" value="45">
                                        <span class="co-check-ui"></span>
                                        <label><?php echo e(language_data('Support Department')); ?></label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="coder-checkbox">
                                        <input type="checkbox"  <?php if(permission($emp_roles->id,46)): ?> checked <?php endif; ?> name="perms[]" value="46">
                                        <span class="co-check-ui"></span>
                                        <label><?php echo e(language_data('Add')); ?> <?php echo e(language_data('Support Department')); ?></label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="coder-checkbox">
                                        <input type="checkbox"  <?php if(permission($emp_roles->id,47)): ?> checked <?php endif; ?> name="perms[]" value="47">
                                        <span class="co-check-ui"></span>
                                        <label><?php echo e(language_data('Employee Payroll Summery')); ?></label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="coder-checkbox">
                                        <input type="checkbox"  <?php if(permission($emp_roles->id,48)): ?> checked <?php endif; ?> name="perms[]" value="48">
                                        <span class="co-check-ui"></span>
                                        <label><?php echo e(language_data('System Settings')); ?></label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="coder-checkbox">
                                        <input type="checkbox"  <?php if(permission($emp_roles->id,49)): ?> checked <?php endif; ?> name="perms[]" value="49">
                                        <span class="co-check-ui"></span>
                                        <label><?php echo e(language_data('Localization')); ?></label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="coder-checkbox">
                                        <input type="checkbox"  <?php if(permission($emp_roles->id,50)): ?> checked <?php endif; ?> name="perms[]" value="50">
                                        <span class="co-check-ui"></span>
                                        <label><?php echo e(language_data('Email Templates')); ?></label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="coder-checkbox">
                                        <input type="checkbox"  <?php if(permission($emp_roles->id,51)): ?> checked <?php endif; ?> name="perms[]" value="51">
                                        <span class="co-check-ui"></span>
                                        <label><?php echo e(language_data('Tax Rules')); ?></label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="coder-checkbox">
                                        <input type="checkbox"  <?php if(permission($emp_roles->id,52)): ?> checked <?php endif; ?> name="perms[]" value="52">
                                        <span class="co-check-ui"></span>
                                        <label><?php echo e(language_data('Add Tax Rule')); ?></label>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="coder-checkbox">
                                        <input type="checkbox"  <?php if(permission($emp_roles->id,53)): ?> checked <?php endif; ?> name="perms[]" value="53">
                                        <span class="co-check-ui"></span>
                                        <label><?php echo e(language_data('Language')); ?></label>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="coder-checkbox">
                                        <input type="checkbox"  <?php if(permission($emp_roles->id,54)): ?> checked <?php endif; ?> name="perms[]" value="54">
                                        <span class="co-check-ui"></span>
                                        <label><?php echo e(language_data('Add')); ?> <?php echo e(language_data('Language')); ?></label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="coder-checkbox">
                                        <input type="checkbox"  <?php if(permission($emp_roles->id,55)): ?> checked <?php endif; ?> name="perms[]" value="55">
                                        <span class="co-check-ui"></span>
                                        <label><?php echo e(language_data('Sms Gateways')); ?></label>
                                    </div>
                                </div>



                                <input type="hidden" value="<?php echo e($emp_roles->id); ?>" name="role_id">
                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                <button type="submit" class="btn btn-success btn-sm pull-right"><i class="fa fa-save"></i> <?php echo e(language_data('Update')); ?> </button>
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

    <?php echo Html::script("assets/js/form-elements-page.js"); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>