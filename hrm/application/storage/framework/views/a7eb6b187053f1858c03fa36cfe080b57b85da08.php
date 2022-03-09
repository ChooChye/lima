<?php /*External Style Section*/ ?>
<?php $__env->startSection('style'); ?>
    <?php echo Html::style("assets/libs/data-table/datatables.min.css"); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <section class="wrapper-bottom-sec">
        <div class="p-30">
            <h2 class="page-title"><?php echo e(language_data('Employees')); ?></h2>
        </div>
        <div class="p-30 p-t-none p-b-none">
            <?php echo $__env->make('notification.notify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="row">

                <div class="col-lg-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo e(language_data('Employees')); ?></h3>
                        </div>
                        <div class="panel-body p-none">
                            <table class="table data-table table-hover table-ultra-responsive">
                                <thead>
                                <tr>
                                    <th style="width: 10%;"><?php echo e(language_data('Code')); ?>#</th>
                                    <th style="width: 20%;"><?php echo e(language_data('Name')); ?></th>
                                    <th style="width: 20%;"><?php echo e(language_data('Username')); ?></th>
                                    <th style="width: 20%;"><?php echo e(language_data('Designation')); ?></th>
                                    <th style="width: 10%;"><?php echo e(language_data('Status')); ?></th>
                                    <th style="width: 20%;"><?php echo e(language_data('Actions')); ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($employees as $d): ?>
                                <tr>
                                    <td data-label="SL"><?php echo e($d->employee_code); ?></td>
                                    <td data-label="Name"><p><?php echo e($d->fname); ?> <?php echo e($d->lname); ?></p></td>
                                    <td data-label="Username"><p><?php echo e($d->user_name); ?></p></td>
                                    <td data-label="Designation"><p><?php echo e($d->designation_name->designation); ?></p></td>
                                    <?php if($d->status=='active'): ?>
                                    <td data-label="Status"><p class="btn btn-success btn-xs"><?php echo e(language_data('Active')); ?></p></td>
                                    <?php else: ?>
                                    <td data-label="Status"><p class="btn btn-warning btn-xs"><?php echo e(language_data('Inactive')); ?></p></td>
                                    <?php endif; ?>
                                    <td data-label="Actions">
                                        <a class="btn btn-success btn-xs" href="<?php echo e(url('employees/view/'.$d->id)); ?>" ><i class="fa fa-edit"></i> <?php echo e(language_data('Edit')); ?></a>
                                        <a href="#" class="btn btn-danger btn-xs cdelete" id="<?php echo e($d->id); ?>"><i class="fa fa-trash"></i> <?php echo e(language_data('Delete')); ?></a>
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

    <?php echo Html::script("assets/js/form-elements-page.js"); ?>

    <?php echo Html::script("assets/libs/data-table/datatables.min.js"); ?>

    <?php echo Html::script("assets/js/bootbox.min.js"); ?>


    <script>
        $(document).ready(function(){
            $('.data-table').DataTable();


            /*For Delete Designation*/
            $(".cdelete").click(function (e) {
                e.preventDefault();
                var id = this.id;
                bootbox.confirm("Are you sure?", function (result) {
                    if (result) {
                        var _url = $("#_url").val();
                        window.location.href = _url + "/employee/delete-employee/" + id;
                    }
                });
            });

        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>