const collection = document.getElementsByClassName('collection');

const figures = document.querySelectorAll('.card-figures');

const hide = document.querySelectorAll('.collection-hide');
const show = document.querySelectorAll('.collection-show');
const log = console.log;



//De las funciones fn_hide & fn_show me gustaria corregir los incrementadores i y x, que no arranquen en 1 si no en 0.


function fn_hide(variable) {

    for (let i = 1; i <= collection.length; i++) {
        log("i: " + i);
        if (i == variable) {
            for (let x = 1; x <= hide.length; x++) {
                if (x == variable) {
                    log("lenght:" + hide.length);
                    hide[x - 1].style.display = "none";
                    show[x - 1].style.display = "inline";
                    figures.forEach(figure => {
                        if (figure.classList.contains(variable)) {
                            figure.style.display = "none";
                        }
                    });
                }
            }
        }
    }
}


function fn_show(variable) {

    for (let i = 1; i <= collection.length; i++) {
        if (i == variable) {
            for (let x = 1; x <= show.length; x++) {
                if (x == variable) {
                    hide[x - 1].style.display = "inline";
                    show[x - 1].style.display = "none";
                    figures.forEach(figure => {
                        if (figure.classList.contains(variable)) {
                            figure.style.display = "flex";
                        }
                    });
                }
            }
        }
    }
}

//btn del NAV//

function btnNavFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}