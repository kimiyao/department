@section('content')
<div class="content">
	{{{ $info->getName() }}} <br/>
	{{{ $info->getDescription() }}}
</div>


@stop

@section('sidebar')
<div class="content">
	@include('partials.info-sidebar')
</div>
@stop