// For scorole efect
window.addEventListener('scroll', () => {
    let TopNev = document.querySelector('.TopNev');
    let MidNev = document.querySelector('.MidNev');
    let BottomNev = document.querySelector('.BottomNev');

    if (window.scrollY > 100) {
        TopNev.style.display = 'none';
        MidNev.style.display = 'none';
        BottomNev.style.background = "#dae7f7";
    } else {
        TopNev.style.display = 'block';
        MidNev.style.display = 'block';
        BottomNev.style.background = "white";
    }
})

// order page
let ProceedToCheckout1 = document.getElementById("ProceedToCheckout");
ProceedToCheckout1.addEventListener("click", function() {
    document.getElementById("cartTab").style.display = "none";
    document.getElementById("checkOutTab").style.display = "block";
});

// order page
let PalceOrder1 = document.querySelector(".PalceOrder");
PalceOrder1.addEventListener("click", function() {
    document.getElementById("checkOutTab").style.display = "none";
    document.getElementById("orderCompletedTab").style.display = "block";
});