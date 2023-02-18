<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en Venta frente al bosque</h1>
        
        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/destacada.jpg" alt="imagen de la propiedad">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">
                $3,000,000
            </p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" src="build/img/icono_wc.svg" alt="icono wc">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                    <p>1</p>
                </li>
                <li>
                    <img class="icono" src="build/img/icono_dormitorio.svg" alt="icono dormitorio">
                    <p>4</p>
                </li>
            </ul>

            <p>
                Sunt do dolore nisi Lorem anim aliqua magna occaecat irure ex exercitation occaecat id est. Consequat amet laboris dolore ex ad Lorem sint ea sit velit excepteur id. Velit esse nulla velit ex.

                Adipisicing qui do culpa occaecat consectetur quis cupidatat Lorem eu commodo nostrud. Reprehenderit eiusmod cupidatat voluptate adipisicing dolor Lorem dolor ipsum. Consectetur cillum pariatur fugiat enim eiusmod laboris mollit. Consectetur consequat magna Lorem Lorem minim eu velit laborum sint minim quis occaecat. Lorem aliquip ea et proident mollit nisi consequat. Tempor duis cillum laboris quis sunt.

                Incididunt ea cupidatat cupidatat mollit proident deserunt elit. Commodo sint et reprehenderit ipsum ad. 
            </p>

            <p>
                Commodo esse exercitation incididunt velit ea deserunt. Incididunt Lorem enim ea ex irure. Elit laborum enim in ad dolore irure excepteur. Nulla magna excepteur consectetur dolor et ad minim aliqua magna. Nulla ad excepteur nisi minim exercitation labore et aliquip sint labore elit mollit.

            Est proident nisi sit esse sunt sit cillum culpa. Laborum sunt eiusmod eu anim ullamco cillum duis fugiat eiusmod eu culpa. 
            </p>
        </div>
    </main>

    <?php
    incluirTemplate('footer');
?>