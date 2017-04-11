<?php $__env->startSection('content'); ?>
<div class="content">

<div id="post-data">
    <?php echo $__env->make('data', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  </div>
</div>
<div class="ajax-load text-center" style="display:none">
  <p><img src="http://demo.itsolutionstuff.com/plugin/loader.gif">Loading More post</p>
</div>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>