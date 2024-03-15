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
        <form action="../Includes/userWatch.inc.php" method="post">
            <h2>What is the brand of your watch?</h2>
            <br>
            <select name="brand" id="brand-selection" onchange="updateModels()">
                <option value="9">Rolex</option>
                <option value="10">Timex</option>
                <option value="11">Casio</option>
            </select>
            <br>
            <h2>What is the model of your phone?</h2>
            <br>
            <select name="model" id="model-selection" required>
                
            </select>
            <br>
            <h2>What is the serial number of your watch?</h2>
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
            modelSelect.innerHTML = ""; 

          
            switch (brandId) {
                case "9":
                    addOption(modelSelect, "Casmograph Daytona", "Casmograph Daytona");
                    addOption(modelSelect, "1908", "1908");
                    addOption(modelSelect, "Sky-Dweller", "Sky-Dweller");
                    addOption(modelSelect, "GMT-Master", "GMT-Master");
                    addOption(modelSelect, "Explorer 36", "Explorer 36");
                    addOption(modelSelect, "Air-King", "Air-King");
                    break;
                case "10":
                    addOption(modelSelect, "1972 Reissue", "1972 Reissue");
                    addOption(modelSelect, "1978 Reissue", "1978 Reissue");
                    addOption(modelSelect, "Expedition", "Expedition");
                    addOption(modelSelect, "Ironman", "Ironman");
                    addOption(modelSelect, "Weekender", "Weekender");
                    addOption(modelSelect, "Marlin", "Marlin");
                    break;
                case "11":
                    addOption(modelSelect, "G-Shock", "G-Shock");
                    addOption(modelSelect, "Pro Trek", "Pro Trek");
                    addOption(modelSelect, "Edifice", "Edifice");
                    addOption(modelSelect, "Baby-G", "Baby-G");
                    addOption(modelSelect, "Wave Ceptor", "Wave Ceptor");
                    addOption(modelSelect, "Oceanus", "Oceanus");
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

        updateModels();
    </script>
</body>

</html>