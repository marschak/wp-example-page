// custom script

document.addEventListener("DOMContentLoaded", function() {

    checkLazy();

    async function checkLazy() {

        var lazyImages = [].slice.call(document.querySelectorAll("[data-bg]"));

        if ("IntersectionObserver" in window) {
            let lazyImageObserver = new IntersectionObserver(function(entries, observer) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        let lazyImage = entry.target;
                        let src = lazyImage.getAttribute('data-bg');
                        lazyImage.style.backgroundImage = 'url(' + src + ')';
                        lazyImage.classList.remove("lazy");
                        lazyImageObserver.unobserve(lazyImage);
                    }
                });
            });

            lazyImages.forEach(function(lazyImage) {
                lazyImageObserver.observe(lazyImage);
            });
        } else {
            // Possibly fall back to event handlers here
        }

    }
    
});

// iOS Safari
document.addEventListener('click', x => 0);[]

if ('loading' in HTMLImageElement.prototype) { 
    console.log('Supports loading');
} else {
   // Иначе - загрузить и применить полифилл или JavaScript-библиотеку для 
   // организации ленивой загрузки материалов.
}

/*jQuery(function($) {  

    const navBar = document.querySelector("nav"),
    menuBtns = document.querySelectorAll(".menu-icon"),
    overlay = document.querySelector(".overlay");
  
  menuBtns.forEach((menuBtn) => {
    menuBtn.addEventListener("click", () => {
      navBar.classList.toggle("open");
    });
  });
  
  overlay.addEventListener("click", () => {
    navBar.classList.remove("open");
  });
     
*/
   /*  let menuIcon = document.getElementsByClassName("menu-icon")[0];
   let overlay = document.getElementsByClassName("overlay")[0];
   
     let icons = [
       "<?php echo $theme_path; ?>/assets/img/burger-white.svg",
       "<?php echo $theme_path; ?>/assets/img/close-white.svg",
     ];
   
     let i = 1;
     menuIcon.addEventListener("click", (e) => {
       e.target.src = icons[i];
       i == 0 ? i++ : i--;
     });
     
   overlay.addEventListener("click", (e) => {
       e.target.src = icons[i];
       i == 0 ? i++ : i--;
     });
   
});*/