
/* ----- static values ----- */

/* ----- define ----- */

/* ----- 初期化処理 ----- */
$(function() {
alert("");
    initActiveLink();
});

/* ----- リンク制御 ----- */
function initActiveLink() {
    // メニューリンクがクリックされた場合
    $(".nav-sidebar li").click(function(){

        // 現在アクティブとなっているメニューリンクを非アクティブにする
        $(".nav-sidebar li").removeClass("active");

        // クリックされたメニューリンクをアクティブにする
        $(this).addClass("active");
    });

} ;