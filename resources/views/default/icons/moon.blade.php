<svg xmlns="http://www.w3.org/2000/svg" class="{{ $classes ?? '' }}" width="{{ $width_height ?? 24 }}" height="{{ $width_height ?? 24 }}" viewBox="0 0 24 24" stroke-width="2"
	stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"
	@if(!empty($hover_content))
		data-bs-toggle="tooltip" data-bs-html="true" data-bs-title="{!! $hover_content !!}" @if(!empty($hover_placement))data-bs-placement="{{ $hover_placement }}" @endif
	@endif>
	<path stroke="none" d="M0 0h24v24H0z" fill="none" />
	<path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
</svg>
