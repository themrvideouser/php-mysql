<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Webshop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Welcome to my shop</h1>
<ul>
    <?php
        #phpinfo();
        $json = file_get_contents('http://product-service');
        $obj = json_decode($json);

        $products = $obj->products;
        foreach ($products as $product) {
            echo "<li>$product</li>";
        }
    ?>
</ul>
<ul>
    <?php
        $servername = "database";
        $username = "user";
        $password = "user";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=company", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
            }
        catch(PDOException $e)
            {
            echo "Connection failed: " . $e->getMessage();
            }
        
        $sql = "SELECT * FROM employees";
        $result = $conn->query($sql);
    
        if ($result->rowCount() > 0) {
            // output data of each row
            while($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo "id: ". $row["ID"] ." - Name: ".  $row["first_name"]. " " . $row["last_name"]. " " . $row["department"]. $row["email"]. "<br>";
            }
        } else {
            echo "0 results";
        }
    ?>
</ul>
</body>
</html>