@section('content')

@foreach($researches as $research)
	@for($i=1; $i<=5; $i++)
		@if($research->type == $i)
			<div> 
				<a href="/research/{{{ $research->title }}}"> {{{ $research->title }}} </a>
			</div>
		@endif
	@endfor
@endforeach

@stop

@section('sidebar')
	@include('partials.research-sidebar')
@stop