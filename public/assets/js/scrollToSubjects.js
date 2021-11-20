let left = document.querySelector("#scroll-left")
let right = document.querySelector("#scroll-right")
let divSubjects = document.querySelector('.div-subjects')
let divSubjectsUl = document.querySelector('.div-subjects ul')

function center(){
    if(divSubjects.scrollWidth == divSubjects.clientWidth){
        divSubjectsUl.style.justifyContent = 'center'
    }else{
        divSubjectsUl.style.justifyContent = 'unset'
    }
}
center()

window.onresize = function(){
    center()
    verifyLeft()
    verifyRight()
}

window.onload = function(){
    center()
    verifyLeft()
    verifyRight()
}

function verifyLeft(){
    if(divSubjects.scrollLeft == 0){
        document.querySelector('#scroll-left').style.display = 'none'
        document.querySelector('#all').style.marginLeft = '0'
    }else{
        document.querySelector('#scroll-left').style.display = 'block'
        document.querySelector('#all').style.marginLeft = '30px'
    }
}
function verifyRight(){
    if((divSubjects.scrollLeft + divSubjects.clientWidth) == divSubjects.scrollWidth){
        document.querySelector('#scroll-right').style.display = 'none'
        document.querySelector('#fis').style.marginRight = '0'
    }else{
        document.querySelector('#scroll-right').style.display = 'block'
        document.querySelector('#fis').style.marginRight = '30px'
    }
}
verifyLeft()
verifyRight()

right.addEventListener('click', function(){
    let totScroll = divSubjects.scrollWidth
    let tamScroll = divSubjects.clientWidth
    let atuScroll = divSubjects.scrollLeft

    if(totScroll > ((tamScroll + atuScroll) + 100)){
        divSubjects.scrollTo(atuScroll+100, 0)    
    }else{
        divSubjects.scrollTo(totScroll-tamScroll, 0)    
    }
    verifyLeft()
    verifyRight()
})
left.addEventListener('click', function(){
    let tamScroll = divSubjects.clientWidth
    let atuScroll = divSubjects.scrollLeft
    
    if(0 < ((tamScroll + atuScroll) - 100)){
        divSubjects.scrollTo(atuScroll-100, 0)    
    }else{
        divSubjects.scrollTo(0, 0)    
    }
    verifyLeft()
    verifyRight()
})
divSubjects.addEventListener('scroll', function(){
    divSubjects.addEventListener('touchend', function(){
        verifyLeft()
        verifyRight()
    })
})