/*===== MENU SHOW =====*/ 
const showMenu = (toggleId, navId) =>{
    const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId)
    const background = document.getElementById('bg-nav-menu')

    if(toggle && nav){
        toggle.addEventListener('click', ()=>{
            // nav.classList.toggle('show')
            // nav.style.left = '0';
            background.style.left = '0';
            nav.classList.add('nav-open');
        })
    }
}
showMenu('nav-toggle','nav-menu');
showMenu('nav-toggle-tablet','nav-menu');

$('#bg-nav-menu').on('click', function() {
    $('#nav-menu').removeClass('nav-open');
    $(this).css('left', '-100%');
})
/*===== Menu mobile ======*/ 
const showItemMenu = (toggleId, navId) =>{
    const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId)

    if(toggle && nav){
        toggle.addEventListener('click', ()=>{
            nav.classList.toggle('showItem');
        })
    }
}

showItemMenu('item-first', 'item-menu-first');
showItemMenu('item-second', 'item-menu-second');
showItemMenu('item-third', 'item-menu-third');
showItemMenu('item-fourth', 'item-menu-fourth');

const hideItemMenu = (iconId, menuId) => {
    const icon = document.getElementById(iconId),
    menu = document.getElementById(menuId)
    const background = document.getElementById('bg-nav-menu')

    if(icon && menu) {
        icon.addEventListener('click', () => {
            menu.classList.remove('showItem');
        })
    }
}

hideItemMenu('icon-back-first', 'item-menu-first');
hideItemMenu('icon-back-second', 'item-menu-second');
hideItemMenu('icon-back-third', 'item-menu-third');
hideItemMenu('icon-back-fourth', 'item-menu-fourth');


/*===== MENU'S BACKGROUND DESKTOP =====*/
const navListLi = document.querySelectorAll('nav-list-li');   

function linkAction(){
	navListLi.forEach(n => n.removeClass('active'));
	this.addClass('active');
}
navListLi.forEach(n => n.addEventListener('click', () => {
	linkAction();
}));

/*======= show-dropdown =======*/ 
const dropdownTarget = document.getElementById('dropdown-target');
const dropdownContent = document.getElementById('dropdown-content');

if ( dropdownContent && dropdownTarget) {   
    dropdownTarget.addEventListener('click', () => {
        dropdownContent.classList.toggle('active');
    })
}
/*======= end show-dropdown =======*/ 

/*======= switch tabs ========*/ 
const tabs = document.querySelectorAll('[data-tab-target]')
const tabContents = document.querySelectorAll('[data-tab-content]')

tabs.forEach(tab => {
    tab.addEventListener('click', () => {
        tabs.forEach(tab => {
            tab.classList.remove('active')
        })
        tab.classList.add('active')
        const target = document.querySelector(tab.dataset.tabTarget)
        tabContents.forEach(tabContent => {
            tabContent.classList.remove('active')
            tabContent.classList.add('hidden')
        })
        target.classList.remove('active')
        target.classList.remove('hidden')
    })
})
/*======= switch tabs ========*/ 
const newstabs = document.querySelectorAll('[data-news-target]')
const newstabContents = document.querySelectorAll('[data-news-content]')

newstabs.forEach(news => {
    news.addEventListener('click', () => {
        newstabs.forEach(tab => {
            tab.classList.remove('active')
        })
        news.classList.add('active')
        const newsTarget = document.querySelector(news.dataset.newsTarget)
        newstabContents.forEach(tabContent => {
            tabContent.classList.remove('active')
            tabContent.classList.add('hidden')
        })
        newsTarget.classList.remove('active')
        newsTarget.classList.remove('hidden')
    })
})

/*=== login pages ===*/ 
const methods = document.querySelectorAll('[data-method-login-target]')
const methodContents = document.querySelectorAll('[data-method-login-content]')

methods.forEach(method => {
    method.addEventListener('click', () => {
        methods.forEach(method => {
            method.classList.remove('active')
        })
        method.classList.add('active')
        var target = document.querySelector(method.dataset.methodLoginTarget)
        methodContents.forEach(methodContent => {
            methodContent.classList.add('hidden')
        })
        target.classList.remove('hidden')
    })
})

var height = $(".location-body__left .location-content").height();
var title = $(".location-body__right .body-title").height();
if ($(window).width() > 767) {
    $(".location-body__right .m-card .body-content").height(height-title-75);
}

//service content
if ( $(window).width() > 767 ) {
    $("#js-service-pack").removeClass('lightSlider');
    $("#js-create-pack").removeClass('lightSlider4');
} else {
    $("#js-service-pack").addClass('lightSlider');
    $("#js-create-pack").addClass('lightSlider4');
}

