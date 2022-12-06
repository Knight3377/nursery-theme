var btn = $('.back-to-top');
var header = $('.header');

$(window).scroll(function() {
    fadeIn();
    if ($(window).scrollTop() > 1000) {
        btn.addClass('show');
    } else {
        btn.removeClass('show');
    }

});

btn.on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({
        scrollTop: 0
    }, '300');
});


$('.center').slick({
    dots: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 5000,
    arrows: false,
    fade: true,
});


/* tab event*/
$(function() {
    $('#tab1').css({'display':'flex', 'flex-wrap':'wrap'}); 
  $('.tabs-nav a').click(function() {

    // Check for active
    $('.tabs-nav li').removeClass('active');
    $(this).parent().addClass('active');

    // Display active tab
    let currentTab = $(this).attr('href');
    $('.tabs-content div').hide();
    $(currentTab).show();
    $(currentTab).css({'display':'flex', 'flex-wrap':'wrap'});    
    return false;
  });
});



var i = 1;

function openNav(x) {
    i++;
    x.classList.toggle("change");
    if (i % 2 != 1) {
        $('#myNav').fadeIn();
        document.getElementById("myNav").style.width = "80%";
        $('body').css('overflow', 'hidden');
    } else {
        $('#myNav').fadeOut();
        document.getElementById("myNav").style.width = "0%";
        $('body').css('overflow', 'auto');
        $('.menu_fadeIn').removeClass('animate__animated animate__fadeInLeft');
    }
}
$("#nav_search_link").on('click', function(event) {
    document.getElementById("myNav").style.width = "0%";
    $(".menu_btn .container").removeClass("change");
    i++;
});

function fadeIn() {
    $('.title-animation-wrapper').each(function() {

        var elemPos = $(this).offset().top;
        var scroll = $(window).scrollTop();
        var windowHeight = $(window).height();
        if (scroll >= elemPos - windowHeight) {
            $(this).addClass('title-animated');
        } else {}
    });
    $('.img-animation-wrapper').each(function() {
        var elemPos = $(this).offset().top;
        var scroll = $(window).scrollTop();
        var windowHeight = $(window).height();
        if (scroll >= elemPos - windowHeight) {
            $(this).addClass('img-animated');
        } else {}
    });

}

function openPage(pageName, elmnt) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    document.getElementById(pageName).style.display = "block";
    tablinks = document.getElementsByClassName("tablink");
}

// document.getElementById("defaultOpen").click();


$(".header_content li a").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();

        // Store hash
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 300, function() {

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
        });
    } // End if
});

// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn1 = document.getElementById("check_btn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];












