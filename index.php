<?php 
require 'includes/funciones.php';
incluirTemplate('header', $inicio = true);
?>

    <main class="contenedor seccion">
        <h1>Más sobre nosotros</h1>
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi ducimus id blanditiis? Cum asperiores corporis ab, non explicabo, repellat atque, eligendi sit quasi doloribus libero minus porro alias placeat adipisci.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi ducimus id blanditiis? Cum asperiores corporis ab, non explicabo, repellat atque, eligendi sit quasi doloribus libero minus porro alias placeat adipisci.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono tiempo" loading="lazy">
                <h3>Tiempo</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi ducimus id blanditiis? Cum asperiores corporis ab, non explicabo, repellat atque, eligendi sit quasi doloribus libero minus porro alias placeat adipisci.</p>
            </div>
        </div>
    </main>

    <section class="seccion contenedor">
        <h2>Casas y departamentos en venta</h2>

        <div class="contenedor-anuncios">
            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio1.webp" type="image/webp">
                    <source srcset="build/img/anuncio1.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/anuncio1.jpg" alt="Anuncio">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa de lujo en el lago</h3>
                    <p>Casa en el lago con excelentes vistas a un super precio.</p>
                    <p class="precio">$3,000,000</p>

                    <ul class="iconos-caracteristicas">
                        <li><img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="Baños"><p>3</p></li>
                        <li><img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="Estacionamientos"><p>3</p></li>
                        <li><img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="Habitaciones"><p>3</p></li>
                    </ul>

                    <a href="anuncio.php" class="boton-amarillo-block">Ver propiedad</a>
                </div>
            </div>

            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio2.webp" type="image/webp">
                    <source srcset="build/img/anuncio2.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/anuncio2.jpg" alt="Anuncio">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa terminada de lujo</h3>
                    <p>Casa moderna con excelentes acabados y ubicación privilegiada.</p>
                    <p class="precio">$3,000,000</p>

                    <ul class="iconos-caracteristicas">
                        <li><img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="Baños"><p>3</p></li>
                        <li><img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="Estacionamientos"><p>3</p></li>
                        <li><img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="Habitaciones"><p>3</p></li>
                    </ul>

                    <a href="anuncio.php" class="boton-amarillo-block">Ver propiedad</a>
                </div>
            </div>

            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio3.webp" type="image/webp">
                    <source srcset="build/img/anuncio3.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/anuncio3.jpg" alt="Anuncio">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa con alberca</h3>
                    <p>Casa con alberca y amplios espacios interiores.</p>
                    <p class="precio">$3,000,000</p>

                    <ul class="iconos-caracteristicas">
                        <li><img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="Baños"><p>3</p></li>
                        <li><img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="Estacionamientos"><p>3</p></li>
                        <li><img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="Habitaciones"><p>4</p></li>
                    </ul>

                    <a href="anuncio.php" class="boton-amarillo-block">Ver propiedad</a>
                </div>
            </div>
        </div>

        <div class="alinear-derecha">
            <a href="anuncios.php" class="boton-verde">Ver todas</a>
        </div>
    </section>

    <section class="imagen-contacto">
        <h2>Encuentra la casa de tus sueños</h2>
        <p>Llena el formulario y un asesor se pondrá en contacto contigo.</p>
        <a href="contacto.php" class="boton-amarillo">Contáctanos</a>
    </section>

    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro blog</h3>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog1.webp" type="image/webp">
                        <source srcset="build/img/blog1.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog1.jpg" alt="Texto entrada blog">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada.php"></a>
                    <h4>Terraza en el techo de tu casa</h4>
                    <p class="informacion-meta">Escrito el: <span>20/10/21</span> por: <span>Admin</span></p>
                    <p>Consejos para construir una terraza en el techo de tu casa con los mejores materiales.</p>
                </div>
            </article>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog2.webp" type="image/webp">
                        <source srcset="build/img/blog2.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog2.jpg" alt="Texto entrada blog">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada.php"></a>
                    <h4>Guía para la decoración de tu hogar</h4>
                    <p class="informacion-meta">Escrito el: <span>20/10/21</span> por: <span>Admin</span></p>
                    <p>Maximiza el espacio en tu hogar. Aprende a combinar muebles y colores para darle vida a tu espacio.</p>
                </div>
            </article>
        </section>

        <section class="testimoniales">
            <h3>Testimoniales</h3>
            <div class="testimonial">
                <blockquote>
                    El personal se comportó de manera atenta y amable, dando buen seguimiento a mis dudas y ayudándome a adquirir la casa de mis sueños.
                </blockquote>
                <p>MartecitoYT</p>
            </div>
        </section>
    </div>

<?php 
    incluirTemplate('footer');
?>