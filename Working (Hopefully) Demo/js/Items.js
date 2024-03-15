let select = document.getElementById("select");
let option1 = document.getElementById("option1");
let list = document.getElementById("list");
let selectText = document.getElementById("selectText");
let inputfield = document.getElementById("inputfield");
let searchButton = document.getElementById("searchButton");
let options = document.getElementsByClassName("options");

select.onclick = function() {
    list.classList.toggle("open");
    option1.onclick = function() {
        window.location.href = "index.html";
    };
};

for (let i = 0; i < options.length; i++) {
    options[i].onclick = function() {
        selectText.innerHTML = this.innerHTML;
    };
}

searchButton.addEventListener("click", function() {
    let searchTerm = inputfield.value.trim().toLowerCase();

    if (searchTerm === "jewelry") {
        window.location.href = "index.html";
    }
});