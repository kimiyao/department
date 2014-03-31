@section('content')

	
		<div> 
			{{{ $info->title }}} <br/>
			
			{{{ $info->description }}}
					
		</div>
	

@stop

@section('sidebar')
	@include('partials.prosp_students-sidebar')
@stop