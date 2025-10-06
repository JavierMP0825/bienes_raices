<?php 
require 'includes/funciones.php';
incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>contacto</h1>
        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <source srcset="build/img/destacada3.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada3.jpg" alt="imagen contacto">
        </picture>

        <h2>llenar formulario de contacto</h2>
        <form action="" class="formulario">
            <fieldset>
                <legend>informacion personal</legend>
                <label for="nombre">nombre</label>
                <input type="text" placeholder="Tu nombre" id="nombre">

                <label for="email">E-mail</label>
                <input type="email" placeholder="Tu email" id="email">

                <label for="telefono">telefono</label>
                <input type="tel" placeholder="Tu telefono" id="telefono">

                <label for="mensaje">mensaje</label>
                <textarea id="mensaje"></textarea>


            </fieldset>

            <fieldset>
                <legend>informacion sobre la propiedad</legend>

                <label for="opciones">vende o compra</label>
                <select id="opciones">
                    <option value="" disabled selected>-- selecciona opcion --</option>
                    <option value="comprar">comprar</option>
                    <option value="vender">vender</option>
                </select>

                <label for="presupuesto">precio o presupuesto</label>
                <input type="number" placeholder="Tu precio o presupuesto" id="presupuesto">
            </fieldset>

            <fieldset>
                <legend>contacto</legend>

                <p>como desea ser contactado</p>

                <div class="forma-contacto">
                    <label for="contactar-telefono">telefono</label>
                    <input name="contacto" type="radio" value="telefono" id="contactar-telefono">

                    <label for="contactar-email">E-mail</label>
                    <input name="contacto" type="radio" value="email" id="contactar-email">
                </div>

                <p>si usted eligio telefono, elija la fecha y hora</p>
                <label for="fecha">fecha</label>
                <input type="date" id="fecha">

                <label for="hora">hora</label>
                <input type="time" id="hora" min="9:00" max="18:00">
            </fieldset>

            <input type="submit" value="enviar" class="boton-verde">
        </form>
    </main>

<?php 
    incluirTemplate('footer');
?>