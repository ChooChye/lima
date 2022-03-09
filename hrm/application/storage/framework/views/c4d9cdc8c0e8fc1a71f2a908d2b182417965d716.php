<?php /*External Style Section*/ ?>
<?php $__env->startSection('style'); ?>
    <?php echo Html::style("assets/libs/data-table/datatables.min.css"); ?>

    <?php echo Html::style("assets/libs/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <section class="wrapper-bottom-sec">
        <div class="p-30">
            <h2 class="page-title"><?php echo e(language_data('Expense List')); ?></h2>
        </div>
        <div class="p-30 p-t-none p-b-none">
            <?php echo $__env->make('notification.notify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="row">

                <div class="col-lg-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo e(language_data('Expense List')); ?></h3>
                            <button class="btn btn-success btn-sm pull-right" data-toggle="modal" data-target="#add-new-expense"><i class="fa fa-plus"></i> <?php echo e(language_data('Add New Expense')); ?></button>
                            <br>
                        </div>
                        <div class="panel-body p-none">
                            <table class="table data-table table-hover table-ultra-responsive">
                                <thead>
                                <tr>
                                    <th style="width: 5%;"><?php echo e(language_data('SL')); ?>#</th>
                                    <th style="width: 20%;"><?php echo e(language_data('Item Name')); ?></th>
                                    <th style="width: 20%;"><?php echo e(language_data('Purchase From')); ?></th>
                                    <th style="width: 10%;"><?php echo e(language_data('Purchase Date')); ?></th>
                                    <th style="width: 10%;"><?php echo e(language_data('Amount')); ?></th>
                                    <th style="width: 10%;"><?php echo e(language_data('Status')); ?></th>
                                    <th style="width: 25%;" class="text-right"><?php echo e(language_data('Actions')); ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($expense as $d): ?>
                                    <tr>
                                        <td data-label="SL"><?php echo e($d->id); ?></td>
                                        <td data-label="item name"><p><?php echo e($d->item_name); ?></p></td>
                                        <td data-label="purchase from"><p><?php echo e($d->purchase_from); ?></p></td>
                                        <td data-label="purchase to"><p><?php echo e(get_date_format($d->purchase_date)); ?></p></td>
                                        <td data-label="amount"><p><?php echo e(app_config('Currency')); ?> <?php echo e($d->amount); ?></p></td>
                                        <?php if($d->status=='Approved'): ?>
                                            <td data-label="Status"><p class="btn btn-success btn-xs"><?php echo e(language_data('Approved')); ?></p></td>
                                        <?php elseif($d->status=='Pending'): ?>
                                            <td data-label="Status"><p class="btn btn-warning btn-xs"><?php echo e(language_data('Pending')); ?></p></td>
                                        <?php else: ?>
                                            <td data-label="Status"><p class="btn btn-danger btn-xs"><?php echo e(language_data('Cancel')); ?></p></td>
                                        <?php endif; ?>

                                        <td data-label="Actions" class="text-right">

                                            <?php if($d->bill_copy != ''): ?>
                                            <a class="btn btn-complete btn-xs" href="<?php echo e(url('expense/download-bill-copy/'.$d->id)); ?>"><i class="fa fa-download"></i> <?php echo e(language_data('Bill Copy')); ?></a>
                                            <?php endif; ?>
                                            <a class="btn btn-success btn-xs" href="<?php echo e(url('expense/edit/'.$d->id)); ?>"><i class="fa fa-edit"></i> <?php echo e(language_data('Edit')); ?></a>
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


            <!-- Modal -->
            <div class="modal fade" id="add-new-expense" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel"><?php echo e(language_data('Add New Expense')); ?></h4>
                        </div>
                        <form class="form-some-up" role="form" method="post" action="<?php echo e(url('expense/post-new-expense')); ?>" enctype="multipart/form-data">
                            <div class="modal-body">


                                <div class="form-group">
                                    <label><?php echo e(language_data('Item Name')); ?></label>
                                    <input type="text" class="form-control" required="" name="item_name">
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Purchase From')); ?></label>
                                    <input type="text" class="form-control" required="" name="purchase_from">
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Purchase By')); ?></label>
                                    <select name="emp_name" class="form-control selectpicker" data-live-search="true">
                                        <?php foreach($employee as $e): ?>
                                            <option value="<?php echo e($e->id); ?>"><?php echo e($e->fname); ?> <?php echo e($e->lname); ?> (<?php echo e($e->employee_code); ?>)</option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Purchase Date')); ?></label>
                                    <input type="text" class="form-control datePicker" required="" name="purchase_date">
                                </div>


                                <div class="form-group">
                                    <label><?php echo e(language_data('Amount')); ?></label>
                                    <input type="text" class="form-control" name="amount">
                                </div>

                                <div class="form-group m-none">
                                    <label for="e20"><?php echo e(language_data('Status')); ?></label>
                                    <select name="status" class="form-control selectpicker">
                                        <option value="Pending"><?php echo e(language_data('Pending')); ?></option>
                                        <option value="Approved"><?php echo e(language_data('Approved')); ?></option>
                                        <option value="Cancel"><?php echo e(language_data('Cancel')); ?></option>
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label><?php echo e(language_data('Select Document')); ?></label>
                                    <div class="input-group input-group-file">
                                        <span class="input-group-btn">
                                            <span class="btn btn-primary btn-file">
                                                <?php echo e(language_data('Browse')); ?> <input type="file" class="form-control" name="bill_copy">
                                            </span>
                                        </span>
                                        <input type="text" class="form-control" readonly="">
                                    </div>
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
    <?php echo Html::script("assets/libs/moment/moment.min.js"); ?>

    <?php echo Html::script("assets/libs/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"); ?>

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
                        window.location.href = _url + "/expense/delete-expense/" + id;
                    }
                });
            });


        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>