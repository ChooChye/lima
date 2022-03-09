<?php /*External Style Section*/ ?>
<?php $__env->startSection('style'); ?>
    <?php echo Html::style("assets/libs/data-table/datatables.min.css"); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <section class="wrapper-bottom-sec">
        <div class="p-30">
            <h2 class="page-title"><?php echo e(language_data('Payment History')); ?></h2>
        </div>
        <div class="p-30 p-t-none p-b-none">
            <?php echo $__env->make('notification.notify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="row">

                <div class="col-lg-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo e(language_data('Payment History')); ?></h3>
                        </div>
                        <div class="panel-body p-none">
                            <table class="table data-table table-hover table-ultra-responsive">
                                <thead>
                                <tr>
                                    <th style="width: 25%;"><?php echo e(language_data('Payment Month')); ?></th>
                                    <th style="width: 25%;"><?php echo e(language_data('Payment Date')); ?></th>
                                    <th style="width: 15%;"><?php echo e(language_data('Paid Amount')); ?></th>
                                    <th style="width: 20%;"><?php echo e(language_data('Payment Type')); ?></th>
                                    <th style="width: 15%;" class="text-right"><?php echo e(language_data('Actions')); ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($payslip as $p): ?>
                                    <tr>
                                        <td data-label="payment month"><?php echo e($p->payment_month); ?></td>
                                        <td data-label="payment Month"><p><?php echo e(get_date_format($p->payment_date)); ?></p></td>
                                        <td data-label="paid amount"><p><?php echo e($p->total_salary); ?></p></td>
                                        <td data-label="payment type"><p><?php echo e($p->payment_type); ?></p></td>
                                        <td data-label="Actions" class="text-right">
                                            <a class="btn btn-success btn-xs" href="<?php echo e(url('employee/payslip/view/'.$p->id)); ?>"><i class="fa fa-eye"></i> <?php echo e(language_data('View')); ?></a>
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

    <?php echo Html::script("assets/libs/data-table/datatables.min.js"); ?>

    <?php echo Html::script("assets/js/form-elements-page.js"); ?>

    <script>
        $(document).ready(function () {
            /*For DataTable*/
            $('.data-table').DataTable();
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('employee', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>