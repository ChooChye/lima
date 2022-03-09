<?php /*External Style Section*/ ?>
<?php $__env->startSection('style'); ?>
    <?php echo Html::style("assets/libs/bootstrap3-wysihtml5-bower/bootstrap3-wysihtml5.min.css"); ?>

    <?php echo Html::style("assets/libs/data-table/datatables.min.css"); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <section class="wrapper-bottom-sec">
        <div class="p-30">
            <h2 class="page-title"><?php echo e(language_data('Provident Fund')); ?></h2>
        </div>
        <div class="p-30 p-t-none p-b-none">
            <?php echo $__env->make('notification.notify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="row">

                <div class="col-lg-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo e(language_data('Provident Fund')); ?></h3>
                            <button class="btn btn-success btn-sm pull-right" data-toggle="modal" data-target="#add-provident-fund"><i class="fa fa-plus"></i> <?php echo e(language_data('Add')); ?> <?php echo e(language_data('Provident Fund')); ?></button>
                            <br>
                        </div>
                        <div class="panel-body p-none">
                            <table class="table data-table table-hover table-ultra-responsive">
                                <thead>
                                <tr>
                                    <th style="width: 15%;"><?php echo e(language_data('Employee Name')); ?></th>
                                    <th style="width: 20%;"><?php echo e(language_data('Provident Fund Type')); ?></th>
                                    <th style="width: 15%;"><?php echo e(language_data('Employee Share')); ?></th>
                                    <th style="width: 15%;"><?php echo e(language_data('Organization Share')); ?></th>
                                    <th style="width: 10%;"><?php echo e(language_data('Status')); ?></th>
                                    <th style="width: 25%;" ><?php echo e(language_data('Actions')); ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($pfund as $pf): ?>
                                <tr>
                                    <td data-label="Employee Name"><a href="<?php echo e(url('employees/view/'.$pf->emp_id)); ?>"><?php echo e($pf->employee_info->fname); ?> <?php echo e($pf->employee_info->lname); ?></a> </td>
                                    <td data-label="Fund Type"><p><?php echo e($pf->provident_fund_type); ?></p></td>
                                    <td data-label="Employee Share">
                                        <p>
                                            <?php if($pf->provident_fund_type=='Fixed Amount'): ?>
                                           <?php echo e(app_config('CurrencyCode')); ?> <?php echo e($pf->employee_share); ?>

                                            <?php else: ?>
                                             <?php echo e($pf->employee_share); ?> %
                                            <?php endif; ?>
                                        </p>
                                    </td>
                                    <td data-label="Organization Share">
                                        <p>
                                            <?php if($pf->provident_fund_type=='Fixed Amount'): ?>
                                                <?php echo e(app_config('CurrencyCode')); ?> <?php echo e($pf->organization_share); ?>

                                            <?php else: ?>
                                                <?php echo e($pf->organization_share); ?> %
                                            <?php endif; ?>
                                        </p>
                                    </td>
                                    <?php if($pf->status=='Paid'): ?>
                                    <td data-label="Status"><p class="btn btn-success btn-xs"><?php echo e(language_data('Paid')); ?></p></td>
                                    <?php else: ?>
                                    <td data-label="Status"><p class="btn btn-warning btn-xs"><?php echo e(language_data('Unpaid')); ?></p></td>
                                    <?php endif; ?>
                                    <td data-label="Actions">
                                    <?php if($pf->status=='Paid'): ?>
                                        <a href="<?php echo e(url('provident-fund/view-payslip/'.$pf->id)); ?>" class="btn btn-complete btn-xs"><i class="fa fa-print"></i> <?php echo e(language_data('Payslip')); ?></a>
                                    <?php else: ?>
                                        <?php if($pf->total!=0): ?>
                                            <a class="btn btn-complete btn-xs" href="#" data-toggle="modal" data-target=".modal_make_payment_pf_<?php echo e($pf->id); ?>"><i class="fa fa-edit"></i> <?php echo e(language_data('Make Payment')); ?></a>
                                            <?php echo $__env->make('admin.modal-make-provident-fund-payment', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                        <?php endif; ?>
                                    <?php endif; ?>

                                        <a class="btn btn-success btn-xs" href="<?php echo e(url('provident-fund/view-details/'.$pf->id)); ?>" ><i class="fa fa-edit"></i> <?php echo e(language_data('Edit')); ?></a>


                                        <a href="#" class="btn btn-danger btn-xs cdelete" id="<?php echo e($pf->id); ?>"><i class="fa fa-trash"></i> <?php echo e(language_data('Delete')); ?></a>
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
            <div class="modal fade" id="add-provident-fund" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel"><?php echo e(language_data('Add')); ?> <?php echo e(language_data('Provident Fund')); ?></h4>
                        </div>
                        <form class="form-some-up" role="form" method="post" action="<?php echo e(url('provident-fund/post-new-provident-fund')); ?>">
                            <div class="modal-body">

                                <div class="form-group">
                                    <label><?php echo e(language_data('Employee Name')); ?></label>
                                    <select name="emp_name" class="form-control selectpicker" data-live-search="true">
                                        <?php foreach($employee as $e): ?>
                                            <option value="<?php echo e($e->id); ?>"><?php echo e($e->fname); ?> <?php echo e($e->lname); ?> (<?php echo e($e->employee_code); ?>)</option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>


                                <div class="form-group m-none">
                                    <label for="e20"><?php echo e(language_data('Provident Fund Type')); ?></label>
                                    <select name="fund_type" class="form-control selectpicker fundType">
                                        <option value="Fixed Amount" selected>Fixed Amount</option>
                                        <option value="Percentage of Basic Salary">Percentage of Basic Salary</option>
                                    </select>
                                </div>

                                <div class="show-fixed-amount">

                                    <div class="form-group">
                                        <label for="fname"><?php echo e(language_data('Employee Share')); ?></label>
                                        <span class="help">(<?php echo e(language_data('Amount')); ?>)</span>
                                        <input type="text" class="form-control" name="emp_share_fixed">
                                    </div>

                                    <div class="form-group">
                                        <label for="fname"><?php echo e(language_data('Organization Share')); ?></label>
                                        <span class="help">(<?php echo e(language_data('Amount')); ?>)</span>
                                        <input type="text" class="form-control" name="org_share_fixed">
                                    </div>

                                </div>


                                <div class="show-basic-salary">

                                    <div class="form-group">
                                        <label for="fname"><?php echo e(language_data('Employee Share')); ?></label>
                                        <span class="help">(%)</span>
                                        <input type="text" class="form-control" name="emp_share_per">
                                    </div>

                                    <div class="form-group">
                                        <label for="fname"><?php echo e(language_data('Organization Share')); ?></label>
                                        <span class="help">(%)</span>
                                        <input type="text" class="form-control" name="org_share_per">
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Description')); ?></label>
                                    <textarea class="form-control textarea-wysihtml5" name="description"></textarea>
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

    <?php echo Html::script("assets/libs/wysihtml5x/wysihtml5x-toolbar.min.js"); ?>

    <?php echo Html::script("assets/libs/bootstrap3-wysihtml5-bower/bootstrap3-wysihtml5.min.js"); ?>

    <?php echo Html::script("assets/js/form-elements-page.js"); ?>

    <?php echo Html::script("assets/libs/data-table/datatables.min.js"); ?>

    <?php echo Html::script("assets/js/bootbox.min.js"); ?>


    <script>
        $(document).ready(function(){
            $('.data-table').DataTable();

            var FundType = $('.fundType');
            if (FundType.val() == 'Fixed Amount') {
                $('.show-basic-salary').hide();
            }

            FundType.on('change', function () {
                var value = $(this).val();
                if (value == 'Percentage of Basic Salary') {
                    $('.show-basic-salary').show();
                    $('.show-fixed-amount').hide();
                } else {
                    $('.show-basic-salary').hide();
                    $('.show-fixed-amount').show();
                }

            });


            /*For Delete Designation*/
            $(".cdelete").click(function (e) {
                e.preventDefault();
                var id = this.id;
                bootbox.confirm("Are you sure?", function (result) {
                    if (result) {
                        var _url = $("#_url").val();
                        window.location.href = _url + "/provident-fund/delete/" + id;
                    }
                });
            });


        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>