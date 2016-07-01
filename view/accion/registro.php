<div id="contenido" style="display: {{visible}};">
<section class="margin-top-60">
&nbsp;</section>
<section>
    <div class="container" ng-init="vregistro=true;vacademia=false;vcorrecto=false;">
		<div class="row" ng-show="vregistro">
                        <div class="col-lg-1"></div>
			<div class="col-lg-10">
				<h3 class="text-center">PONTE EN ACCIÓN</h3>
                                <h4 class="text-center" >Para disfrutar de la herramienta  llena el formulario</h4>                               
			</div>
                        <div class="col-lg-12"><br></div>
                        <div class="col-md-5">
			<div class="panel panel-violeta" >
			    <div class="panel-heading">
					<h3 class="text-center">INICIA TU PRUEBA GRATIS</h3>
				</div>
			    <div class="panel-body">
					<form name="formRegistro" id="formRegistro" novalidate>
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
                        <input type="password" class="form-control input-lg" id="password" name="password" placeholder="Contraseña" ng-model="registro.password" ng-model-options="{ updateOn: 'blur' }"  required minlength="6">
						<span class="messages" ng-show="formRegistro.$submitted || formRegistro.password.$touched">
							<span ng-show="formRegistro.password.$error.required">El campo es obligatorio.</span>
                                                        <span ng-show="formRegistro.password.$error.minlength">El campo requiere un mínimo de 6 caracteres.</span>
						</span>
					  </div>
                      <div class="form-group">
						<!--<label for="nombre">Nombre <span class="color-violeta"><b>*</b></span></label>-->
						<input type="text" class="form-control input-lg" id="nombre" name="nombre" placeholder="Nombre" ng-model="registro.nombre" ng-model-options="{ updateOn: 'blur' }"  ng-required="true" ng-pattern="/^[A-Za-záéíóúñÑÁÉÍÓÚ ]{3,}?$/" >
						<span class="messages" ng-show="formRegistro.$submitted || formRegistro.nombre.$touched">
							<span ng-show="formRegistro.nombre.$error.required">El campo es obligatorio.</span>
                                                        <span ng-show="formRegistro.nombre.$error.pattern">El campo requiere solo letras y mínimo de 3 caracteres.</span>
                                                        
						</span>
					  </div>
                      <div class="form-group">
						<!--<label for="apellido">Apellido <span class="color-violeta"><b>*</b></span></label>-->
						<input type="text" class="form-control input-lg" id="apellido" name="apellido" placeholder="Apellido" ng-model="registro.apellido" ng-model-options="{ updateOn: 'blur' }"  required ng-pattern="/^[A-Za-záéíóúñÑÁÉÍÓÚ ]{3,}?$/" >
						<span class="messages" ng-show="formRegistro.$submitted || formRegistro.apellido.$touched">
							<span ng-show="formRegistro.apellido.$error.required">El campo es obligatorio.</span>
                                                        <span ng-show="formRegistro.apellido.$error.pattern">El campo requiere solo letras y mínimo de 3 caracteres.</span>
						</span>
					  </div>  
                      <div class="form-group">
						<!--<label for="telefono">Número telefónico <span class="color-violeta"><b>*</b></span></label>-->
						<input type="text" class="form-control input-lg" id="telefono" name="telefono" placeholder="Telefóno" ng-model="registro.telefono" ng-model-options="{ updateOn: 'blur' }"  required ng-pattern="/^[0-9]{7,}?$/" >
						<span class="messages" ng-show="formRegistro.$submitted || formRegistro.telefono.$touched">
							<span ng-show="formRegistro.telefono.$error.required">El campo es obligatorio.</span>
                                                        <span ng-show="formRegistro.telefono.$error.pattern">El campo requiere solo numero y mínimo de 7 caracteres.</span>
                                                        
						</span>
					  </div> 
                      <div class="form-group">
						<!--<label for="cargo">Cargo que desempeña <span class="color-violeta"><b>*</b></span></label>-->
						<input type="text" class="form-control input-lg" id="cargo" name="cargo" placeholder="Cargo" ng-model="registro.cargo" ng-model-options="{ updateOn: 'blur' }"  required ng-pattern="/^[A-Za-záéíóúñÑÁÉÍÓÚ ]{3,}?$/" >
						<span class="messages" ng-show="formRegistro.$submitted || formRegistro.cargo.$touched">
							<span ng-show="formRegistro.cargo.$error.required">El campo es obligatorio.</span>
                                                        <span ng-show="formRegistro.cargo.$error.pattern">El campo requiere solo letras y mínimo de 3 caracteres.</span>
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
                                <p>info@easydancelatino.com</p>
                            </div>
                        </div>
                        </div>
		</div>
		<div class="row" ng-show="vacademia">
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
					<form name="formAcademia" id="formAcademia" novalidate>
					  <div class="form-group">
						<!--<label for="correo">Correo <span class="color-violeta"><b>*</b></span></label>-->
						<input type="text" class="form-control input-lg" name="academia" id="academia" placeholder="Nombre de la academia de baile " ng-model="registro.academia" ng-model-options="{ updateOn: 'blur' }"  required  >
						<span class="messages" ng-show="formAcademia.$submitted || formAcademia.academia.$touched">
							<span ng-show="formAcademia.academia.$error.required">El campo es obligatorio.</span>
                                                        
						</span>
					  </div>		
                      <div class="form-group">
						<!--<label for="nombre">Nombre <span class="color-violeta"><b>*</b></span></label>-->
						<textarea class="form-control input-lg" id="direccion" name="direccion" placeholder="Dirección" ng-model="registro.direccion" ng-model-options="{ updateOn: 'blur' }"  required ></textarea>
						<span class="messages" ng-show="formAcademia.$submitted || formAcademia.direccion.$touched">
							<span ng-show="formAcademia.direccion.$error.required">El campo es obligatorio.</span>
						</span>
					  </div>
                       <div class="form-group">
						<!--<label for="telefono">Número telefónico <span class="color-violeta"><b>*</b></span></label>-->
						<input type="text" class="form-control input-lg" id="telefonolocal" name="telefonolocal" placeholder="Telefóno Local" ng-model="registro.telefonolocal" ng-model-options="{ updateOn: 'blur' }"  required ng-pattern="/^[0-9]{7,}?$/" >
						<span class="messages" ng-show="formAcademia.$submitted || formAcademia.telefonolocal.$touched">
							<span ng-show="formAcademia.telefonolocal.$error.required">El campo es obligatorio.</span>
                                                        <span ng-show="formAcademia.telefonolocal.$error.pattern">El campo requiere solo numero y mínimo de 7 caracteres.</span>
						</span>
					  </div> 
                      <div class="form-group">
						<!--<label for="telefono">Número telefónico <span class="color-violeta"><b>*</b></span></label>-->
						<input type="text" class="form-control input-lg" id="telefonomovil" name="telefonomovil" placeholder="Telefóno Móvil" ng-model="registro.telefonomovil" ng-model-options="{ updateOn: 'blur' }"  required ng-pattern="/^[0-9]{7,}?$/" >
						<span class="messages" ng-show="formAcademia.$submitted || formAcademia.telefonomovil.$touched">
							<span ng-show="formAcademia.telefonomovil.$error.required">El campo es obligatorio.</span>
                                                        <span ng-show="formAcademia.telefonomovil.$error.pattern">El campo requiere solo numero y mínimo de 7 caracteres.</span>
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
						  <select class="form-control input-lg" id="pais" name="pais" ng-model="registro.pais" ng-model-options="{ updateOn: 'blur' }"  required>
							  <option value="" > Seleciona el Pais</option>
							  <option ng-repeat="pais in paises" value="{{pais.id}}">{{pais.nombre}}</option>
						   </select>
						   <span class="messages" ng-show="formAcademia.$submitted || formAcademia.pais.$touched">
							<span ng-show="formAcademia.pais.$error.required">El campo es obligatorio.</span>
						</span>
					   </div>
