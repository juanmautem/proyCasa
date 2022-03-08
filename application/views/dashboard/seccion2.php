<div class="d-flex flex-column seccion" id = "seccion2">
	<div class="d-flex flex-row  p-2 align-self-center justify-content-between salaRecam section-item" id="modSala">
		<div class="align-self-end">
			<label class="temp1">25°C</label>
		</div>
		<div class="align-self-baseline">
			<div class="contImg">
			<img src="<?php echo base_url();?>assets/img/actuadores/ventiOff.png" class="btnVenti1">
				<div class="activeOn"> Off </div>
			</div>

		</div>
	</div>
	<div class="d-flex flex-row  p-2 align-self-center justify-content-between salaRecam section-item" id="modRecamara">
		<div class="align-self-end">
			<a href="" >
			<div class="contImg">
				
				<img src="<?php echo base_url();?>assets/img/actuadores/aspersorOn.png" class="btnFuego1">
				<div class="activeOn"> Off </div>
				
			</div>
			</a>
		</div>
		<div class="align-self-baseline">
			<label class="temp1">23°C</label>
		</div>
	</div>
</div>

<style>
	.btnVenti1{
		width : 5em;
		height: 6em;
	}
</style>