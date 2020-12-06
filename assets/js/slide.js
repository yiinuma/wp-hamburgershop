$(function () {
  // 「#sidebar-button--open」のclickイベント→「#sidebar」を開く
  $("#sidebar-button--open").on("click", function () {
    $("#sidebar").addClass("is-open");
    $(".p-sidebar__back").addClass("is-open");
    $("body").addClass("is-open");
  });

  // 「#js_close_button」のclickイベント→「#sidebar」を閉じる
  $("#sidebar-button--close").on("click", function () {
    $("#sidebar").removeClass("is-open");
    $(".p-sidebar__back").removeClass("is-open");
    $("body").removeClass("is-open");
  });

  // 画面サイズがPC以上になったらサイドバーを開いた状態でもPC用のデフォルト画面に戻す
  var $win = $(window);

  $win.on("load resize", function () {
    var windowWidth = window.innerWidth;

    if (windowWidth >= 961) {
      // PCの処理
      $("#sidebar").removeClass("is-open");
      $(".p-sidebar__back").removeClass("is-open");
      $("body").removeClass("is-open");
    }
  });
});
