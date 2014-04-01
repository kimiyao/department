@section('content')
<div class="content">
	{{{ $research->title }}} <br/>
	{{{ $research->description }}}
</div>


@stop

@section('sidebar')
<div class="content">
	@include('partials.research-sidebar')
</div>
@stop