import 'lazysizes';
// import a plugin
// import 'lazysizes/plugins/parent-fit/ls.parent-fit';

if(localStorage.getItem('language') === 'nl'){
    document.getElementById("dutchText").style.display = "flex"
    document.getElementById("englishText").style.display = "none"
    document.getElementById("headEnglish").style.display = "none"
    document.getElementById("headDutch").style.display = "flex"
}

onclick = (e) => {
    console.log(e.target)
    if (document.getElementById("cross") === e.target) {
        document.getElementById("overlay").style.display = "none"
    }

    if (document.getElementById("bars").id === e.target.id) {
        document.getElementById("overlay").style.display = "flex"
        console.log("buh")
    }

    if (document.getElementById("crossNl") === e.target) {
        document.getElementById("overlayNl").style.display = "none"
    }

    if (document.getElementById("barsNl").id === e.target.id) {
        document.getElementById("overlayNl").style.display = "flex"
    }

    if (document.getElementById("transDutch") === e.target) {
        localStorage.setItem('language', 'nl')
        document.getElementById("dutchText").style.display = "flex"
        document.getElementById("englishText").style.display = "none"
        document.getElementById("headEnglish").style.display = "none"
        document.getElementById("headDutch").style.display = "flex"
    }

    if (document.getElementById("transEnglish") === e.target) {
        localStorage.setItem('language', 'en')
        document.getElementById("englishText").style.display = "flex"
        document.getElementById("dutchText").style.display = "none"
        document.getElementById("headDutch").style.display = "none"
        document.getElementById("headEnglish").style.display = "flex"
    }
}

