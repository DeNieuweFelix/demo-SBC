let isOpen = false;
const menu = document.getElementById("menuNav");
const button = document.getElementById("menuController");

button.addEventListener("click", () => {toggle();});

function toggle(){
    if(isOpen){
        isOpen = false
        closeMenu();
    }else if(!isOpen){
        isOpen = true;
        openMenu();
    }
}

function openMenu(){
    menu.style.display = "flex";
}

function closeMenu(){
    menu.style.display = "none";
}