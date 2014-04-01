@section('content')
<div class="content">
	@foreach($infos as $info)
	
	<div> 
		{{{ $info->getName() }}} 
	</div>
	<p>
		{{{ $info->getDescription() }}} 
	</p>
	
	@endforeach
</div>
@stop

@section('sidebar')
<div class="content">
	@include('partials.info-sidebar')
</div>
@stop