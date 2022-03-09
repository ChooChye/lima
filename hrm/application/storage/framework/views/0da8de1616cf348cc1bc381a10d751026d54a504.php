<?php /*External Style Section*/ ?>
<?php $__env->startSection('style'); ?>
    <?php echo Html::style("assets/libs/data-table/datatables.min.css"); ?>

    <?php echo Html::style("assets/libs/bootstrap3-wysihtml5-bower/bootstrap3-wysihtml5.min.css"); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <section class="wrapper-bottom-sec">
        <div class="p-30">
            <h2 class="page-title"><?php echo e(language_data('Training Evaluations')); ?></h2>
        </div>
        <div class="p-30 p-t-none p-b-none">

            <?php echo $__env->make('notification.notify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="row">

                <div class="col-lg-4">
                    <div class="panel">
                        <div class="panel-body">
                            <form class="" role="form" action="<?php echo e(url('training/post-training-evaluations')); ?>" method="post">
                                <div class="panel-heading">
                                    <h3 class="panel-title"> <?php echo e(language_data('Training Evaluations')); ?></h3>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Training')); ?> <?php echo e(language_data('Title')); ?></label>
                                    <select class="form-control selectpicker" data-live-search="true" name="training_title">
                                        <?php foreach($training as $t): ?>
                                            <option value="<?php echo e($t->id); ?>"><?php echo e($t->title); ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>



                                <div class="form-group">
                                    <label><?php echo e(language_data('Training Evaluations')); ?> <?php echo e(language_data('Description')); ?></label>
                                    <textarea class="textarea-wysihtml5 form-control" name="description"></textarea>
                                </div>


                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                <button type="submit" class="btn btn-success btn-sm pull-right"><i class="fa fa-plus"></i> <?php echo e(language_data('Add')); ?> </button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo e(language_data('Training Evaluations')); ?></h3>
                        </div>
                        <div class="panel-body p-none">
                            <table class="table data-table table-hover table-ultra-responsive">
                                <thead>
                                <tr>
                                    <th style="width: 10%;"><?php echo e(language_data('SL')); ?>#</th>
                                    <th style="width: 55%;"><?php echo e(language_data('Title')); ?></th>
                                    <th style="width: 35%;"><?php echo e(language_data('Actions')); ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($training_evaluation as $d): ?>
                                <tr>
                                    <td data-label="SL"><?php echo e($d->id); ?></td>
                                    <td data-label="Title"><p><?php echo e($d->training_title->title); ?></p></td>
                                    <td>
                                        <a class="btn btn-success btn-xs" href="#" data-toggle="modal" data-target=".modal_edit_training_evaluations_<?php echo e($d->id); ?>"><i class="fa fa-edit"></i> <?php echo e(language_data('Edit')); ?></a>
                                        <?php echo $__env->make('admin.modal-edit-training-evaluations', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


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

    <?php echo Html::script("assets/libs/wysihtml5x/wysihtml5x-toolbar.min.js"); ?>

    <?php echo Html::script("assets/libs/bootstrap3-wysihtml5-bower/bootstrap3-wysihtml5.min.js"); ?>

    <?php echo Html::script("assets/js/form-elements-page.js"); ?>

    <?php echo Html::script("assets/libs/data-table/datatables.min.js"); ?>

    <?php echo Html::script("assets/js/bootbox.min.js"); ?>

    <script>
        $(document).ready(function(){
            $('.data-table').DataTable();


            /*For Delete Department*/
            $(".cdelete").click(function (e) {
                e.preventDefault();
                var id = this.id;
                bootbox.confirm("Are you sure?", function (result) {
                    if (result) {
                        var _url = $("#_url").val();
                        window.location.href = _url + "/training/delete-training-evaluations/" + id;
                    }
                });
            });


        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>