<div class="form-group">
						<!--<label for="cargo">Estado/Provincia/Región <span class="color-violeta"><b>*</b></span></label>-->
						<input type="text" class="form-control input-lg" id="estado" name="estado" placeholder="Estado/Provincia/Región" ng-model="registro.estado" ng-model-options="{ updateOn: 'blur' }"  required ng-pattern="/^[A-Za-záéíóúñÑÁÉÍÓÚ ]{3,}?$/" >
						<span class="messages" ng-show="formAcademia.$submitted || formAcademia.estado.$touched">
							<span ng-show="formAcademia.estado.$error.required">El campo es obligatorio.</span>
                                                        <span ng-show="formRegistro.estado.$error.pattern">El campo requiere solo letras y mínimo de 3 caracteres.</span>
						</span>
					  </div> 
					   <!--<div class="form-group">
						 	
						  <select class="form-control input-lg" id="estado" name="estado" ng-model="registro.estado"   required>
							  <option id="estadoprincipal" value="" > Seleciona el Estado</option>
							   <option ng-repeat="estado in estados" value="{{estado.id}}">{{estado.nombre}}</option>
						  </select>
						   <span class="messages" ng-show="formAcademia.$submitted || formAcademia.estado.$touched">
							<span ng-show="formAcademia.estado.$error.required">El campo es obligatorio.</span>
						</span>
					   </div>-->
					  <div class="form-group">
						  <!--<label for="exampleInputNombre">Cómo te enteraste de nosotros</label>-->	
						  <select class="form-control input-lg" id="entero" name="entero" ng-model="registro.entero" ng-model-options="{ updateOn: 'blur' }"  required>
							  <option value="" >¿ Como te Enteraste ?</option>
							  <option value="Por un amigo">Por un amigo</option>
							  <option value="Redes Sociales / Internet"> Redes Sociales / Internet</option>
							  <option value="Prensa"> Prensa</option>
							  <option value="Televisión"> Televisión</option>
							  <option value="Radio"> Radio</option>
							  <option value="Otros"> Otros</option>
						   </select>
						   <span class="messages" ng-show="formAcademia.$submitted || formAcademia.entero.$touched">
							<span ng-show="formAcademia.entero.$error.required">El campo es obligatorio.</span>
						</span>
					   </div>
					  <!--<pre>{{formRegistro.$invalid}}</pre>
					  <input type="hidden" name="status" ng-value="{{formRegistro.$invalid}}" ng-model="$scope.valido" >-->
					   <!-- <pre>registro = {{registro | json}}</pre> -->
                                          <div class="form-group">
					    <!--<a href="#/ponte-en-accion/registro-correcto" class="btn btn-violeta btn-lg text-uppercase pull-right">SIGUIENTE PASO</a>-->
						<input type="submit" ng-click="guardar()" ng-show="enviado"  value="SIGUIENTE PASO" class="btn btn-violeta btn-lg text-uppercase pull-right" >
						<div class="alert alert-info" role="alert" ng-show="procesando" >Espere un momento estamos procesando</div>
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

		<div class="row" ng-show="vcorrecto">
                        <div class="col-lg-1"></div>
			<div class="col-lg-10">
				<h2 class="text-center tam-2-5">¡Gracias!</h2>
                <hr>
				<p class="text-center" >
				Excelente ya eres parte de easy dance, ahora sólo debes confirmar tu correo electrónico.</p>    
				<hr>	
				<div class="text-center">
					<!--<a class="btn btn-violeta btn-lg text-center" >Confirmar correo</a>-->
				</div>
                <!--<h2 class="text-center tam-3">Espéralo 2016</h2>-->
                
			</div>
		</div>
                <div class="row" ng-show="vduplicado">
                        <div class="col-lg-1"></div>
			<div class="col-lg-10">
				<h2 class="text-center tam-2-5">¡Lo sentimo!</h2>
                <hr>
				<p class="text-center" >
				El correo ya se encuentra registrado.
                                </p> 
                                <p class="text-center" > <a href="http://easydancelatino.com/#/ponte-en-accion/prueba-gratis" class="btn btn-violeta btn-lg text-center" >Prueba Gratis</a></p>   
				<hr>	
				
                
                
			</div>
		</div>
	</div>    
<section class="margin-top-60">
&nbsp;</section>
</div>
<script type="text/javascript-lazy">
   loadjscssfile("js/function/cargar.js", "js");
</script>