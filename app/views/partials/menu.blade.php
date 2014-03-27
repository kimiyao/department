<div class="navbar-wrapper">
	<div class="navbar navbar-inverse" role="navigation">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/"><span class="glyphicon glyphicon-home"></span></a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						{{{ trans('default.Info') }}}
					</a>
						<ul class="dropdown-menu">
							<li><a href="/teachers/24"> {{{ trans('default.Faculty_people')}}} </a></li>
							<li class="divider"></li>
							<li><a href="/teachers/24"> {{{ trans('default.Assistants')}}} </span></a></li>
							<li class="divider"></li>
							<li><a href="/teachers/24"> {{{ trans('default.Staff')}}} </a></li>
						</ul>
				</li>	
				<li><a href="/courses/24">{{{ trans('default.Courses') }}}</a></li>
				<li class="dropdown">
					<a href="/teachers/24" class="dropdown-toggle" data-toggle="dropdown">
						{{{ trans('default.People') }}}
					</a>
						<ul class="dropdown-menu">
							<li><a href="/teachers/24"> {{{ trans('default.Faculty_people')}}} </a></li>
							<li class="divider"></li>
							<li><a href="/teachers/24"> {{{ trans('default.Assistants')}}} </span></a></li>
							<li class="divider"></li>
							<li><a href="/teachers/24"> {{{ trans('default.Staff')}}} </a></li>
						</ul>
				</li>				
				<li><a href="/researches/24">{{{ trans('default.Research') }}}</a></li>
				<li><a href="/prosp_students">{{{ trans('default.Prospective Students') }}}</a></li>
				<li><a href="#">{{{ trans('default.Contact Us') }}}</a></li>
				
			</ul>			
		</div>
	</div>
</div>