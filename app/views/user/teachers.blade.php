@section('content')
<div class="content">
	@foreach($teachers as $teacher) 
	<div style="margin-left:20px">
		<a href="/user/{{{$teacher->id}}}"> 
			{{{ $teacher->user->firstname }}} {{{ $teacher->user->lastname }}}
		</a>
	</div>
	@endforeach	
</div>
@stop

@section('sidebar')
<div class="content">
	@include('partials.people-sidebar')
</div>
@stop