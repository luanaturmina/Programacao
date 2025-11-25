<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Display Users Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>

    <?php
    include 'connection.php';
    $sql = "SELECT * FROM livros";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Start building the HTML table
        echo "<table>";
        echo "<tr><th>ID</th><th>Titulo</th><th>Autor</th><th>Ano</th><th>Categoria</th></tr>";

        // Loop through each row of the result set
        while ($row = $result->fetch_assoc()) {
            // fetch_assoc() returns an associative array where keys are column names
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['id']) . "</td>";
            echo "<td>" . htmlspecialchars($row['titulo']) . "</td>";
            echo "<td>" . htmlspecialchars($row['autor']) . "</td>";
            echo "<td>" . htmlspecialchars($row['ano']) . "</td>";
            echo "<td>" . htmlspecialchars($row['autor']) . "</td>";
            echo "<td>" . htmlspecialchars($row['categoria']) . "</td>";
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