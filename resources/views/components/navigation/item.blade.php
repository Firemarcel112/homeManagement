
<li @class([
	'nav-item',
	'active' => $isActive()
	])>
	<a class="nav-link" href="{{ $url }}">
		<span class="nav-link-icon d-md-none d-lg-inline-block">
			@if(!empty($icon))
				@include("default.icons.{$icon}", [
					'classes' => 'icon'
				])
			@endif
		</span>

		<span class="nav-link-title">
			{{ $text ?? '' }}
			@if(!empty($is_new))
				<span class='badge badge-sm bg-green-lt text-uppercase ms-auto'>
					{{ __('general.new') }}
				</span>
			@endif
		</span>
	</a>
</li>
