function changeViewRegister() {
    var signupbox = document.getElementById("signupbox");
    signupbox.classList.toggle("d-none");
    aboutsection.classList.add("d-none");
    advsearchsection.classList.add("d-none");
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
var advsearch = document.getElementById("advsearch");


var aboutsection = document.getElementById("aboutsection");
var advsearchsection = document.getElementById("advsearchsection");
var homesection = document.getElementById("homesection");


function homePage(){
    home.classList.add("active");
    product.classList.remove("active");
    sell.classList.remove("active");
    about.classList.remove("active");
    advsearch.classList.remove("active");

    aboutsection.classList.add("d-none");
    advsearchsection.classList.add("d-none");
}

function productPage(){
    product.classList.add("active");
    home.classList.remove("active");
    sell.classList.remove("active");
    about.classList.remove("active");
    advsearch.classList.remove("active");

    aboutsection.classList.add("d-none");
    advsearchsection.classList.add("d-none");
    homesection.classList.add("d-none");
}

function sellPage(){
    sell.classList.add("active");
    product.classList.remove("active");
    home.classList.remove("active");
    about.classList.remove("active");
    advsearch.classList.remove("active");

    aboutsection.classList.add("d-none");
    advsearchsection.classList.add("d-none");
    homesection.classList.add("d-none");
}

function aboutPage(){
    about.classList.add("active");
    product.classList.remove("active");
    sell.classList.remove("active");
    home.classList.remove("active");
    advsearch.classList.remove("active");

    aboutsection.classList.remove("d-none");
    advsearchsection.classList.add("d-none");
    homesection.classList.add("d-none");
}

function advsearchPage(){
    advsearch.classList.add("active");
    product.classList.remove("active");
    sell.classList.remove("active");
    home.classList.remove("active");
    about.classList.remove("active");

    advsearchsection.classList.remove("d-none");
    aboutsection.classList.add("d-none");
    homesection.classList.add("d-none");
}

function menuChange(){
    var menuchange = document.getElementById("offcanvasDark1");
    menuchange.classList.toggle("d-none");
}


/*
var adoverview = document.getElementById("adoverview")
var adproduct = document.getElementById("adproduct")
var adorders = document.getElementById("adorders")
var adcustomers = document.getElementById("adcustomers")
var adreviews = document.getElementById("adreviews")
var adfinance = document.getElementById("adfinance")
var adsetting = document.getElementById("adsetting")
var adhelp = document.getElementById("adhelp")
var adcontactus = document.getElementById("adcontactus")
var adlogout = document.getElementById("adlogout")
*/

var adminbanner1 = document.getElementById("adminbanner1")
var adminbanner2 = document.getElementById("adminbanner2")

function changeBannerAdmin(){
    adminbanner1.classList.toggle("active");
    adminbanner2.classList.toggle("active");
}

function changeBannerAdminStart(){
    setInterval(changeBannerAdmin,5000);
}


var adminsignin = document.getElementById("adminsignin");
var adminpanel = document.getElementById("adminpanel");

function adminsigninbtn(){

    adminsignin.classList.add("d-none");
    adminpanel.classList.remove("d-none");
}

var manageproduct = document.getElementById("manageproduct");
var overview = document.getElementById("overview");

function adoverview(){
    overview.classList.remove("d-none");
    manageproduct.classList.add("d-none");
}

function admanageproduct(){
    manageproduct.classList.remove("d-none");
    overview.classList.add("d-none");
}