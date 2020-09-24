/*===== MENU SHOW =====*/ 
const showMenu = (toggleId, navId) =>{
    const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId)

    if(toggle && nav){
        toggle.addEventListener('click', ()=>{
            nav.classList.toggle('show')
        })
    }
}
showMenu('nav-toggle','nav-menu');
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

const navMenu = document.getElementById('nav-menu'); 
window.onClick = function(e) {
    if(e.target.id != 'nav-menu') {
        navMenu.style.display('none');
    }
}
