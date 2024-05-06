<?php
define('BG_URL','https://img.freepik.com/free-vector/comic-style-background_23-2148836600.jpg?size=626&ext=jpg&ga=GA1.1.553209589.1714176000&semt=ais');
const API_URL = "https://whenisthenextmcufilm.com/api";
#Inicializar una nueva sesion de cURL
$ch = curl_init(API_URL);
# Indicar que queremos recibir el resultado de la peticion y no mostrarla en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
# Ejecutar la peticion
$result = curl_exec($ch);
$data = json_decode($result, true);

# Cerrar la sesion de cURL
curl_close($ch);

#Una alternativa a cURL es usar file_get_contents
// $data = json_decode(file_get_contents(API_URL), true); Si solo quieres hacer un GET en una API



// var_dump($data);
?>

<!DOCTYPE html>
<html>
<head>
    <title>LA PROXIMA PELICULA DE MARVEL </title>
    <script src="https://cdn.tailwindcss.com"></script>
    
</head>

<body class=" text-white" style="background-image: url(<?= BG_URL; ?>); background-repeat: no-repeat ; background-size: cover" >

    <section class=" flex flex-col w-full h-screen justify-center items-center  ">
    
    <p class="text-6xl text-center mt-5 font-mono font-extrabold  italic ">La siguiente pelicula de Marvel </p>
    <h1 class="text-5xl text-center mt-5 "><?php echo $data['title']; ?></h1>
    <img src="<?= $data['poster_url']; ?> " alt="poster de la peli" width="200" class="mx-auto mt-5 ">

    <p class="text-3xl text-center mt-5 lg:text-white">Se estrena el : </p>
    <h1 class="text-2xl text-center mt-5  "><?php echo $data['release_date']; ?></h1>
    <p class="text-xl text-center text-white mt-2"> La proxima pelicula será: <a href="<?= $data['following_production']['poster_url'] ?> " target="_blank"> <?= $data['following_production']['title']  ?> </a> </p>
    </section>

</body>


</html>

