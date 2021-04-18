$(".Selected-logo").click(function () {
    $(".dropdown-box").toggleClass("menu-dropdown");
    $(".arrow-down img").toggleClass("arrow-rotate");
});


$(".weekly-sale-slider__inner").owlCarousel({
    loop: true,
    margin: 0,
    nav: true,
    dots: false,
    navText: ["<span class='left-arrow'><img src='https://ebg.ge/res/img/outlet/left-arrow-slider.svg'></span>", "<span class='right-arrow'><img src='https://ebg.ge/res/img/outlet/right-slider-arrow.svg'></span>"],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        },
    },
});


$(".slider--inner").owlCarousel({
    loop: false,
    margin: 25,
    nav: true,
    dots: false,
    navText: ["<span class='left-arrows'><img src='https://ebg.ge/res/img/outlet/prevarrow.svg'></span>", "<span class='right-arrows'><img src='https://ebg.ge/res/img/outlet/nextarrow.svg'></span>"],
    responsive: {
        0: {
            items: 1,
            stagePadding: 50,
        },
        600: {
            items: 3
        },
        1000: {
            items: 3
        },
    },
});


$(document).ready(function () {
    $('.buttons-row').slick({
        rows: 2,
        dots: false,
        arrows: false,
        infinite: false,
        speed: 500,
        slidesToShow: 4,
        responsive: [{
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 2,
            }
        }]
    });

});



$(".user-icon-wrapper").mouseenter(function () {
    $(".user_profile").css({
        top: "50px",
    });
    $(".triangle_user").css({
        opacity: "1",
        transition: "0.6s",
    });
});

$(".close_header_menu").click(function () {
    $(".user_profile").css({
        top: "-335px",
    });
    $(".triangle_user").css({
        opacity: "0",
        transition: "0.6s",
    });
});

$(".profile_cont").mouseleave(function () {
    $(".user_profile").css({
        top: "-335px",
    });
    $(".triangle_user").css({
        opacity: "0",
        transition: "0.6s",
    });
});


$(".category-header-wrapper").click(function () {
    $(this).parent().find(".child-sub-categories").toggle("slow");
    $(this).find(".arrow-right-absolute").toggleClass("rotation")
})

$(document).on("click", ".category-button", function () {
    $(".selectedCategory").not($(this)).removeClass("selectedCategory")
    $(this).toggleClass("selectedCategory")
})

$(document).ready(function () {
    $('#nav-icon1').click(function () {
        $(this).toggleClass('open');
        $(".left-side-categories").toggleClass('show-active');
        $(".search_nav_mob").toggleClass("fixed-search-mob");
        $(".top-nav").toggleClass("fixed-navbar-top")
    });
});


