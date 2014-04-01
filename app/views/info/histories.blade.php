@section('content')

@foreach($infos as $info)
	
			<div> 
				{{{ $info->getName() }}} 
			</div>
			<p>
				{{{ $info->getDescription() }}} 
			</p>
	
@endforeach

@stop

@section('sidebar')
	@include('partials.info-sidebar')
@stop