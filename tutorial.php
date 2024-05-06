<?php
error_reporting(E_ALL & ~E_WARNING);
/* Constantes */
define('URL_PHP_LOGO', 'https://www.php.net/images/logos/new-php-logo.svg');
define('URL_JUNIOR_LOGO', 'https://www.juniordevelopercentral.com/wp-content/uploads/2019/12/junior-developer-central-logo-1.png');
define('URL_SENIOR_LOGO', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRr_gjMOCw7QGVHp08wwbi5Jo2NEptLGBqGvA&s');
define('URL_ARABE_LOGO', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTj2rcX4qtXa8oa2oMKu0SF3gefVnLsZ_oCZsaDRHAz7w&s');
// Otra forma de definir constantes
const URL_PHP_LOGO_2 = 'https://www.php.net/images/logos/new-php-logo.svg';

/* Variables */
$name = "Paul";
$isdev = true;
$age = 34;
$newAge = $age + 1;
$newAgeConcatenado = $age . 1;
$nivelAprendizaje = 8/10;
$aprendizajeAlcanzado = $nivelAprendizaje * 100 . "%";
$mostrarAprendizaje = "";

if ($nivelAprendizaje < 5/10 ){
    $mostrarAprendizaje = "Estoy en un nivel bajo";
}elseif ($nivelAprendizaje == 5/10){
    $mostrarAprendizaje = "Estoy en un nivel medio";
}else {
   $mostrarAprendizaje = "Estoy en un nivel alto";
};

/*Saber el tipo de variable es y el valor*/
var_dump($name);
/*Saber el tipo de variable */
gettype($name);

/* Switch es el mismo de siempre */
/* match */

$segunEdad =  match ($age){
    1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18 => "Eres menor de edad",
    19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40 => "Eres un adulto joven",
    41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60 => "Eres un adulto maduro",
    default => "Eres un anciano"
};

$segunEdad = match (true){
    $age < 18 => "Eres menor de edad",
    $age < 40 => "Eres un adulto joven",
    $age < 60 => "Eres un adulto maduro",
    default => "Eres un anciano"
};

/*Arrays */
$Lenguajes = ["PHP", "JavaScript", "Python", "Java", "C++", "C#", "Ruby", "Go", "Swift", "Kotlin"];
/*Agregar en un array*/
$Lenguajes[] = "Rust";
/*Eliminar en un array*/
unset($Lenguajes[0]);
/*Agregar en un array en una posicion especifica*/
array_splice($Lenguajes, 0, 1, "Cobol");
/*Sustituir el valor del array*/
$Lenguajes[3] = "Python 3";
/*Algo parecido a un dicccionario */
$persona = [
    "nombre" => "Paul",
    "edad" => 34,
    "profesion" => "Desarrollador",
    "lenguajes" => ["PHP", "JavaScript", "Python", "Java", "C++", "C#", "Ruby", "Go", "Swift", "Kotlin"]
];

/*Obtener un valor de un array asociativo */
$nombre = $persona["nombre"];
/*Cambiar el valor de un arrau asociativo*/
$persona["profesion"] = "Dessarrollador Senior de PHP, fullstack";
/*Eliminar el valor de un array asociativo*/
unset($persona["edad"]);
/*Agregar un valor a un array asociativo*/
$persona["nacionalidad"] = "Mexicano";
/*Obtener los indices de un array asociativo*/
$keys = array_keys($persona);
/*Obtener los valores de un array asociativo*/
$values = array_values($persona);
/*Cambiar el valor de un array en un array asociativo*/
$persona["lenguajes"][] = ["PHP 8"];


?>


<div class="Content">
<h1> <?=  "Hola mi nombre es ".$name . " Tengo ". $age . " años y voy a cumplir " . $newAge; ?>  </h1>
<h2> <?= "Segun mi edad soy: " . $segunEdad; ?> </h2>
<h5> <?= "Este es mi edad concatenada con 1 " . $newAgeConcatenado; ?>  </h5>

    <H1> Lenguajes que ya manejo</H1>
<ul>
    <?php /* Obtener los indices de el Arreglo */ ?>
    <?php foreach ($Lenguajes as $Key => $lenguaje): ?>
    <li> <?= $Key . " " .   $lenguaje ?></li>
    <?php endforeach; ?>
</ul>






<h2> Estoy aprendiendo  </h2>
<img src="<?= URL_PHP_LOGO_2 ?> " alt="PHP LOGO" width="200" >
<h2> Mi nivel de aprendizaje de este lenguaje es: </h2>
<h3> <?= $mostrarAprendizaje ?> </h3>

<!-- Otra forma de if --->
<?php if ($nivelAprendizaje < 5/10 ): ?>
    <ul>
        <li> Ya aprendi a ejecutar un local host para probar mi php </li>
        <li> Ya se cuales son las variables y constantes en php </li>
        <li> Ya se concatenar y saber que tipo de variable es una variable </li>
    </ul>
    <img src="<?= URL_JUNIOR_LOGO ?>" alt="Junior Developer Logo" width="200">
<?php elseif ($nivelAprendizaje == 5/10): ?>
    <ul>
        <li> Ya se utilizar if y else en diferentes formas </li>
        <li> Ya se utilizar switch case </li>
        <li> Ya se utilizar bucles for, while y do while </li>
        <li> Puedo hacer un pagina web basica con php </li>
    </ul>
    <img src="<?= URL_SENIOR_LOGO ?>" alt="Senior Developer Logo" width="200"  >
<?php else: ?>
   <ul>
        <li> Ya se utilizar funciones y clases </li>
        <li> Ya se utilizar bases de datos con php </li>
        <li> Ya se utilizar frameworks de php </li>
        <li> Ya se utilizar librerias de php </li>
        <li> Ya se utilizar apis de php </li>
        <li> Ya se utilizar php en la nube </li>
    </ul>
    <img src="<?= URL_ARABE_LOGO ?>" alt="Arabe Developer Logo" width="500">
<?php endif; ?>

    <h2>Resumen de Paul </h2>

    <ul>
        <li> <?= "Mi nombre es " . $name ?> </li>
        <li> <?= "Mi edad es " . $age ?> </li>
        <li> <?= "Mi profesion es " . $persona["profesion"] ?> </li>
        <li> <?= "Mis lenguajes son " . implode(", ", $persona["lenguajes"]) ?> </li>
        <li> <?= "Mi nacionalidad es " . $persona["nacionalidad"] ?> </li>
    </ul>
</div>





<style>
    :root{
        color-scheme: dark;
    }

    body{
        display: grid;
    }

    img{
        display: block;
        margin: 0 auto;
    }

    li{
        margin: 10px;
    }

    h3{
        text-align: center;
    }
    .content{
        display: grid;
        justify-content: center;
        align-items: center;
    }


</style>
