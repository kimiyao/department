@section('content')

	
		<div> 
			{{{ $info->getName() }}} <br/>
			
			{{{ $info->getDescription() }}}
					
		</div>
	

@stop

@section('sidebar')
	@include('partials.info-sidebar')
@stop