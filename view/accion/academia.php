<div id="contenido" style="display: {{visible}};">
<section class="margin-top-60">
&nbsp;</section>
<section>
    <div class="container">
		<div class="row">
                        <div class="col-lg-1"></div>
			<div class="col-lg-10">
				<h3 class="text-center">ESTÁS A UN PASO DE INICIAR – 30 DIAS GRATIS</h3>
                <hr>                              
			</div>
                        <div class="col-lg-12"><br></div>
                        <div class="col-md-5">
			<div class="panel panel-violeta">
			    <div class="panel-heading">
					<h3 class="text-center">DATOS DE LA ACADEMIA DE BAILE</h3>
				</div>
			    <div class="panel-body">
					<form name="formRegistro" id="formRegistro" novalidate>
					  <div class="form-group">
						<!--<label for="correo">Correo <span class="color-violeta"><b>*</b></span></label>-->
						<input type="text" class="form-control input-lg" name="academia" id="academia" placeholder="Nombre de la academia de baile " ng-model="academia.academia" ng-model-options="{ updateOn: 'blur' }"  required >
						<span class="messages" ng-show="formRegistro.$submitted || formRegistro.academia.$touched">
							<span ng-show="formRegistro.academia.$error.required">El campo es obligatorio.</span>
						</span>
					  </div>		
                      <div class="form-group">
						<!--<label for="nombre">Nombre <span class="color-violeta"><b>*</b></span></label>-->
						<textarea class="form-control input-lg" id="direccion" name="direccion" placeholder="Dirección" ng-model="academia.direccion" ng-model-options="{ updateOn: 'blur' }"  required></textarea>
						<span class="messages" ng-show="formRegistro.$submitted || formRegistro.direccion.$touched">
							<span ng-show="formRegistro.direccion.$error.required">El campo es obligatorio.</span>
						</span>
					  </div>
                       <div class="form-group">
						<!--<label for="telefono">Número telefónico <span class="color-violeta"><b>*</b></span></label>-->
						<input type="text" class="form-control input-lg" id="telefonolocal" name="telefonolocal" placeholder="Telefóno Local" ng-model="academia.telefonolocal" ng-model-options="{ updateOn: 'blur' }"  required>
						<span class="messages" ng-show="formRegistro.$submitted || formRegistro.telefonolocal.$touched">
							<span ng-show="formRegistro.telefonolocal.$error.required">El campo es obligatorio.</span>
						</span>
					  </div> 
                      <div class="form-group">
						<!--<label for="telefono">Número telefónico <span class="color-violeta"><b>*</b></span></label>-->
						<input type="text" class="form-control input-lg" id="telefonomovil" name="telefonomovil" placeholder="Telefóno Móvil" ng-model="academia.telefonomovil" ng-model-options="{ updateOn: 'blur' }"  required>
						<span class="messages" ng-show="formRegistro.$submitted || formRegistro.telefonomovil.$touched">
							<span ng-show="formRegistro.telefonomovil.$error.required">El campo es obligatorio.</span>
						</span>
					  </div> 
                      <!--<div class="form-group">-->
						<!--<label for="cargo">Cargo que desempeña <span class="color-violeta"><b>*</b></span></label>-->
						<!--<input type="text" class="form-control input-lg" id="cargo" name="cargo" placeholder="Cargo" ng-model="academia.cargo" ng-model-options="{ updateOn: 'blur' }"  required>
						<span class="messages" ng-show="formRegistro.$submitted || formRegistro.cargo.$touched">
							<span ng-show="formRegistro.cargo.$error.required">El campo es obligatorio.</span>
						</span>
					  </div>--> 
					  <div class="form-group">
						  <!--<label for="exampleInputNombre">Cómo te enteraste de nosotros</label>-->	
						  <select class="form-control input-lg" id="pais" name="pais" ng-model="academia.pais" ng-change="buscaEstado()" ng-model-options="{ updateOn: 'blur' }"  required>
							  <option value="" > Seleciona el Pais</option>
							  <option ng-repeat="pais in paises" value="{{pais.id}}">{{pais.nombre}}</option>
						   </select>
						   <span class="messages" ng-show="formRegistro.$submitted || formRegistro.pais.$touched">
							<span ng-show="formRegistro.pais.$error.required">El campo es obligatorio.</span>
						</span>
					   </div>
					   <div class="form-group">
						  <!--<label for="exampleInputNombre">Cómo te enteraste de nosotros</label>-->	
						  <select class="form-control input-lg" id="estado" name="estado" ng-model="academia.estado" ng-model-options="{ updateOn: 'blur' }"  required>
							  <option id="estadoprincipal" value="" > Seleciona el Estado</option>
							   <option ng-repeat="estado in estados" value="{{estado.id}}">{{estado.nombre}}</option>
						  </select>
						   <span class="messages" ng-show="formRegistro.$submitted || formRegistro.estado.$touched">
							<span ng-show="formRegistro.estado.$error.required">El campo es obligatorio.</span>
						</span>
					   </div>
					  <div class="form-group">
						  <!--<label for="exampleInputNombre">Cómo te enteraste de nosotros</label>-->	
						  <select class="form-control input-lg" id="entero" name="entero" ng-model="academia.entero" ng-model-options="{ updateOn: 'blur' }"  required>
							  <option value="" >¿ Como te Enteraste ?</option>
							  <option value="Por un amigo">Por un amigo</option>
							  <option value="Redes Sociales / Internet"> Redes Sociales / Internet</option>
							  <option value="Prensa"> Prensa</option>
							  <option value="Televisión"> Televisión</option>
							  <option value="Radio"> Radio</option>
							  <option value="Otros"> Otros</option>
						   </select>
						   <span class="messages" ng-show="formRegistro.$submitted || formRegistro.entero.$touched">
							<span ng-show="formRegistro.entero.$error.required">El campo es obligatorio.</span>
						</span>
					   </div>
					  <!--<pre>{{formRegistro.$invalid}}</pre>
					  <input type="hidden" name="status" ng-value="{{formRegistro.$invalid}}" ng-model="$scope.valido" >-->
					   <!-- <pre>registro = {{registro | json}}</pre> -->
                                          <div class="form-group">
					    <!--<a href="#/ponte-en-accion/registro-correcto" class="btn btn-violeta btn-lg text-uppercase pull-right">SIGUIENTE PASO</a>-->
						<input type="submit" ng-click="guardarAcademia()"   value="SIGUIENTE PASO" class="btn btn-violeta btn-lg text-uppercase pull-right" >
					  </div><!--ng-disabled="!formRegistro.$valid"-->

					    <input type="hidden" name="token" id="token">
                                            <div class="clearfix"></div>
                                            <br>	
					</form>
				</div>
		    </div>
			</div>
                        
                        <div class="col-md-7">
			<div class="panel panel-violeta">
			    <div class="panel-heading">
					<h3 class="text-center">DESCUBRE QUE ES LO  EASY DANCE PUEDE HACER POR TU ACADEMIA </h3>
				</div>
                            <div class="panel-body">
							    <p class="" ><i class="fa fa-check color-violeta-intermedio"></i> Te brinda la información de tu academia en tiempo real</p>
								<p class="padding-top-20" ><i class="fa fa-check color-violeta-intermedio"></i> Genera reportes de asistencia, cobros, participantes, proveedores entre otros</p>
								<p class="padding-top-20" ><i class="fa fa-check color-violeta-intermedio"></i> Controla la  asistencia de los alumnos y de tu personal</p>
								<p class="padding-top-20" ><i class="fa fa-check color-violeta-intermedio"></i> Genera encuestas de satisfacción al cliente, para que puedas percibir como es el resultado del trabajo realizado internamente</p>
								<p class="padding-top-20" ><i class="fa fa-check color-violeta-intermedio"></i> Facilita el control de parte de los supervisores de las tareas delegadas</p>
								<p class="padding-top-20" ><i class="fa fa-check color-violeta-intermedio"></i> facilita las funciones administrativas de planeación y control</p>
								<br>
                                <p>si tiene alguna pregunta no dude en contactarnos </p>
                                <p>info@dancelatino.com</p>
                            </div>
                        </div>
                        </div>
		</div>
	</div>    
<section class="margin-top-60">
&nbsp;</section>
</div>
<script type="text/javascript-lazy">
   loadjscssfile("js/function/cargar.js", "js");
</script>

