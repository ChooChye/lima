<?php /*External Style Section*/ ?>
<?php $__env->startSection('style'); ?>
    <?php echo Html::style("assets/libs/data-table/datatables.min.css"); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <section class="wrapper-bottom-sec">
        <div class="p-30">
            <h2 class="page-title"><?php echo e(language_data('Tax Rules')); ?></h2>
        </div>
        <div class="p-30 p-t-none p-b-none">
            <?php echo $__env->make('notification.notify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="row">

                <div class="col-lg-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo e(language_data('Tax Rules')); ?></h3>
                            <button class="btn btn-success btn-sm pull-right" data-toggle="modal" data-target="#add-new-award"><i class="fa fa-plus"></i> <?php echo e(language_data('Add Tax Rule')); ?></button>
                            <br>
                        </div>
                        <div class="panel-body p-none">
                            <table class="table data-table table-hover table-ultra-responsive">
                                <thead>
                                <tr>
                                    <th style="width: 10%;"><?php echo e(language_data('SL')); ?>#</th>
                                    <th style="width: 40%;"><?php echo e(language_data('Tax Rules')); ?></th>
                                    <th style="width: 20%;"><?php echo e(language_data('Status')); ?></th>
                                    <th style="width: 30%;"><?php echo e(language_data('Actions')); ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($tax_rules as $tx): ?>
                                    <tr>
                                        <td data-label="SL"><?php echo e($tx->id); ?></td>
                                        <td data-label="Tax Rules"><p><?php echo e($tx->tax_name); ?></p></td>
                                        <?php if($tx->status=='active'): ?>
                                            <td data-label="Status"><p class="btn btn-success btn-xs"><?php echo e(language_data('Active')); ?></p></td>
                                        <?php else: ?>
                                            <td data-label="Status"><p class="btn btn-warning btn-xs"><?php echo e(language_data('Inactive')); ?></p></td>
                                        <?php endif; ?>
                                        <td data-label="Actions">

                                            <a class="btn btn-success btn-xs" href="#" data-toggle="modal" data-target=".modal_edit_tax_rules_<?php echo e($tx->id); ?>"><i class="fa fa-edit"></i> <?php echo e(language_data('Edit')); ?></a>
                                            <?php echo $__env->make('admin.modal-edit-tax-rules', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                                            <a class="btn btn-complete btn-xs" href="<?php echo e(url('tax-rules/set-rules/'.$tx->id)); ?>"><i class="fa fa-list"></i> <?php echo e(language_data('Set Rules')); ?></a>
                                            <a href="#" class="btn btn-danger btn-xs cdelete" id="<?php echo e($tx->id); ?>"><i class="fa fa-trash"></i> <?php echo e(language_data('Delete')); ?></a>
                                        </td>
                                    </tr>

                                <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>


            <!-- Modal -->
            <div class="modal fade" id="add-new-award" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel"><?php echo e(language_data('Add Tax Rule')); ?></h4>
                        </div>
                        <form class="form-some-up" role="form" method="post" action="<?php echo e(url('tax-rules/post-new-tax')); ?>">
                            <div class="modal-body">

                                <div class="form-group">
                                    <label><?php echo e(language_data('Tax Rule Name')); ?></label>
                                    <input type="text" class="form-control" required="" name="tax_rule_name">
                                </div>

                                <div class="form-group m-none">
                                    <label for="e20"><?php echo e(language_data('Status')); ?></label>
                                    <select name="status" class="form-control selectpicker" data-live-search="true">
                                        <option value="active"><?php echo e(language_data('Active')); ?></option>
                                        <option value="inactive"><?php echo e(language_data('Inactive')); ?></option>
                                    </select>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo e(language_data('Close')); ?></button>
                                <button type="submit" class="btn btn-primary"><?php echo e(language_data('Add')); ?></button>
                            </div>
                        </form>
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
        $(document).ready(function () {
            /*For DataTable*/
            $('.data-table').DataTable();

            /*For Delete Job Info*/
            $(".cdelete").click(function (e) {
                e.preventDefault();
                var id = this.id;
                bootbox.confirm("Are you sure?", function (result) {
                    if (result) {
                        var _url = $("#_url").val();
                        window.location.href = _url + "/tax-rules/delete-tax-rule/" + id;
                    }
                });
            });


        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>