@extends('layouts.app')

@section('content')
<div class="content">
<div class="row">
<div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))

      <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
      @endif
    @endforeach
  </div> <!-- end .flash-message -->
   <div class="col-xs-12">
      <h2><i class="fa fa-fw fa-cogs secondary"></i><font><font class=""> Add New Project Detail</font></font></h2>
      <p class="grey"><font><font>You can edit your Project in the </font></font><a ><font><font>profile</font></font></a><font><font> settings.</font></font></p>
    </div>
</div>

{!! Form::model($project, ['method' => 'PUT', 'route' => ['project.update', $project->id], 'files' => true]) !!}


<fieldset>
  <?php echo csrf_field() ?>
	<div class="form-group">
  		<label for="project">Project Name:</label>
      {{ Form::text('project_title', null, array('class' => 'form-control')) }}
  		
	</div>
	<div class="form-group">
    {!! Form::Label('item', 'Project Type::') !!}
    {!! Form::select('project_type', $items, null, ['class' => 'form-control']) !!}
   </div>
	<div class="form-group">
  		<label for="type">Project Type(jpg/png):</label>
      <div class="project_avatar" style="background-image: url('/uploads/images/{{$project['project_avatar'] }}');">
            </div>
  		 <input type="file" name="project_avatar">
	</div>
	<div class="form-group">
  		<label for="type">Project Description :</label>
  		 {{ Form::textarea('project_description', null, array('class' => 'form-control')) }}
  		</textarea>
	</div>

	<button class="btn btn-primary" type="submit" id="settings_submit" name="settings[submit]">
	 <i class="fa fa-fw fa-floppy-o"></i>
	 <span class="hidden-xs"> Save</span>
    </button>

	</fieldset>
{{ Form::close() }}
</div>
@endsection