// cicular progress
$(".progress").each(function() {

    var value = $(this).attr('data-value');
    var left = $(this).find('.progress-left .progress-bar');
    var right = $(this).find('.progress-right .progress-bar');

    if (value > 0) {
        if (value <= 50) {
            right.css('transform', 'rotate(' + percentageToDegrees(value) + 'deg)')
        } else {
            right.css('transform', 'rotate(180deg)')
            left.css('transform', 'rotate(' + percentageToDegrees(value - 50) + 'deg)')
        }
    }

})

function percentageToDegrees(percentage) {
    return percentage / 100 * 360
}

//hide modal 

$('.x-symbol').on('click', function() {
    $('#modalOTP').modal('hide');
})
$('.x-symbol-pay').on('click', function() {
    $('#modalPayment').modal('hide');
})

//pre-login
$(".btn-border[data-toggle]").on("click", function() {
    $("#js-phone-number-otp").html($("input#phone").val());   
    $i = 30;
    setInterval(function() {
        $i--;
        if($i > 0)
            $("#js-time-remain-otp").html($i);    
        else $("#js-time-remain-otp").html("0");
    }, 1000);
})

// login OTP
$('.digit-group').find('input').each(function() {
    $(this).attr('maxlength', 1);

    $(this).on('focus', function() {
        $(this).css("background", "none");
        $(this).css("border", "1px solid #237BD3");
        $(this).css("border-radius", "0.3125rem");
    })

    $(this).on('mouseup', function() {
        $(this).css("background", "none");
        $(this).css("border", "1px solid #237BD3");
        $(this).css("border-radius", "0.3125rem");
    })

    $(this).on('keyup', function(e) {
        var parent = $($(this).parent());
        
        if(e.keyCode === 8 || e.keyCode === 37) {
            var prev = parent.find('input#' + $(this).data('previous'));
            if(e.keyCode === 8) {
                $(this).css("background", "url('./source/image/i_digit_number.svg')");
                $(this).css("background-size", "contain");
                $(this).css("border", "none");
            }
            
            if(prev.length) {
                $(prev).select();
            }
        } else if((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 65 && e.keyCode <= 90) || (e.keyCode >= 96 && e.keyCode <= 105) || e.keyCode === 39) {
            var next = parent.find('input#' + $(this).data('next'));
            $(this).css("background", "none");
            $(this).css("border", "1px solid #237BD3");
            $(this).css("border-radius", "0.3125rem");
            if(next.length) {
                $(next).select();
            } else {
                if(parent.data('autosubmit')) {
                    parent.submit();
                }
            }
        }
    });
});

//upload avatar
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        console.log(input.files[0])
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
})

// increment input
// $('.count').prop('disabled', true);
$(document).on('click','.plus',function(){
    $('.count').val(parseInt($('.count').val()) + 1 );
});
$(document).on('click','.minus',function(){
    $('.count').val(parseInt($('.count').val()) - 1 );
    if ($('.count').val() == 0) {
        $('.count').val(1);
    }
})
// slide range

$( "#slider-range" ).slider({
  range: true,
  min: 0,
  max: 500,
  values: [ 75, 300 ],
  slide: function( event, ui ) {
    $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
  }
});
$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
  " - $" + $( "#slider-range" ).slider( "values", 1 ) );

// method pay
$('.face-value').on('click', function() {
    var faceValues = document.querySelectorAll('.face-value');
    faceValues.forEach(faceValue => {
        faceValue.classList.remove('active');
    })
    $(this).addClass('active');
})

//==== start input slide ranger ====//
var startingValues = [33, 66];

$("#slider-range")
    .slider({
    min: 0,
    max: 100,
    range: true,
    values: startingValues,
    slide: function (event, ui) {
        onSlide(ui)
    },
    create: function (event, ui) {
        onSlide({
            values: startingValues
        });
    }
});

function onSlide(ui) {
    var totalWidth = $("#slider-range").width();
    $(".slider-range-left").width((ui.values[0]) / 100 * totalWidth);
}
//==== end slider range ====//

//chart
$(document).ready(function() {
    var ctx = document.getElementById('myChart')
    if(ctx) {
        ctx = ctx.getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['12/2019', '1/2020', '2/2020', '3/2020', '4/2020', '5/2020'],
                datasets: [{
                    label: 'Tiền cước (nghìn đồng)',
                    data: [120, 190, 30, 50, 200, 300],
                    backgroundColor: '#C6D4E5',
                    hoverBackgroundColor: "#237BD3",
                    maxBarThickness: 20
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        })
    }
})