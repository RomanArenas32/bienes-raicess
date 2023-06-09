<?php

require 'includes/funciones.php';


//include 'includes/templates/header.php';
incluirTemplate('header', $inicio = true);

?>
<main class="contenedor section">
  <h1>Mas sobre Nosotros</h1>

  <div class="iconos-nosotros">
    <div class="icono">
      <img src="./build/img/icono1.svg" alt="icono seguridad" loading="lazy" />
      <h3>Seguridad</h3>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus
        velit consectetur et magni odit possimus laborum sequi quod illum
        veniam.
      </p>
    </div>
    <div class="icono">
      <img src="./build/img/icono2.svg" alt="icono precio" loading="lazy" />
      <h3>Precio</h3>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus
        velit consectetur et magni odit possimus laborum sequi quod illum
        veniam.
      </p>
    </div>
    <div class="icono">
      <img src="./build/img/icono3.svg" alt="icono tiempo" loading="lazy" />
      <h3>Tiempo</h3>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus
        velit consectetur et magni odit possimus laborum sequi quod illum
        veniam.
      </p>
    </div>
  </div>
</main>

<section class="section contenedor">
  <h2>Casas y dptos en venta</h2>
  <div class="contenedor-anuncios">
    <div class="anuncio">
      <picture>
        <source srcset="./build/img/anuncio1.webp" type="image/webp" />
        <source srcset="./build/img/anuncio1.jpg" type="image/jpeg" />
        <img loading="lazy" src="./build/img/anuncio1.jpg" alt="anuncio" />
      </picture>

      <div class="contenido-anuncio">
        <h3>Casa de lujo en el lago</h3>
        <p>Casa en el lago con excelente vista a los mejores paisajes</p>
        <p class="precio">USD 80000</p>

        <ul class="iconos-caracteristicas">
          <li>
            <img loading="lazy" src="./build/img/icono_wc.svg" alt="icono wc" />
            <p>2</p>
          </li>
          <li>
            <img loading="lazy" src="./build/img/icono_estacionamiento.svg" alt="icono_estacionamiento" />
            <p>3</p>
          </li>
          <li>
            <img loading="lazy" src="./build/img/icono_dormitorio.svg" alt="icono_dormitorio" />
            <p>4</p>
          </li>
        </ul>
        <a href="anuncios.html" class="boton boton-amarillo">Ver Propiedad</a>
      </div>
    </div>
    <div class="anuncio">
      <picture>
        <source srcset="./build/img/anuncio2.webp" type="image/webp" />
        <source srcset="./build/img/anuncio2.jpg" type="image/jpeg" />
        <img loading="lazy" src="./build/img/anuncio2.jpg" alt="anuncio" />
      </picture>

      <div class="contenido-anuncio">
        <h3>Casa terminados de lujo</h3>
        <p>Vista al mar con un amplio lugar para recreaciones</p>
        <p class="precio">USD 65000</p>

        <ul class="iconos-caracteristicas">
          <li>
            <img loading="lazy" src="./build/img/icono_wc.svg" alt="icono wc" />
            <p>2</p>
          </li>
          <li>
            <img loading="lazy" src="./build/img/icono_estacionamiento.svg" alt="icono_estacionamiento" />
            <p>3</p>
          </li>
          <li>
            <img loading="lazy" src="./build/img/icono_dormitorio.svg" alt="icono_dormitorio" />
            <p>4</p>
          </li>
        </ul>
        <a href="anuncios.html" class="boton boton-amarillo">Ver Propiedad</a>
      </div>
    </div>
    <div class="anuncio">
      <picture>
        <source srcset="./build/img/anuncio3.webp" type="image/webp" />
        <source srcset="./build/img/anuncio3.jpg" type="image/jpeg" />
        <img loading="lazy" src="./build/img/anuncio3.jpg" alt="anuncio" />
      </picture>

      <div class="contenido-anuncio">
        <h3>Casa con alberca</h3>
        <p>Casa totalmente equipada con patio de descanso</p>
        <p class="precio">USD 70000</p>

        <ul class="iconos-caracteristicas">
          <li>
            <img loading="lazy" src="./build/img/icono_wc.svg" alt="icono wc" />
            <p>2</p>
          </li>
          <li>
            <img loading="lazy" src="./build/img/icono_estacionamiento.svg" alt="icono_estacionamiento" />
            <p>3</p>
          </li>
          <li>
            <img loading="lazy" src="./build/img/icono_dormitorio.svg" alt="icono_dormitorio" />
            <p>4</p>
          </li>
        </ul>
        <a href="anuncios.html" class="boton boton-amarillo">Ver Propiedad</a>
      </div>
    </div>
  </div>

  <div class="alinear-derecha">
    <a href="anuncios.html" class="boton-verde">Ver Todas</a>
  </div>
</section>
<section class="imagen-contacto">
  <h2>Encuentra la casa de tus sueños</h2>
  <p>
    Llena el formulario de contacto y un asessor se pondrá en contacto
    contigo a la brevedad
  </p>
  <a href="contacto.html" class="boton-amarillo-inbl">contactanos</a>
</section>

<div class="contenedor section section-inferior">
  <section class="blog">
    <h3>Nuestro blog</h3>
    <article class="entrada-blog">
      <div class="imagen">
        <picture>
          <source srcset="./build/img/blog1.webp" type="image/webp" />
          <source srcset="./build/img/blog1.jpg" type="image/jpeg" />
          <img loading="lazy" src="./build/img/blog1.jpg" alt="entrada-blog" />
        </picture>
      </div>

      <div class="texto-entrada">
        <a href="entrada.html">
          <h4>Terraza en el techo de tu casa</h4>
          <p class="informacion-meta">
            Escrito en: <span>20/10/2021</span> por: <span>Admin</span>
          </p>
          <p>Consejos para construir una terraza ahorrando dinero</p>
        </a>
      </div>
    </article>
    <article class="entrada-blog">
      <div class="imagen">
        <picture>
          <source srcset="./build/img/blog2.webp" type="image/webp" />
          <source srcset="./build/img/blog2.jpg" type="image/jpeg" />
          <img loading="lazy" src="./build/img/blog2.jpg" alt="entrada-blog" />
        </picture>
      </div>

      <div class="texto-entrada">
        <a href="entrada.html">
          <h4>Guia para la decoracion de tu hogar</h4>
          <p>Escrito en: <span>10/08/2020</span> por: <span>Admin</span></p>
          <p>Maximiza el espacio en tu hogar con esta guia</p>
        </a>
      </div>
    </article>
  </section>
  <section class="testimoniales">
    <h3>testimoniales</h3>
    <div class="testimonial">
      <blockquote>
        Se comportaron de una forma muy profesional, la atencion excelente y
        un compromiso sin igual
      </blockquote>
      <p>-- Roman Arenas</p>
    </div>
  </section>
</div>

<?php
incluirTemplate('footer');
?>
