function changeViewRegister() {
    var signupbox = document.getElementById("signupbox");
    signupbox.classList.toggle("d-none");
    
}

function changeView(){
    var signinbox = document.getElementById("signinbox");
    var signupbox = document.getElementById("signupbox");

    signinbox.classList.toggle("d-none");
    signupbox.classList.toggle("d-none");
}

function changeViewSignUpDone() {
    var signupbox = document.getElementById("signupbox");
    signupbox.classList.toggle("d-none");
    
}

function changeViewSignInDone() {
    var signinbox = document.getElementById("signinbox");
    signinbox.classList.toggle("d-none");
    
}

var home = document.getElementById("home");
var product = document.getElementById("product");
var sell = document.getElementById("sell");
var about = document.getElementById("about");

function homePage(){
    home.classList.add("active");
    product.classList.remove("active");
    sell.classList.remove("active");
    about.classList.remove("active");
}

function productPage(){
    product.classList.add("active");
    home.classList.remove("active");
    sell.classList.remove("active");
    about.classList.remove("active");
}

function sellPage(){
    sell.classList.add("active");
    product.classList.remove("active");
    home.classList.remove("active");
    about.classList.remove("active");
}

function aboutPage(){
    about.classList.add("active");
    product.classList.remove("active");
    sell.classList.remove("active");
    home.classList.remove("active");
}

function menuChange(){
    var menuchange = document.getElementById("offcanvasDark1");
    menuchange.classList.toggle("d-none");
}