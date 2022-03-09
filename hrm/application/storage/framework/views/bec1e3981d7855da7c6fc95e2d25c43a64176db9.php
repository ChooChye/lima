<div class="modal fade modal_edit_tax_rules_<?php echo e($tx->id); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><?php echo e(language_data('Edit')); ?> <?php echo e(language_data('Tax Rules')); ?></h4>
            </div>
            <form class="form-some-up form-block" role="form" action="<?php echo e(url('tax-rules/post-update-tax-rules')); ?>" method="post">

                <div class="modal-body">

                    <div class="form-group">
                        <label><?php echo e(language_data('Tax Rule Name')); ?> :</label>
                        <input type="text" class="form-control" required="" name="tax_rule_name" value="<?php echo e($tx->tax_name); ?>">
                    </div>

                    <br>
                    <br>
                    <div class="form-group">
                        <label><?php echo e(language_data('Status')); ?> : </label>
                        <select class="selectpicker form-control" data-live-search="true" name="status">
                            <option value="active" <?php if($tx->status=='active'): ?> selected <?php endif; ?>><?php echo e(language_data('Active')); ?></option>
                            <option value="inactive"  <?php if($tx->status=='inactive'): ?> selected <?php endif; ?>><?php echo e(language_data('Inactive')); ?></option>
                        </select>
                    </div>

                </div>
                <div class="modal-footer">
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="hidden" name="cmd" value="<?php echo e($tx->id); ?>">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo e(language_data('Close')); ?></button>
                    <button type="submit" class="btn btn-primary"><?php echo e(language_data('Update')); ?></button>
                </div>

            </form>
        </div>
    </div>

</div>

