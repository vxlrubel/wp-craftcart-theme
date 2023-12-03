// for showing catagoris in phone
let NavCaragoris = document.querySelector(".NavCaragoris");

function HideMiniNev() {
    NavCaragoris.style.display = "none";
}

function ShowMiniNev() {
    NavCaragoris.style.display = "block";
}

// Switch Account 
let ImgiD = document.getElementById("switchAccount");
let x = true
ImgiD.addEventListener('click', () => {
    let SwitchDiv = document.querySelector(".WtitchDiv");
    if (x) {
        SwitchDiv.style.display = "block"
        x = false
    } else {
        SwitchDiv.style.display = "none"
        x = true
    }
})

// for dropdown menu in phone
let DropDown = document.querySelector(".DeopDownMenuMobiel");
DropDown.style.display = "none";
let isTrue = true;

function showDropdown() {
    if (isTrue) {
        DropDown.style.display = "block";
        isTrue = false;
    } else {
        DropDown.style.display = "none";
        isTrue = true;
    }

}

// hdie and show ctagoris in scrole
let CatagorisIcinHide111 = document.querySelector(".CatagorisIcinHide");
CatagorisIcinHide111.addEventListener("click", function () {
    document.getElementById("NavClickAction").style.display = "block";
    document.getElementById("CatagorisIcinHide").style.display = "none";
    document.getElementById("CatagorisIcinHideCros").style.display = "block";
});

let CatagorisIcinHideCros2222 = document.querySelector(".CatagorisIcinHideCros");
CatagorisIcinHideCros2222.addEventListener("click", function () {
    document.getElementById("NavClickAction").style.display = "none";
    document.getElementById("CatagorisIcinHide").style.display = "block";
    document.getElementById("CatagorisIcinHideCros").style.display = "none";
});


function ProceedToCheckoutFuns() {
    document.getElementById("cartTab").style.display = "none";
    document.getElementById("checkOutTab").style.display = "block";
}

function ProceedToCheckout2Funs() {
    document.getElementById("checkOutTab").style.display = "none";
    document.getElementById("orderCompletedTab").style.display = "block";
}


// login page hide show
let registBtn = document.getElementById("RegistBtnLogin");
function loginSing() {
    let LoginDiv = document.querySelector(".LoginDiv");
    let SingDiv = document.querySelector(".SingDiv");
    LoginDiv.style.display = "none";
    SingDiv.style.display = "block";
}

// singin
let LoginBtn = document.querySelector(".LoginBtn");
function loginSingup() {
    let LoginDiv = document.querySelector(".LoginDiv");
    let SingDiv = document.querySelector(".SingDiv");
    let ForgotBtn = document.querySelector(".ForgotPassowrdDiv");
    LoginDiv.style.display = "block";
    SingDiv.style.display = "none";
    ForgotBtn.style.display = "none";
}

// Forgot
let ForgotBtn = document.querySelector(".ForGotBtn");
function prgothide() {
    let LoginDiv = document.querySelector(".LoginDiv");
    let ForgotBtn = document.querySelector(".ForgotPassowrdDiv");
    LoginDiv.style.display = "block";
    ForgotBtn.style.display = "none";
}

// Forgot
let ForgotShowcli = document.querySelector(".ForgotShowcli");
function ForgotShow() {
    let LoginDiv = document.querySelector(".LoginDiv");
    let ForgotBtn = document.querySelector(".ForgotPassowrdDiv");
    LoginDiv.style.display = "none";
    ForgotBtn.style.display = "block";
}

// Address addd show  AddAdressBtnO
function FunAddAdressBtnO() {
    let addressInfoFrom = document.querySelector(".addressInfoFrom");
    let collectedAddressA = document.querySelector(".collectedAddress");
    collectedAddressA.style.display = "none";
    addressInfoFrom.style.display = "block";
    console.log("helow!!!!!!!!!")
}

function FunaddressInfoFrom() {
    let addressInfoFrom = document.querySelector(".addressInfoFrom");
    let collectedAddressA = document.querySelector(".collectedAddress");
    collectedAddressA.style.display = "block";
    addressInfoFrom.style.display = "none";
    console.log("helow!!!!!!!!!")
}

// Rubel Mahmud --------------------

var holder = document.querySelector('.image-holder');
var image = document.getElementById('image');
var previewHolder = document.querySelector('.image-preview');
var imagePreview = document.getElementById('image-preview');

imagePreview.src = image.src;

holder.addEventListener('mousemove', () => {
    var magGlass = document.querySelector('.magnifiying-glass');
    let left = event.clientX - holder.offsetLeft;
    let top = event.clientY - holder.offsetTop;
    let height = image.clientHeight;
    let width = image.clientWidth;
    let previewWidth = imagePreview.clientWidth;
    let scaleValue = 2500 / previewWidth;
    imagePreview.style.transform = 'scale(' + scaleValue + ')';

    let magTop = top - 50;
    let magLeft = left - 50;

    if (magTop <= 0) {
        magTop = 0;
    }
    if (magLeft <= 0) {
        magLeft = 0;
    }
    if (magLeft >= (width - 100)) {
        magLeft = width - 100;
    }
    if (magTop >= (height - 100)) {
        magTop = height - 100;
    }
    magGlass.style.top = magTop + 'px';
    magGlass.style.left = magLeft + 'px';
    let topPercentage = top / height * 100;
    let leftPercentage = left / width * 100;
    imagePreview.style.top = - (5 * magTop) + "px";
    imagePreview.style.left = - (5 * magLeft) + "px";
});


holder.addEventListener('mouseenter', () => {
    previewHolder.classList.remove('d-none');
    let magGlass = document.createElement("DIV");
    magGlass.className = 'magnifiying-glass';
    holder.appendChild(magGlass);
});


holder.addEventListener('mouseleave', () => {
    var magGlass = holder.querySelector('.magnifiying-glass');
    previewHolder.classList.add('d-none');
    magGlass.parentNode.removeChild(magGlass);
    imagePreview.style.top = 0;
    imagePreview.style.left = 0;
});

