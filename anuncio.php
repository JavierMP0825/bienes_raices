<?php 
require 'includes/funciones.php';
incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en venta frente al bosque</h1>

        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="imagen de la propiedad">

        </picture>

        <div class="resumen-propiedad">
            <p class="precio">3,000,000</p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                    <p>3</p>
                </li>
            </ul>
            <ul class="iconos-caracteristicas">
                <li>
                    <img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="estacionamiento">
                        <p>3</p>
                </li>
            </ul>
            <ul class="iconos-caracteristicas">
                <li>
                    <img loading="lazy" src="build/img/icono_dormitorio.svg" alt="habitaciones">
                    <p>4</p>
                </li>
            </ul>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima soluta facilis est fugit eaque harum laudantium. Alias provident minus, debitis necessitatibus, aliquid amet autem voluptatibus nobis et dolor quod quis!</p>
        </div>
    </main>

<?php 
    incluirTemplate('footer');
?>