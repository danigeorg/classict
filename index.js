let menuList = document.getElementById("menuList");
menuList.style.maxHeight = "0px";

function toggleMenu() {
    if (menuList.style.maxHeight === "0px") {
        menuList.style.maxHeight = "300px"; // Adjust the height according to your content
    } else {
        menuList.style.maxHeight = "0px";
    }
}
