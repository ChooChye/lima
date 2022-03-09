<?php $__env->startSection('content'); ?>

    <section class="wrapper-bottom-sec">
        <div class="p-30">
            <h2 class="page-title">English <?php echo e(language_data('To')); ?> <?php echo e($lan_name); ?></h2>
        </div>
        <div class="p-30 p-t-none p-b-none">
            <?php echo $__env->make('notification.notify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="row">
            <form method="post" action="<?php echo e(url('settings/language-settings-translate-post')); ?>">
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
            <input type="hidden" name="lan_id" value="<?php echo e($lid); ?>">

                <div class="col-lg-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Translate English To <?php echo e($lan_name); ?></h3>
                            <button class="btn btn-success btn-sm pull-right" type="submit"><i class="fa fa-save"></i> <?php echo e(language_data('Save')); ?></button>
                            <br>
                        </div>
                        <div class="panel-body p-none">
						<table class="table table-hover table-ultra-responsive">
							<thead>
								<tr>
									<th style="width: 50%;" class="text-center">English</th>
									<th style="width: 50%;" class="text-center"><?php echo e($lan_name); ?></th>
								</tr>
							</thead>
							<tbody>
							<?php foreach($lan_data as $ld): ?>
								<tr>
									<td><p><input  type="hidden" name="english_data[]" value="<?php echo e($ld->lan_data); ?>"> <?php echo e($ld->lan_data); ?></p></td>
									<td><p><input type="text" class="form-control" required="" name="translate_data[]" value="<?php echo e($ld->lan_value); ?>"></p></td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
                    </div>
                </div>
            </form>
            </div>

        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php /*External Style Section*/ ?>
<?php $__env->startSection('script'); ?>
    <?php echo Html::script("assets/libs/handlebars/handlebars.runtime.min.js"); ?>

    <?php echo Html::script("assets/js/form-elements-page.js"); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>