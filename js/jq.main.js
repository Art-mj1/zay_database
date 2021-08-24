$(function () {
  //header stick to top and change style when scrolling down
  const headerStick = function () {
    const hdTop = $("header").offset().top;

    $(window).scroll(function () {
      const scroll = $(window).scrollTop();
      //console.log(scroll);
      if (scroll >= hdTop) {
        $("header").css({
          position: "fixed",
          top: 0,
          width: "100%",
        });
        $("header").addClass("stick");
      } else {
        $("header").css({ position: "relative" });
        $("header").removeClass("stick");
      }
    });
  };

  headerStick();

  //slide down and up when mobile menu click
  const barsClick = function () {
    $(".mobile_menu").click(function () {
      $(this).toggleClass("on");
      if ($(this).hasClass("on")) {
        $(".menu_items").slideDown(250);
      } else {
        $(".menu_items").slideUp(250);
      }
    });
  };
  barsClick();

  //index page description text cut
  const cuttingText = function (txtBox, txtCut, txtLen) {
    // console.log($(".featured_item").length);
    for (let i = 0; i < $(txtBox).length; i++) {
      const textLength = $(txtBox).eq(i).find(txtCut).text();
      // console.log(textLength);

      $(txtBox)
        .eq(i)
        .find(txtCut)
        .text(textLength.substr(0, txtLen) + "...");
    }
  };
  cuttingText(".featured_item", "p.desc", 60);
  cuttingText(".search_item", ".search_txt p", 120);

  let len = 0;
  $(window).resize(function () {
    const wWidth = $(window).width();
    if (wWidth < 850) {
      len = 50;
    } else {
      len = 120;
    }
    cuttingText(".search_item", ".search_txt p", len);
  });

  //index page items load more
  const loadMore = function () {
    $(".featured_item").hide();
    $(".featured_item").slice(0, 3).show();

    $(".load_more button").click(function () {
      $(".featured_item:hidden").slice(0, 3).show();
      if ($(".featured_item:hidden").length == 0) {
        $(".load_more").html(`<input type="hidden">`);
      }
    });
  };

  loadMore();

  const imgHeightFit = function () {
    const featuredImgWidth = $(".featured_img").outerWidth();
    $(".featured_img").outerHeight(featuredImgWidth);

    $(window).resize(function () {
      const featuredImgWidth = $(".featured_img").outerWidth();
      $(".featured_img").outerHeight(featuredImgWidth);
    });
  };

  imgHeightFit();

  const detailTabs = function () {
    $(".detail_tab_btns span").click(function () {
      const index = $(this).index();

      $(".detail_img>img").hide();
      $(".detail_img>img").eq(index).show();
    });

    $(".detail_tab_btns span").eq(0).trigger("click");
  };

  detailTabs();

  //디테일 이미지 높이 맞춤
  function detailFit() {
    const imgHeight = $(".detail_img_item").outerHeight();
    const btnsHeight = $(".detail_tab_btns").outerHeight();

    $(".detail_img").height(imgHeight + btnsHeight);
  }

  $(window).resize(function () {
    setTimeout(function () {
      //리사이즈, 스크롤 이벤트 시 쓰로쿨링
      detailFit();
    }, 150);
  });

  detailFit();
  //  $("#price").click(function(){
  //    $(this).toggleClass('on');
  //    if($(this).hasClass('on')){
  //      $(this).html('높은가격순 <i class="fa fa-chevron-up"></i>')
  //     //  $(this).find("i").attr('class', 'fa fa-chevron-up');
  //     location.href='/zay/pages/menu_page/shop.php?key=up_price';
  //    } else {
  //     $(this).html('낮은가격순 <i class="fa fa-chevron-down"></i>')
  //     // $(this).find("i").attr('class', 'fa fa-chevron-down');
  //     location.href='/zay/pages/menu_page/shop.php?key=down_price';
  //    }
  //  });
  const admin_tabs = function () {
    $(".admin_tabs button").click(function () {
      const tab_idx = $(this).index();
      //alert(tab_idx);
      $(".admin_panels>div").hide();
      $(".admin_panels>div").eq(tab_idx).show();
    });
    $(".admin_tabs button").eq(1).trigger("click"); //회원 관리를 먼저 하고 싶을때 1로 함.
  };
  admin_tabs();
});
