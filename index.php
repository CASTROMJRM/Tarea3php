<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tarea 3 PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5 d-flex justify-content-center">
    <div class="card p-4 shadow" style="width: 100%; max-width: 400px;">
        <h1 class="mb-4 text-center">Validador de Montaña Rusa</h1>

        <form method="post" action="validar.php" class="needs-validation" novalidate>
            <div class="mb-3">
                <label for="altura" class="form-label"><i class="bi bi-rulers"></i> Altura (cm):</label>
                <input type="number" id="altura" name="altura" class="form-control" required pattern="\d{3,}">
                <div class="invalid-feedback">Por favor, ingresa tu altura (mínimo 120 cm).</div>
            </div>

            <div class="mb-3">
                <label for="edad" class="form-label"><i class="bi bi-calendar3"></i> Edad:</label>
                <input type="number" id="edad" name="edad" class="form-control" required pattern="\d{2,}">
                <div class="invalid-feedback">Por favor, ingresa tu edad (mínimo 17 años).</div>
            </div>

            <div class="mb-3">
                <label class="form-label"><i class="bi bi-exclamation-triangle"></i> ¿Rechaza llevarnos a juicio por daños y perjuicios de un mal mantenimiento?</label>
                <div class="form-check">
                    <input type="radio" id="rechaza_si" name="rechazo" value="si" class="form-check-input" required>
                    <label for="rechaza_si" class="form-check-label">Sí</label>
                </div>
                <div class="form-check">
                    <input type="radio" id="rechaza_no" name="rechazo" value="no" class="form-check-input" required>
                    <label for="rechaza_no" class="form-check-label">No</label>
                </div>
                <div class="invalid-feedback">Por favor, selecciona una opción.</div>
            </div>

            <button type="submit" class="btn btn-primary w-100"><i class="bi bi-check-circle"></i> Validar</button>
        </form>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>



