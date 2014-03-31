@section('content')

	
		<div> 
			{{{ $research->title }}} <br/>
			
			{{{ $research->description }}}
					
		</div>
	

@stop

@section('sidebar')
	@include('partials.research-sidebar')
@stop