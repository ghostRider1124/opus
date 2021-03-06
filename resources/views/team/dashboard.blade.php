
@extends('layouts.master')

@section('content')
	@include('partials.team-side-menu')
	<div class="aside-content">
		<div class="row no-container">
			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
				<div class="page-header">Activities</div>
				@include('team.partials.activity')
			</div>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						Recent Wikis
					</div>
					<div class="panel-body" style="padding: 0px 0px">
						@if($wikis->count() > 0)
							<ul class="list-unstyled recent-wikis-list">
								@foreach($wikis as $wiki)
									<li class="item">
										<a href="{{ route('wikis.show', [$team->slug, $wiki->category->slug, $wiki->slug]) }}" style="position: relative;">
											<img src="/img/icons/basic_book.svg" width="20" height="20" alt="Image" style="margin-right: 12px;"> <span style="position: relative; top: -2px;">{{ $wiki->name }}</span>
											@if($wiki->likes->count()) 
												<div style="position: absolute; right: 10px; top: 5px; color: #c1c1c1;">
													<i class="fa fa-heart fa-fw"></i> {{ $wiki->likes->count() }}
												</div>
											@endif
										</a>
									</li>
								@endforeach
							</ul>
						@else 
							<h1 class="nothing-found side">No recent wikis</h1>
						@endif
					</div>
				</div>	
			</div>
		</div>
	</div>
@endsection