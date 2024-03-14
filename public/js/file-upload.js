function uploadFile(idx){
    imgInput[idx].addEventListener("change",function(){
        if(imgInput[idx].value!=null){
            fileSpan[idx].innerText = "選択済";
            iconHidden[idx].classList.remove("hidden");
            iconDefault[idx].classList.add("hidden");
        }
    })
}

function resetInputValue(idx){
    closeBtn[idx].addEventListener("click",function() {
        imgInput[idx].value=null;
        fileSpan[idx].innerText = "ファイル選択"
        iconHidden[idx].classList.add("hidden");
        iconDefault[idx].classList.remove("hidden");
    })
}

function resetTwoInputValue(idx){
    closeBtn[idx].addEventListener("click",function() {
        imgInput[idx*2].value=null;
        imgInput[(idx*2)+1].value=null;

        fileSpan[idx*2].innerText = "ファイル選択"
        fileSpan[(idx*2)+1].innerText = "ファイル選択"

        iconHidden[idx*2].classList.add("hidden");
        iconHidden[(idx*2)+1].classList.add("hidden");

        iconDefault[idx*2].classList.remove("hidden");
        iconDefault[(idx*2)+1].classList.remove("hidden");

    })
}
