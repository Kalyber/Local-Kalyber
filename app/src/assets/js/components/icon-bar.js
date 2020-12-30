document.addEventListener('scroll', function(){
    sidebarHandler()
})

document.addEventListener('resize', function(){
    sidebarHandler()
})

function sidebarHandler() {
    const scrollPos = window.scrollY;
    const svgBar = document.querySelector('.pop-up-svg__container');
    const popUpBar = document.querySelector('.pop-up__container');
    const blogWrap = document.querySelector('.blog__inner__wrap')
    var x = window.matchMedia("(max-width: 1024px)")

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