<div class="widget widget-stats {{ $bg }} m-b-10">
	<div class="stats-icon stats-icon-lg"><i class="{{ isset($icono) ? $icono : '' }}"></i></div>
	<div class="stats-content">
		<div class="stats-title">{{ $titulo }}</div>
		<div class="stats-number">US$ {{ $monto }}</div>
		<div class="stats-progress progress">
			<div class="progress-bar" style="width: 90%;"></div>
		</div>
		<div class="stats-desc">{{ $subtitulo }}</div>
	</div>
</div>