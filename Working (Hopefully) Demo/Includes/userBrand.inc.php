<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $type = $_POST["type"];
    $brand = $_POST["brand"];
    $material = $_POST["material"];
    $karats = $_POST["karats"];
    $grams = $_POST["grams"];

    try {
        require_once "dbh.inc.php";

        // Calculate estimated value
        $estimated_value = calculateEstimatedValue($karats, $material, $grams);

        // Insert item into tbl_item
        $query_item = "INSERT INTO tbl_item (Item_Name, Type_ID) VALUES (?, ?)";
        $stmt_item = $pdo->prepare($query_item);
        $stmt_item->execute([$type, 1]);

        // Retrieve the last inserted Item_ID
        $lastInsertItemId = $pdo->lastInsertId();

        // Insert loan details into tbl_loan_details
        $query_loan = "INSERT INTO tbl_loan_details (Item_ID, Value, interest_rate) VALUES (?, ?, ?)";
        $stmt_loan_details = $pdo->prepare($query_loan);
        $stmt_loan_details->execute([$lastInsertItemId, $estimated_value, 1.1]);

        // Retrieve the last inserted Pawn_ID from tbl_loan_details
        $lastInsertPawnId = $pdo->lastInsertId();


        // Insert jewelry details into tbl_jewelry
        $query_jewelry = "INSERT INTO tbl_jewelry (Pawn_ID, Karats, Grams, brand_id, Material_ID) VALUES (?, ?, ?, ?, ?)";
        $stmt_jewelry = $pdo->prepare($query_jewelry);
        $stmt_jewelry->execute([$lastInsertPawnId, $karats, $grams, $brand, $material]);

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
function calculateEstimatedValue($karats, $material, $grams)
{
    // Base value per gram for different materials
    $base_value_per_gram = [
        1 => 500,    // Silver
        2 => 4000,   // Gold
        3 => 6000   // Diamond
    ];

    // Additional value per karat for different materials
    $additional_value_per_karat = [
        1 => 100,    // Silver
        2 => 1000,   // Gold
        3 => 2000   // Diamond
    ];

    // Calculate estimated value based on material, karats, and grams
    $estimated_value = ($grams * $base_value_per_gram[$material]) + ($karats * $additional_value_per_karat[$material]);

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
    echo "<p>Item: $type</p>";
    echo "<p>Brand: $brand_name</p>";
    echo "<p>Material: $material</p>";
    echo "<p>Karats: $karats</p>";
    echo "<p>Grams: $grams</p>";
    echo "<p> Estimated Item Price: P$estimated_value";
    echo "<br>";
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