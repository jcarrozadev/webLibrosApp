# Información conjunta para el Proyecto


## Paleta de colores
```
:root { /* Paleta de colores */
    --uno: #404258;
    --dos: #474E68;
    --tres: #6B728E;
    --cuatro: #3C7EFC;
    --cinco: #FFF;
}
```

## Tipografía Web
```
@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap');

font-family: Nunito;
```

# Trozos de Código

## Footer 

### HTML
```
<div class="footer">
    <table>
        <tr>
            <td class="colaboradores">
                <b>Colaboradores</b><br>
                <a href="#">Enlace</a> <a href="#">Enlace</a><br>
                <a href="#">Enlace</a> <a href="#">Enlace</a>
            </td>
            <td class="cita">
                "<i>El examen de conciencia es siempre el mejor medio para cuidar bien el alma.</i>"<br>
                "<b>San Ignacio de Loyola</b>"
            </td>
            <td class="contacto">
                <b>Contactar</b><br>
                <p><i class="fas fa-map-marker-alt"></i> C/ Corte de Peleas, 79 06009 Badajoz</p>
                <p><i class="fas fa-phone"></i> +34 924 25 17 61</p>
            </td>
        </tr>
    </table>
</div>
```
### CSS
```
.footer {
    position: absolute;
    bottom: 0;
    width: 100%;
    background-color: #f2f2f2;
    padding: 20px 0;
}

.footer > table {
    width: 100%;
    table-layout: fixed;
}

.footer td {
    vertical-align: top;
    padding: 0 20px;
}

.colaboradores, .cita, .contacto {
    text-align: left;
}

.contacto p {
    margin: 5px 0;
}
```