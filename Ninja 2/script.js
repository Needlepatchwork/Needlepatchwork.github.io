var startninja = document.getElementById("startninja");
idleImageNumber = 0;
idleAnimationNumber = 0;

function idleAnimaton() {

    idleImageNumber = idleImageNumber + 1;

    if (idleImageNumber == 11 ) {
        idleImageNumber = 1;
    }


    startninja.src = "resources/Idle/png/Idle (" + idleImageNumber + ").png";

}

function idleAnimationStart() {
    idleAnimationNumber = setInterval(idleAnimaton,200);

}


function gamestartenter(){
    var menu = document.getElementById("gamemenu")
    var start = document.getElementById("gamestart")
    menu.style.display = "none";
    start.style.display = "contents"
}


var ninja = document.getElementById("ninja");
idleImageNumber = 0;
idleAnimationNumber = 0;

function idleAnimaton() {

    idleImageNumber = idleImageNumber + 1;

    if (idleImageNumber == 11 ) {
        idleImageNumber = 1;
    }


    ninja.src = "resources/Idle/png/Idle (" + idleImageNumber + ").png";

}

function idleAnimationStart() {
    idleAnimationNumber = setInterval(idleAnimaton,200);

}