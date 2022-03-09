<?php /*External Style Section*/ ?>
<?php $__env->startSection('style'); ?>
    <?php echo Html::style("assets/libs/data-table/datatables.min.css"); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <section class="wrapper-bottom-sec">
        <div class="p-30">
            <h2 class="page-title"><?php echo e(language_data('Award List')); ?></h2>
        </div>
        <div class="p-30 p-t-none p-b-none">
            <?php echo $__env->make('notification.notify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="row">

                <div class="col-lg-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo e(language_data('Award List')); ?></h3>
                        </div>
                        <div class="panel-body p-none">
                            <table class="table data-table table-hover table-ultra-responsive">
                                <thead>
                                <tr>
                                    <th style="width: 5%;"><?php echo e(language_data('SL')); ?>#</th>
                                    <th style="width: 35%;"><?php echo e(language_data('Award Name')); ?></th>
                                    <th style="width: 35%;"><?php echo e(language_data('Gift')); ?></th>
                                    <th style="width: 25%;"><?php echo e(language_data('Month')); ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($award as $d): ?>
                                    <tr>
                                        <td data-label="SL"><?php echo e($d->id); ?></td>
                                        <td data-label="Award"><p><?php echo e($d->award_name->award); ?></p></td>
                                        <td data-label="gift"><p><?php echo e($d->gift); ?></p></td>
                                        <td data-label="month"><p><?php echo e($d->month); ?> <?php echo e($d->year); ?> </p></td>
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


    <script>
        $(document).ready(function () {
            /*For DataTable*/
            $('.data-table').DataTable();
       });
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('employee', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>