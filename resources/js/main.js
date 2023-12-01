
//SWIPER CAROUSEL WELCOME
var swiper = new Swiper(".mySwiper", {
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: false,
  slidesPerView: "auto",
  coverflowEffect: {
    rotate: 0,
    stretch: 0,
    depth: 0,
    modifier: 0,
    slideShadows: false,
  },
});

/*------------------
Header Dinamico
-------------------*/
//Cattura dei Link con data-title
const titleLinkElements = document.querySelectorAll('#swiperData');
//Cattura del titolo, sottotitolo e contenuto dell'header
let titleHeader = document.querySelector('#titleHeader');

//ForEach di tutti i links
titleLinkElements.forEach((link)=> {
  //Al click di ciascuno dei link
  link.addEventListener('click', function () {

    // Recupera il titolo e contenuto dal data attributo
    const title = link.dataset.title;
    const content = link.dataset.desc;
    const image = link.dataset.image;

    // Aggiorna dinamicamente l'header con i dati del titolo
    titleHeader.innerText = title;
    contentHeader.innerText = content;
    document.querySelector('#header').style.backgroundImage = `linear-gradient(rgba(0, 0, 0, 0.432), rgb(0, 0, 0)), url('${image}')`;
  });
});
