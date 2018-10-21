let hamburger = document.getElementById("hamburger");
let topNav = document.getElementById('topNav');
let navLinksLeft = document.getElementById('navLinksLeft');
let navLinksRight = document.getElementById('navLinksRight');

hamburger.addEventListener('click', function(){
    if(topNav.className !== 'show'){
        topNav.className = 'show';
    } else {
        topNav.className = '';
    }
})