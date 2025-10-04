const allDayClasses = [];
let allButtons = [];
let inschrijfButtons = [];

let selectedDay = 0;
let currentRealDay;

init();

function init(){
    let date = new Date();
    currentRealDay = date.getDay() - 1;
    selectedDay = currentRealDay;

    for(i = 0; i < 7; i++){
        allDayClasses.push(document.getElementsByClassName(`d${i}`));
    }

    allButtons = document.getElementsByClassName("daySelectButton");
    inschrijfButtons = document.getElementsByClassName("IschBtn");

    console.log(allDayClasses);
    console.log(allButtons);
    console.log(inschrijfButtons);

    for(let button of allButtons){
        let thisNumber = parseInt(button.getAttribute("id")[1]);
        console.log(thisNumber);

        button.addEventListener("click", function(){selectedDay = thisNumber; changeDay()});
    }

    for(let btn of inschrijfButtons){
        btn.addEventListener("click", function(){openInschrijfPage();});
    }

    changeDay();
}

function changeDay(){
    console.log("aaa");

    let i = 0;
    for(const a of allDayClasses){
        if(i == selectedDay){
            for(const b of a){
                b.style.display = "flex";
            }
            allButtons[i].classList.add("bSl");
        }
        else{
        for(const b of a){
            b.style.display = "none";
        }
        allButtons[i].classList.remove("bSl");
        }
        i++;
    }
}

function openInschrijfPage(activiteit){
    var url = window.URL;
    console.log(url);
}