$(document).ready(function () {
    $('.slider-main').slick({
        centerMode: true,
        centerPadding: '150px',
        slidesToShow: 3,
        speed: 1500,
        arrows: false,
        index: 2,
        focusOnSelect: true,
        responsive: [{
                breakpoint: 1300,
                settings: {
                    centerMode: true,
                    arrows: false,
                    centerPadding: '60px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 991,
                settings: {
                    centerMode: true,
                    arrows: false,
                    centerPadding: '180px',
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '160px',
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 576,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '90px',
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '55px',
                    slidesToShow: 1
                }
            }

        ]
    });
});

$("#showFilter").click(function () {
    $(".filter-wrapper").toggleClass("showFilterMob")
})







/* USER REGISTRATION, LOGIN AND PASSWORD VALIDATION */
$(".login_registration p").click(function() {
    $(".active_field").removeClass("active_field");
    $(this).addClass("active_field");
    if ($(".login_text").hasClass("active_field")) {
        $(".login").css("display", "block");
        $(".registraion").css("display", "none");
    } else if ($(".registraion_text").hasClass("active_field")) {
        $(".registraion").css("display", "block");
        $(".login").css("display", "none");
    }
});


$('.continue_first a').click(function(e) {
    if ($('input[name="forgot_mobile"]').val() == '') {
         $('input[name="forgot_mobile"]').next('.field_required').css('display','block');
            e.preventDefault();
    }
});



/* Product page slider and right side */
$('.condition_hover').hover(function () {
    $('.condition_tooltip').toggleClass('active_condition_tool');
});

$('.spec_color p').click(function (e) {
    e.preventDefault();
    e.stopPropagation();
});

$('.spec_quant p').click(function (e) {
    e.preventDefault();
    e.stopPropagation();
    $('.spec_quant_choose').toggleClass('active_spec_quant');
});

$(body).click(function () {
    $('.spec_quant_choose').removeClass('active_spec_quant');
});

$('.spec_quant_choose ul li').click(function () {
    const current = $(this).text();
    $('.current_quant').text(current);
});



$('.img img').click(function () {
    $('.active_img').removeClass('active_img');
    $(this).parent().addClass('active_img')
    const thisImg = $(this).attr('src');
    $('.current_img').attr('src', thisImg);
    if ($('.img:first-child').hasClass('active_img')) {
        $('.img_prev').css('opacity', '0');
    } else {
        $('.img_prev').css('opacity', '1');
    }
    if ($('.img:last-child').hasClass('active_img')) {
        $('.img_next').css('opacity', '0');
    } else {
        $('.img_next').css('opacity', '1');
    }
});



let currentPx = 0;
function nextImg() {
    const activeImg = $('.active_img').next().children().attr('src');
    $('.current_img').attr('src', activeImg);
    $('.active_img').next().addClass('active_img');
    $('.active_img').prev().removeClass('active_img');
    if ($('.img:nth-child(4n+5)').hasClass('active_img') && !$('.img:nth-last-child(1)').hasClass('active_img')) {
        currentPx += 395;
        $('.scroll_img').css({
            transform: `translate3d(0px,-${currentPx}px, 0px)`,
            transition: '0.8s'
        });
    } else if ($('.img:nth-child(4n + 1)').hasClass('active_img')) {
        $('.scroll_img').css({
            transform: `translate3d(0px,-${currentPx + 395}px, 0px)`,
            transition: '0.8s'
        });
    }
    if (!$('.img:first-child').hasClass('active_img')) {
        $('.img_prev').css('opacity', '1');
    }
    if ($('.img:last-child').hasClass('active_img')) {
        $('.img_next').css('opacity', '0');
    }
}

function prevImg() {
    const activeImg = $('.active_img').prev().children().attr('src');
    $('.current_img').attr('src', activeImg);
    $('.active_img').prev().addClass('active_img');
    $('.active_img').next().removeClass('active_img');
    if ($('.img:nth-child(4n-4)').hasClass('active_img')) {

        currentPx -= 395;
        $('.scroll_img').css({

            transform: `translate3d(0px,-${currentPx}px, 0px)`,
            transition: '0.8s'

        });

    }
    if ($('.img:first-child').hasClass('active_img')) {
        $('.img_prev').css('opacity', '0');
    }

    if (!$('.img:last-child').hasClass('active_img')) {
        $('.img_next').css('opacity', '1');
    }

}



$('.wishlist_prod_in_after').click(function () {
    $('.wishlist_prod_in').toggleClass('disactive_wishlist_prod');
    $(this).toggleClass('activated_wishlist_prod')

});

$(".question_mark2")
    .mouseenter(function () {
        if ($('.before_question2[style*="display: none;"]')) {
            $('.before_question2').css('display', 'none')
            $('.after_question2').css('display', 'block')
        }
    })
    .mouseleave(function () {
        $('.before_question2').css('display', 'block')
        $('.after_question2').css('display', 'none')
    });

$(".answer_question2")
    .mouseenter(function () {
        if ($('.before_question2[style*="display: none;"]')) {
            $('.before_question2').css('display', 'none')
            $('.after_question2').css('display', 'block')
        }
    })
    .mouseleave(function () {
        $('.before_question2').css('display', 'block')
        $('.after_question2').css('display', 'none')
    });


    $(".js-range-slider").ionRangeSlider({
        type: "double",
        min: 0,
        max: 2000,
        from: 0,
        to: 500,
        grid: true
    });


    function getvalue(){
       var rangeNumber = $("#rangeNumbers");

       var inputValueTo  = $('.irs-to').text();

       var inputValueFrom = $(".irs-from").text();

       var sum = `<div class="input-range-sum"><span>${inputValueFrom}</span>-<span>${inputValueTo}</span><span class="lari">'</span></div>`

       rangeNumber.html(sum)
    }