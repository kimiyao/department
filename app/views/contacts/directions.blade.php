@section('content')

@foreach($departments as $department)
<div class="content">
	{{{ $department->id }}} : {{{ $department->getName() }}} 
	<a href="/department/{{{ $department->name }}}"> {{{ trans('default.View department') }}} </a>
</div>
@endforeach

@stop

@section('sidebar')
<div class="content">
	@include('partials.contacts-sidebar')
</div>
@stop