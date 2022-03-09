<?php /*External Style Section*/ ?>
<?php $__env->startSection('style'); ?>
    <?php echo Html::style("assets/libs/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <section class="wrapper-bottom-sec">
        <div class="p-30">
            <h2 class="page-title"><?php echo e(language_data('View Holiday')); ?></h2>
        </div>
        <div class="p-30 p-t-none p-b-none">
            <?php echo $__env->make('notification.notify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="row">

                <div class="col-lg-6">
                    <div class="panel">
                        <div class="panel-body">
                            <form class="" role="form" method="post" action="<?php echo e(url('holiday/post-edit-holiday')); ?>">
                                <div class="panel-heading">

                                    <h3 class="panel-title"><?php echo e(language_data('View Holiday')); ?></h3>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Date')); ?></label>
                                    <input type="text" class="form-control datePicker" required name="date" value="<?php echo e(get_date_format($holiday->holiday)); ?>">
                                </div>


                                <div class="form-group">
                                    <label><?php echo e(language_data('Occasion')); ?></label>
                                    <input type="text" class="form-control" required name="occasion" value="<?php echo e($holiday->occasion); ?>">
                                </div>


                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                <input type="hidden" value="<?php echo e($holiday->id); ?>" name="cmd">
                                <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-save"></i> <?php echo e(language_data('Update')); ?> </button>
                                <a href="#" class="btn btn-danger btn-sm cdelete" id="<?php echo e($holiday->id); ?>"><i class="fa fa-trash"></i> <?php echo e(language_data('Delete')); ?></a>
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
    <?php echo Html::script("assets/libs/moment/moment.min.js"); ?>

    <?php echo Html::script("assets/libs/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"); ?>

    <?php echo Html::script("assets/libs/handlebars/handlebars.runtime.min.js"); ?>

    <?php echo Html::script("assets/js/form-elements-page.js"); ?>

    <?php echo Html::script("assets/js/bootbox.min.js"); ?>


    <script>
        $(document).ready(function () {
            $(".cdelete").click(function (e) {
                e.preventDefault();
                var id = this.id;
                bootbox.confirm("Are you sure?", function (result) {
                    if (result) {
                        var _url = $("#_url").val();
                        window.location.href = _url + "/holiday/delete-holiday/" + id;
                    }
                });
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>