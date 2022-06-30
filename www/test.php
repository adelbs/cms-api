<html>

<head>
    <title>PHP Test</title>
</head>

<body>
    <?php echo '<p>Hello World</p>'; ?>

    <hr>

    <?php
    $servername = "localhost";
    $username = "poppy01";
    $password = "pp123";
    $dbname = "poppy";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM xp_os";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "os: " . $row["os"] . " - version: " . $row["version"] . " " . $row["dt"] . "<br>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();



    try {
        echo $_GET['url'];
    } catch (Exception $e) {
    }


    try {
        $rawdata = file_get_contents("php://input");
        $decoded = json_decode($rawdata);
        echo $decoded->name;
    } catch (Exception $e) {
    }


    ?>


</body>

</html>