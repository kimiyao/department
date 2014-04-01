@section('content')
<div class="content">
	{{{ $info->title }}} <br/>
	{{{ $info->description }}}
</div>

@stop

@section('sidebar')
<div class="content">
	@include('partials.prosp_students-sidebar')
</div>
@stop