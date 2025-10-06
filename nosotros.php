<?php 
require 'includes/funciones.php';
incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>conoce sobre nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="sobre nosotros">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    25 años de experiencia
                </blockquote>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima soluta eveniet ratione repudiandae consectetur blanditiis tenetur esse dolores nesciunt sed pariatur dolor, natus error asperiores iste voluptatibus. Suscipit, quo perspiciatis.</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus ducimus omnis eos aliquid aperiam accusantium tenetur reiciendis, rem maiores illum voluptates quidem autem suscipit deserunt tempora illo! Error, minima nostrum.</p>
            </div>
        </div>
    </main>

    <seccion class="contenedor seccion">
        <h1>mas sobre nosotros</h1>
        <div class="iconos-nostros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="icono seguridad" loading="lazy">
                <h3>seguridad</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi ducimus id blanditiis? Cum asperiores corporis ab, non explicabo, repellat atque, eligendi sit quasi doloribus libero minus porro alias placeat adipisci.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="icono precio" loading="lazy">
                <h3>precio</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi ducimus id blanditiis? Cum asperiores corporis ab, non explicabo, repellat atque, eligendi sit quasi doloribus libero minus porro alias placeat adipisci.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="icono tiempo" loading="lazy">
                <h3>tiempo</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi ducimus id blanditiis? Cum asperiores corporis ab, non explicabo, repellat atque, eligendi sit quasi doloribus libero minus porro alias placeat adipisci.</p>
            </div>
        </div>
    </seccion>

<?php 
    incluirTemplate('footer');
?>