<?php 

require 'includes/funciones.php';
incluirTemplate('header');

?>
<main class="contenedor seccion">
  <h1>Contacto</h1>

  <picture>
    <source srcset="./build/img/destacada3.webp" type="image/webp">
    <source srcset="./build/img/destacada3.jpg" type="image/jpeg">
    <img loading="lazy" src="./build/img/destacada3.jpg" alt="imagen-formulario">
  </picture>

  <h2>Llene el formulario de contacto</h2>

  <form action="" class="formulario">

    <fieldset>

      <legend>Informacion personal</legend>

      <label for="nombre">Nombre</label>
      <input type="text" placeholder="tu nombre" id="nombre">

      <label for="email">Email</label>
      <input type="email" id="email" placeholder="tu email">

      <label for="telefono">Telefono</label>
      <input type="tel" id="telefono" placeholder="tu telefono">

      <label for="mensaje">Mensaje</label>
      <textarea name="mensaje" id="mensaje" cols="30" rows="10" placeholder="Escribe un mensaje..."></textarea>

    </fieldset>


    <fieldset>
      <legend>Informacion sobre la propiedad</legend>

      <label for="opciones">Vende o compra</label>
      <select name="" id="opciones">
        <option value="" disabled selected>-- seleccione --</option>
        <option value="compra">Compra</option>
        <option value="vende">Vende</option>
      </select>

      <label for="presupuesto">Precio o presupuesto</label>
      <input type="number" id="presupuesto">

    </fieldset>
    <fieldset>
      <legend>Contacto</legend>
      <p>Como desea ser contactado?</p>

      <div class="forma-contacto">
        <label for="contactar-telefono">Telefono</label>
        <input name="contacto" type="radio" value="telefono" id="contactar-telefono">

        <label for="contactar-email">Email</label>
        <input name="contacto" type="radio" value="email" id="contactar-email">
      </div>

      <p>Si eligio telefono elija la hora y fecha a ser contactado</p>

      <label for="fecha">Fecha: </label>
      <input type="date" id="fecha">

      <label for="hora">Hora: </label>
      <input type="time" id="hora" min="09:00" max="18:00">
    </fieldset>

    <input type="submit" value="enviar" class="boton-verde">
  </form>

</main>
<?php
incluirTemplate('footer');
?>