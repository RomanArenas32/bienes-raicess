<?php 

require 'includes/funciones.php';
incluirTemplate('header');

?>
    <main class="contenedor seccion contenido-centrado">
      <h2>Guia para la decoracion del hogar</h2>
        

      <picture>
        <source srcset="./build/img/destacada2.webp" type="image/webp" />
        <source srcset="./build/img/destacada2.jpg" type="image/jpeg" />
        <img
          loading="lazy"
          src="./build/img/destacada.jpg"
          alt="imagen-destacada"
        />
<p class="informacion-meta">Escrito el: <span>20-07-2010</span></p>
        <div class="resumen-propiedad">
          
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut culpa
            fugit, deleniti quo, beatae voluptates a cumque tempora eaque
            quisquam dicta pariatur sequi tenetur esse. Quibusdam unde
            distinctio quaerat quas ipsam, vitae harum quos deserunt obcaecati,
            culpa voluptate! Autem incidunt ipsum tenetur reprehenderit magnam
            porro vitae necessitatibus libero commodi deserunt!
          </p>
        </div>
      </picture>
    </main>

    <?php
incluirTemplate('footer');
?>

