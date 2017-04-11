@extends('layouts.app')

@section('content')
<div class="content">

<div id="post-data">
    @include('data')
  </div>
</div>
<div class="ajax-load text-center" style="display:none">
  <p><img src="http://demo.itsolutionstuff.com/plugin/loader.gif">Loading More post</p>
</div>
@endsection
