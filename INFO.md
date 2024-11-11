# Información conjunta para el Proyecto


## Paleta de colores
```
:root { /* Paleta de colores */
    --color-azul-oscuro: #404258;
    --color-azul-medio: #474E68;
    --color-azul-claro: #6B728E;
    --color-acento-azul: #3C7EFC;
    --color-blanco: #FFF;
    --color-negro: #000;
    --color-admin: #fc3c3c;
    --color-admin-oscuro: #c12d2d;
}
```

## Tipografía Web
```
@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap');

font-family: Nunito;
```

# Trozos de Código

## Barra de Navegación

Hay que agregar los recursos para la barra de navegación (Carpeta Resources)

### HTML
```
<header>
    <div class="logo">
        <a href="index.html">
            <img src="./assets/resources/logo.png" alt="Logo">
        </a>
    </div>
    <nav>
        <a href="#">Información</a>
        <a href="#">Formulario</a>
    </nav>
    <div class="icono-usuario">
        <a href="login.html">
            <img src="./assets/resources/login.png" alt="login">
        </a>
    </div>
</header>
```

### CSS
```
/***************
*     Nav      *
***************/

header {
    background-color: var(--color-azul-oscuro);
    padding: 1rem 2%;
    text-align: center;
    position: relative;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

/* Estilo del logo */
.logo {
    position: absolute;
    top: 50%;
    left: 2%;
    transform: translateY(-50%);
}

.logo > a > img {
    width: 2.5rem;
    height: auto;
}

.logo > a > img:hover {
    transform: scale(1.1);
    transition: all 0.3s;
}

nav {
    display: inline-block;
}

nav > a {
    color: var(--color-blanco);
    text-decoration: none;
    padding: 0.5rem 1rem;
    font-size: 1rem;
    margin: 0 0.5rem;
    text-transform: uppercase;
    font-weight: bold;
    transition: background-color 0.3s ease;
}

nav > a:hover {
    background-color: var(--color-acento-azul);
    border-radius: 0.3rem;
}

.icono-usuario {
    position: absolute;
    top: 50%;
    right: 2%;
    transform: translateY(-50%);
}

.icono-usuario img {
    width: 2rem;
    height: auto;
    transition: transform 0.3s ease;
}

.icono-usuario img:hover {
    transform: scale(1.1);
}
```

## Footer 

### Import Iconos
```
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
```

### HTML
```
<footer>
    <div class="colaboradores">
        <b>Colaboradores</b>
        <p><a href="https://atabalfundacion.wordpress.com/">Fundacion Atabal</a></p>
        <p><a href="https://www.aytobadajoz.es/es/ayto/portada">Ayto. Badajoz</a></p>
        <p><a href="https://www.aexpainba-fmm.org/comienzo.asp">AEXPAINBA</a></p>
        <p><a href="http://www.fidesbancaetica.com/">FIDES</a></p>
    </div>
    <div class="cita">
        <p>"El examen de conciencia es siempre el mejor medio para cuidar bien el alma."</p>
        <p>"San Ignacio de Loyola"</p>
    </div>
    <div class="contacto">
        <b id="contactar">Contactar</b>
        <p><i class="fas fa-map-marker-alt"></i> C/ Corte de Peleas, 79 06009 Badajoz</p>
        <p><i class="fas fa-phone"></i> +34 924 25 17 61</p>
    </div>
</footer>
```
### CSS
```
footer {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    background-color: #f2f2f2;
    padding: 20px 0;
}

footer > .colaboradores,
footer > .cita,
footer > .contacto {
    text-align: center;
}

footer > .contacto {
    margin-left: 3%;
}

footer > .colaboradores,
footer > .cita,
footer > .contacto {
    display: inline-block;
    vertical-align: top;
    padding: 10px;
    width: 30%; /* Ajustar si necesitas más o menos espacio para cada sección */
}

footer > .contacto > p {
    margin: 5px 0;
}
```

## MediaQuery

### CSS 
```
/* Media Query para tablets */
@media (max-width: 1024px) and (min-width: 768px) {
    header {
        padding: 1rem 4%;
   }


    footer > .colaboradores,
    footer > .cita,
    footer > .contacto {
        display: block;
        width: 100%;
        text-align: center;
        margin: 10px 0; 
    }

    .colaboradores,
    .cita,
    .contacto {
        text-align: center;
        margin: 0;
        padding: 0 1rem;
    }
} 

/* Media Query para móviles */
@media (max-width: 767px) {
    header {
        padding: 1rem 3%; 
        text-align: center; 
    }

    /* Asegurar que el logo y el icono de usuario estén bien posicionados /
    .logo {
        position: absolute;
        top: 50%;
        left: 5%;
        transform: translateY(-50%);
    }

    .icono-usuario {
        position: absolute;
        top: 50%;
        right: 5%;
        transform: translateY(-50%);
    }

    / Ajustes adicionales para navegación en móvil */
    nav {
        display: block;
        margin-top: 1rem;
        text-align: center;
    }

    nav a {
        display: block;
        padding: 0.8rem;
        font-size: 1rem;
        text-align: center;
        margin: 0.3rem 0;
        border-radius: 0.3rem;
        transition: background-color 0.3s ease;
    }

    footer{
        position: relative;
    }

    footer > .colaboradores,
    footer > .cita,
    footer > .contacto {
        display: block;
        width: 100%;
        text-align: center;
        margin: 8px 0; 
    }

    .colaboradores,
    .cita,
    .contacto {
        text-align: center;
        margin: 0;
        padding: 0 0.5rem;
    }

    .colaboradores h2,
    .contacto h2 {
        font-size: 1rem;
    }

    .cita p,
    .contacto p {
        font-size: 0.9rem;
    }
} 
```


