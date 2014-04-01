@section('content')
<div class="content">
@foreach($researches as $research)
	@for($i=1; $i<=5; $i++)
		@if($research->type == $i)
			<div> 
				<a href="/research/{{{ $research->title }}}"> {{{ $research->title }}} </a>
			</div>
		@endif
	@endfor
@endforeach
</div>
@stop

@section('sidebar')
<div class="content">
	@include('partials.research-sidebar')
</div>
@stop