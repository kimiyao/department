@section('content')

@foreach($infos as $info)
	
			<div> 
				<a href="/info/{{{ $info->title }}}"> {{{ $info->getName() }}} </a>
			</div>
		
@endforeach

@stop

@section('sidebar')
	@include('partials.info-sidebar')
@stop