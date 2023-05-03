<!DOCTYPE html>
<html>

<head>
    <title>Arrays in PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        h2 {
            text-align: center;
            margin-top: 30px;
            color: #1e90ff;
        }

        table {
            margin: 0 auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
            border-radius: 10px;
        }

        th,
        td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }

        th {
            background-color: #1e90ff;
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 14px;
        }

        td {
            color: #333;
            font-size: 14px;
        }

        .numeric {
            background-color: #ffd54f;
        }

        .assoc {
            background-color: #f44336;
        }

        .multi {
            background-color: #4caf50;
        }
    </style>
</head>

<body>
    <h2>Numeric Array</h2>
    <table class="numeric">
        <tr>
            <th>Index</th>
            <th>Value</th>
        </tr>
        <?php
        $numeric_array = array(10, 20, 30, 40, 50);

        foreach ($numeric_array as $index => $value) {
            echo "<tr><td>$index</td><td>$value</td></tr>";
        }
        ?>
    </table>

    <h2>Associative Array</h2>
    <table class="assoc">
        <tr>
            <th>Key</th>
            <th>Value</th>
        </tr>
        <?php
        $assoc_array = array("name" => "John", "age" => 30, "city" => "New York");

        foreach ($assoc_array as $key => $value) {
            echo "<tr><td>$key</td><td>$value</td></tr>";
        }
        ?>
    </table>

    <h2>Multidimensional Array</h2>
    <table class="multi">
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>City</th>
        </tr>
        <?php
        $multi_array = array(
            array("name" => "John", "age" => 30, "city" => "New York"),
            array("name" => "Mary", "age" => 25, "city" => "Los Angeles"),
            array("name" => "Tom", "age" => 35, "city" => "Chicago")
        );

        foreach ($multi_array as $item) {
            echo "<tr><td>{$item['name']}</td><td>{$item['age']}</td><td>{$item['city']}</td></tr>";
        }
        ?>
    </table>
</body>

</html>
