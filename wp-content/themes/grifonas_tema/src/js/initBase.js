
$ = jQuery;
/*
  This comment ensures these classes aren't purged by Tailwind.
  You should list all possible classes that are created dynamically.
  This list should be updated if you change what classes can be generated.

  h-auto h-screen pt-16 pt-24 pt-32 pb-16 pb-24 pb-32 py-16 py-24 py-32 text-blue text-steel-pink text-green text-orange text-red
*/
export default function initBase() {

    const checkScroll = () => {
        const header = document.querySelector('header');
        if (document.documentElement.scrollTop >= 100) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    };

    // check scroll position at load time
    checkScroll();
    
    // check scroll position upon scrolling
    window.addEventListener('scroll', checkScroll);


    const showBtn = document.querySelector(".btn-bars"),
        closeBtn = document.querySelector(".btn-close"),
        navMenu = document.querySelector(".navbar-collapse");
    showBtn.addEventListener("click", () => {
        navMenu.classList.toggle("showMenu");
    });
    closeBtn.addEventListener("click", () => {
        navMenu.classList.remove("showMenu");
    });

    $(document).ready(function(){
        $(".nav-item").click(function(){
        $(this).children('.sub-menu').slideToggle('fast');
        });
    });

  $(document).ready(function () {
   $('span[data-set]').each(function() {
    var $this = $(this);
    var words = JSON.parse($this.attr('data-set'));
    var classes = JSON.parse($this.attr('data-classes'));
    if (words.length > 0) {
        $this.html('<div class="' + classes[0] + '">' + words[0] + '</div>');  // initialize with the first word
    }
    });

    var wordInterval;

    function startAnimation() {
        wordInterval = setInterval(function() {
            $('span[data-set]').each(function() {
                var $this = $(this);
                var words = JSON.parse($this.attr('data-set'));
                var classes = JSON.parse($this.attr('data-classes'));
                var currentWord = $this.find('div').text();
                var currentIndex = words.indexOf(currentWord);
                var nextIndex = (currentIndex + 1) % words.length;
                var height = $this.find('div:first').height();

                $this.append('<div style="top: ' + height + 'px;" class="' + classes[nextIndex] + '">' + words[nextIndex] + '</div>');
                $this.find('div:first').animate({top: '-=' + height}, 500, function() { $(this).remove(); });
                $this.find('div:last').animate({top: '-=' + height}, 500);
            });
        }, 2000);
    }

    function stopAnimation() {
        clearInterval(wordInterval);
    }

    $(document).on('visibilitychange', function() {
        if (document.hidden) {
            stopAnimation();
        } else {
            startAnimation();
        }
    });

    // start the first cycle
    startAnimation();
      
    $(".dropdown-indicator").click(function(e) {
        e.preventDefault();
        var currentSubMenu = $(this).siblings('.sub-menu');

        // Slide up all other sub-menus, then slide down current sub-menu.
        $('.sub-menu').not(currentSubMenu).slideUp('fast').promise().done(() => {
            if (currentSubMenu.css('display') === 'none') {
                currentSubMenu.slideDown('fast');
            } else {
                currentSubMenu.slideUp('fast');
            }
        });
    });
      
    // Change the color of the select field on change
    if (document.querySelector('.candidates-form')) {
        const select = document.querySelector('select');
        let currentColorClass = 'Economics';

        // Add the initial class
        select.classList.add(currentColorClass);

        select.addEventListener('change', (event) => {
            let selectedOption = select.options[select.selectedIndex];
            let newColorClass = selectedOption.value;

            // Remove the old color class if it exists
            if (currentColorClass) {
                select.classList.remove(currentColorClass);
            }

            // Add the new color class and update the current color class
            select.classList.add(newColorClass);
            currentColorClass = newColorClass;
        });
    }
  
  });
  
}
