<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pawn Now</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- normalize css -->
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/JPawn.css">
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

    <div class="form-container">
        <form action="../Includes/userTablet.inc.php" method="post">
            <h2>What is the brand of your tablet?</h2>
            <br>
            <select name="brand" id="brand-selection" onchange="updateModels()">
                <option value="2">Apple</option>
                <option value="1">Samsung</option>
                <option value="5">Sony</option>
            </select>
            <br>
            <h2>What is the model of your tablet?</h2>
            <br>
            <select name="model" id="model-selection" required>
                <!-- Dynamic options will be populated here based on the selected brand -->
            </select>
            <br>
            <h2>What is the serial number of your tablet?</h2>
            <br>
            <input type="text" name="serial_number" required>
            <br>
            <br>
            <button>Pawn</button>
        </form>
    </div>

    <script>
        function updateModels() {
            var brandSelect = document.getElementById("brand-selection");
            var modelSelect = document.getElementById("model-selection");
            var brandId = brandSelect.options[brandSelect.selectedIndex].value;
            modelSelect.innerHTML = ""; // Clear previous options

            // Populate model options based on selected brand
            switch (brandId) {
                case "1": 
                    addOption(modelSelect, "Galaxy Tab S9", "Galaxy Tab S9");
                    addOption(modelSelect, "Galaxy Tab A8", "Galaxy Tab A8");
                    addOption(modelSelect, "Galaxy Tab S7", "Galaxy Tab S7");
                    addOption(modelSelect, "Galaxy Tab S8", "Galaxy Tab S8");
                    addOption(modelSelect, "Galaxy Tab A7 Lite", "Galaxy Tab A7 Lite");
                    addOption(modelSelect, "Galaxy Tab S6 Lite", "Galaxy Tab S6 Lite");
                    addOption(modelSelect, "Galaxy Tab A7", "Galaxy Tab A7");
                    break;
                case "2": 
                    addOption(modelSelect, "iPad", "iPad");
                    addOption(modelSelect, "iPad Pro", "iPad Pro");
                    addOption(modelSelect, "iPad Air", "iPad Air");
                    addOption(modelSelect, "iPad Mini", "iPad Mini");
                    break;
                case "5": 
                    addOption(modelSelect, "Xperia Z4", "Xperia Z4");
                    addOption(modelSelect, "Xperia Z3", "Xperia Z3");
                    addOption(modelSelect, "Xperia Z2", "Xperia Z2");
                    addOption(modelSelect, "Xperia Tablet S", "Xperia Tablet S");
                    break;
                default:
                    break;
            }
        }

        function addOption(selectElement, text, value) {
            var option = document.createElement("option");
            option.text = text;
            option.value = value;
            selectElement.add(option);
        }

        // Populate models based on default brand selection
        updateModels();
    </script>
</body>

</html>