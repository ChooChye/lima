<?php /*External Style Section*/ ?>
<?php $__env->startSection('style'); ?>
    <?php echo Html::style("assets/libs/bootstrap-calendar/css/calendar.css"); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <section class="wrapper-bottom-sec">
        <div class="p-30">
            <h2 class="page-title"><?php echo e(language_data('Holiday')); ?></h2>
        </div>
        <div class="p-30 p-t-none p-b-none">
            <?php echo $__env->make('notification.notify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <div class="row">
                <div class="panel">
                    <div class="panel-body">

                        <div class="panel-heading">
                            <h3 id="month" class="panel-title"></h3>
                            <div class="pull-right form-inline">
                                <div class="btn-group">
                                    <button class="btn btn-success btn-xs" data-calendar-nav="prev"><< <?php echo e(language_data('Prev')); ?></button>
                                    <button class="btn btn-default btn-xs" data-calendar-nav="today"><?php echo e(language_data('This Month')); ?></button>
                                    <button class="btn btn-complete btn-xs" data-calendar-nav="next"><?php echo e(language_data('Next')); ?> >></button>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div id="calendar"></div>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <input type="hidden" value="<?php echo asset('assets/libs/bootstrap-calendar/tmpls/'); ?>" id="_asset_path">

<?php $__env->stopSection(); ?>

<?php /*External Style Section*/ ?>
<?php $__env->startSection('script'); ?>
    <?php echo Html::script("assets/libs/bootstrap-calendar/js/underscore.js"); ?>

    <?php echo Html::script("assets/libs/bootstrap-calendar/js/calendar.min.js"); ?>

    <?php echo Html::script("assets/libs/handlebars/handlebars.runtime.min.js"); ?>

    <script>
        $(document).ready(function () {
            var _asset_url = $("#_asset_path").val() + '/';
            var _url = $("#_url").val();
            var calendar = $('#calendar').calendar({
                weekbox: false,
                tmpl_path: _asset_url,
                events_source: _url+'/holiday/ajax-event-calendar',
                onAfterViewLoad: function(view) {
                    $('#month').text(this.getTitle());
                    $('.btn-group button').removeClass('active');
                }
            });

            $('.btn-group button[data-calendar-nav]').each(function () {
                var $this = $(this);
                $this.click(function () {
                    calendar.navigate($this.data('calendar-nav'));
                });
            });


        });
    </script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>