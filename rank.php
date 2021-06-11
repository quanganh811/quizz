<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>

    <body>
        <div class="Result">
            <div class="resultBox">
                <div>
                    <h1>Top 5</h1>
                </div>
                <?php
                // Create connection
                $conn = mysqli_connect("localhost", "root", "123456", "player_db");
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                }

                $sql = "SELECT * FROM list
                ORDER BY score DESC
                LIMIT 5";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                       
                        echo  " " . $row["name"] . " " . $row["score"] . "<br>";
                    }
                } else {
                    echo "0 results";
                }
                $conn->close();

                
                
                
                ?>

            <div>
                <button class="btnPlayAgain" onclick="reLoad()">Play Again</button>
            </div>

            </div>
        </div>
        <script src="index.js"></script>
    </body>



</body>

</html>