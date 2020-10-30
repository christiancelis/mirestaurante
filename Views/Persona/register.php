<div class="container">
  <h2>Registro de Persona</h2>
  <form action="?controller=persona&&action=save" method="POST">

    
    <div class="form-group">
      <label for="text">Nombres:</label>
      <input type="text" class="form-control" id="nombres" placeholder="Ingrese su Nombre" name="nombres">
    </div>
    <div class="form-group">
      <label for="text">Apellidos</label>
      <input type="text" id="apellidos" name="apellidos" class="form-control" placeholder="Ingrese su apellido">
    </div>

   <div class="form-group">
      <label for="text">tipo de documento</label>
      <select id="tipodocumento" name="tipodocumento"class="form-control"> 
        <option value="cc">cédula de ciudadania</option>
        <option value="ti">tarjeta de identidad</option>
        <option value="ce">cédula de extranjeria</option>
        </select>
    </div>

     <div class="form-group">
      <label for="text">Identificacion</label>
      <input type="text" id="idpersona" name="idpersona" class="form-control" placeholder="Ingrese su documento aqui">
    </div>

    <div class="form-group">
      <label for="text">telefono</label>
      <input type="text" id="telefono" name="telefono" class="form-control" placeholder="Ingrese su telefono">
    </div>
    <div class="form-group">
      <label for="text">correo electronico</label>
      <input type="mail" id="correoelectronico" name="correoelectronico" class="form-control" placeholder="Ingrese su correo electronico">
    </div>
    <div class="form-group">
      <label for="text">direccion</label>
      <textarea type="textarea" id="direccion" name="direccion" rows="4" cols="30" placeholder=" ingrese su direccion" required="#" ; ></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
</div>