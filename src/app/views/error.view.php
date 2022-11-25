<!doctype html>
<html lang="es">
<head>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Title -->
    <title>Oh no!</title>
    <!-- Favicon -->
    <!-- <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon"> -->
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <!-- Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" defer></script>
    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- Iconly -->
    <link href="https://dev.iconly.io/public/y6qS8rAn7aW2/iconly.css" rel="stylesheet"/>
    <!-- Personal -->
    <link rel="stylesheet" href="code/styles/css/styles.css">
    <link rel="stylesheet" href="code/styles/css/myStyles.css">
    <link rel="stylesheet" href="code/styles/css/error.css">
</head>
<body>
    <form method="post">
        <h1 class="text-center mb-5">¡Error fatal!</h1>
        <p class="text-center">Error producido - <?php echo $error?></p>
        <button type="submit" name="retry" class="btn btn-primary mt-5 d-block m-auto">Reintentar</button>
    </form>
</body>
</html>