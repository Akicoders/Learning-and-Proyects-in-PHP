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
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body >

    <section >

        <h1 >La siguiente pelicula de Marvel </h1>
        <h2> <?php echo $data['title']; ?> </h2>
        <img src="<?= $data['poster_url']; ?>" alt="poster de la peli" >

        <p >Se estrena el : </p>
        <h1 ><?php echo $data['release_date']; ?></h1>
        <p> La proxima pelicula será: <a href="<?= $data['following_production']['poster_url'] ?>" target="_blank"> <?= $data['following_production']['title'] ?> </a> </p>
    </section>

</body>

<style>
 :root {
    color-scheme: dark;
}

    body {
    background-image: url(<?= BG_URL; ?>);
    background-repeat: no-repeat;
    background-size: cover;
    color: white;
    margin:0;
}

section {
    display: flex;
    flex-direction: column;
    width: 100%;
    height: 100vh;
}

p, h1,h2 {
    text-align: center;
    margin: 1rem;
}

img {
    margin: 1rem auto;
    width: 120px;
}

@media (max-width: 640px) {
    img {
        width: 33%;
    }

    p, h1,h2 {
    text-align: center;
    margin: 1.7rem;
    }

    h1{
        font-size: 2rem;
    }

    p{
        font-size: 1.2rem;
    }



}

@media (min-width: 1024px) {
    img {
        width: 20%;
    }


}

@media (min-width: 1280px) {
    img {
        width: 15%;
    }
}

@media (min-width: 1536px) {
    img {
        width: 20%;
    }
}
    </style>

</html>
