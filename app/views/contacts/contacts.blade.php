@section('content')
	<div class="content"> 				
		{{{ trans('default.Mailing Address')}}}: <br>
		{{ $contacts->getName() }} <br/>
	</div>
@stop

@section('sidebar')
	<div class="content"> 		
		@include('partials.contacts-sidebar')
	</div>
@stop