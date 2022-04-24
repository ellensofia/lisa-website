<?php include 'page-header.php'; ?>
        
    <main class="content">
    
    <!-- Gallery -->
    <section class="gallery"> 
        <h2 class="vertical-text vertical-text-left"><?php the_title() ?></h2>
        <div class="gallery__inner">
        <!-- First Row -->
            <div class="gallery__row-1">
                <div class="gallery__item-1">
                <h3 class="gallery__title">Orimasu Coat</h3>
                </div>
                <div class="gallery__item-2">
                <img class="gallery__img-1" src="<?php echo get_template_directory_uri()?>/Assets/Images/Övriga damplagg/oc1@2x.jpg" alt="">
            </div>
            </div>
        <!-- Second Row -->
            <div class="gallery__row-2">     
                <!-- Image 1 -->
                <div class="gallery__item-3">
                    <img src="<?php echo get_template_directory_uri()?>/Assets/Images/Övriga damplagg/b@2x.jpg" alt="" class="gallery__img-3">
                </div>
                <!-- Image 2 -->
                <div class="gallery__item-4">                 
                    <img src="<?php echo get_template_directory_uri()?>/Assets/Images/Övriga damplagg/b1@2x.jpg" alt="" class="gallery__img-4">
                </div>
            
                <!-- Image + text-->
                <div class="gallery__item-5">
                    <img src="<?php echo get_template_directory_uri()?>/Assets/Images/Övriga damplagg/b2@2x.jpg" alt="" class="gallery__img-5">
                    
                    <p class="gallery__text">Modeindustrins snabba växlingar samt det stora miljöhotet vi lever under är de två faktorerna jag tog i beaktande när denna kappa skapades. Resultatet blev en kappa som går att förändra
                    genom att ta bort och lägga till för att förändra silhuetten och funktionen av plagget. Inspirationen kommer från en blandning av drapering och origami.
                    </p>                 
                </div>   
                    
            </div>  

        </div>
        
    </section>
    <div class="exp">
        <h2 class="vertical-text vertical-text-right">Inplotion/Explotion</h2>
        <div class="exp__inner">
            <h3 class="exp__title">Inplotion / Explotion</h3>

            <div class="exp__content">
                <img src="<?php echo get_template_directory_uri()?>/Assets/Images/Övriga damplagg/i:e1@2x.jpg" alt="" class="exp__img">
                <div class="exp__img-text">
                    <img src="<?php echo get_template_directory_uri()?>/Assets/Images/Övriga damplagg/smaller@2x.jpg" alt="" class="exp__img">
                    <div class="exp__text">Denna klänning är inspirerad av implosion vs. explosion genom att experimentera med volymer och silhuett för att skapa något nytt.</div>
                </div>
            </div>

        </div>
    </div>

<script>
        function onScroll() {

// Get class .header from DOM
const header = document.querySelector(".header");
const pageHeader = document.querySelector(".page-header");
// const menu = document.querySelector(".nav");

// Declare variable lastScrollY set equal to the number of pixels that has been scrolled up or down
let lastScrollY = window.scrollY;

// When scrolling up run function
window.addEventListener("scroll", () => {

    // if you are scrolling down add class "header--hidden"
    if (lastScrollY < window.scrollY) {
        header.classList.add("header--hidden");
        pageHeader.classList.add("header--hidden");
    } else {
        header.classList.remove("header--hidden");
        pageHeader.classList.remove("header--hidden");
    }
    
    // if you are further down than 0px add a background color
    if (lastScrollY >= 0) {
        header.classList.add("header--background");
        pageHeader.classList.add("header--background");
    }
    else {
        pageHeader.classList.remove("header--background");
    }

    // Give lastScrollY the value of the pixel number that has been scrolled
    lastScrollY = window.scrollY;
});
}

// Run function
onScroll();
</script>

<?php get_footer() ?>
