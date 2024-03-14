function dashTrToggle(idx){
    editTr[idx].classList.add("eventFlag");

    editBtn[idx].addEventListener("click",function (){
        editTr[idx].classList.remove("eventFlag");
        originalTr[idx].classList.add("eventFlag");
    })

    closeBtn[idx].addEventListener("click",function (){
        originalTr[idx].classList.remove("eventFlag");
        editTr[idx].classList.add("eventFlag");
    })
}

