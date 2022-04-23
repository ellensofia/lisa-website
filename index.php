<?php get_header(); ?>

    <!-- Hero section -->
    <section class="hero">
        <div class="hero__background">
            <div class="hero__inner">
                <div class="hero__content">
                    <img src="<?php echo get_template_directory_uri()?>/Assets/Icons/hero__logo.svg" alt="LISA DAHLGREN" class="hero__logo">
                    <div class="hero__overlay"></div>
                    <span class="hero__btns">
                        <a href="http://lisadahlgren.local/portfolio/" class="hero__btn">Mina kollektioner</a>
                        <a class="hero__btn">Arbeta med mig</a>
                    </span>
                </div>
            </div>
        </div>
    </section>

    <!-- About Me section -->
    <section class="about" id="about">
        <h2 class="vertical-text vertical-text-right">Om mig</h2>
        <div class="about__inner">
            <div class="about__container">
                <img src="<?php echo get_template_directory_uri()?>/Assets/Images/About.svg" alt="Image of Lisa" class="about__img">
                <div class="about__content">
                    <h2 class="about__title">Om mig</h2>
                    <div class="about__links">
                        <a href="<?php echo get_template_directory_uri()?>/Assets/CV Lisa Dahlgren.pdf" class="transition about__link" target="_blank">CV</a>
                        <a href="http://lisadahlgren.local/portfolio/" class="transition about__link">Portfolio</a>
                    </div>
                    <p class="about__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, laudantium illum. Debitis quisquam molestias incidunt neque. Laborum id minima rem ipsum omnis corporis maiores adipisci non, sit ex ad praesentium!
                    Quisquam, cupiditate excepturi odio, quia et, atque neque nam delectus laudantium quo est. Nihil corrupti recusandae laborum praesentium, cupiditate porro, inventore error, nam id asperiores numquam exercitationem amet? Eos, placeat?
                    Illum tempora modi nesciunt officiis aperiam! Earum nisi sit cumque laudantium adipisci sapiente repellat odit. Porro officiis atque doloribus itaque expedita nemo quia dicta sunt reiciendis. Cumque, animi atque? At.</p>
                    <button class="about__btn">Kontakta mig</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section class="portfolio">
        <h2 class="vertical-text vertical-text-left">Portfolio</h2>
            <div class="portfolio__inner">
                <div class="portfolio__content">
                    <h3 class="portfolio__title">Portfolio</h3>
                    <div class="portfolio__link transition">
                        <a href="http://lisadahlgren.local/portfolio/"> Se hela portfolion</a>
                    </div>
                    <div class="portfolio__slider">
                        <img src="<?php echo get_template_directory_uri()?>/Assets/Icons/chevron-left.svg" alt="" class="chevron chevron-left">                                    <!-- Temp -->
                        <div class="portfolio__imgs">
                            <img src="<?php echo get_template_directory_uri()?>/Assets/Images/slider/1.jpg" alt="">
                            <img src="<?php echo get_template_directory_uri()?>/Assets/Images/slider/1(2).jpg" alt="">
                        </div>
                        <img src="<?php echo get_template_directory_uri()?>/Assets/Icons/chevron-right.svg" alt="" class="chevron chevron-right">                                    <!-- Temp -->
                    </div>
                </div>
            </div>
    </section>

    <script>
    // Function to make header appeare when scrolling up

function onScroll() {

    // Get class .header from DOM
    const header = document.querySelector(".header");
    // Declare variable lastScrollY set equal to the number of pixels that has been scrolled up or down
    let lastScrollY = window.scrollY;

    // When scrolling up run function
    window.addEventListener("scroll", () => {

        // if you are scrolling down add class "header--hidden"
        if (lastScrollY < window.scrollY) {
            header.classList.add("header--hidden");
        } else {
            header.classList.remove("header--hidden");
        }

        // if you are further down than 580px add a background color
        if (lastScrollY >= 580) {
            header.classList.add("header--background");
        }
        else {
            header.classList.remove("header--background");
        }

        // Give lastScrollY the value of the pixel number that has been scrolled
        lastScrollY = window.scrollY;
    });
}

// Run function
onScroll();
</script>
    
<?php get_footer(); ?>