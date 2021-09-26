let divFormControl = document.querySelector(".div-search-form")
let inputFormControl = document.querySelector(".input-search")
inputFormControl.addEventListener('mouseenter', enter)
inputFormControl.addEventListener('mouseout', out)

function enter(){
    inputFormControl.addEventListener('click', activate)
    document.body.removeEventListener('click', disable)
}

function out(){
    document.body.addEventListener('click', disable)
}

function activate(){
    divFormControl.classList.add("focus")
}

function disable(){
    divFormControl.classList.remove("focus")
}