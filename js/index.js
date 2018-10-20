let hamburger = document.getElementById("hamburger");
let topNav = document.getElementById('topNav');

hamburger.addEventListener('click', function(){
    if(topNav.className !== 'show'){
        topNav.className = 'show';
    } else {
        topNav.className = '';
    }
})