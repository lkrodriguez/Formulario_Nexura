



<!--TABLA-->

<div class="container" >
    <div class="row">
    <a type="button" href="?c=index&m=nuevo" class="btn btn-dark col-2 ">Nuevo</a>
    </div>
    <br>

    <div class="row">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Nombres</th>
      <th scope="col">Email</th>
      <th scope="col">Sexo</th>
      <th scope="col">Nombre del Area</th>
      <th scope="col">Boletin</th>
      <th scope="col">Rol</th>
    </tr>
  </thead>
  <tbody>

  <?php foreach ($this->MODEL->listar() as $data) { ?>
    <tr>
        <td><?php echo $data->nombre  ?></td>
        <td><?php echo $data->email  ?></td>
        <td><?php echo $data->sexo  ?></td>
        <td><?php echo $data->nombre_area  ?></td>
        <td><?php echo $data->boletin  ?></td>
        <td><?php echo $data->nombre_rol  ?></td>
    </tr>

  <?php }  ?>




 
  </tbody>
</table>

    </div>
</div>



    
    
