let hamburger = document.getElementById("hamburger");
let topNav = document.getElementById('topNav');
let navLinksHolder = document.getElementById('navLinksHolder');
let navLinksLeft = document.getElementById('navLinksLeft');
let navLinksRight = document.getElementById('navLinksRight');
let navBottomBorder = document.getElementById('nav-bottom-border');

hamburger.addEventListener('click', function(){
    if(topNav.className !== 'show'){
        topNav.className = 'show';
    } else {
        topNav.className = '';        
    }
})