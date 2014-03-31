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
					<a href="/infos/24" class="dropdown-toggle" data-toggle="dropdown">
						{{{ trans('default.Info') }}}
					</a>
						<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
							 <li class="dropdown-submenu">
							 	<a tabindex="-1" href="/infos/24/1"> {{{ trans('default.Current')}}} </a>               
					                <ul class="dropdown-menu">
					                  <li><a tabindex="-1" href="/histories/24/11">{{{ trans('default.Vision and Mission')}}}</a></li>
					                  <li><a href="/histories/24/12">{{{ trans('default.Administration')}}}</a></li>
					                  <li><a href="/histories/24/13">{{{ trans('default.Committees')}}}</a></li>
					                  <li><a href="/histories/24/14">{{{ trans('default.Department by Numbers')}}}</a></li>
					                  <li><a href="/histories/24/15">{{{ trans('default.Accreditation')}}}</a></li>
					                </ul>            
							</li>
							<li class="divider"></li>
							<li class="dropdown-submenu">
							 	<a tabindex="-1" href="/infos/24/3"> {{{ trans('default.History')}}}  </a>               
					                <ul class="dropdown-menu">
					                  <li><a tabindex="-1" href="/histories/24/3">{{{ trans('default.History')}}} </a></li>
					                  <li><a href="/histories/24/31">{{{ trans('default.Past Chairpersons')}}}</a></li>					                  
					                </ul>            
							</li>
						</ul>
				</li>	
				<li><a href="/courses/24">{{{ trans('default.Courses') }}}</a></li>
				<li class="dropdown">
					<a href="/teachers/24" class="dropdown-toggle" data-toggle="dropdown">
						{{{ trans('default.People') }}}
					</a>
						<ul class="dropdown-menu">
							<li><a href="/teachers/24/1"> {{{ trans('default.Faculty_people')}}} </a></li>
							<li class="divider"></li>
							<li><a href="/teachers/24/2"> {{{ trans('default.Assistants')}}} </span></a></li>
							<li class="divider"></li>
							<li><a href="/teachers/24/3"> {{{ trans('default.Staff')}}} </a></li>
						</ul>
				</li>
				<li class="dropdown">				
					<a href="/researches/24/1" class="dropdown-toggle" data-toggle="dropdown">
						{{{ trans('default.Research') }}}
					</a>
					<ul class="dropdown-menu">
							<li><a href="/researches/24/1"> {{{ trans('default.Research Groups')}}} </a></li>
							<li class="divider"></li>
							<li><a href="/researches/24/2"> {{{ trans('default.Theses and Term Projects')}}} </span></a></li>
							<li class="divider"></li>
							<li><a href="/researches/24/3"> {{{ trans('default.Projects')}}} </a></li>
					</ul>
				</li>
				<li><a href="/prosp_students/24/2">{{{ trans('default.Prospective Students') }}}</a></li>
				<li><a href="/contacts/24">{{{ trans('default.Contact Us') }}}</a></li>
				
			</ul>			
		</div>
	</div>
</div>