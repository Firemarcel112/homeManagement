@php
	$links_in_column = $links_in_column ?? 10;
@endphp



<li @class([
	'nav-item',
	'dropdown',
	'active' => in_array(request()->route()->getName(), collect($items)->pluck('route_name')->toArray())
])>
	<a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="outside"
		role="button" aria-expanded="false">

		<span class=" nav-link-icon d-md-none d-lg-inline-block">
			@if(!empty($icon))
				@include("default.icons.{$icon}", [
					'classes' => 'icon'
				])
			@endif
		</span>

		<span class="nav-link-title">
			{{ $text }}
			@if(!empty($is_new))
				<span class='badge badge-sm bg-green-lt text-uppercase ms-auto'>
					{{ __('general.new') }}
				</span>
			@endif
		</span>
	</a>
	<div class="dropdown-menu">
		<div class="dropdown-menu-columns">
			@foreach($items as $item)
				@if($loop->first || $loop->index % $links_in_column == 0)
					<div class="dropdown-menu-column">
				@endif
				<a @class([
					'dropdown-item',
					'active' => request()->route()->getName() == !empty($item['route_name']) ? $item['route_name'] : '',
				])
				href="{{ $item['url'] ?? !empty($route_name) ? route($item['route_name']) : '' }}">
					{{ $item['text'] }}

					@if(!empty($item['is_new']))
						<span class='badge badge-sm bg-green-lt text-uppercase ms-auto'>
							{{ __('general.new') }}
						</span>
					@endif
				</a>
				@if($loop->index % $links_in_column == $links_in_column - 1 || $loop->last)
					</div>
				@endif
			@endforeach
		</div>
	</div>
</li>
