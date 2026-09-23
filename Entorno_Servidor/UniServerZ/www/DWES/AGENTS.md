# CONTEXTO DEL PROYECTO

Este proyecto está desarrollado principalmente en PHP.

El objetivo es mantener un código sencillo, legible y fácil de mantener. Antes de realizar cambios, analiza la estructura existente del proyecto y respeta las convenciones que ya se estén utilizando.

# TECNOLOGÍAS

Tecnologías principales:

* PHP
* HTML5
* CSS3
* JavaScript
* MySQL o MariaDB
* SQL

No añadir frameworks, librerías o dependencias externas salvo que sean realmente necesarias o se solicite expresamente.

# REGLAS GENERALES

* Mantener el código lo más sencillo posible.
* No añadir complejidad innecesaria.
* No modificar archivos que no estén relacionados con la tarea.
* No eliminar funcionalidades existentes salvo que se solicite expresamente.
* Antes de crear código nuevo, comprobar si ya existe una función, clase o archivo que realice una función similar.
* Respetar la estructura actual del proyecto.
* Mantener compatibilidad con el código existente.
* Evitar duplicar código.
* Priorizar soluciones fáciles de entender frente a soluciones excesivamente avanzadas.

# PHP

Seguir estas normas al escribir código PHP:

* Utilizar `<?php` para abrir bloques PHP.
* Utilizar nombres descriptivos para variables y funciones.
* Utilizar `camelCase` para funciones y variables.

Ejemplo:

```php
$nombreUsuario = "Juan";

function obtenerUsuarioPorId($idUsuario)
{
    // Código
}
```

* Utilizar `PascalCase` para nombres de clases.

Ejemplo:

```php
class UsuarioController
{
}
```

* Utilizar constantes en mayúsculas.

Ejemplo:

```php
const MAX_INTENTOS = 3;
```

* Evitar variables globales siempre que sea posible.
* Evitar funciones excesivamente largas.
* Separar responsabilidades cuando una función haga demasiadas cosas.
* Utilizar `require_once` o `include_once` cuando corresponda.
* No mezclar lógica PHP compleja con HTML si puede evitarse.

# BASE DE DATOS

Para trabajar con MySQL o MariaDB:

* Utilizar PDO siempre que sea posible.
* Utilizar consultas preparadas.
* Nunca concatenar directamente datos introducidos por el usuario dentro de una consulta SQL.

Ejemplo correcto:

```php
$sql = "SELECT * FROM usuarios WHERE id = :id";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    'id' => $idUsuario
]);

$usuario = $stmt->fetch(PDO::FETCH_ASSOC);
```

Evitar:

```php
$sql = "SELECT * FROM usuarios WHERE id = " . $_GET['id'];
```

* Comprobar los posibles errores de conexión.
* Evitar repetir conexiones a la base de datos innecesariamente.
* Mantener la configuración de conexión en un archivo separado.

Por ejemplo:

```text
config/
└── database.php
```

# SEGURIDAD

Aplicar las siguientes medidas básicas:

* Validar siempre los datos recibidos del usuario.
* No confiar directamente en `$_GET`, `$_POST`, `$_COOKIE` o `$_REQUEST`.
* Utilizar consultas preparadas para SQL.
* Utilizar `htmlspecialchars()` al mostrar contenido introducido por usuarios dentro de HTML.
* Utilizar `password_hash()` para almacenar contraseñas.
* Utilizar `password_verify()` para comprobar contraseñas.
* No almacenar contraseñas en texto plano.
* No mostrar contraseñas, claves privadas o credenciales.
* No guardar credenciales directamente en archivos públicos.
* No exponer mensajes internos de errores de base de datos al usuario final.

# HTML Y PHP

Cuando PHP genere HTML, mantener el código legible.

Preferir:

```php
<?php if ($usuario !== null): ?>

    <h1>
        <?= htmlspecialchars($usuario['nombre']) ?>
    </h1>

<?php endif; ?>
```

En lugar de generar grandes bloques HTML mediante `echo`.

Evitar:

```php
echo "<div><h1>" . $usuario['nombre'] . "</h1><p>...</p></div>";
```

cuando pueda escribirse directamente como HTML.

# FORMULARIOS

Cuando exista un formulario:

* Comprobar que los campos obligatorios existen.
* Validar los valores antes de procesarlos.
* Mostrar mensajes comprensibles cuando haya errores.
* Escapar correctamente los datos mostrados.
* Diferenciar claramente peticiones GET y POST.

Ejemplo:

```php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nombre = trim($_POST['nombre'] ?? '');

    if ($nombre === '') {
        $error = 'El nombre es obligatorio.';
    }
}
```

# ESTRUCTURA DEL PROYECTO

Si el proyecto no tiene una estructura definida, utilizar como referencia:

```text
proyecto/
│
├── AGENTS.md
├── index.php
│
├── config/
│   └── database.php
│
├── src/
│   ├── controllers/
│   ├── models/
│   └── services/
│
├── views/
│
├── public/
│   ├── css/
│   ├── js/
│   └── img/
│
└── database/
    └── database.sql
```

No reorganizar un proyecto existente únicamente para adaptarlo a esta estructura.

