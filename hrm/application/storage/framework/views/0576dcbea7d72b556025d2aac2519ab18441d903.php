<?php $__env->startSection('content'); ?>

    <section class="wrapper-bottom-sec">
        <div class="p-30">
            <h2 class="page-title"><?php echo e(language_data('Set Rules')); ?></h2>
        </div>
        <div class="p-30 p-t-none p-b-none">

            <?php echo $__env->make('notification.notify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


            <div class="row">

                <div class="col-lg-12">
                    <div class="panel">
                        <div class="panel-body">
                            <form class="" role="form" action="<?php echo e(url('tax-rules/post-set-rules')); ?>" method="post">
                                <div class="panel-heading">
                                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                    <input type="hidden" value="<?php echo e($tid); ?>" name="cmd">
                                    <button type="submit" class="btn btn-success btn-sm pull-right"><i class="fa fa-save"></i> <?php echo e(language_data('Save Values')); ?></button>
                                </div>

                                <table class="table task-items">

                                    <thead>
                                    <tr>
                                        <th width="20%"><?php echo e(language_data('Salary From')); ?></th>
                                        <th width="20%"><?php echo e(language_data('Salary To')); ?></th>
                                        <th width="15"><?php echo e(language_data('Tax Percentage')); ?> (%)</th>
                                        <th width="15"><?php echo e(language_data('Additional Tax Amount')); ?></th>
                                        <th width="15%"><?php echo e(language_data('Gender')); ?></th>
                                        <th width="15%"></th>
                                    </tr>
                                    </thead>

                                    <tbody>

                                    <?php if(count($tax_rule)>0): ?>

                                        <?php foreach($tax_rule as $tr): ?>

                                            <tr class="item-row">
                                                <td><input type="text" name="salary_from[]" class="form-control description salary_from" value="<?php echo e($tr->salary_from); ?>"></td>
                                                <td><input type="text" name="salary_to[]" class="form-control description" value="<?php echo e($tr->salary_to); ?>"></td>
                                                <td><input type="text" name="tax_percentage[]" class="form-control description" value="<?php echo e($tr->tax_percentage); ?>"></td>
                                                <td><input type="text" name="additional_tax_amount[]" class="form-control description" value="<?php echo e($tr->additional_tax_amount); ?>"></td>
                                                <td><select name="gender[]" class="form-control selectpicker" data-live-search="true">
                                                        <option value="Both" <?php if($tr->gender=='Both'): ?> selected <?php endif; ?>><?php echo e(language_data('Both')); ?></option>
                                                        <option value="Male" <?php if($tr->gender=='Male'): ?> selected <?php endif; ?>><?php echo e(language_data('Male')); ?></option>
                                                        <option value="Female"  <?php if($tr->gender=='Female'): ?> selected <?php endif; ?>><?php echo e(language_data('Female')); ?></option>
                                                    </select></td>
                                                <td><button class="btn btn-danger btn-sm ExitRemoveITEM" type="button"><i class="fa fa-trash-o"></i> <?php echo e(language_data('Remove')); ?></button></td>
                                            </tr>
                                        <?php endforeach; ?>
                                        <tr class="item-row">

                                            <td><input type="text" name="salary_from[]" class="form-control description"></td>
                                            <td><input type="text" name="salary_to[]" class="form-control description"></td>
                                            <td><input type="text" name="tax_percentage[]" class="form-control description"></td>
                                            <td><input type="text" name="additional_tax_amount[]" class="form-control description"></td>
                                            <td><select name="gender[]" class="form-control selectpicker" data-live-search="true">
                                                    <option value="Both"><?php echo e(language_data('Both')); ?></option>
                                                    <option value="Male"><?php echo e(language_data('Male')); ?></option>
                                                    <option value="Female"><?php echo e(language_data('Female')); ?></option>
                                                </select></td>
                                            <td><button class="btn btn-success btn-sm item-add"><i class="fa fa-plus"></i> <?php echo e(language_data('Add More')); ?></button></td>
                                        </tr>
                                    <?php else: ?>
                                        <tr class="item-row">

                                            <td><input type="text" name="salary_from[]" class="form-control description"></td>
                                            <td><input type="text" name="salary_to[]" class="form-control description"></td>
                                            <td><input type="text" name="tax_percentage[]" class="form-control description"></td>
                                            <td><input type="text" name="additional_tax_amount[]" class="form-control description"></td>
                                            <td><select name="gender[]" class="form-control selectpicker" data-live-search="true">
                                                    <option value="Both"><?php echo e(language_data('Both')); ?></option>
                                                    <option value="Male"><?php echo e(language_data('Male')); ?></option>
                                                    <option value="Female"><?php echo e(language_data('Female')); ?></option>
                                                </select></td>
                                            <td><button class="btn btn-success btn-sm item-add"><i class="fa fa-plus"></i> <?php echo e(language_data('Add More')); ?></button>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                    </tbody>
                                </table>

                            </form>
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

    <?php echo Html::script("assets/js/tax-rules.js"); ?>


    <script>
        $('.ExitRemoveITEM').on("click", function () {
            $(this).parents(".item-row").remove();
        });
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>