# Generador de Certificado PDF
Este código PHP genera un certificado en línea en formato PDF.

El código usa la librería Dompdf para generar los archivos PDF's desde una plantilla HTML pre-diseñada.

Es posible cambiar de plantilla siempre y cuando se tenga en cuenta los marcadores obligatorios que se escribirán en el documento.

## Dependencias

* [Dompdf](https://github.com/dompdf/dompdf): Librería PHP PDF.

## Instalación

Para instalar el `generador-certificado-pdf` necesita instalar [Composer](https://getcomposer.org/) para manejar las dependencias.
Luego ejecute `composer install` para descargar las dependencias.

## Marcadores

La plantilla HTML usa marcadores para reemplazar los datos enviados y generar el documento solicitado. Además, usan una sintaxis Jinja, por ejemplo: `{{ placeholder }}`


Los marcadores definidos son:

* `fullname`
* `courseName`
* `certificationDate`

## Crear Certificado PDF

Una vez instalado las dependencias, ingresar a la ubicación de la carpeta del proyecto y al documento `index.php`, se le mostrará un formulario para ingresar sus datos.

Una vez ingresados, seleccionar el botón de `Solicitar Certificado`, finalmente retornará el archivo generado.

### Observaciones

El generador cuenta con una validación mínima. En el formulario mismo tiene una validación nativa para el mismo navegador. Y en el archivo `generate.php` solo procesará los datos si es que los campos enviados POST están presentes y llenados.
