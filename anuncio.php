<?php 

require 'includes/funciones.php';
incluirTemplate('header');

?>
    <main class="contenedor seccion contenido-centrado">
      <h2>Casa en venta frente al bosque</h2>

      <picture>
        <source srcset="./build/img/destacada.webp" type="image/webp" />
        <source srcset="./build/img/destacada.jpg" type="image/jpeg" />
        <img
          loading="lazy"
          src="./build/img/destacada.jpg"
          alt="imagen-destacada"
        />

        <div class="resumen-propiedad">
          <p class="precio">3.55877 USD</p>
          <ul class="iconos-caracteristicas">
            <li>
              <img
                loading="lazy"
                src="./build/img/icono_wc.svg"
                alt="icono wc"
              />
              <p>2</p>
            </li>
            <li>
              <img
                loading="lazy"
                src="./build/img/icono_estacionamiento.svg"
                alt="icono_estacionamiento"
              />
              <p>3</p>
            </li>
            <li>
              <img
                loading="lazy"
                src="./build/img/icono_dormitorio.svg"
                alt="icono_dormitorio"
              />
              <p>4</p>
            </li>
          </ul>
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