Si el proyecto ya tiene otra organización, respetarla.

# JAVASCRIPT

Si se utiliza JavaScript:

* Utilizar JavaScript nativo siempre que sea suficiente.
* No introducir frameworks innecesariamente.
* Mantener separado el JavaScript del PHP cuando sea posible.
* Utilizar nombres descriptivos.
* Evitar código duplicado.

# CSS

* Mantener los estilos en archivos `.css` cuando sea posible.
* Evitar estilos inline salvo casos puntuales.
* Reutilizar clases CSS.
* No duplicar reglas existentes.
* Respetar el diseño actual del proyecto.

# COMENTARIOS

Comentar únicamente cuando aporte información útil.

Utilizar comentarios para explicar:

* lógica compleja;
* decisiones importantes;
* consultas SQL difíciles;
* validaciones relevantes;
* comportamiento que no sea evidente.

Ejemplo:

```php
// Comprobamos primero si el usuario ya existe antes de realizar el INSERT.
```

Evitar comentarios innecesarios como:

```php
// Creamos una variable nombre.
$nombre = "Juan";
```

# MANEJO DE ERRORES

* Comprobar posibles errores.
* No ignorar excepciones.
* Utilizar `try/catch` cuando corresponda.
* Mostrar al usuario mensajes sencillos.
* Evitar mostrar trazas internas, consultas SQL completas o credenciales.

Ejemplo:

```php
try {

    $stmt = $pdo->prepare($sql);
    $stmt->execute();

} catch (PDOException $e) {

    error_log($e->getMessage());

    $error = 'Ha ocurrido un error al procesar la solicitud.';
}
```

# CAMBIOS EN EL PROYECTO

Antes de modificar código:

1. Revisar los archivos relacionados con la tarea.
2. Comprobar cómo está implementada actualmente la funcionalidad.
3. Identificar dependencias con otros archivos.
4. Realizar únicamente los cambios necesarios.
5. Mantener las convenciones existentes.

Después de realizar cambios:

1. Revisar errores de sintaxis.
2. Comprobar que las variables utilizadas existen.
3. Comprobar rutas de `include`, `require`, enlaces y formularios.
4. Revisar consultas SQL modificadas.
5. Comprobar que no se han roto otras funcionalidades.

# REFACTORIZACIÓN

No realizar refactorizaciones grandes salvo que se solicite.

Si una tarea puede solucionarse modificando pocas líneas, no reestructurar todo el proyecto.

Evitar:

* cambiar nombres de archivos sin necesidad;
* cambiar nombres de funciones públicas;
* cambiar estructuras de base de datos sin solicitarlo;
* modificar rutas;
* introducir patrones arquitectónicos complejos sin necesidad.

# NUEVOS ARCHIVOS

Antes de crear un archivo nuevo:

* comprobar si existe otro archivo que pueda contener esa funcionalidad;
* comprobar la estructura del proyecto;
* utilizar nombres coherentes con los archivos existentes.

No crear archivos auxiliares innecesarios.

# SQL

Al escribir SQL:

* utilizar nombres claros;
* especificar las columnas en los `INSERT`;
* utilizar `JOIN` cuando corresponda;
* evitar `SELECT *` cuando solamente sean necesarias algunas columnas;
* utilizar consultas preparadas cuando existan parámetros externos.

Preferir:

```sql
SELECT id, nombre, email
FROM usuarios
WHERE id = :id;
```

# ESTILO DE RESPUESTAS DE CODEX

Cuando se solicite implementar una funcionalidad:

1. Analizar primero el código existente.
2. Identificar qué archivos necesitan cambios.
3. Realizar los cambios mínimos necesarios.
4. No inventar funcionalidades que no hayan sido solicitadas.
5. Explicar brevemente los cambios realizados.

Si existe alguna duda menor, elegir la solución más coherente con el código existente.

Si falta información importante, intentar deducirla examinando el proyecto antes de asumir una estructura diferente.

# PRIORIDADES

Por orden de importancia:

1. Que la aplicación funcione correctamente.
2. No romper funcionalidades existentes.
3. Seguridad.
4. Código sencillo y comprensible.
5. Mantener coherencia con el proyecto.
6. Evitar código duplicado.
7. Rendimiento cuando sea relevante.

# RESTRICCIONES

Codex NO debe:

* cambiar tecnologías del proyecto sin autorización;
* instalar dependencias innecesarias;
* reemplazar PHP por otro lenguaje;
* modificar la estructura completa del proyecto sin necesidad;
* eliminar código funcional porque considere que existe una solución mejor;
* cambiar nombres de tablas o columnas de base de datos sin solicitarlo;
* introducir frameworks sin autorización;
* modificar archivos externos a la tarea;
* almacenar contraseñas en texto plano;
* construir consultas SQL concatenando directamente datos del usuario.

# OBJETIVO FINAL

El código generado debe parecer integrado naturalmente dentro del proyecto existente.

Debe ser:

* funcional;
* sencillo;
* legible;
* seguro;
* fácil de modificar;
* coherente con el resto del código.

Ante varias posibles soluciones, elegir la más sencilla que resuelva correctamente el problema.
