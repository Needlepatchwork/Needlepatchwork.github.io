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
var about = document.getElementById("about");
var advsearch = document.getElementById("advsearch");


var aboutsection = document.getElementById("aboutsection");
var advsearchsection = document.getElementById("advsearchsection");
var homesection = document.getElementById("homesection");
var productsection = document.getElementById("productsection");


function homePage(){
    home.classList.add("active");
    product.classList.remove("active");
    about.classList.remove("active");
    advsearch.classList.remove("active");

    homesection.classList.remove("d-none");
    aboutsection.classList.add("d-none");
    advsearchsection.classList.add("d-none");
    productsection.classList.add("d-none");
}

function productPage(){
    product.classList.add("active");
    home.classList.remove("active");
    about.classList.remove("active");
    advsearch.classList.remove("active");

    productsection.classList.remove("d-none");
    aboutsection.classList.add("d-none");
    advsearchsection.classList.add("d-none");
    homesection.classList.add("d-none");
}

function aboutPage(){
    about.classList.add("active");
    product.classList.remove("active");
    home.classList.remove("active");
    advsearch.classList.remove("active");

    aboutsection.classList.remove("d-none");
    advsearchsection.classList.add("d-none");
    homesection.classList.add("d-none");
    productsection.classList.add("d-none");
}

function advsearchPage(){
    advsearch.classList.add("active");
    product.classList.remove("active");
    home.classList.remove("active");
    about.classList.remove("active");

    advsearchsection.classList.remove("d-none");
    aboutsection.classList.add("d-none");
    homesection.classList.add("d-none");
    productsection.classList.add("d-none");
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
var bodydiv = document.getElementById("bodydiv");

function adminsigninbtn(){

    adminsignin.classList.add("d-none");
    adminpanel.classList.remove("d-none");
    bodydiv.style.backgroundColor = "white";
}

var manageproduct = document.getElementById("manageproduct");
var overview = document.getElementById("overview");
var addproduct = document.getElementById("addproduct");

function adOverview(){
    overview.classList.remove("d-none");
    manageproduct.classList.add("d-none");
    addproduct.classList.add("d-none")
}

function adManageProduct(){
    manageproduct.classList.remove("d-none");
    overview.classList.add("d-none");
    addproduct.classList.add("d-none")
}

function adAddProduct(){
    addproduct.classList.remove("d-none")
    manageproduct.classList.add("d-none");
    overview.classList.add("d-none");
}

function adAddProductBack(){
    addproduct.classList.add("d-none")
    manageproduct.classList.add("d-none");
    overview.classList.remove("d-none");
}

function adManageProductBack(){
    manageproduct.classList.add("d-none");
    overview.classList.remove("d-none");
    addproduct.classList.add("d-none")
}



function logout(){
    location.reload();
}


var manageproductview = document.getElementById("manageproductview");
var addproductview = document.getElementById("addproductview");

function adminProductView(){
    manageproductview.classList.toggle("d-none");
    addproductview.classList.toggle("d-none");
}

var catergorydiv = document.getElementById("catergorydiv");
var brandsdiv = document.getElementById("brandsdiv");
var newarrivalsdiv = document.getElementById("newarrivalsdiv");
var populardiv = document.getElementById("populardiv");
var toprateddiv = document.getElementById("toprateddiv");

var  menu1 = document.getElementById("menu1");
var  menu2 = document.getElementById("menu2");
var  menu3 = document.getElementById("menu3");
var  menu4 = document.getElementById("menu4");
var  menu5 = document.getElementById("menu5");

function catergoryDropdown(){
    catergorydiv.classList.toggle("d-none");
    menu1.classList.toggle("menufontcolor");
}

function brandDropdown(){
    brandsdiv.classList.toggle("d-none");
    menu2.classList.toggle("menufontcolor");
}

function newarrivalsDropdown(){
    newarrivalsdiv.classList.toggle("d-none");
    menu3.classList.toggle("menufontcolor");
}

function popularDropdown(){
    populardiv.classList.toggle("d-none");
    menu4.classList.toggle("menufontcolor");
}

function topratedDropdown(){
    toprateddiv.classList.toggle("d-none");
    menu5.classList.toggle("menufontcolor");
}

var singlepage = document.getElementById("singlepage");
var productpageproductdiv = document.getElementById("productpageproductdiv");

var footer = document.getElementById("footer");

function singlePageView(){
    singlepage.classList.remove("d-none");
    productpageproductdiv.classList.add("d-none");
    footer.classList.add("d-none");
}

function singlePageViewBack(){
    singlepage.classList.add("d-none");
    productpageproductdiv.classList.remove("d-none");
    footer.classList.remove("d-none");
}

var checkout = document.getElementById("checkout");

function checkoutPay(){
    checkout.classList.remove("d-none");
    singlepage.classList.add("d-none");
    productsection.classList.add("d-none");
}

function placeOrder(){
    alert("Order Successfully Placed!");
    location.reload();
}

function saveProduct(){
    alert("Product Saved Successfully");
    adAddProductBack();
}

var mobilecatorgery = document.getElementById("mobilecatorgery");
var tabletcatorgery = document.getElementById("tabletcatorgery");
var laptopcatorgery = document.getElementById("laptopcatorgery");

var mobiletab = document.getElementById("mobiletab");
var tablettab = document.getElementById("tablettab");
var laptoptab = document.getElementById("laptoptab");


function mobilecatorgerychange(){
    mobilecatorgery.classList.remove("d-none");
    tabletcatorgery.classList.add("d-none");
    laptopcatorgery.classList.add("d-none");

    mobiletab.classList.add("catergorytypeslected");
    tablettab.classList.remove("catergorytypeslected");
    laptoptab.classList.remove("catergorytypeslected");
}

function tabletcatorgerychange(){
    mobilecatorgery.classList.add("d-none");
    tabletcatorgery.classList.remove("d-none");
    laptopcatorgery.classList.add("d-none");

    mobiletab.classList.remove("catergorytypeslected");
    tablettab.classList.add("catergorytypeslected");
    laptoptab.classList.remove("catergorytypeslected");
}

function laptopcatorgerychange(){
    mobilecatorgery.classList.add("d-none");
    tabletcatorgery.classList.add("d-none");
    laptopcatorgery.classList.remove("d-none");

    mobiletab.classList.remove("catergorytypeslected");
    tablettab.classList.remove("catergorytypeslected");
    laptoptab.classList.add("catergorytypeslected");
}

