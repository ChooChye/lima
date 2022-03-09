<?php /*External Style Section*/ ?>
<?php $__env->startSection('style'); ?>
    <?php echo Html::style("assets/libs/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"); ?>

    <?php echo Html::style("assets/libs/data-table/datatables.min.css"); ?>

    <?php echo Html::style("assets/libs/bootstrap3-wysihtml5-bower/bootstrap3-wysihtml5.min.css"); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <section class="wrapper-bottom-sec">
        <div class="p-30">
            <h2 class="page-title"><?php echo e(language_data('Job Applications')); ?></h2>
        </div>
        <div class="p-30 p-t-none p-b-none">
            <?php echo $__env->make('notification.notify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="row">

                <div class="col-lg-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo e(language_data('Job Applications')); ?></h3>
                            <button class="btn btn-success btn-sm pull-right" data-toggle="modal"
                                    data-target="#add-new-job"><i class="fa fa-plus"></i> <?php echo e(language_data('Add New Job')); ?>

                            </button>
                            <br>
                        </div>
                        <div class="panel-body p-none">
                            <table class="table data-table table-hover table-ultra-responsive">
                                <thead>
                                <tr>
                                    <th style="width: 5%;"><?php echo e(language_data('SL')); ?>#</th>
                                    <th style="width: 15%;"><?php echo e(language_data('Position')); ?></th>
                                    <th style="width: 15%;"><?php echo e(language_data('Posted Date')); ?></th>
                                    <th style="width: 15%;"><?php echo e(language_data('Apply Last Date')); ?></th>
                                    <th style="width: 15%;"><?php echo e(language_data('Close Date')); ?></th>
                                    <th style="width: 5%;"><?php echo e(language_data('Status')); ?></th>
                                    <th style="width: 30%;"><?php echo e(language_data('Actions')); ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($jobs as $d): ?>
                                    <tr>
                                        <td data-label="SL"><?php echo e($d->id); ?></td>
                                        <td data-label="Position"><p><?php echo e($d->position_name->designation); ?></p></td>
                                        <td data-label="Posted Date"><p><?php echo e(get_date_format($d->post_date)); ?></p></td>
                                        <td data-label="Apply Date"><p><?php echo e(get_date_format($d->apply_date)); ?></p></td>
                                        <td data-label="Closed Date"><p><?php echo e(get_date_format($d->close_date)); ?></p></td>
                                        <?php if($d->status=='opening'): ?>
                                            <td data-label="Status"><p class="btn btn-success btn-xs"><?php echo e(language_data('Open')); ?></p></td>
                                        <?php elseif($d->status=='drafted'): ?>
                                            <td data-label="Status"><p class="btn btn-warning btn-xs"><?php echo e(language_data('Drafted')); ?></p></td>
                                        <?php else: ?>
                                            <td data-label="Status"><p class="btn btn-danger btn-xs"><?php echo e(language_data('Closed')); ?></p></td>
                                        <?php endif; ?>
                                        <td data-label="Actions">
                                            <a class="btn btn-primary btn-xs" href="<?php echo e(url('jobs/view-applicant/'.$d->id)); ?>"><i class="fa fa-list"></i> <?php echo e(language_data('Applicants')); ?></a>
                                            <a class="btn btn-success btn-xs" href="<?php echo e(url('jobs/edit/'.$d->id)); ?>"><i class="fa fa-edit"></i> <?php echo e(language_data('Edit')); ?></a>
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
            <div class="modal fade" id="add-new-job" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel"><?php echo e(language_data('Add New Job')); ?></h4>
                        </div>
                        <form class="form-some-up" role="form" method="post" action="<?php echo e(url('jobs/post-new-job')); ?>">

                            <div class="modal-body">

                                <div class="form-group">
                                    <label><?php echo e(language_data('Position')); ?></label>
                                    <span class="help">e.g. "Software Engineer"</span>
                                    <select name="position" id="e20" class="form-control selectpicker"
                                            data-live-search="true">
                                        <?php foreach($designation as $des): ?>
                                            <option value="<?php echo e($des->id); ?>"><?php echo e($des->designation); ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Number Of Post')); ?></label>
                                    <span class="help">e.g. "2"</span>
                                    <input type="number" class="form-control" required="" name="no_position">
                                </div>


                                <div class="form-group">
                                    <label><?php echo e(language_data('Job Type')); ?></label>
                                    <select name="job_type" class="form-control selectpicker">
                                        <option value="Contractual"><?php echo e(language_data('Contractual')); ?></option>
                                        <option value="Part Time"><?php echo e(language_data('Part Time')); ?></option>
                                        <option value="Full Time"><?php echo e(language_data('Full Time')); ?></option>
                                    </select>

                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Experience')); ?></label>
                                    <input type="text" class="form-control" name="experience">
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Age')); ?></label>
                                    <input type="text" class="form-control" name="age">
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Job Location')); ?></label>
                                    <input type="text" class="form-control" name="job_location">
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Salary Range')); ?></label>
                                    <input type="text" class="form-control" name="salary_range">
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Post Date')); ?></label>
                                    <input type="text" class="form-control datePicker" name="post_date" required="">
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Last Date To Apply')); ?></label>
                                    <input type="text" class="form-control datePicker" name="apply_date">
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Close Date')); ?></label>
                                    <input type="text" class="form-control datePicker" name="close_date">
                                </div>

                                <div class="form-group m-none">
                                    <label for="e20"><?php echo e(language_data('Status')); ?></label>
                                    <select name="status" class="form-control selectpicker">
                                        <option value="opening"><?php echo e(language_data('Open')); ?></option>
                                        <option value="closed"><?php echo e(language_data('Closed')); ?></option>
                                        <option value="drafted"><?php echo e(language_data('Drafted')); ?></option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Short Description')); ?></label>
                                    <textarea class="form-control" rows="5" name="short_description"></textarea>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Description')); ?></label>
                                    <textarea class="textarea-wysihtml5 form-control" name="description"></textarea>
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
                        window.location.href = _url + "/jobs/delete-job/" + id;
                    }
                });
            });


        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>