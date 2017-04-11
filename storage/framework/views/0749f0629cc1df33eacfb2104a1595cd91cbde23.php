<?php $__env->startSection('content'); ?>
<div class="content">
<div class="row">
<div class="flash-message">
    <?php foreach(['danger', 'warning', 'success', 'info'] as $msg): ?>
      <?php if(Session::has('alert-' . $msg)): ?>

      <p class="alert alert-<?php echo e($msg); ?>"><?php echo e(Session::get('alert-' . $msg)); ?> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
      <?php endif; ?>
    <?php endforeach; ?>
  </div> <!-- end .flash-message -->
   <div class="col-xs-12">
      <h2><i class="fa fa-fw fa-cogs secondary"></i><font><font class=""> Add New Project Detail</font></font></h2>
      <p class="grey"><font><font>You can edit your Project in the </font></font><a ><font><font>profile</font></font></a><font><font> settings.</font></font></p>
    </div>
</div>
<form method="POST" action="/project" enctype="multipart/form-data">
<fieldset>
  <?php echo csrf_field() ?>
	<div class="form-group">
  		<label for="project">Project Name:</label>
  		<input type="text" class="form-control" name="project_title" required>
	</div>
	<div class="form-group">
    <?php echo Form::Label('item', 'Project Type::'); ?>

    <?php echo Form::select('project_type', $items, null, ['class' => 'form-control']); ?>

   </div>
	<div class="form-group">
  		<label for="type">Project Type(jpg/png):</label>
  		 <input type="file" name="project_avatar">
	</div>
	<div class="form-group">
  		<label for="type">Project Description :</label>
  		<textarea rows="6" class="form-control" name="project_description">
  		</textarea>
	</div>

	<button class="btn btn-primary" type="submit" id="settings_submit" name="settings[submit]">
	 <i class="fa fa-fw fa-floppy-o"></i>
	 <span class="hidden-xs"> Save</span>
    </button>

	</fieldset>
</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>