<svg xmlns="http://www.w3.org/2000/svg" class="{{ $classes ?? '' }}" width="{{ $width_height ?? 24 }}" height="{{ $width_height ?? 24 }}" viewBox="0 0 24 24" stroke-width="2"
	stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"
	@if(!empty($hover_content))
		data-bs-toggle="tooltip" data-bs-html="true" data-bs-title="{!! $hover_content !!}" @if(!empty($hover_placement))data-bs-placement="{{ $hover_placement }}" @endif
	@endif>
	<path stroke="none" d="M0 0h24v24H0z" fill="none" />
	<path d="M5 12l-2 0l9 -9l9 9l-2 0" />
	<path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
	<path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
</svg>
