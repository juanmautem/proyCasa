<style>
	.visitor{
		width: 10em;
		heigth: 6em;
	}
	.btnFuego1{
		width : 4.5em;
		height: 3em;
	}
	.btnLibre{
		width : 5em;
		height: 5em;
	}
	
	.activeOn{
		position: absolute;
		top : 12px;
		left : 30px;
		font-size : 10px;
		font-weight: bold;
		color : red;
	}
	.statusFree{
		position: absolute;
		top : -12px;
		left : 30px;
		font-size : 10px;
		font-weight: bold;
		color : green;
	}
</style>
<?php 

	echo "Cantidad = ".$cantidad. "; <-->";
	echo "Aspersor = ".$aspersor;

?>
<div class="d-flex flex-column  seccion" id = "seccion1" >
	<div class="d-flex flex-row p-2 align-self-end align-items-end justify-content-between entrada section-item modEntrada" id = "modEntrada" ">
		<div class="align-self-center">
			<div class="contImg">
				<img src="<?php echo base_url();?>assets/img/seccion1/visitantes.png" class="visitor">
			
				<label class="numVis">10</label>
			</div>
		</div>
		<div class="align-self-end">
			<a href="" >
					<div class="contImg">
						
						<img src="<?php echo base_url();?>assets/img/actuadores/aspersorOn.png" class="btnFuego1">
						<div class="activeOn"> Off </div>
						
					</div>
				</a>
		</div>
	</div>

	<div class="d-flex flex-row p-2 align-self-center justify-content-between bano section-item" id = "modBano">
		<div class="align-self-center">
			<label class="temp1">26°C</label>
		</div>
		<div class="align-self-end">
		<a href="" >
			<div class="contImg">
				<div>
					<img src="<?php echo base_url();?>assets/img/actuadores/free.png" class="btnLibre">
				</div>
				<div class="statusFree"> Free </div>
			</div>
		</a>
		</div>
	</div>
</div>