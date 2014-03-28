@section('content')

@foreach($infos as $info)
	@for($i=1; $i<=4; $i++)
		@if($info->type == $i)
			<div> 
				<a href="/info/{{{ $info->title }}}"> {{{ $info->title }}} </a>
			</div>
		@endif
	@endfor
@endforeach

@stop