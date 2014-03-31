@section('content')

@foreach($teachers as $teacher) 
<div style="margin-left:20px">
	<a href="user/{{{$teacher->id}}}"> 
		{{{ $teacher->user->firstname }}} {{{ $teacher->user->lastname }}}
	</a>
</div>
@endforeach	

@stop

@section('sidebar')
	@include('partials.people-sidebar')
@stop