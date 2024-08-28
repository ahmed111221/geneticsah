const box = document.querySelector(".boxOfElement3");
const Services = document.querySelector('.Services');
let result;
let x = 0;
let y=0;
let height =box.offsetHeight;
let max = 0;
let lastScrollTop = 0;
Services.style.color = "rgb(70, 186, 219)";

function stopeMonte(){
    document.addEventListener('scroll', function() {
        const stopScrollPosition = 1545; // Position où vous voulez arrêter le défilement en montant
        let currentScrollTop = window.scrollY;

        if (currentScrollTop < lastScrollTop && currentScrollTop <= stopScrollPosition && height < 750) {
            // Si l'utilisateur remonte et atteint ou dépasse la position définie
            window.scrollTo(0, stopScrollPosition); // Force la position de défilement
        }

        lastScrollTop = currentScrollTop; // Met à jour la dernière position de défilement
    });
}

function blockScroll(){
    window.addEventListener('scroll', () => {
        let maxScroll = 1563; // Point où vous souhaitez arrêter le défilement (en pixels)

        if (height > 300 && window.scrollY >= maxScroll) {
            window.scrollTo(0, maxScroll); // Bloque le défilement à la position maxScroll
        }
    });
}

console.log("hello");

window.addEventListener("scroll",(Event)=>{
           function adjustBoxHeight() {
                height = box.offsetHeight;
                blockScroll();
                if (height > 300 && height <= 777) {
                    box.style.height = height - 9 + "px";
                }
            }
            function adjustBoxHeightUP() {
                height = box.offsetHeight;
                if (height >= 300 && height <= 770) {
                    box.style.height = height + 9 + "px";
                }
            }
x = window.scrollY;
if(window.scrollY>=1562){
    console.log(height);
    adjustBoxHeight();
}else if(window.scrollY<1560 && window.scrollY>1530){
        console.log(window.scrollY);
        adjustBoxHeightUP();
        stopeMonte();
}

})


document.querySelector('.next').addEventListener('click', function() {
    const activeItem = document.querySelector('.carousel-item.active');
    const nextItem = activeItem.nextElementSibling || document.querySelector('.carousel-item:first-child');
    const activepoint = document.querySelector('.point.activeP');
    const nextpoint = activepoint.nextElementSibling || document.querySelector('.point:first-child');
    activeItem.classList.remove('active');
    nextItem.classList.add('active');
    activepoint.classList.remove('activeP');
    nextpoint.classList.add('activeP');
    updateCarousel();
});

document.querySelector('.prev').addEventListener('click', function() {
    const activeItem = document.querySelector('.carousel-item.active');
    const prevItem = activeItem.previousElementSibling || document.querySelector('.carousel-item:last-child');
    const activpoint = document.querySelector('.point.activeP');
    const prevpoint = activpoint.previousElementSibling || document.querySelector('.point:last-child');
    activeItem.classList.remove('active');
    prevItem.classList.add('active');
    activpoint.classList.remove('activeP');
    prevpoint.classList.add('activeP');
    updateCarousel();
});

function updateCarousel() {
    const activeIndex = Array.from(document.querySelectorAll('.carousel-item')).findIndex(item => item.classList.contains('active'));
    document.querySelector('.carousel-inner').style.transform = `translateX(-${activeIndex * 100}%)`;
}