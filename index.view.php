<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css" .css">
    <title>Respaldos</title>
</head>

<body>
    <header>
        <nav>Respaldos</nav>
    </header>
    <main>
        <h1>Respaldos Bacula</h1>
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "backups";

            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Error de conexión: " . $conn->connect_error);
            }

            // Obtener los elementos de la base de datos
            $sql = "SELECT nombre, descripcion, tipo FROM respaldos";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='accordion-item'>";
                    echo "<h2 class='accordion-header'><button class='accordion-button collapsed' type='button' data-bs-toggle='collapse'
                    data-bs-target='#flush-collapseOne' aria-expanded='false' aria-controls='flush-collapseOne'>";
                    echo $row["nombre"];
                    echo "</button>";
                    echo "</h2>";
                    echo "<div id='flush-collapseOne' class='accordion-collapse collapse' data-bs-parent='#accordionFlushExample'><div class='accordion-body'>";
                    echo "<p><strong>Descricion: </strong>" . $row["descripcion"] . "</p>";
                    echo "<p><strong>Tipo: </strong>" . $row["tipo"] . "</p></div></div></div>";
                    echo "<hr>";
                }
            } else {
                echo "No se encontraron elementos en la base de datos.";
            }
            $conn->close();
            ?>

            
        </div>
    </main>
    <footer></footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>