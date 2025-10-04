const allDayClasses = [];
let allButtons = [];

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

    console.log(allDayClasses);
    console.log(allButtons);

    for(let button of allButtons){
        let thisNumber = parseInt(button.getAttribute("id")[1]);
        console.log(thisNumber);

        button.addEventListener("click", function(){selectedDay = thisNumber; changeDay()});
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