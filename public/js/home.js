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
            tabContent.classList.add('hidden')
        })
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