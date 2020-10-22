/*===== MENU SHOW =====*/ 
const showMenu = (toggleId, navId) =>{
    const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId)
    const background = document.getElementById('bg-nav-menu')

    if(toggle && nav){
        toggle.addEventListener('click', ()=>{
            // nav.classList.toggle('show')
            nav.style.left = '0';
            background.style.left = '0';
        })
    }
}
showMenu('nav-toggle','nav-menu');
showMenu('nav-toggle-tablet','nav-menu');
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

window.addEventListener('mouseup', function(e) {
    const navMenu = document.getElementById('nav-menu'); 
    const background = document.getElementById('bg-nav-menu')
    if(e.target != navMenu &&
        e.target.parentNode != navMenu &&
        e.target.parentNode.parentNode != navMenu &&
        e.target.parentNode.parentNode.parentNode != navMenu &&
        e.target.parentNode.parentNode.parentNode.parentNode != navMenu
    ) {
        if (navMenu.style.left == '0px') {
            navMenu.style.left = '-100%';
            background.style.left = '-100%';
        }
    }
}) 
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

$(document).ready(function() {
    var height = $(".location-body__left .location-content").height();
    var title = $(".location-body__right .body-title").height();
    if ($(window).width() > 767) {
        $(".location-body__right .m-card .body-content").height(height-title-75);
    }

    //service content
    if ( $(window).width() > 767 ) {
        $("#js-service-pack").removeClass('lightSlider');
    } else {
        $("#js-service-pack").addClass('lightSlider');
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
    // method pay
    $('.face-value').on('click', function() {
        var faceValues = document.querySelectorAll('.face-value');
        faceValues.forEach(faceValue => {
            faceValue.classList.remove('active');
        })
        $(this).addClass('active');
    })

    //chart
    var ctx = document.getElementById('myChart').getContext('2d');
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
})