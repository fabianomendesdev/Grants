(function () {
    const buttonToggle = document.querySelector(".button-toggle")
    const main = document.querySelector(".main")
    const menuToggle = document.querySelector(".nav-toggle")
    buttonToggle.onclick = function (e) {
        menuToggle.classList.toggle('toggle')
    }

    main.onclick = function (e) {
        if(!menuToggle.classList.contains("toggle")){
            menuToggle.classList.toggle('toggle')
        }
    }        
})()