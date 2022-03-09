<div class="modal fade modal_edit_designation_<?php echo e($d->id); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><?php echo e(language_data('Edit')); ?> <?php echo e(language_data('Designation')); ?></h4>
            </div>
            <form class="form-some-up form-block" role="form" action="<?php echo e(url('designation/update')); ?>" method="post">

                <div class="modal-body">

                    <div class="form-group">
                        <label><?php echo e(language_data('Designation Name')); ?> :</label>
                        <input type="text" class="form-control" required="" name="designation" value="<?php echo e($d->designation); ?>">
                    </div>

                    <br>
                    <br>
                    <div class="form-group">
                        <label><?php echo e(language_data('Department')); ?> : </label>
                        <select class="selectpicker form-control" data-live-search="true" name="department">
                            <?php foreach($departments as $des): ?>
                                <option value="<?php echo e($des->id); ?>" <?php if($d->did==$des->id): ?> selected <?php endif; ?> ><?php echo e($des->department); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                </div>
                <div class="modal-footer">
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="hidden" name="cmd" value="<?php echo e($d->id); ?>">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo e(language_data('Close')); ?></button>
                    <button type="submit" class="btn btn-primary"><?php echo e(language_data('Update')); ?></button>
                </div>

            </form>
        </div>
    </div>

</div>

