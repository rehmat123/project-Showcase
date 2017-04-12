@extends('layouts.app')

@section('content')
<div class="content">

<div id="post-data">
<div class="heading-title"><h1>Upload your logos to create your very own company logo portfolio</h1></div>
    @include('data')
  </div>
</div>
<div class="ajax-load text-center" style="display:none">
  <p><img src="http://demo.itsolutionstuff.com/plugin/loader.gif">Loading More post</p>
</div>
@endsection
