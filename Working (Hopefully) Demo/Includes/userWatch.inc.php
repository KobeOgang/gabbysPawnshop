<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $brand = $_POST["brand"];
    $model = $_POST["model"];
    $serial_number = $_POST["serial_number"];

    try {
        require_once "dbh.inc.php";

        // Calculate estimated value
        $estimated_value = estimateItemValue($brand, $model);

        // Insert item into tbl_item
        $query_item = "INSERT INTO tbl_item (Item_Name, Type_ID) VALUES (?, ?)";
        $stmt_item = $pdo->prepare($query_item);
        $stmt_item->execute([$model, 2]);

        // Retrieve the last inserted Item_ID
        $lastInsertItemId = $pdo->lastInsertId();

        // Insert loan details into tbl_loan_details
        $query_loan = "INSERT INTO tbl_loan_details (Item_ID, Value, interest_rate) VALUES (?, ?, ?)";
        $stmt_loan_details = $pdo->prepare($query_loan);
        $stmt_loan_details->execute([$lastInsertItemId, $estimated_value, 0.87]);

        // Retrieve the last inserted Pawn_ID from tbl_loan_details
        $lastInsertPawnId = $pdo->lastInsertId();


        // Insert into tbl_non_jewelry
        $query_non_jewelry = "INSERT INTO tbl_non_jewelry (Pawn_ID, Brand_ID, Model, Serial_number) VALUES (?, ?, ?, ?)";
        $stmt_non_jewelry = $pdo->prepare($query_non_jewelry);
        $stmt_non_jewelry->execute([$lastInsertPawnId, $brand, $model, $serial_number]);

        // Fetch the brand name based on Brand_ID
        $stmt_brand = $pdo->prepare("SELECT Brand_Name FROM tbl_brand WHERE Brand_ID = ?");
        $stmt_brand->execute([$brand]);
        $brand_info = $stmt_brand->fetch();
        $brand_name = $brand_info['Brand_Name'];



        $stmt_item = null;
        $stmt_jewelry = null;
        $stmt_loan_details = null;
        $pdo = null;

    } catch (PDOException $e) {
        die ("Query failed: " . $e->getMessage());
    }

} else {
    header("Location: ../index.php");
}
function estimateItemValue($brand, $model)
{

    $base_values = [
        "9" => 26000,
        "10" => 23700,
        "11" => 20895

    ];


    $additional_values = [
        "9" => [
            "Casmograph Daytona" => 5400,
            "1908" => 5200,
            "Sky-Dweller" => 4990,
            "GMT-Master" => 4900,
            "Explorer 36" => 4670,
            "Air-King" => 4500

        ],
        "10" => [
            "1972 Reissue" => 5640,
            "1978 Reissue" => 5600,
            "Ironman" => 5488,
            "Weekender" => 5445,
            "Marlin" => 4900
        ],
        "11" => [
            "G-Shock" => 4800,
            "Pro Trek" => 4759,
            "Edifice" => 5110,
            "Baby-G" => 4694,
            "Wave Ceptor" => 4600,
            "Oceanus" => 4655
        ]

    ];

    if (isset ($additional_values[$brand]) && isset ($additional_values[$brand][$model])) {
        $estimated_value = $base_values[$brand] + $additional_values[$brand][$model];
    } else {
        $estimated_value = $base_values[$brand];
    }
    return $estimated_value;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pawn Details</title>
    <link rel="stylesheet" href="../css/JPawn.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- normalize css -->
    <link rel="stylesheet" href="../css/normalize.css">
</head>

<body>
    <!-- header -->
    <header class="header bg-blue">
        <nav class="navbar bg-blue">
            <div class="container flex">
                <a href="index.php" class="navbar-brand">
                    <img src="../images/logo.png" alt="site logo">
                </a>
                <button type="button" class="navbar-show-btn">
                    <img src="../images/ham-menu-icon.png">
                </button>

                <div class="navbar-collapse bg-white">
                    <button type="button" class="navbar-hide-btn">
                        <img src="../images/close-icon.png">
                    </button>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="../index.php" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="../Items.php" class="nav-link">Items We Accept</a>
                        </li>
                        <li class="nav-item">
                            <a href="../aboutus.php" class="nav-link">About Gabbys</a>
                        </li>
                    </ul>
                    <div class="nav-btn-group">
                        <a href="PawnNow.php" class="btn btn-light-blue">Pawn Now</a>
                    </div>
                    </form>
                </div>
            </div>
            </div>
        </nav>
    </header>
    <!-- end of header -->
    <?php
    echo "<div class='details-container'>";
    echo "<h3>Pawn Details</h3>";
    echo "<br>";
    echo "<p>Pawn Ticket ID: $lastInsertPawnId</p>";
    echo "<br>";
    echo "<p>Item: $model</p>";
    echo "<br>";
    echo "<p>Brand: $brand_name</p>";
    echo "<br>";
    echo "<p>Serial: $serial_number</p>";
    echo "<br>";
    echo "<p> Estimated Item Price: P$estimated_value";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "</div>"
        ?>
    <form class='email-container' action="./recordCustomerInfo.inc.php" method="post">
        <h3>Kindly provide your personal information</h3>
        <br>
        <input type="text" name="ticket" placeholder="Pawn Ticket ID">
        <br>
        <input type="text" name="name" placeholder="Name">
        <br>
        <input type="text" name="contact" placeholder="Contact">
        <br>
        <input type="text" name="address" placeholder="Address">
        <br>
        <input type="text" name="email" placeholder="E-mail">
        <br>
        <button>Submit</button>
    </form>

</body>

</html>