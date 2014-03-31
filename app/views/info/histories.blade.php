@section('content')

@foreach($infos as $info)
	
			<div> 
				{{{ $info->title }}} 
			</div>
			<p>
				{{{ $info->description }}} 
			</p>
	
@endforeach

@stop

@section('sidebar')
	@include('partials.info-sidebar')
@stop