@section('content')

@foreach($infos as $info)
	
			<div> 
				<a href="/info/{{{ $info->title }}}"> {{{ $info->title }}} </a>
			</div>
		
@endforeach

@stop

@section('sidebar')
	@include('partials.info-sidebar')
@stop