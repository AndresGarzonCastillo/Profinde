//Se seleccionan varios elementos del DOM utilizando el método document.querySelector()
const galleryContainer = document.querySelector('.gallery-container');
const galleryControlsContainer = document.querySelector('.gallery-controls');
const galleryControls = ['', ''];
const galleryItems = document.querySelectorAll('.gallery-item');

class Carousel {
    constructor(container, items, controls){
        this.carouselContainer = container;
        this.carouselControls = controls;
        this.carouselArray = [...items];
        this.currentIndex = 0;
        this.autoPlayInterval = null;
        this.autoPlayDelay = 4000;
        this.setAutoPlay();
    }

    //actualiza las clases CSS de los elementos de la galería, lo que cambia la apariencia de las imágenes mostradas dependiendo de la posición actual del carrusel
    updateGallery(){
        this.carouselArray.forEach(el =>{
            el.classList.remove('gallery-item-1');
            el.classList.remove('gallery-item-2');
            el.classList.remove('gallery-item-3');
            el.classList.remove('gallery-item-4');
        });

        this.carouselArray.slice(0, 5).forEach((el, i) =>{
            el.classList.add(`gallery-item-${i+1}`);
        });
    }

    setCurrentState(direction){
        if(direction.className=='gallery-controls-previous'){
            this.carouselArray.unshift(this.carouselArray.pop());
        } else {
            this.carouselArray.push(this.carouselArray.shift());
        }
        this.updateGallery();
    }

    //configura un intervalo de reproducción automática que avanza automáticamente el carrusel cada 4 segundos
    setAutoPlay() {
        this.autoPlayInterval = setInterval(() => {
            this.currentIndex = (this.currentIndex + 1) % this.carouselArray.length;
            this.updateGallery();
            this.setCurrentState(this.currentIndex);
        }, this.autoPlayDelay);
    }

    stopAutoPlay() {
        clearInterval(this.autoPlayInterval);
    }

    
    setControls(){
        this.carouselControls.forEach(control =>{
            galleryControlsContainer.appendChild(document.createElement('button')).className = `gallery-controls-${control}`;
            document.querySelector(`.gallery-controls-${control}`).innerText = control;
        })
    }
    
    
    useControls(){
        const triggers = [...galleryControlsContainer.childNodes];
        triggers.forEach(control => {
            control.addEventListener('click', e => {
                e.preventDefault();
                this.setCurrentState(control);
            });            
        });
    }
}

const exampleCarousel = new Carousel(galleryContainer, galleryItems, galleryControls);

exampleCarousel.setAutoPlay();
exampleCarousel.setControls();
exampleCarousel.useControls();