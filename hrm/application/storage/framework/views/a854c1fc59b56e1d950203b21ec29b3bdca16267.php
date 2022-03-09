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
                            <button class="btn btn-success btn-sm pull-right" data-toggle="modal" data-target="#add-new-award"><i class="fa fa-plus"></i> <?php echo e(language_data('Add New Award')); ?></button>
                            <br>
                        </div>
                        <div class="panel-body p-none">
                            <table class="table data-table table-hover table-ultra-responsive">
                                <thead>
                                <tr>
                                    <th style="width: 5%;"><?php echo e(language_data('SL')); ?>#</th>
                                    <th style="width: 10%;"><?php echo e(language_data('Employee Code')); ?></th>
                                    <th style="width: 25%;"><?php echo e(language_data('Award Name')); ?></th>
                                    <th style="width: 25%;"><?php echo e(language_data('Gift')); ?></th>
                                    <th style="width: 15%;"><?php echo e(language_data('Month')); ?></th>
                                    <th style="width: 20%;"><?php echo e(language_data('Actions')); ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($award as $d): ?>
                                    <tr>
                                        <td data-label="SL"><?php echo e($d->id); ?></td>
                                        <td data-label="emoployeCode"><p><?php echo e($d->emp_id); ?></p></td>
                                        <td data-label="Award"><p><?php echo e($d->award_name->award); ?></p></td>
                                        <td data-label="gift"><p><?php echo e($d->gift); ?></p></td>
                                        <td data-label="month"><p><?php echo e($d->month); ?> <?php echo e($d->year); ?> </p></td>
                                        <td data-label="Actions">
                                            <a class="btn btn-success btn-xs" href="<?php echo e(url('award/edit/'.$d->id)); ?>"><i class="fa fa-edit"></i> <?php echo e(language_data('Edit')); ?></a>
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
            <div class="modal fade" id="add-new-award" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel"><?php echo e(language_data('Add New Award')); ?></h4>
                        </div>
                        <form class="form-some-up" role="form" method="post" action="<?php echo e(url('award/post-new-award')); ?>">
                            <div class="modal-body">

                                <div class="form-group">
                                    <label><?php echo e(language_data('Award Name')); ?></label>
                                    <select name="award_name" id="e20" class="form-control selectpicker" data-live-search="true">
                                        <?php foreach($award_name as $an): ?>
                                            <option value="<?php echo e($an->id); ?>"><?php echo e($an->award); ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Employee Name')); ?></label>
                                    <select name="emp_name" class="form-control selectpicker" data-live-search="true">
                                        <?php foreach($employee as $e): ?>
                                            <option value="<?php echo e($e->employee_code); ?>"><?php echo e($e->fname); ?> <?php echo e($e->lname); ?> (<?php echo e($e->employee_code); ?>)</option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Gift Item')); ?></label>
                                    <input type="text" class="form-control" required="" name="gift_item">
                                </div>


                                <div class="form-group">
                                    <label><?php echo e(language_data('Cash Price')); ?></label>
                                    <input type="text" class="form-control" name="cash_price">
                                </div>

                                <div class="form-group m-none">
                                    <label for="e20"><?php echo e(language_data('Month')); ?></label>
                                    <select name="month" class="form-control selectpicker" data-live-search="true">
                                        <option value="January"><?php echo e(language_data('January')); ?></option>
                                        <option value="February"><?php echo e(language_data('February')); ?></option>
                                        <option value="March"><?php echo e(language_data('March')); ?></option>
                                        <option value="April"><?php echo e(language_data('April')); ?></option>
                                        <option value="May"><?php echo e(language_data('May')); ?></option>
                                        <option value="June"><?php echo e(language_data('June')); ?></option>
                                        <option value="July"><?php echo e(language_data('July')); ?></option>
                                        <option value="August"><?php echo e(language_data('August')); ?></option>
                                        <option value="September"><?php echo e(language_data('September')); ?></option>
                                        <option value="October"><?php echo e(language_data('October')); ?></option>
                                        <option value="November"><?php echo e(language_data('November')); ?></option>
                                        <option value="December"><?php echo e(language_data('December')); ?></option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Year')); ?></label>
                                    <?php echo e(yearDropdown(1900,date('Y'),'year',date('Y'))); ?>

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
                        window.location.href = _url + "/award/delete-award/" + id;
                    }
                });
            });


        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>