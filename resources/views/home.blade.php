@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))

      <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
      @endif
    @endforeach
  </div> <!-- end .flash-message -->
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                     <a href="/project/create"> Add Project</a><br>
                     <a href="/project/all"> Search Projects</a><br>
                     <a href="/project/edit"> Update Projects</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
