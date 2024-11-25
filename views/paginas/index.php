<main class="calidad">
    <div class="calidad__flex">
        <h1 class="calidad__heading">Una mejor vida te espera en <span class="calidad__span-logo">BIENESRAICES</span></h1>

        <p class="calidad__descripcion">Vamos más allá de lo convencional, con el <span class="calidad__span-texto">diseño de proyectos inmobiliarios</span> 
        <br>que brindan a nuestros residentes comodidad, confort y bienestar.</p>

        <div class="calidad__grid">
            <div class="calidad-card">
                <div class="calidad-card__header">
                    <h3 class="calidad-card__titulo">Diseño <br><span class="calidad-card__span-texto">Inovador</span></h3>
                </div>
                <div class="calidad-card__footer">
                    <picture>
                        <source srcset="build/img/card1.webp" type="image/webp">
                        <source srcset="build/img/card1.avif" type="image/avif">
                        <img class="calidad-card__imagen" loading="lazy" width="200" height="300" src="build/img/card1.jpg" alt="Diseño">
                    </picture>
                    <p class="calidad-card__texto">Creación y aplicación de enfoques arquitectónicos creativos y vanguardistas.</p>
                </div>
            </div>

            <div class="calidad-card">
                <div class="calidad-card__header">
                    <h3 class="calidad-card__titulo"><span class="calidad-card__span-texto">Diversidad</span> de 
                    <br>espacios y precios</h3>
                </div>
                <div class="calidad-card__footer">
                    <picture>
                        <source srcset="build/img/card2.webp" type="image/webp">
                        <source srcset="build/img/card2.avif" type="image/avif">
                        <img class="calidad-card__imagen" loading="lazy" width="200" height="300" src="build/img/card2.jpg" alt="Diversidad">
                    </picture>
                    <p class="calidad-card__texto">Creación y aplicación de enfoques arquitectónicos creativos y vanguardistas.</p>
                </div>
            </div>

            <div class="calidad-card">
                <div class="calidad-card__header">
                <h3 class="calidad-card__titulo"><span class="calidad-card__span-texto">Satisfacción</span> 
                <br>garantizada</h3>
                </div>
                <div class="calidad-card__footer">
                    <picture>
                        <source srcset="build/img/card3.webp" type="image/webp">
                        <source srcset="build/img/card3.avif" type="image/avif">
                        <img class="calidad-card__imagen" loading="lazy" width="200" height="300" src="build/img/card3.jpg" alt="Satisfacción">
                    </picture>
                    <p class="calidad-card__texto">Creación y aplicación de enfoques arquitectónicos creativos y vanguardistas.</p>
                </div>
            </div>

            <div class="calidad-card">
                <div class="calidad-card__header">
                    <h3 class="calidad-card__titulo">Compromiso con la <br><span class="calidad-card__span-texto">Calidad</span></h3>
                </div>
                <div class="calidad-card__footer">
                    <picture>
                        <source srcset="build/img/card4.webp" type="image/webp">
                        <source srcset="build/img/card4.avif" type="image/avif">
                        <img class="calidad-card__imagen" loading="lazy" width="200" height="300" src="build/img/card4.jpg" alt="Compromiso">
                    </picture>
                    <p class="calidad-card__texto">Desde la selección de materiales hasta la ejecución de cada elemento arquitectónico.</p>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include __DIR__ . '/inicio/numeros.php'; ?>

<?php include __DIR__ . '/inicio/hogares.php'; ?>

<?php include __DIR__ . '/inicio/territorio.php'; ?>

<section class="inversion">
    <div class="inversion__grid">
        <h1 class="inversion__heading">Tu mejor <span class="inversion__span">inversión inmobiliaria</span></h1>
        <p class="inversion__descripcion">Invierte con una de las desarrolladoras de vivienda más importantes del país en términos de ingresos, utilidad y rentabilidad, con <span class="inversion__span-texto">50 años de experiencia en el mercado inmobiliario.</span></p>
        <a href="/contacto" class="inversion__enlace">Más Información</a>
    </div>
</section>

<?php include __DIR__ . '/inicio/adquirir.php'; ?>

<?php include __DIR__ . '/inicio/opiniones.php'; ?>

<section class="contacto">
    <div class="contacto__grid">
        <div class="contacto__flex">
            <h1 class="contacto__heading">¿Y tú ya tienes tu <span class="contacto__span">nuevo hogar</span>?</h1>
            <p class="contacto__descripcion"><span class="contacto__span">En BIENESRAICES tenemos lo que buscas.</span>
            <br>
            Contáctanos y obtén atención personalizada.</p>
        </div>

        <div class="contacto-formulario">
            <?php if($mensaje) { ?>
                <p class='contacto-formulario__mensaje contacto-formulario__mensaje--exito'>
                    ¡<?php echo $mensaje ?>!
                </p>
            <?php } ?>

            <form method="POST" action="/" class="formulario">

                <?php include __DIR__ . '/inicio/contacto.php'; ?>

                <input class="contacto-formulario__submit contacto-formulario__submit--registrar" type="submit" value="Enviar">
            </form>
        </div>
    </div>
</section>