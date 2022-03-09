<?php /*External Style Section*/ ?>
<?php $__env->startSection('style'); ?>
    <?php echo Html::style("assets/libs/bootstrap3-wysihtml5-bower/bootstrap3-wysihtml5.min.css"); ?>

    <?php echo Html::style("assets/libs/data-table/datatables.min.css"); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <section class="wrapper-bottom-sec">
        <div class="p-30">
            <h2 class="page-title"><?php echo e(language_data('Job Applicants')); ?></h2>
        </div>
        <div class="p-30 p-t-none p-b-none">
            <?php echo $__env->make('notification.notify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="row">

                <div class="col-lg-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo e(language_data('Job Applicants')); ?></h3>
                        </div>
                        <div class="panel-body p-none">
                            <table class="table data-table table-hover table-ultra-responsive">
                                <thead>
                                <tr>
                                    <th style="width: 5%;"><?php echo e(language_data('SL')); ?>#</th>
                                    <th style="width: 15%;"><?php echo e(language_data('Position')); ?></th>
                                    <th style="width: 15%;"><?php echo e(language_data('Name')); ?></th>
                                    <th style="width: 15%;"><?php echo e(language_data('Email')); ?></th>
                                    <th style="width: 10%;"><?php echo e(language_data('Phone')); ?></th>
                                    <th style="width: 10%;"><?php echo e(language_data('Status')); ?></th>
                                    <th style="width: 30%;"><?php echo e(language_data('Actions')); ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($job_applicants as $d): ?>
                                <tr>
                                    <td data-label="SL"><?php echo e($d->id); ?></td>
                                    <td data-label="Name"><p><?php echo e(\App\Designation::find($d->jobTitle->position)->designation); ?></p></td>
                                    <td data-label="Name"><p><?php echo e($d->name); ?></p></td>
                                    <td data-label="Username"><p><?php echo e($d->email); ?></p></td>
                                    <td data-label="Designation"><p><?php echo e($d->phone); ?></p></td>
                                    <?php if($d->status=='Unread'): ?>
                                    <td data-label="Status"><p class="btn btn-warning btn-xs"><?php echo e(language_data('Unread')); ?></p></td>
                                    <?php elseif($d->status=='Primary Selected'): ?>
                                    <td data-label="Status"><p class="btn btn-primary btn-xs"><?php echo e(language_data('Primary Selected')); ?></p></td>
                                    <?php elseif($d->status=='Call For Interview'): ?>
                                    <td data-label="Status"><p class="btn btn-complete btn-xs"><?php echo e(language_data('Call For Interview')); ?></p></td>
                                    <?php elseif($d->status=='Confirm'): ?>
                                    <td data-label="Status"><p class="btn btn-success btn-xs"><?php echo e(language_data('Confirm')); ?></p></td>
                                    <?php else: ?>
                                    <td data-label="Status"><p class="btn btn-danger btn-xs"><?php echo e(language_data('Rejected')); ?></p></td>
                                    <?php endif; ?>
                                    <td data-label="Actions">
                                        <a class="btn btn-complete btn-xs" href="<?php echo e(url('jobs/download-resume/'.$d->id)); ?>"><i class="fa fa-download"></i> <?php echo e(language_data('Resume')); ?></a>

                                        <a class="btn btn-success btn-xs" href="#" data-toggle="modal" data-target=".modal_send_sms_<?php echo e($d->id); ?>"><i class="fa fa-mobile-phone"></i> <?php echo e(language_data('Send SMS')); ?></a>
                                        <?php echo $__env->make('admin.modal-send-sms-applicant', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                                        <a class="btn btn-primary btn-xs" href="#" data-toggle="modal" data-target=".modal_send_email_<?php echo e($d->id); ?>"><i class="fa fa-envelope"></i> <?php echo e(language_data('Send Email')); ?></a>
                                        <?php echo $__env->make('admin.modal-send-email-applicant', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

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

    <?php echo Html::script("assets/libs/wysihtml5x/wysihtml5x-toolbar.min.js"); ?>

    <?php echo Html::script("assets/libs/bootstrap3-wysihtml5-bower/bootstrap3-wysihtml5.min.js"); ?>

    <?php echo Html::script("assets/js/form-elements-page.js"); ?>

    <?php echo Html::script("assets/libs/data-table/datatables.min.js"); ?>

    <?php echo Html::script("assets/js/bootbox.min.js"); ?>


    <script>
        $(document).ready(function () {
            /*For DataTable*/
            $('.data-table').DataTable();

            /*For Delete Application Info*/
            $(".cdelete").click(function (e) {
                e.preventDefault();
                var id = this.id;
                bootbox.confirm("Are you sure?", function (result) {
                    if (result) {
                        var _url = $("#_url").val();
                        window.location.href = _url + "/jobs/delete-application/" + id;
                    }
                });
            });


        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>