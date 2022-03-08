<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Bienvenido a Casa</title>

	<!-- JS BOOTSTRAP-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
	<!-- CSS BOOTSTRAP -->
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</head>
<style>
	.seccion{
		margin : .5%;
		width: 33%;
		height: 600px;
	}
	.section-item{
		width : 90%;
		margin : 10px; 
	}
	.entrada{
		height: 200px;
		border : 1px inset blue;
	}
	.bano{
		height: 350px;
		border : 1px inset purple;
	}
	.salaRecam{
		height: 275px;
		border : 1px inset lightcoral;
	}
	.comedor{
		height: 250px;
		border : 1px inset darkgoldenrod;
	}
	.cocina{
		height: 300px;
		border : 1px inset darkolivegreen;
	}
	.tit1{
			text-align: center;
			font-size: 3vw;
			color: darkred;
	}
	.numVis{
		text-align: right;
		font-size: 6.5vw;
		color: blue;
	}
	.temp1{
		text-align: right;
		font-size: 6.5vw;
		color: lightblue;
	}

</style>
<body>
	<main>
		<h1 class="tit1">-MI CASA-</h1>
		<hr>
		<div class="d-flex flex-row" >	
			<div class="d-flex flex-column  seccion " id = "seccion1">
				<div class="d-flex flex-row p-2 align-self-center align-items-center entrada section-item" id = "modEntrada">
					<div class="align-self-start">
						<h2 class="tit1 ">Visitantes:</h2>
					</div>
					<div>
						<label class="numVis">10</label>
					</div>
					<div class="align-self-end">
						<button class="btn btn-danger btn-sm">Apagada</button>
					</div>
				</div>
			
				<div class="d-flex flex-row p-2 align-self-center justify-content-between bano section-item" id = "modBano">
					<div class="align-self-center">
						<label class="temp1">26°C</label>
					</div>
					<div class="align-self-start">
						<button class="btn btn-success	 btn-sm">Libre</button>
					</div>
				</div>
			</div>
	  	<div class="d-flex flex-column seccion" id = "seccion2">
				<div class="d-flex flex-row  p-2 align-self-center justify-content-between salaRecam section-item" id="modSala">
					<div class="align-self-end">
						<label class="temp1">25°C</label>
					</div>
					<div class="align-self-start">
						<button class="btn btn-warning	 btn-lg">Apagado</button>
					</div>
				</div>
				<div class="d-flex flex-row  p-2 align-self-center justify-content-between salaRecam section-item" id="modRecamara">
					<div class="align-self-baseline">
						<button class="btn btn-warning	 btn-lg">Apagado</button>

					</div>
					<div class="align-self-end">
						<label class="temp1">23°C</label>

					</div>
				
				</div>
			</div>
	  	<div class="d-flex flex-column seccion" id = "seccion3">
				<div class="d-flex flex-row  p-2 align-self-center justify-content-between salaRecam section-item" id="modSala">
					<div class="align-self-end">
						<button class="btn btn-info	 btn-lg">Gas </button>

					</div>
					<div class="align-self-baseline">
						<button class="btn btn-danger	 btn-lg">Fuego</button>
					</div>
				</div>
				<div class="d-flex flex-row  p-2 align-self-center justify-content-between salaRecam section-item" id="modRecamara">
					<div class="align-self-baseline">
						<button class="btn btn-danger	 btn-lg">Fuego</button>

					</div>
					<div class="align-self-end">
						<button class="btn btn-info	 btn-lg">Gas</button>


					</div>
				
				</div>
			
			</div>
		</div>
	</main>
<footer style="background-color: darkgreen; height: 100px;">
	<p style="color: white;">MI CASA 2022</p>
</footer>
</body>
</html>