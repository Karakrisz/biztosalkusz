// ********************  Menu start **********************

class MenuManager {
    constructor(hamburgerId, menu__listId, headerSelector) {
        this.hamburger = document.getElementById(hamburgerId);
        this.menu__list = document.getElementById(menu__listId);
        this.header = document.querySelector(headerSelector);
        this.isOpen = false;

        this.hamburger.addEventListener('click', this.toggle.bind(this));

        const mediaQuery = window.matchMedia('(min-width: 577px)');

        mediaQuery.addEventListener('change', () => {
            if (mediaQuery.matches) {
                this.menu__list.style.transform = '';
                this.menu__list.style.opacity = '';
                this.menu__list.classList.remove('active');
                this.header.classList.remove('active');
                this.isOpen = false;
            }
        });
    }

    toggle = () => {
        if (this.isOpen) {
            // Zárás animáció
            this.menu__list.style.transform = "translateX(100%)";

            setTimeout(() => {
                this.menu__list.style.opacity = 0;
            }, 300);

        } else {
            // Nyitás animáció
            this.menu__list.style.opacity = 1;
            this.menu__list.style.transform = "translateX(0)";
        }

        this.menu__list.classList.toggle('active');
        this.header.classList.toggle('active');
        this.isOpen = !this.isOpen;
    };
}

const menuManager = new MenuManager('hamburger', 'menu__list', '.header');

// ********************  Menu end **********************

// ********************  Bottom Animation start **********************

class ScrollBottomAnimation {
    constructor(element) {
        this.element = element;
        this.init();
    }

    init() {
        this.addScrollListener();
    }

    addScrollListener() {
        window.addEventListener('scroll', () => this.checkScroll());
    }

    checkScroll() {
        const boxTop = this.element.getBoundingClientRect().top;
        const windowHeight = window.innerHeight;

        if (boxTop < windowHeight) {
            this.element.classList.add('animate-in');
            window.removeEventListener('scroll', () => this.checkScroll);
        }
    }
}


const introContentArrowImg = document.querySelectorAll('.intro-content__arrow-img');

introContentArrowImg.forEach(element => {
    new ScrollBottomAnimation(element);
});


// ********************  Bottom Animation end **********************

// ********************  Matrix start **********************


class MatrixTextAnimation {
    constructor(selector) {
        this.matrixText = document.querySelectorAll(selector);
    }

    animateLetters() {
        this.matrixText.forEach((letter, index) => {
            setTimeout(() => {
                letter.style.opacity = "1";
                letter.style.transform = "translateY(0)";
            }, index * 50);
        });
    }
}


const matrixTextAnimation = new MatrixTextAnimation(".matrix-text__span");
matrixTextAnimation.animateLetters();

// ********************  Matrix end **********************