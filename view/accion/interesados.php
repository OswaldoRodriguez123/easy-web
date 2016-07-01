<div id="contenido" style="display: {{visible}};">
<section class="margin-top-60">
&nbsp;</section>
<section>
    <div class="container">
		<div class="row">
                        <div class="col-lg-1"></div>
			<div class="col-lg-10">
				<h3 class="text-center">PONTE EN ACCIÓN</h3>
                                <h4 class="text-center" >Para disfrutar de la herramienta  llena el formulario</h4>                               
			</div>
                        <div class="col-lg-12"><br></div>
                        <div class="col-md-5">
			<div class="panel panel-violeta">
			    <div class="panel-heading">
					<h3 class="text-center">INTERESADO</h3>
				</div>
			    <div class="panel-body">
					<form name="formRegistro" novalidate>
					  <div class="form-group">
						<!--<label for="correo">Correo <span class="color-violeta"><b>*</b></span></label>-->
						<input type="email" class="form-control input-lg" name="correo" id="correo" placeholder="Correo" ng-model="registro.correo" ng-model-options="{ updateOn: 'blur' }"  required >
						<span class="messages" ng-show="formRegistro.$submitted || formRegistro.correo.$touched">
							<span ng-show="formRegistro.correo.$error.required">El campo es obligatorio.</span>
							<span ng-show="formRegistro.correo.$error.email">Formato de email incorrecto.</span>
						</span>
					  </div>
					  <div class="form-group">
						<!--<label for="password">Contraseña <span class="color-violeta"><b>*</b></span></label>-->
                        <input type="password" class="form-control input-lg" id="password" name="password" placeholder="Contraseña" ng-model="registro.password" ng-model-options="{ updateOn: 'blur' }"  required >
						<span class="messages" ng-show="formRegistro.$submitted || formRegistro.password.$touched">
							<span ng-show="formRegistro.password.$error.required">El campo es obligatorio.</span>
						</span>
					  </div>
                      <div class="form-group">
						<!--<label for="nombre">Nombre <span class="color-violeta"><b>*</b></span></label>-->
						<input type="text" class="form-control input-lg" id="nombre" name="nombre" placeholder="Nombre" ng-model="registro.nombre" ng-model-options="{ updateOn: 'blur' }"  required>
						<span class="messages" ng-show="formRegistro.$submitted || formRegistro.nombre.$touched">
							<span ng-show="formRegistro.nombre.$error.required">El campo es obligatorio.</span>
						</span>
					  </div>
                      <div class="form-group">
						<!--<label for="apellido">Apellido <span class="color-violeta"><b>*</b></span></label>-->
						<input type="text" class="form-control input-lg" id="apellido" name="apellido" placeholder="Apellido" ng-model="registro.apellido" ng-model-options="{ updateOn: 'blur' }"  required>
						<span class="messages" ng-show="formRegistro.$submitted || formRegistro.apellido.$touched">
							<span ng-show="formRegistro.apellido.$error.required">El campo es obligatorio.</span>
						</span>
					  </div>  
                      <div class="form-group">
						<!--<label for="telefono">Número telefónico <span class="color-violeta"><b>*</b></span></label>-->
						<input type="text" class="form-control input-lg" id="telefono" name="telefono" placeholder="telefono" ng-model="registro.telefono" ng-model-options="{ updateOn: 'blur' }"  required>
						<span class="messages" ng-show="formRegistro.$submitted || formRegistro.telefono.$touched">
							<span ng-show="formRegistro.telefono.$error.required">El campo es obligatorio.</span>
						</span>
					  </div> 
                      <div class="form-group">
						<!--<label for="cargo">Cargo que desempeña <span class="color-violeta"><b>*</b></span></label>-->
						<input type="text" class="form-control input-lg" id="cargo" name="cargo" placeholder="Cargo" ng-model="registro.cargo" ng-model-options="{ updateOn: 'blur' }"  required>
						<span class="messages" ng-show="formRegistro.$submitted || formRegistro.cargo.$touched">
							<span ng-show="formRegistro.cargo.$error.required">El campo es obligatorio.</span>
						</span>
					  </div> 
					  <!--<pre>{{formRegistro.$invalid}}</pre>
					  <input type="hidden" name="status" ng-value="{{formRegistro.$invalid}}" ng-model="$scope.valido" >-->
					   <!-- <pre>registro = {{registro | json}}</pre> -->
                                          <div class="form-group">
					    <!--<a href="#/ponte-en-accion/registro-correcto" class="btn btn-violeta btn-lg text-uppercase pull-right">SIGUIENTE PASO</a>-->
						<input type="submit" ng-click="guardar()"   value="SIGUIENTE PASO" class="btn btn-violeta btn-lg text-uppercase pull-right" >
					  </div><!--ng-disabled="!formRegistro.$valid"-->
                                            <div class="clearfix"></div>
                                            <br>	
					</form>
				</div>
		    </div>
			</div>
                        
                        <div class="col-md-7">
			<div class="panel panel-violeta">
			    <div class="panel-heading">
					<h3 class="text-center">DESCUBRE QUE ES LO  EASY DANCE PUEDE HACER POR  TÚ ACADEMIA </h3>
				</div>
                            <div class="panel-body">
							    <p class="" ><i class="fa fa-check color-violeta-intermedio"></i> Te brinda la información de tú academia en tiempo real</p>
								<p class="padding-top-20" ><i class="fa fa-check color-violeta-intermedio"></i> Genera reportes de asistencia, cobros, participantes, proveedores entre otros</p>
								<p class="padding-top-20" ><i class="fa fa-check color-violeta-intermedio"></i> Controla la  asistencia de los alumnos y de tú personal</p>
								<p class="padding-top-20" ><i class="fa fa-check color-violeta-intermedio"></i> Genera encuestas de satisfacción al cliente, para que puedas percibir como es el resultado del trabajo realizado internamente</p>
								<p class="padding-top-20" ><i class="fa fa-check color-violeta-intermedio"></i> Facilita el control de parte de los supervisores de las tareas delegadas</p>
								<p class="padding-top-20" ><i class="fa fa-check color-violeta-intermedio"></i> facilita las funciones administrativas de planeación y control</p>
								<br>
                                <p>si tiene alguna pregunta no dude en contactarnos </p>
                                <p>0414-0000000 <br> 0261-0000000</p>
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

