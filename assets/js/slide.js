jQuery(function () {
  // 「#sidebar-button--open」のclickイベント→「#sidebar」を開く
  jQuery("#sidebar-button--open").on("click", function () {
    jQuery("#sidebar").addClass("is-open");
    jQuery(".p-sidebar__back").addClass("is-open");
    jQuery("body").addClass("is-open");
  });

  // 「#js_close_button」のclickイベント→「#sidebar」を閉じる
  jQuery("#sidebar-button--close").on("click", function () {
    jQuery("#sidebar").removeClass("is-open");
    jQuery(".p-sidebar__back").removeClass("is-open");
    jQuery("body").removeClass("is-open");
  });

  // 画面サイズがPC以上になったらサイドバーを開いた状態でもPC用のデフォルト画面に戻す;
  var $win = jQuery(window);

  $win.on("load resize", function () {
    var windowWidth = window.innerWidth;

    if (windowWidth >= 961) {
      // PCの処理
      jQuery("#sidebar").removeClass("is-open");
      jQuery(".p-sidebar__back").removeClass("is-open");
      jQuery("body").removeClass("is-open");
    }
  });
});
