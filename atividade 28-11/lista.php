<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Lista dos livros</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%; 
            margin: 180px;
            margin-left: 400px;
            margin-top: 200px;
        }

        th,
        td {
            border: 1px solid #26A69A;
            padding: 8px;
            text-align: left;
            color: #666666;
        }

        th {
            background-color: #F5F5F5;
            color:#2C73D2;
        }


    </style>
</head>

<body>

    <?php
    include 'connection.php';
    $sql = "SELECT * FROM livros";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Titulo</th><th>Autor</th><th>Ano</th><th>Categoria</th><th>Quantidade</th></tr>";

        while ($row = $result->fetch_assoc()) {
            // fetch_assoc() returns an associative array where keys are column names   
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['id']) . "</td>";
            echo "<td>" . htmlspecialchars($row['titulo']) . "</td>";
            echo "<td>" . htmlspecialchars($row['autor']) . "</td>";
            echo "<td>" . htmlspecialchars($row['ano']) . "</td>";
            echo "<td>" . htmlspecialchars($row['categoria']) . "</td>";
            echo "<td>" . htmlspecialchars($row['quantidade']) . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "0 results";
    }

    // Close the database connection
    $conn->close();
    ?>

</body>

</html>