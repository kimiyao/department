@section('content')
	<div> 				
		{{{ trans('default.Mailing Address')}}}: <br>
		{{ $contacts->getName() }} <br/>
	</div>
@stop

@section('sidebar')
	@include('partials.contacts-sidebar')
@stop