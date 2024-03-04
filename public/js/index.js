// ドロップダウン機能（よくある質問）
let dropboxTitles = document.getElementsByClassName("questionTitle");

for(let i=0; i<dropboxTitles.length;i++){
    dropboxTitles[i].addEventListener("click",function (){
        let icons = document.getElementsByClassName("questionIcon");

        if(icons[i].classList.contains("fa-chevron-down")){
            // アイコン変更
            icons[i].classList.remove("fa-chevron-down");
            icons[i].classList.add("fa-chevron-up");

            // 非表示取消
            let dropboxText = document.getElementsByClassName("questionDrop");
            dropboxText[i].classList.remove("hidden");

            // 高さ変更
            dropboxTitles[i].parentNode.classList.remove("h-100");

            // 位置調整
            dropboxTitles[i].parentNode.style.justifyContent = "start";

            // 余白
            dropboxTitles[i].parentNode.style.paddingTop = 2+"%";
            dropboxTitles[i].parentNode.style.paddingBottom = 4+"%";

        }else{
            // アイコン変更
            icons[i].classList.remove("fa-chevron-up");
            icons[i].classList.add("fa-chevron-down");

            // 非表示へ
            let dropboxText = document.getElementsByClassName("questionDrop");
            dropboxText[i].classList.add("hidden");

            // 高さ変更
            dropboxTitles[i].parentNode.style.height =null;
            dropboxTitles[i].parentNode.classList.add("h-100");

            // 余白削除
            dropboxTitles[i].parentNode.style.paddingTop = 0;
            dropboxTitles[i].parentNode.style.paddingBottom = 0;

            // 位置調整
            dropboxTitles[i].parentNode.style.justifyContent = "center";
        }
    })
}

// ====================================================================================

// ハンバーガーメニュー
let hamburgerBtn = document.getElementById("hamburger-btn");
let hamburgerNav = document.getElementById("navbar-hamburger");
let hamburgerIcon = document.getElementById("hamburgerIcon");
let navLinks = document.getElementsByClassName('navLink');

hamburgerBtn.addEventListener("click",function (){
    if(hamburgerIcon.classList.contains("fa-bars")){
        hamburgerIcon.classList.remove('fa-bars');
        hamburgerIcon.classList.add('fa-xmark');
        hamburgerNav.classList.remove('hideFlag');
    }else{
        hamburgerIcon.classList.remove('fa-xmark');
        hamburgerIcon.classList.add('fa-bars');
        hamburgerNav.classList.add('hideFlag');
    }
})

for(let i=0; i<navLinks.length;i++){
    navLinks[i].addEventListener('click',function() {
        hamburgerIcon.classList.remove('fa-xmark');
        hamburgerIcon.classList.add('fa-bars');
        hamburgerNav.classList.add('hideFlag');
    });
}

// =====================================================================

