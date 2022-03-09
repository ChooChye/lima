<?php /*External Style Section*/ ?>
<?php $__env->startSection('style'); ?>
    <?php echo Html::style("assets/libs/data-table/datatables.min.css"); ?>

    <?php echo Html::style("assets/libs/bootstrap3-wysihtml5-bower/bootstrap3-wysihtml5.min.css"); ?>

    <?php echo Html::style("assets/libs/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <section class="wrapper-bottom-sec">
        <div class="p-30">
            <h2 class="page-title"><?php echo e(language_data('Trainers')); ?></h2>
        </div>
        <div class="p-30 p-t-none p-b-none">
            <?php echo $__env->make('notification.notify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="row">

                <div class="col-lg-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo e(language_data('Trainers')); ?></h3>
                            <button class="btn btn-success btn-sm pull-right" data-toggle="modal" data-target="#add-new-trainer"><i class="fa fa-plus"></i> <?php echo e(language_data('Add New Trainer')); ?></button>
                            <br>
                        </div>
                        <div class="panel-body p-none">
                            <table class="table data-table table-hover table-ultra-responsive">
                                <thead>
                                <tr>
                                    <th style="width: 25%;"><?php echo e(language_data('Name')); ?></th>
                                    <th style="width: 20%;"><?php echo e(language_data('Email')); ?></th>
                                    <th style="width: 15%;"><?php echo e(language_data('Designation')); ?></th>
                                    <th style="width: 15%;"><?php echo e(language_data('Organization')); ?></th>
                                    <th style="width: 25%;" class="text-right"><?php echo e(language_data('Actions')); ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($trainers as $d): ?>
                                    <tr>
                                        <td data-label="Name"><p><?php echo e($d->first_name); ?> <?php echo e($d->last_name); ?></p></td>
                                        <td data-label="Email"><p><?php echo e($d->email_address); ?></p></td>
                                        <td data-label="Designation"><p><?php echo e($d->designation); ?></p></td>
                                        <td data-label="Organization"><p><?php echo e($d->organization); ?></p></td>
                                        <td data-label="Actions" class="text-right">
                                            <a class="btn btn-success btn-xs" href="<?php echo e(url('training/view-trainers-info/'.$d->id)); ?>"><i class="fa fa-edit"></i> <?php echo e(language_data('Edit')); ?></a>
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
            <div class="modal fade" id="add-new-trainer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel"><?php echo e(language_data('Add New Trainer')); ?></h4>
                        </div>
                        <form class="form-some-up" role="form" method="post" action="<?php echo e(url('training/post-new-trainer')); ?>">
                            <div class="modal-body">

                                <div class="form-group">
                                    <label><?php echo e(language_data('First Name')); ?></label>
                                    <input type="text" class="form-control" required="" name="first_name">
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Last Name')); ?></label>
                                    <input type="text" class="form-control" name="last_name">
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Designation')); ?></label>
                                    <input type="text" class="form-control" required="" name="designation">
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Organization')); ?></label>
                                    <input type="text" class="form-control" required="" name="organization">
                                </div>


                                <div class="form-group">
                                    <label><?php echo e(language_data('Address')); ?></label>
                                    <input type="text" class="form-control" name="address">
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('City')); ?></label>
                                    <input type="text" class="form-control" name="city">
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('State')); ?></label>
                                    <input type="text" class="form-control" name="state">
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Zip Code')); ?></label>
                                    <input type="text" class="form-control" name="zip_code">
                                </div>


                                <div class="form-group">
                                    <label for="Country"><?php echo e(language_data('Country')); ?></label>
                                    <select name="country" class="form-control selectpicker" data-live-search="true">
                                        <?php echo countries(app_config('Country')); ?>

                                    </select>
                                </div>


                                <div class="form-group">
                                    <label><?php echo e(language_data('Email')); ?></label>
                                    <input type="email" class="form-control" required="" name="email">
                                </div>


                                <div class="form-group">
                                    <label><?php echo e(language_data('Phone')); ?></label>
                                    <input type="text" class="form-control" required="" name="phone">
                                </div>


                                <div class="form-group">
                                    <label><?php echo e(language_data('Trainer Expertise')); ?></label>
                                    <textarea class="textarea-wysihtml5 form-control" name="trainer_expertise"></textarea>
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

    <?php echo Html::script("assets/libs/wysihtml5x/wysihtml5x-toolbar.min.js"); ?>

    <?php echo Html::script("assets/libs/handlebars/handlebars.runtime.min.js"); ?>

    <?php echo Html::script("assets/libs/bootstrap3-wysihtml5-bower/bootstrap3-wysihtml5.min.js"); ?>

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
                        window.location.href = _url + "/training/delete-trainer/" + id;
                    }
                });
            });


        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>