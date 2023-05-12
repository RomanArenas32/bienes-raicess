<?php

require 'includes/funciones.php';
incluirTemplate('header');

?>
<main class="contenedor seccion">
  <h1>Conoce sobre nosotros</h1>

  <div class="contenido-nosotros">
    <div class="imagen">
      <picture>
        <source srcset="./build/img/nosotros.webp" type="image/webp" />
        <source srcset="./build/img/nosotros.jpg" type="image/jpeg" />
        <img loading="lazy" src="./build/img/nosotros.jpg" alt="imagen-nosotros" />
      </picture>
    </div>
    <div class="texto-nosotros">
      <blockquote>25 años de experiencia</blockquote>
      <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto
        illo nemo eaque fugit quos in, quisquam commodi sit perferendis
        incidunt quasi consectetur qui voluptate ab beatae delectus
        cupiditate mollitia id iure a animi maxime dolores! Vitae, voluptate
        atque cum aliquid culpa cupiditate, totam autem dolores quia eos,
        reprehenderit nobis! Dolor saepe cupiditate similique soluta odit
        libero perspiciatis magni voluptate amet, adipisci blanditiis
        obcaecati delectus nulla iusto id deleniti! Consequatur quibusdam
        recusandae ut aperiam. Nobis, doloremque eaque qui quam voluptatibus
        ea quidem quae, aut, molestiae placeat minus sit facere omnis.
        Doloribus facere commodi architecto placeat eos, perspiciatis
        deserunt ex dicta tempora.
      </p>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi autem
        delectus nam, rem voluptas consequuntur dolor accusamus quis
        nesciunt id.
      </p>
    </div>
  </div>
</main>
<section class="contenedor section">
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
</section>
<?php
incluirTemplate('footer');
?>
