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
        <form action="../Includes/userPhone.inc.php" method="post">
            <h2>What is the brand of your phone?</h2>
            <br>
            <select name="brand" id="brand-selection" onchange="updateModels()">
                <option value="2">Apple</option>
                <option value="1">Samsung</option>
                <option value="3">Huawei</option>
                <option value="4">Xiaomi</option>
            </select>
            <br>
            <h2>What is the model of your phone?</h2>
            <br>
            <select name="model" id="model-selection" required>
                <!-- Dynamic options will be populated here based on the selected brand -->
            </select>
            <br>
            <h2>What is the serial number of your phone?</h2>
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
                    addOption(modelSelect, "Galaxy S24 Ultra", "Galaxy S24 Ultra");
                    addOption(modelSelect, "Galaxy S24", "Galaxy S24");
                    addOption(modelSelect, "Galaxy Z Fold5", "Galaxy Z Fold5");
                    addOption(modelSelect, "Galaxy Z Flip5", "Galaxy Z Flip5");
                    addOption(modelSelect, "Galaxy S23 FE", "Galaxy S23 FE");
                    addOption(modelSelect, "Galaxy S22", "Galaxy S22");
                    addOption(modelSelect, "Galaxy A54", "Galaxy A54");
                    break;
                case "2":
                    addOption(modelSelect, "iPhone 15", "iPhone 15");
                    addOption(modelSelect, "iPhone 14", "iPhone 14");
                    addOption(modelSelect, "iPhone XR", "iPhone XR");
                    addOption(modelSelect, "iPhone X", "iPhone X");
                    addOption(modelSelect, "iPhone SE", "iPhone SE");
                    addOption(modelSelect, "iPhone 8", "iPhone 8");
                    break;
                case "3":
                    addOption(modelSelect, "Nova Y90", "Nova Y90");
                    addOption(modelSelect, "Mate 60", "Mate 60");
                    addOption(modelSelect, "Mate 30 Pro", "Mate 30 Pro");
                    addOption(modelSelect, "Nova Y70", "Nova Y70");
                    addOption(modelSelect, "Mate Xs 2", "Mate Xs 2");
                    addOption(modelSelect, "Mate 20 Pro", "Mate 20 Pro");
                    addOption(modelSelect, "P60 Pro", "P60 Pro");
                    break;
                case "4":
                    addOption(modelSelect, "12 Pro 5G", "12 Pro 5G");
                    addOption(modelSelect, "11T Pro 5G", "11T Pro 5G");
                    addOption(modelSelect, "Mi 11X", "Mi 11X");
                    addOption(modelSelect, "13T", "13T");
                    addOption(modelSelect, "Mix Fold 3", "Mix Fold 3");
                    addOption(modelSelect, "Civi 3", "Civi 3");
                    addOption(modelSelect, "Mi 11 LE", "Mi 11 LE");
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