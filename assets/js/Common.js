// for showing catagoris in phone
    let NavCaragoris = document.querySelector(".NavCaragoris");
    
    function HideMiniNev(){
        NavCaragoris.style.display = "none";
    }

    function ShowMiniNev(){
        NavCaragoris.style.display = "block";
    }

// Switch Account 
    let ImgiD = document.getElementById("switchAccount");
    let x = true
    ImgiD.addEventListener('click', ()=>{
        let SwitchDiv = document.querySelector(".WtitchDiv");
        if(x){
            SwitchDiv.style.display = "block"
            x = false
        }else{
            SwitchDiv.style.display = "none"
            x = true
        }
    })

// for dropdown menu in phone
    let DropDown = document.querySelector(".DeopDownMenuMobiel");
    DropDown.style.display = "none";
    let isTrue = true;

    function showDropdown(){
        if(isTrue){
            DropDown.style.display = "block";
            isTrue = false;
        }else{
            DropDown.style.display = "none";
            isTrue = true;
        }

    }

    // hdie and show ctagoris in scrole
    let CatagorisIcinHide111 = document.querySelector(".CatagorisIcinHide");
    CatagorisIcinHide111.addEventListener("click", function() {
        document.getElementById("NavClickAction").style.display = "block";
        document.getElementById("CatagorisIcinHide").style.display = "none";
        document.getElementById("CatagorisIcinHideCros").style.display = "block";
    });

    let CatagorisIcinHideCros2222 = document.querySelector(".CatagorisIcinHideCros");
    CatagorisIcinHideCros2222.addEventListener("click", function() {
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
    function loginSing(){
        let LoginDiv = document.querySelector(".LoginDiv");
        let SingDiv = document.querySelector(".SingDiv");
        LoginDiv.style.display = "none";
        SingDiv.style.display = "block";
    }

    // singin
    let LoginBtn = document.querySelector(".LoginBtn");
    function loginSingup(){
        let LoginDiv = document.querySelector(".LoginDiv");
        let SingDiv = document.querySelector(".SingDiv");
        let ForgotBtn = document.querySelector(".ForgotPassowrdDiv");
        LoginDiv.style.display = "block";
        SingDiv.style.display = "none";
        ForgotBtn.style.display = "none";
    }
    
    // Forgot
    let ForgotBtn = document.querySelector(".ForGotBtn");
    function prgothide(){
        let LoginDiv = document.querySelector(".LoginDiv");
        let ForgotBtn = document.querySelector(".ForgotPassowrdDiv");
        LoginDiv.style.display = "block";
        ForgotBtn.style.display = "none";
    }
    
    // Forgot
    let ForgotShowcli = document.querySelector(".ForgotShowcli");
    function ForgotShow(){
        let LoginDiv = document.querySelector(".LoginDiv");
        let ForgotBtn = document.querySelector(".ForgotPassowrdDiv");
        LoginDiv.style.display = "none";
        ForgotBtn.style.display = "block";
    }

    // Address addd show  AddAdressBtnO
    function FunAddAdressBtnO(){
        let addressInfoFrom = document.querySelector(".addressInfoFrom");
        let collectedAddressA = document.querySelector(".collectedAddress");
        collectedAddressA.style.display = "none";
        addressInfoFrom.style.display = "block";
        console.log("helow!!!!!!!!!")
    }
    
    function FunaddressInfoFrom(){
        let addressInfoFrom = document.querySelector(".addressInfoFrom");
        let collectedAddressA = document.querySelector(".collectedAddress");
        collectedAddressA.style.display = "block";
        addressInfoFrom.style.display = "none";
        console.log("helow!!!!!!!!!")
    }

