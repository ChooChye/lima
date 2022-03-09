<?php if(Session::has('message')): ?>
    <div class="alert <?php echo e(Session::has('message_important')?'alert-danger':'alert-success'); ?> alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo e(Session::get('message')); ?>

    </div>
<?php endif; ?>

<?php if(count($errors) > 0): ?>
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php foreach($errors->all() as $error): ?>
            <?php echo e($error); ?><br>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
