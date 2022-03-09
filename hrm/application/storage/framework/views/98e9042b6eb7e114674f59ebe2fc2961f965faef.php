<?php $__env->startSection('content'); ?>

    <section class="wrapper-bottom-sec">
        <div class="p-30">
            <h2 class="page-title"><?php echo e(language_data('Add Employee')); ?></h2>
        </div>
        <div class="p-30 p-t-none p-b-none">

            <?php echo $__env->make('notification.notify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="row">

                <div class="col-lg-6">
                    <div class="panel">
                        <div class="panel-body">
                            <form class="" role="form" action="<?php echo e(url('employees/add-employee-post')); ?>" method="post">
                                <div class="panel-heading">
                                    <h3 class="panel-title"> <?php echo e(language_data('Add Employee')); ?></h3>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('First Name')); ?></label>
                                    <span class="help">e.g. "Jhon"</span>
                                    <input type="text" class="form-control" required name="fname">
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Last Name')); ?></label>
                                    <span class="help">e.g. "Doe"</span>
                                    <input type="text" class="form-control" name="lname">
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Employee Code')); ?></label>
                                    <span class="help">e.g. "546814" (<?php echo e(language_data('Unique For every User')); ?>)</span>
                                    <input type="text" class="form-control" required name="employee_code">
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Username')); ?></label>
                                    <span class="help">e.g. "employee" (<?php echo e(language_data('Unique For every User')); ?>)</span>
                                    <input type="text" class="form-control" required name="username">
                                </div>


                                <div class="form-group">
                                    <label><?php echo e(language_data('Email')); ?></label>
                                    <span class="help">e.g. "coderpixel@gmail.com" (<?php echo e(language_data('Unique For every User')); ?>)</span>
                                    <input type="email" class="form-control" required name="email">
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Password')); ?></label>
                                    <input type="password" class="form-control" required name="password">
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Confirm Password')); ?></label>
                                    <input type="password" class="form-control" required name="rpassword">
                                </div>

                                <div class="form-group">
                                    <label for="el3"><?php echo e(language_data('Department')); ?></label>
                                    <select class="selectpicker form-control" data-live-search="true" name="department" id="department_id">
                                        <option><?php echo e(language_data('Select Department')); ?></option>
                                        <?php foreach($department as $d): ?>
                                            <option value="<?php echo e($d->id); ?>"> <?php echo e($d->department); ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="el3"><?php echo e(language_data('Designation')); ?></label>
                                    <select class="selectpicker form-control" data-live-search="true" disabled name="designation" id="designation">
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Gender')); ?></label>
                                    <select class="selectpicker form-control" name="gender">
                                        <option value="Male"><?php echo e(language_data('Male')); ?></option>
                                        <option value="Female"><?php echo e(language_data('Female')); ?></option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Tax Template')); ?></label>
                                    <select class="selectpicker form-control" name="tax" data-live-search="true">
                                    <?php foreach($tax as $t): ?>
                                        <option value="<?php echo e($t->id); ?>"><?php echo e($t->tax_name); ?></option>
                                    <?php endforeach; ?>
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label><?php echo e(language_data('User Role')); ?></label>
                                    <select class="selectpicker form-control" data-live-search="true" name="role">
                                        <option value="0" selected><?php echo e(language_data('Employee')); ?></option>
                                        <?php foreach($role as $r): ?>
                                        <option value="<?php echo e($r->id); ?>"><?php echo e($r->role_name); ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                <button type="submit" class="btn btn-success btn-sm pull-right"><i class="fa fa-plus"></i> <?php echo e(language_data('Add')); ?> </button>
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


    <script>
        $(document).ready(function () {

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

        });
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>