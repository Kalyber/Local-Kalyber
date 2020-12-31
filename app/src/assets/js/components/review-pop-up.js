document.addEventListener("DOMContentLoaded", function(){
    const popups = document.getElementsByClassName('pop-up__wrap')


    Array.from(popups).forEach((el) => {
        var button = document.getElementById(el.id + "-btn")
        var exit = el.querySelector('.pop-up-exit');

        exit.onclick = function() {
            el.classList.remove('pop-up-show')
        }

        button.onclick = function() {
            Array.from(popups).forEach((otherEl) => {
                otherEl.classList.remove('pop-up-show')
            });
            el.classList.toggle('pop-up-show')
        }
    });

})