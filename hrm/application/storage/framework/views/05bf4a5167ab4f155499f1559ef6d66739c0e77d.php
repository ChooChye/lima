<div class="modal fade modal_edit_award_type_<?php echo e($d->id); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><?php echo e(language_data('Edit')); ?> <?php echo e(language_data('Award Name')); ?></h4>
            </div>
            <form class="form-some-up form-block" role="form" action="<?php echo e(url('settings/update-award-name')); ?>" method="post">

                <div class="modal-body">

                    <div class="form-group">
                        <label><?php echo e(language_data('Award Name')); ?> :</label>
                        <input type="text" class="form-control" required="" name="award" value="<?php echo e($d->award); ?>">
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

