@section('content')
<div class="content">
@foreach($infos as $info)
	
			<div> 
				<a href="/info/{{{ $info->title }}}"> {{{ $info->getName() }}} </a>
			</div>
		
@endforeach
</div>
@stop

@section('sidebar')
<div class="content">
	@include('partials.info-sidebar')
</div>
@stop