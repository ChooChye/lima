<?php /*External Style Section*/ ?>
<?php $__env->startSection('style'); ?>
    <?php echo Html::style("assets/libs/data-table/datatables.min.css"); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <section class="wrapper-bottom-sec">
        <div class="p-30">
            <h2 class="page-title"><?php echo e(language_data('Designations')); ?></h2>
        </div>
        <div class="p-30 p-t-none p-b-none">
            <?php echo $__env->make('notification.notify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="row">

                <div class="col-lg-4">
                    <div class="panel">
                        <div class="panel-body">
                            <form class="" role="form" method="post" action="<?php echo e(url('designations/add')); ?>">
                                <div class="panel-heading">
                                    <h3 class="panel-title"> <?php echo e(language_data('Add Designation')); ?></h3>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Designation Name')); ?></label>
                                    <span class="help">e.g. "<?php echo e(language_data('Software Engineer')); ?>"</span>
                                    <input type="text" class="form-control" required name="designation">
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Department')); ?></label>
                                    <select class="selectpicker form-control" data-live-search="true" name="department">
                                        <?php foreach($departments as $d): ?>
                                            <option value="<?php echo e($d->id); ?>"><?php echo e($d->department); ?></option>
                                         <?php endforeach; ?>
                                    </select>
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
                            <h3 class="panel-title"><?php echo e(language_data('All Designations')); ?></h3>
                        </div>
                        <div class="panel-body p-none">
                            <table class="table data-table table-hover table-ultra-responsive">
                                <thead>
                                <tr>
                                    <th style="width: 10%;"><?php echo e(language_data('SL')); ?>#</th>
                                    <th style="width: 35%;"><?php echo e(language_data('Designation')); ?></th>
                                    <th style="width: 30%;"><?php echo e(language_data('Department')); ?></th>
                                    <th style="width: 25%;"><?php echo e(language_data('Actions')); ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($designations as $d): ?>
                                <tr>
                                    <td data-label="SL"><?php echo e($d->id); ?></td>
                                    <td data-label="Designation"><p><?php echo e($d->designation); ?></p></td>
                                    <td data-label="Department"><p><?php echo e($d->department_name->department); ?></p></td>
                                    <td>

                                        <a class="btn btn-success btn-xs" href="#" data-toggle="modal" data-target=".modal_edit_designation_<?php echo e($d->id); ?>"><i class="fa fa-edit"></i> <?php echo e(language_data('Edit')); ?></a>
                                        <?php echo $__env->make('admin.modal-edit-designation', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

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
                        window.location.href = _url + "/designations/delete/" + id;
                    }
                });
            });

        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>