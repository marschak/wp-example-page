jQuery(function ($) {

    var currentFrame = 1;
    var hideName;
    var currentName;
    
    function restartTimer() {
     var timePrompt = setTimeout(function() {
        changeImage();
    
      }, 6000);
    }
    
    function changeImage() {
      
      if (currentFrame == 1) {
        currentName = "backgroundImage1";
        hideName = ["backgroundImage2", "backgroundImage3", "backgroundImage4"];
        currentFrame = 2;
      } else if (currentFrame == 2) {
        currentName = "backgroundImage2";
        hideName = ["backgroundImage1", "backgroundImage3", "backgroundImage4"];
        currentFrame = 3;
      } else if (currentFrame == 3) {
        currentName = "backgroundImage3";
        hideName = ["backgroundImage1", "backgroundImage2", "backgroundImage4"];
        currentFrame = 4;
      } else {
        currentName = "backgroundImage4";
        hideName = ["backgroundImage1", "backgroundImage2", "backgroundImage3" ];
        currentFrame = 1;
      }
      
      for (var i = 0; i < hideName.length; i++) {
        document.getElementById(hideName[i]).className = 'hideslide';   
    }
      document.getElementById(currentName).className = 'showslide';
    
      restartTimer();
    }
    restartTimer();

    $(document).ready(function($) {
        $(".wpcf7").on('wpcf7submit', function(){
            $('.hidden-block').addClass('hidden-block-active');
            $( ".hidden-block-active" ).append( "<p>Your Code:</p><span>SALE15</span>" );
            $( ".text-center-form").html( "A discount coupon has also been emailed to you <br> Go to <a href='product-category/candles/'><span>product page</span></a>" ).addClass('right-text-fade');
            $(".right-text-fade").fadeIn(2000).css('display','flex');
            $(".hidden-block-active").fadeIn(3300).css('display','flex');
            
        });
    }); 

});