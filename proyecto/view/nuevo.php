<script>  
$(document).ready(function(){
	$("input[name=genero]").click(function(){
            var areaCSI = $("input[name='genero']:checked").map(function () {return this.value; }).get(); 
			if (areaCSI == '') {
				console.log('pp');
				
			} else {
				
			}			
                       
    });
	
});
</script>



<div class="container col-8" >

    <div  class="row">

    <form  method="post" action="?c=index&m=guardar" >
        <div class="form-group">
            <label for="nomEmp">Nombre Completo *</label>
            <input type="text" class="form-control" id="nomEmp" name="nomEmp"  placeholder="Nombre Completo del Empleado" required >
            
        </div>
        <br>

        <div class="form-group">
            <label for="emailEmp">Correo Electronico *</label>
            <input type="email" class="form-control" id="emailEmp" name="emailEmp" placeholder="Correo@example.com" required >
        </div>
        <br>

        <div class="form-check">
        <label for="genero">Sexo *</label>
        <br>
        <input class="form-check-input" type="radio" name="genero" id="genero" value="Masculino" >
        <label class="form-check-label" for="genero1">
            Masculino
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="genero" id="genero" value="Femenino">
        <label class="form-check-label" for="genero2">
            Femenino
        </label>
        </div>
        <br> 
		














	
        <div class="form-group">
            <label for="areaEmp">Area *</label>
			<select class="form-control" id="areaEmp" name="areaEmp" required >

			<?php foreach ($this->MODEL->cargarAreas() as $area)  { ?>				
                <option value="<?php echo $area->id ?>"><?php echo $area->nombre ?></option>

		 	 <?php }  ?>
  			</select>
           
        </div>
        <br>

        <div class="form-group">
            <label for="desc">Descripción</label>
            <textarea class="form-control" id="desc" name="desc" rows="3" required></textarea>
        </div>
        <br>

        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="boletin">
            <label class="form-check-label" for="boletin" id="boletin" name="boletin" value="1" >Desea recibir Boletin ?</label>
        </div>
        <br>

		
        <div class="form-check">
            <label >Roles *</label>
                                                
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="roles[]" id="roles1" value="1">
                    <label class="form-check-label" >
                    Profesional de proyectos - Desarrollador
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="roles[]" id="roles5" value="5">
                    <label class="form-check-label" >
					Gerente Estrategico
                    </label>
                </div> 
				<div class="form-check">
                    <input class="form-check-input" type="checkbox" name="roles[]" id="roles7" value="7">
                    <label class="form-check-label" >
                    Auxiliar Adminitrativo
                    </label>
                </div>                
            </div>        
        </div>
        <br>
        	
			<input type="submit" name="btnGuardar" class="btn btn-dark" value="Guardar">

</form>
    
        
    </div>
</div>

<br>