<?php 
require 'includes/funciones.php';
incluirTemplate('header');
?>
    <main class="contenedor seccion contenido-centrado">
        <h1>Guia para la decoracion de tu casa</h1>
        
        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada2.jpg" alt="imagen de la propiedad">

        </picture>
        <p class="informacio-meta">escrito el: <span>20/10/2021</span> por: <span>admin</span></p>
        <div class="resumen-propiedad">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima soluta facilis est fugit eaque harum laudantium. Alias provident minus, debitis necessitatibus, aliquid amet autem voluptatibus nobis et dolor quod quis!</p>
        </div>
    </main>

<?php 
    incluirTemplate('footer');
?>