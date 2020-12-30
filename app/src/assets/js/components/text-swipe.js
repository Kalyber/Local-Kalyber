document.addEventListener("DOMContentLoaded", function(){
    var heroCopyItems = document.querySelectorAll('.word');
    var heroCopyContentArray = []
    var counter = 0;

    heroCopyItems.forEach(element => {
        heroCopyContentArray.push(element.textContent)
    });


    if(heroCopyContentArray.length > 0) {
        setInterval(change, 3000);
        function change() {
            heroCopyItems.forEach(element => {
                element.classList.remove('fadeAnimation')
            });
            heroCopyItems[counter].classList.add('fadeAnimation')
            if(counter == heroCopyItems.length - 1){
                counter = 0;
            }else {
                counter++;
            }
        }
    }
});