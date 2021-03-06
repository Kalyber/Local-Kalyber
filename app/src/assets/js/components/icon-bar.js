window.addEventListener('scroll', function(){
    if(document.querySelector('.pop-up-svg__container')) {
        sidebarHandler()
    }
})

window.addEventListener('resize', function(){
    if(document.querySelector('.pop-up-svg__container')) {
        sidebarHandler()
    }
})

function sidebarHandler() {
    const scrollPos = window.scrollY;
    const svgBar = document.querySelector('.pop-up-svg__container');
    const popUpBar = document.querySelector('.pop-up__container');
    const blogWrap = document.querySelector('.blog__inner__wrap')
    var x = window.matchMedia("(max-width: 1023px)")

    if(popUpBar) {
        if(x.matches){
            blogWrap.style.overflow = 'hidden';                
            if(scrollPos + window.innerHeight >= document.body.clientHeight) {
                svgBar.style.position = 'absolute';
                popUpBar.style.position = 'absolute';
            }else {
                svgBar.style.position = 'fixed';
                popUpBar.style.position = 'fixed';
            }
        } else {
            blogWrap.style.overflow = 'unset';
            popUpBar.style.position = 'sticky';
        }

    }
    
}