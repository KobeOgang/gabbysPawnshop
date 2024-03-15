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
        $stmt_item->execute([$model, 3]);

        // Retrieve the last inserted Item_ID
        $lastInsertItemId = $pdo->lastInsertId();

        // Insert loan details into tbl_loan_details
        $query_loan = "INSERT INTO tbl_loan_details (Item_ID, Value, interest_rate) VALUES (?, ?, ?)";
        $stmt_loan_details = $pdo->prepare($query_loan);
        $stmt_loan_details->execute([$lastInsertItemId, $estimated_value, 0.90]);

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
        "2" => 20000,
        "1" => 22000,
        "3" => 19000,
        "4" => 18600

    ];


    $additional_values = [
        "2" => [
            "iPhone 15" => 5400,
            "iPhone 14" => 5200,
            "iPhone XR" => 4990,
            "iPhone X" => 4900,
            "iPhone SE" => 4670,
            "iPhone 8" => 4500

        ],
        "1" => [
            "Galaxy S24 Ultra" => 5640,
            "Galaxy S24" => 5600,
            "Galaxy Z Fold5" => 5488,
            "Galaxy Z Flip5" => 5445,
            "Galaxy S23 FE" => 4900,
            "Galaxy S22" => 4830,
            "Galaxy A54" => 4392
        ],
        "3" => [
            "Nova Y90" => 4800,
            "Mate 60" => 4759,
            "Mate 30 Pro" => 5110,
            "Nova Y70" => 4694,
            "Mate Xs 2" => 4600,
            "Mate 20 Pro" => 4655,
            "P60 Pro" => 4012
        ],
        "4" => [
            "12 Pro 5G" => 4800,
            "11T Pro 5G" => 4759,
            "Mi 11X" => 5110,
            "13T" => 4694,
            "Mix Fold 3" => 4600,
            "Civi 3" => 4655,
            "Mi 11 LE" => 4012
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