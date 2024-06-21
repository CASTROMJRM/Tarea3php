<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado de Validación</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="bg-light">

<div class="container mt-5 d-flex justify-content-center">
    <div class="card p-4 shadow" style="width: 100%; max-width: 400px;">
        <h1 class="mb-4 text-center">Resultado de Validación</h1>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $altura = $_POST['altura'];
            $edad = $_POST['edad'];
            $rechazo = $_POST['rechazo'];

            if ($altura >= 120 && $edad > 16 && $rechazo == 'si') {
                echo '<div class="alert alert-success" role="alert">';
                echo '<h4 class="alert-heading text-center">¡Felicidades!</h4>';
                echo '<p>Has cumplido con todos los requisitos. Aquí está tu ticket:</p>';
                echo '<img src="img/tick.webp" alt="Ticket de entrada" class="img-fluid">';
                echo '</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">';
                echo '<h4 class="alert-heading">Lo siento</h4>';
                echo '<p>No cumples con los requisitos necesarios para entrar en la Montaña Rusa.</p>';
                echo '</div>';
            }
        }
        ?>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>


