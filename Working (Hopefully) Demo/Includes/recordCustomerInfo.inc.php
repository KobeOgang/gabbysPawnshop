<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ticket = $_POST["ticket"];
    $name = $_POST["name"];
    $contact = $_POST["contact"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $employee_id = rand(1, 5);
    $appraiser_id = rand(1, 3);

    try {
        require_once "dbh.inc.php";

        // Check if the customer already exists
        $query_check_customer = "SELECT Customer_ID FROM tbl_customer WHERE Customer_Name = ? AND Customer_Contact = ?";
        $stmt_check_customer = $pdo->prepare($query_check_customer);
        $stmt_check_customer->execute([$name, $contact]);
        $existing_customer = $stmt_check_customer->fetch(PDO::FETCH_ASSOC);

        if (!$existing_customer) {
            $query_customer = "INSERT INTO tbl_customer (Customer_Name, Customer_Contact, Customer_Address, Customer_Email) 
                           VALUES (?, ?, ?, ?)";
            $stmt_customer = $pdo->prepare($query_customer);
            $stmt_customer->execute([$name, $contact, $address, $email]);

            $lastInsertCustomerId = $pdo->lastInsertId();
        } else {
            $lastInsertCustomerId = $existing_customer['Customer_ID'];
        }



        $query_loan = "INSERT INTO tbl_loan (Customer_ID, Transaction_Date, Employee_ID) VALUES (?, NOW(), ?)";
        $stmt_loan = $pdo->prepare($query_loan);
        $stmt_loan->execute([$lastInsertCustomerId, $employee_id]);

        // Retrieve the last inserted Loan_ID
        $lastInsertLoanId = $pdo->lastInsertId();

        $query_loan_details = "UPDATE tbl_loan_details SET loan_id = (?), appraiser_id = (?) WHERE pawn_id = (?)";
        $stmt_loan_details = $pdo->prepare($query_loan_details);
        $stmt_loan_details->execute([$lastInsertLoanId, $appraiser_id, $ticket]);

    } catch (PDOException $e) {
        die ("Query failed: " . $e->getMessage());
    }

} else {
    header("Location: ../index.php");
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
    echo "<h3>Thank You For Pawning To Us!</h3>";
    echo "<br>";
    echo "</div>"
        ?>
</body>

</html>