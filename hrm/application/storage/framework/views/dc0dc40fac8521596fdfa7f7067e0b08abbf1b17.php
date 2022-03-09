<?php /*External Style Section*/ ?>
<?php $__env->startSection('style'); ?>
    <?php echo Html::style("assets/libs/data-table/datatables.min.css"); ?>

    <?php echo Html::style("assets/libs/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <section class="wrapper-bottom-sec">
        <div class="p-30">
            <h2 class="page-title"><?php echo e(language_data('Employee Payroll Summery')); ?></h2>
        </div>
        <div class="p-30 p-t-none p-b-none">
            <?php echo $__env->make('notification.notify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="row">

                <div class="col-lg-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo e(language_data('Employee Payroll Summery')); ?></h3>
                        </div>
                        <div class="panel-body p-none">
                            <table class="table data-table table-hover table-ultra-responsive">
                                <thead>
                                <tr>
                                    <th style="width: 10%;"><?php echo e(language_data('Code')); ?>#</th>
                                    <th style="width: 20%;"><?php echo e(language_data('Name')); ?></th>
                                    <th style="width: 20%;"><?php echo e(language_data('Username')); ?></th>
                                    <th style="width: 20%;"><?php echo e(language_data('Designation')); ?></th>
                                    <th style="width: 30%;"><?php echo e(language_data('Actions')); ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($employees as $d): ?>
                                <tr>
                                    <td data-label="SL"><?php echo e($d->employee_code); ?></td>
                                    <td data-label="Name"><p><?php echo e($d->fname); ?> <?php echo e($d->lname); ?></p></td>
                                    <td data-label="Username"><p><?php echo e($d->user_name); ?></p></td>
                                    <td data-label="Designation"><p><?php echo e($d->designation_name->designation); ?></p></td>

                                    <td data-label="Actions">

                                        <a class="btn btn-success btn-xs" href="#" data-toggle="modal" data-target=".modal_get_salary_statement_<?php echo e($d->id); ?>"><i class="fa fa-line-chart"></i> <?php echo e(language_data('Salary Statement')); ?></a>
                                        <?php echo $__env->make('admin.modal-salary-statement', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                                        <a class="btn btn-complete btn-xs" href="<?php echo e(url('reports/employee-summery/'.$d->id)); ?>" ><i class="fa fa-bar-chart"></i> <?php echo e(language_data('Employee Summery')); ?></a>
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
    <?php echo Html::script("assets/libs/handlebars/handlebars.runtime.min.js"); ?>

    <?php echo Html::script("assets/libs/moment/moment.min.js"); ?>

    <?php echo Html::script("assets/libs/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"); ?>

    <?php echo Html::script("assets/js/form-elements-page.js"); ?>

    <?php echo Html::script("assets/libs/data-table/datatables.min.js"); ?>

    <?php echo Html::script("assets/js/bootbox.min.js"); ?>


    <script>
        $(document).ready(function(){
            $('.data-table').DataTable();
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>