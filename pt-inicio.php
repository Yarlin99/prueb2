<?php  
	session_start();
	if(isset($_SESSION['vNomUsuReg'])){
		$vUsuSisReg = $_SESSION['vUsuSisReg'];
		$vNomUsuReg = $_SESSION['vNomUsuReg'];
		$vAdmUsuReg = $_SESSION['vAdmUsuReg'];
		$vCreUsuReg = $_SESSION['vCreUsuReg'];
		$vModUsuReg = $_SESSION['vModUsuReg'];
		$vEliUsuReg = $_SESSION['vEliUsuReg'];
        $vExpUsuReg = $_SESSION['vExpUsuReg'];
        $vImpUsuReg = $_SESSION['vImpUsuReg'];
        $vGloUsuReg = $_SESSION['vGloUsuReg'];
        $vIDPUsuReg = $_SESSION['vIDPUsuReg'];
		$vPaiUsuReg = $_SESSION['vPaiUsuReg'];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title>Inicio</title>

	<!-- INSERTO DEPENDENCIAS CSS -->
	<?php require_once "scripts2.php"; ?>

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-xl-6 text-center">
								<img src="logotipo.png" alt="logo_empresa">
							</div>
							<div class="col-xl-6 text-center align-self-center">
								<h3>Sistema de Propiedad Intelectual</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<p></p>

		<div class="row">
			<div class="col-lg-6 col-md-6">
				<div class="card">
					<h6 class="card-header">Opciones de Trabajo Principales</h6>
					<div class="card-body">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<a href="pt-regmarca.php" class="btn btn-sm btn-block btn-info">Registro de Marcas</a>
								<p></p>
							</div>
							<br>
							<div class="col-md-6 col-sm-6">
								<a href="pt-repmarca.php" class="btn btn-sm btn-block btn-info">Reportes de Marcas</a>
								<p></p>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6 col-sm-6">
								<a href="pt-regdomin.php" class="btn btn-sm btn-block btn-info">Registro de Dominios</a>
								<p></p>
							</div>
							<br>
							<div class="col-md-6 col-sm-6">
								<a href="pt-repdomin.php" class="btn btn-sm btn-block btn-info">Reporte de Reg. Dominios</a>
								<p></p>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6 col-sm-6">
								<a href="pt-regsanit.php" class="btn btn-sm btn-block btn-info">Registro Sanitario</a>
								<p></p>
							</div>
							<br>
							<div class="col-md-6 col-sm-6">
								<a href="pt-repsanit.php" class="btn btn-sm btn-block btn-info">Reporte Reg. Sanitario</a>
								<p></p>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6 col-sm-6">
								<a href="pt-regpatinv.php" class="btn btn-sm btn-block btn-info">Registro de Patentes</a>
								<p></p>
							</div>
							<br>
							<div class="col-md-6 col-sm-6">
								<a href="pt-reppatinv.php" class="btn btn-sm btn-block btn-info">Reporte de Patentes</a>
								<p></p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<a href="pt-regiliti.php" class="btn btn-sm btn-block btn-info">Registro de Litigios</a>
								<p></p>
							</div>
							<br>
							<div class="col-md-6 col-sm-6">
								<a href="pt-repoliti.php" class="btn btn-sm btn-block btn-info">Reporte de Litigios</a>
								<p></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="card">
					<h6 class="card-header">Nuestras Consultas</h6>
					<div class="card-body">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6">
								<a href="pt-conevent.php" class="btn btn-sm btn-block btn-info">Asuntos Contensiosos Registrados</a>
								<p></p>
							</div>
							<br>
							<div class="col-lg-6 col-md-6 col-sm-6">
								<a href="pt-contrami.php" class="btn btn-sm btn-block btn-info">Trámites Registrados</a>
								<p></p>
							</div>
							<br>
						</div>
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6">
							    <!--a href="pt-convenma.php"-->
								<!--a href="https://lookerstudio.google.com/reporting/13b6faf3-c201-447c-ac51-8c445877b05a/page/nIaXD" class="btn btn-sm btn-block btn-info">Marcas por Vencer</a-->
								<a href="pt-convenma.php">Marcas por Vencer</a>
								<p></p>
							</div>
							<br>
							<div class="col-lg-6 col-md-6 col-sm-6">
								<a href="pt-conacmar.php" class="btn btn-sm btn-block btn-info">Actualización de Marcas</a>
								<p></p>
							</div>
							<br>
						</div>
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6">
								<a href="pt-conpendi.php" class="btn btn-sm btn-block btn-info">Registro de Pendientes</a>
								<p></p>
							</div>
							<br>
							<div class="col-lg-6 col-md-6 col-sm-6">
								<a href="pt-conposre.php" class="btn btn-sm btn-block btn-info">Post Registral</a>
								<p></p>
							</div>
							<br>
						</div>
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6">
								<a href="pt-conmacli.php" class="btn btn-sm btn-block btn-info">Marcas de un Cliente</a>
								<p></p>
							</div>
							<br>
							<div class="col-lg-6 col-md-6 col-sm-6">
								<a href="pt-conbufig.php" class="btn btn-sm btn-block btn-info">Búsqueda Figurativa</a>
								<p></p>
							</div>
							<br>
						</div>
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6">
								<a href="pt-conbufon.php" class="btn btn-sm btn-block btn-info">Búsqueda Fonética Gral.</a>
								<p></p>
							</div>
							<br>
							<div class="col-lg-6 col-md-6 col-sm-6">
								<a href="pt-genecart.php" class="btn btn-sm btn-block btn-info">Creador de Cartas</a>
								<p></p>
							</div>
							<br>
						</div>
					</div>
				</div>
			</div>
		</div>
		<p></p>

		<div class="row">
			<div class="col-lg-6 col-md-6">
				<div class="card">
					<h6 class="card-header">Proyectos</h6>
					<div class="card-body">
						<div class="row">
							<div class="col-md-6 col-sm-6 col-xs-6">
								<a href="pt-regiproy.php" class="btn btn-sm btn-block btn-info">Reg. de Solicitudes y Proyectos</a>
								<p></p>
							</div>
							<br>
							<div class="col-md-6 col-sm-6 col-xs-6">
								<a href="pt-repoproy.php" class="btn btn-sm btn-block btn-info">Reporte de Proyectos</a>
								<p></p>
							</div>
							<br>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6 col-xs-6">
								<a href="pt-consnode.php" class="btn btn-sm btn-block btn-info">Consulta Notas de Débito</a>
								<p></p>
							</div>
							<br>
							<div class="col-md-6 col-sm-6 col-xs-6">
								<a href="pt-reponode.php" class="btn btn-sm btn-block btn-info">Reporte de Notas de Débito</a>
							<br>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6 col-xs-6">
								<a href="pt-reposysc.php" class="btn btn-sm btn-block btn-info">Reporte de Solicitudes</a>
								<p></p>
							</div>
							<br>
						</div>
					</div>
				</div>
			</div>
			<p></p>

			<?php if($vAdmUsuReg == 1){
				echo '<div class="col-lg-6">
					<div class="card">
						<h6 class="card-header">Tablas Maestras</h6>
						<div class="card-body">
							<div class="row">
								<div class="col-md-6 col-sm-6 col-xs-6">
									<a href="pt-reggremp.php" class="btn btn-sm btn-block btn-info">Reg. de Grupo Empresarial</a>
									<p></p>
								</div>
								<br>
								<div class="col-md-6 col-sm-6 col-xs-6">
									<a href="pt-regclien.php" class="btn btn-sm btn-block btn-info">Registro de Clientes</a>
								</div>
								<br>
							</div>
							<div class="row">
								<div class="col-md-6 col-sm-6 col-xs-6">
									<a href="pt-regtitul.php" class="btn btn-sm btn-block btn-info">Registro de Titulares</a>
									<p></p>
								</div>
								<br>
								<div class="col-md-6 col-sm-6 col-xs-6">
									<a href="pt-regcorre.php" class="btn btn-sm btn-block btn-info">Registro de Corresponsales</a>
									<p></p>
								</div>
								<br>
							</div>
							<div class="row">
								<div class="col-md-6 col-sm-6 col-xs-6">
									<a href="pt-regfabri.php" class="btn btn-sm btn-block btn-info">Registro de Fabricantes</a>
									<p></p>
								</div>
								<br>
								<div class="col-md-6 col-sm-6 col-xs-6">
									<a href="pt-regimpor.php" class="btn btn-sm btn-block btn-info">Registro de Importador</a>
									<p></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-sm-6 col-xs-6">
									<a href="pt-regdistr.php" class="btn btn-sm btn-block btn-info">Registro de Distribuidor</a>
									<p></p>
								</div>
							</div>
						</div>
					</div>
				</div>';
			}else{
				echo '<div class="col-lg-6">
					<div class="card">
						<h6 class="card-header">Tablas Auxiliares</h6>
						<div class="card-body">
							<div class="row">
								<div class="col-md-6 col-sm-6 col-xs-6">
									<span class="btn btn-sm btn-block btn-info" data-toggle="modal" data-target="#ModConUsu">
										 Modif. Contraseña
									</span>
								</div>
								<br>
							</div>
						</div>
					</div>
				</div>';
			}?>

		</div>
		<p></p>

		<?php if($vAdmUsuReg == 1){
			echo '<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="card">
						<h6 class="card-header">Tablas Auxiliares</h6>
						<div class="card-body">
							<div class="row">
								<div class="col-xl-2 col-lg-6 col-md-6 col-sm-6">
									<a href="pt-usuarios.php" class="btn btn-sm btn-block btn-info">Reg. de Usuarios</a>
								</div>
								<br>
								<div class="col-xl-2 col-lg-6 col-md-6 col-sm-6">
									<a href="pt-paises.php" class="btn btn-sm btn-block btn-info">Reg. de Países</a>
									<p></p>
								</div>
								<br>
								<div class="col-xl-2 col-lg-6 col-md-6 col-sm-6">
									<a href="pt-tregtrib.php" class="btn btn-sm btn-block btn-info">Tipos Reg. Tributario</a>
									<p></p>
								</div>
								<br>
								<div class="col-xl-2 col-lg-6 col-md-6 col-sm-6">
									<a href="pt-tinstmar.php" class="btn btn-sm btn-block btn-info">Reg. de Instancias</a>
									<p></p>
								</div>
								<br>
								<div class="col-xl-2 col-lg-6 col-md-6 col-sm-6">
									<a href="pt-estadmar.php" class="btn btn-sm btn-block btn-info">Estados de la Marca</a>
									<p></p>
								</div>
								<br>
								<div class="col-xl-2 col-lg-6 col-md-6 col-sm-6">
									<a href="pt-signomar.php" class="btn btn-sm btn-block btn-info">Registro de Signos</a>
									<p></p>
								</div>
							</div>

							<div class="row">
								<div class="col-xl-2 col-lg-6 col-md-6 col-sm-6">
									<a href="pt-tiposmar.php" class="btn btn-sm btn-block btn-info">Reg. Tipos de Marca</a>
									<p></p>
								</div>
								<br>
								<div class="col-xl-2 col-lg-6 col-md-6 col-sm-6">
									<a href="pt-clasemar.php" class="btn btn-sm btn-block btn-info">Clases de la Marca</a>
									<p></p>
								</div>
								<br>
								<div class="col-xl-2 col-lg-6 col-md-6 col-sm-6">
									<a href="pt-ttrammar.php" class="btn btn-sm btn-block btn-info">Tipos de Trámite</a>
									<p></p>
								</div>
								<br>
								<div class="col-xl-2 col-lg-6 col-md-6 col-sm-6">
									<a href="pt-tevenmar.php" class="btn btn-sm btn-block btn-info">Tipos de Evento</a>
									<p></p>
								</div>
								<br>
								<div class="col-xl-2 col-lg-6 col-md-6 col-sm-6">
									<a href="pt-tregisan.php" class="btn btn-sm btn-block btn-info">Tipos Reg. Sanitario</a>
									<p></p>
								</div>
								<br>
								<div class="col-xl-2 col-lg-6 col-md-6 col-sm-6">
									<a href="pt-eregisan.php" class="btn btn-sm btn-block btn-info">Estados Reg. Sanitario</a>
									<p></p>
								</div>
							</div>

							<div class="row">
								<div class="col-xl-2 col-lg-6 col-md-6 col-sm-6">
									<a href="pt-tipoliti.php" class="btn btn-sm btn-block btn-info">Tipos de Litigio</a>
									<p></p>
								</div>
								<br>
								<div class="col-xl-2 col-lg-6 col-md-6 col-sm-6">
									<a href="pt-estaliti.php" class="btn btn-sm btn-block btn-info">Estados del Litigio</a>
									<p></p>
								</div>
								<br>
								<div class="col-xl-2 col-lg-6 col-md-6 col-sm-6">
									<a href="pt-tipopate.php" class="btn btn-sm btn-block btn-info">Tipos de Patentes</a
									<p></p>
								</div>
								<br>
								<div class="col-xl-2 col-lg-6 col-md-6 col-sm-6">
									<a href="pt-estapate.php" class="btn btn-sm btn-block btn-info">Estados de Patentes</a>
									<p></p>
								</div>
								<br>
								<div class="col-xl-2 col-lg-6 col-md-6 col-sm-6">
									<a href="pt-alerdest.php" class="btn btn-sm btn-block btn-info">Alertas y Destinatarios</a>
									<p></p>
								</div>
								<br>
								<div class="col-xl-2 col-lg-6 col-md-6 col-sm-6">
									<a href="pt-regifone.php" class="btn btn-sm btn-block btn-info">Registro de Fonemas</a>
									<p></p>
								</div>
							</div>
							<div class="row">
								<div class="col-xl-2 col-lg-6 col-md-6 col-sm-6">
									<a href="pt-regetapa.php" class="btn btn-sm btn-block btn-info">Registro Etapas</a>
									<p></p>
								</div>
								<br>
								<div class="col-xl-2 col-lg-6 col-md-6 col-sm-6">
									<a href="pt-regmoneda.php" class="btn btn-sm btn-block btn-info">Reg. Monedas</a>
									<p></p>
								</div>
								<br>
								<div class="col-xl-2 col-lg-6 col-md-6 col-sm-6">
									<a href="pt-areatrab.php" class="btn btn-sm btn-block btn-info">Áreas de Trabajo</a>
									<p></p>
								</div>
								<br>
								<div class="col-xl-2 col-lg-6 col-md-6 col-sm-6">
									<a href="pt-situpost.php" class="btn btn-sm btn-block btn-info">Sit. Post. Regist.</a>
									<p></p>
								</div>
								<br>
								<div class="col-xl-2 col-lg-6 col-md-6 col-sm-6">
									<a href="pt-tiposerv.php" class="btn btn-sm btn-block btn-info">Reg. Tipo Servicio</a>
									<p></p>
								</div>
								<br>
								<div class="col-xl-2 col-lg-6 col-md-6 col-sm-6">
									<span class="btn btn-sm btn-block btn-info" data-toggle="modal" data-target="#ModConUsu">
										 Modif. Contraseña
									</span>
								</div>
								<br>
							</div>
							<div class="row">
								<div class="col-xl-2 col-lg-6 col-md-6 col-sm-6">
									<a href="pt-listserv.php" class="btn btn-sm btn-block btn-info">Lista de Servicio</a>
									<p></p>
								</div>
								<br>
								<div class="col-xl-2 col-lg-6 col-md-6 col-sm-6">
									<a href="pt-sutiserv.php" class="btn btn-sm btn-block btn-info">Sub-Tipo Servicio</a>
									<p></p>
								</div>
								<br>
								<div class="col-xl-2 col-lg-6 col-md-6 col-sm-6">
									<a href="pt-cosutise.php" class="btn btn-sm btn-block btn-info">Costo Sub-Tipo Serv.</a>
									<p></p>
								</div>
								<br>
							</div>
						</div>
					</div>
				</div>
			</div>';
		}?>

		<p></p>
		<div class="row">
			<div class="col-lg-12">
				<div class="card text-right">
					<div class="card-body">
						<div class="row">
							<div class="col-xl-9">
								<p class="text-center">
								<small class="text-muted">Sistema de Propiedad Intelectual.</small></p>
							</div>
							<div class="col-xl-3">
								<a href="FnSalir.php" class="btn btn-block btn-danger">
									<i class="fas fa-power-off"></i> Salir del sistema
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6"><p class="text-left"><small class="text-muted">MARCASIST &copy; 2020</small></p></div>
			<div class="col-lg-6"><p class="text-right"><small class="text-muted">Usuario: 
				<?php
					echo $vNomUsuReg." - ".$vPaiUsuReg;
				?>
			</small></p></div>
		</div>
		<p></p>
	</div>

	<!-- MODAL DE MODIFICACIÓN DE REGISTROS -->
	<div class="modal fade" id="ModConUsu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Modifica Contraseña</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form id="FrmModConUsu">
						<div class="form-group row" style="margin-bottom: 5px;">
							<label class="col-sm-4 col-form-label">Usuario:</label>
							<div class="col-sm-8">
								<input type="text" id="ModNomUsu" name="ModNomUsu" value="<?= $vUsuSisReg ?>" readonly class="form-control form-control-sm">
							</div>
						</div>
						<div class="form-group row" style="margin-bottom: 5px;">
							<label class="col-sm-4 col-form-label">C. Antigua:</label>
							<div class="col-sm-8">
								<input type="password" id="ModConAnt" name="ModConAnt" class="form-control form-control-sm">
							</div>
						</div>
						<div class="form-group row" style="margin-bottom: 5px;">
							<label class="col-sm-4 col-form-label">C. Nueva:</label>
							<div class="col-sm-8">
								<input type="password" id="ModConNue" name="ModConNue" class="form-control form-control-sm">
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					<button type="button" class="btn btn-primary" id="BtnNueConUsu" onclick="FnModConUsu()">Guardar cambios
					</button>
				</div>
			</div>
		</div>
	</div>
	<!-- FIN DE MODAL -->

	<!-- FUNCION CAMBIO DE CONTRASEÑA -->
	<script type="text/javascript">
		function FnModConUsu(){
			if($('#ModConAnt').val()==""){
				swal("Debes ingresar la contraseña antigua.",{
					icon: "success",
					timer: 1500,
				});
				$("#ModConAnt").focus();
				return false;
			}else if($('#ModConNue').val()==""){
				swal("Debes ingresar la contraseña nueva.",{
					icon: "success",
					timer: 1500,
				});
				$("#ModConNue").focus();
				return false;
			}else{
				$.ajax({
					type:"POST",
					data:$('#FrmModConUsu').serialize(),
					url:"fnc/FnModConUsu.php",
					success:function(r){
						if(r==1){
							$('#FrmModConUsu')[0].reset();
							$('#ModConUsu').modal('hide');

							swal("Se modificó correctamente la contraseña del usuario, por favor salga del sistema y vuelva a ingresar.",{
								icon: "success",
							});
						}else{
							swal("Contraseña incorrecta no se modificó la contraseña, por favor verifique.",{
								icon: "error",
							});
						}
					}
				});
			}
		}
	</script>
	<!-- FIN FUNCIÓN -->

</body>
</html>

<?php  
	}else{
		header("location:../index.php");
	}
?>