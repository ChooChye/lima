<?php $__env->startSection('content'); ?>

    <section class="wrapper-bottom-sec">
        <div class="p-30">
            <h2 class="page-title"><?php echo e(language_data('Manage')); ?> <?php echo e(language_data('Disable Menu/Module')); ?></h2>
        </div>
        <div class="p-30 p-t-none p-b-none">

            <?php echo $__env->make('notification.notify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="row">

                <div class="col-lg-7">
                    <div class="panel">
                        <div class="panel-body">
                            <form class="" role="form" action="<?php echo e(url('settings/disable-menus-post')); ?>" method="post">
                                <div class="panel-heading">
                                    <h3 class="panel-title"> <?php echo e(language_data('Manage')); ?> <?php echo e(language_data('Disable Menu/Module')); ?></h3>
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Menu Name')); ?></label>
                                    <input type="text" class="form-control" disabled value="<?php echo e($menus->menu); ?>">
                                </div>

                                <div class="form-group">
                                    <label><?php echo e(language_data('Disable Menu/Module')); ?> <?php echo e(language_data('Employee')); ?></label>
                                    <br>
                                    <?php if(count($disable_employee)!=0): ?>
                                        <?php foreach($disable_employee as $te): ?>
                                            <a href="<?php echo e(url('employees/view/'.$te->id)); ?>" class="label label-success label-link"> <?php echo e($te->fname); ?> <?php echo e($te->lname); ?></a>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <span class="label label-info"><?php echo e(language_data('Disable Menu/Module')); ?> no one</span>
                                    <?php endif; ?>
                                </div>


                                <div class="form-group">
                                    <label><?php echo e(language_data('Disable Menu/Module')); ?> <?php echo e(language_data('To')); ?></label>
                                    <select class="form-control selectpicker" multiple data-live-search="true" name="employee[]">
                                        <?php foreach($employee as $e): ?>
                                            <option value="<?php echo e($e->id); ?>"><?php echo e($e->fname); ?> <?php echo e($e->lname); ?> (<?php echo e($e->employee_code); ?>)</option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>


                                <div class="form-group m-none">
                                    <label for="e20"><?php echo e(language_data('Status')); ?></label>
                                    <select name="status" class="form-control selectpicker">
                                        <option value="active" <?php if($menus->status=='active'): ?> selected <?php endif; ?>><?php echo e(language_data('Active')); ?></option>
                                        <option value="inactive" <?php if($menus->status=='inactive'): ?> selected <?php endif; ?>><?php echo e(language_data('Inactive')); ?></option>
                                    </select>
                                </div>

                                <br>

                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                <input type="hidden" value="<?php echo e($menus->id); ?>" name="cmd">
                                <button type="submit" class="btn btn-success btn-sm pull-right"><i class="fa fa-edit"></i> <?php echo e(language_data('Update')); ?> </button>
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
    <?php echo Html::script("assets/js/form-elements-page.js"); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>