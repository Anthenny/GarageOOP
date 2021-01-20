<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">
    <!-- Bootstrap Css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- Persoonlijke Css -->
    <link rel="stylesheet" href="style.css">
    
    <title>CRUD | Klant</title>
</head>

<body>
    <!-- Navigatie menu -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">Garage</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#expandme">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="expandme">
                <div class="navbar-nav">
                    <a href="createKlant.php" class="nav-item nav-link">Maak klant aan</a>
                    <a href="readKlant.php" class="nav-item nav-link">Klanten</a>
                    <a href="createAuto.php" class="nav-item nav-link">Maak auto aan</a>
                    <a href="readAuto.php" class="nav-item nav-link">Auto's</a>
                    <a href="signup.php" class="nav-item nav-link">Registreren</a>
                    <a href="login.php" class="nav-item nav-link">Login</a>
                </div>
            </div>
        </div>
    </nav>
        <!-- Einde navigatie menu -->
</body>
</html>