/*ロード画面*/
window.onload = ()=>{
  const loader = document.getElementById('loader');
  loader.classList.add('loaded');
}

$(function(){
  /*jquery.inview.min.jsファイルをこのファイルと同階層に置く*/
  /*各セクションのフェードイン*/
  $('.inview-show').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
    if(isInView){
      $(this).stop().addClass('show');
    }
  });

  /*セクションタイトルのアニメーション*/
  $('.inview-slide-l').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
    if(isInView){
      $(this).stop().addClass('slide-left');
    }
  });
  $('.inview-slide-r').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
    if(isInView){
      $(this).stop().addClass('slide-right');
    }
  });


  /*Publicationページ アコーディオンメニュー野クリックイベント*/
  $("#ac-menu .label").on("click", function() {
    $(this).next().slideToggle();
    $(this).toggleClass("open");
  });


  /*トップに戻るボタン　800px以上スクロールで出現、0.5sかけて先頭へ戻る*/
  let pagetop = $('#to-top');
  pagetop.hide();

  $(window).scroll(function() {
    if ($(this).scrollTop() > 800) {
      pagetop.fadeIn();
    } else {
      pagetop.fadeOut();
    }
  });
  pagetop.click(function() {
    $('body,html').animate({scrollTop: 0}, 500);
    return false;
  });

  /*indexページ -about-の背景表示設定*/
  $(window).scroll(function() {
    let scroll = $(window).scrollTop();
    let about_position = $('#about').offset().top - $(window).height();
    let plants_position = $('#plants').offset().top - $(window).height();

      if(scroll > about_position + 200){   /*aboutのトップ（から200px下)が表示されてから、plantのトップが表示されるまでの間背景を表示*/
        if(scroll < plants_position){
          $('.fadebg').fadeIn(500);
        } else {
          $('.fadebg').fadeOut(500);
        }
      } else {
        $('.fadebg').fadeOut(500);
      }
  });

  /*ハンバーガーメニュー周りのクリックイベント（openクラスの付与）*/
  $('.hamburger').on('click', function() {
    if ($('#header').hasClass('open')) {
      $('#header').removeClass('open');
    } else {
      $('#header').addClass('open');
    }
  });
  
  $('#mask').on('click', function() {
    $('#header').removeClass('open');
  });
  
  $('#navi a').on('click', function() {
    $('#header').removeClass('open');
  });


  /*slick関連ファイルをjs/cssフォルダに置く*/
  /*カルーセルスライダーの詳細設定*/ 
  $('#slider').slick({
    autoplay: true,   
    autoplaySpeed: 4000,
    arrows: false,
    variableWidth: true,
    slidesToShow: 1,
    centerMode: true,
    centerPadding: '18%',    
    pauseOnHover: false
  });
});



  
