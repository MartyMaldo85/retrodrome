$(document).ready(function() {

  $('button.play').on('click', function() {
    $("#emulator-overlay").fadeIn(300);
    $("body").addClass("lock-background");
  });

  $('#close').on('click', function() {
    $("#emulator-overlay").fadeOut(300);
    $("body").removeClass("lock-background");
  });

  $('#main-nav').on('click', function() {
    $("#sub-nav").toggleClass("active");
  });

  $("#page-header").headroom();
  $("#alpha-nav").headroom();


  $('.game-blurb').readmore({
    speed: 100,
    collapsedHeight: 112,
    heightMargin: 112,
    moreLink: '<a href="#">[ read more ]</a>',
    lessLink: '<a href="#">[ read less ]</a>',
    afterToggle: function(trigger, element, expanded) {
      if(! expanded) { // The "Close" link was clicked
        $('html, body').animate( { scrollTop: element.offset().top }, {duration: 100 } );
      }
    }
  });


});

//3d box
var init = function() {
  
  cube = document.getElementById( "cube" );
  cube.frontFace  = document.getElementsByClassName( "front"  );
  cube.backFace   = document.getElementsByClassName( "back"   );
  cube.rightFace  = document.getElementsByClassName( "right"  );
  cube.leftFace   = document.getElementsByClassName( "left"   );
  cube.topFace    = document.getElementsByClassName( "top"    );
  cube.bottomFace = document.getElementsByClassName( "bottom" );
  
  document.getElementById( "showFront"  ).addEventListener( 'click', function() { cube.className = "show-front";  }, false );
  document.getElementById( "showBack"   ).addEventListener( 'click', function() { cube.className = "show-back";   }, false );
  document.getElementById( "showRight"  ).addEventListener( 'click', function() { cube.className = "show-right";  }, false );
  document.getElementById( "showLeft"   ).addEventListener( 'click', function() { cube.className = "show-left";   }, false );
  document.getElementById( "showTop"    ).addEventListener( 'click', function() { cube.className = "show-top";    }, false );
  document.getElementById( "showBottom" ).addEventListener( 'click', function() { cube.className = "show-bottom"; }, false );
}

window.addEventListener( 'DOMContentLoaded', init, false);




//hover rotate 3d box
// document.addEventListener('mousemove', function(e){
//   $(".box-container:hover #cube").attr(
//     "style",
//     "transform:rotateY("+e.pageX/.5+"deg) rotateX("+e.pageY/360+"deg);"
//     )
// });