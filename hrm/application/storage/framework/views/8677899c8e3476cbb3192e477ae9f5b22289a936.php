<?php /*External Style Section*/ ?>
<?php $__env->startSection('style'); ?>
    <?php echo Html::style("assets/libs/data-table/datatables.min.css"); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <section class="wrapper-bottom-sec">
        <div class="p-30">
            <h2 class="page-title"><?php echo e(language_data('Language')); ?></h2>
        </div>
        <div class="p-30 p-t-none p-b-none">

            <?php echo $__env->make('notification.notify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="row">

                <div class="col-lg-4">
                    <div class="panel">
                        <div class="panel-body">
                            <form class="" role="form" action="<?php echo e(url('settings/language-settings/add')); ?>" method="post" enctype="multipart/form-data">
                                <div class="panel-heading">
                                    <h3 class="panel-title"> <?php echo e(language_data('Add Language')); ?></h3>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Language Name')); ?></label>
                                    <span class="help">e.g. "English"</span>
                                    <input type="text" class="form-control" required name="language_name">
                                </div>

                                 <div class="form-group">
                                    <label><?php echo e(language_data('Status')); ?></label>
                                    <select class="selectpicker form-control" name="status">
                                        <option value="Active">Active</option>
                                        <option value="Inactive">Inactive</option>
                                    </select>
                                 </div>


                                <div class="form-group">
                                    <label><?php echo e(language_data('Flag')); ?></label>
                                    <div class="input-group input-group-file">
                                        <span class="input-group-btn">
                                            <span class="btn btn-primary btn-file">
                                                <?php echo e(language_data('Browse')); ?> <input type="file" class="form-control" name="flag">
                                            </span>
                                        </span>
                                        <input type="text" class="form-control" readonly="">
                                    </div>
                                </div>

                                <p class="text-uppercase text-complete help">It will take few minutes. Please don't reload the page</p>


                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                <button type="submit" class="btn btn-success btn-sm pull-right"><i class="fa fa-plus"></i> <?php echo e(language_data('Add')); ?> </button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo e(language_data('All Languages')); ?></h3>
                        </div>
                        <div class="panel-body p-none">
                            <table class="table data-table table-hover table-ultra-responsive">
                                <thead>
                                <tr>
                                    <th style="width: 15%;"><?php echo e(language_data('Flag')); ?></th>
                                    <th style="width: 35%;"><?php echo e(language_data('Language Name')); ?></th>
                                    <th style="width: 25%;"><?php echo e(language_data('Status')); ?></th>
                                    <th style="width: 25%;"><?php echo e(language_data('Actions')); ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($language as $d): ?>
                                <tr>
                                    <td data-label="flag"><img src="<?php echo asset('assets/country_flag/'.$d->icon); ?>"></td>
                                    <td data-label="language"><p><?php echo e($d->language); ?></p></td>
                                    <?php if($d->status=='Active'): ?>
                                            <td data-label="Status"><p class="btn btn-success btn-xs"><?php echo e(language_data('Active')); ?></p></td>
                                        <?php else: ?>
                                            <td data-label="Status"><p class="btn btn-warning btn-xs"><?php echo e(language_data('Inactive')); ?></p></td>
                                        <?php endif; ?>
                                    <td>
                                    <?php if($d->language!='English'): ?>
                                        <a class="btn btn-complete btn-xs" data-toggle="tooltip" data-placement="top" title="<?php echo e(language_data('Translate')); ?>" href="<?php echo e(url('settings/language-settings-translate/'.$d->id)); ?>"><i class="fa fa-language"></i></a>
                                        <a class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" title="<?php echo e(language_data('Edit')); ?>" href="<?php echo e(url('settings/language-settings-manage/'.$d->id)); ?>"><i class="fa fa-edit"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="<?php echo e(language_data('Delete')); ?>" class="btn btn-danger btn-xs cdelete" id="<?php echo e($d->id); ?>"><i class="fa fa-trash"></i></a>
                                        <?php endif; ?>
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


            /*For Delete Department*/
            $(".cdelete").click(function (e) {
                e.preventDefault();
                var id = this.id;
                bootbox.confirm("Are you sure?", function (result) {
                    if (result) {
                        var _url = $("#_url").val();
                        window.location.href = _url + "/settings/language-settings/delete/" + id;
                    }
                });
            });


        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>