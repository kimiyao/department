@section('content')
<div class="content">
week

	
	<table class="table table-primary vertical-table">
	
		<tr>
			<th>
				
			</th>
			<th>
				{{{ trans('default.Mon') }}} 
			</th>
			<th>
				{{{ trans('default.Tue') }}} 
			</th>
			<th>
				{{{ trans('default.Wen') }}} 
			</th>
			<th>
				{{{ trans('default.Thu') }}} 
			</th>
			<th>
				{{{ trans('default.Fri') }}} 
			</th>					
		</tr>
		
			
			@for($i=1; $i<=8; $i++)
			<tr>
				<th>						
										
				</th>
				<td>
					
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
		@endfor
		
	</table>


</div>
@stop
@section('sidebar')
<div class="content">
	@include('partials.courses-sidebar')
</div>
@stop