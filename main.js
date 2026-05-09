const icon = document.querySelector(".icon");
const iconX = document.querySelector(".icon_x");
const container = document.querySelector(".container2");
const sidebar = document.querySelector(".sidebar");

icon.addEventListener("click", function() {

    icon.style.display = "none";
    iconX.style.display = "flex";
    
});

iconX.addEventListener("click", function() {

    icon.style.display = "block";
    iconX.style.display = "none";

});

icon.addEventListener("click", function() {

    sidebar.classList.add("active");

    icon.style.display = "none";
    iconX.style.display = "block";

});

iconX.addEventListener("click", function() {

    sidebar.classList.remove("active");
    icon.style.display = "block";
    iconX.style.display = "none";

});