<?php get_header(); ?>

  <main class="main">
    <div class="container">
      <h1 class="main__title">Build Your Dream <span class="main__title--pink">House</span></h1>
      <div class="main__box">
        <div class="main__block">
          <p class="main__text">
            The first and most trusted marketplace of design & build house in The World. 100% guaranteed Build safe, 
            comfortable and transparent with a project management for the best result
          </p>
          <button class="main__btn btn">Free Consultation</button>
        </div>
        <div class="main__img"></div>
      </div>  

    </div>
  </main>

  <section class="gallery">
    <div class="container">
      <h2 class="gallery__title title">Build professional valuable room for you</h2>
      <div class="gallery__box popup-gallery">        
        <a href="<?php echo IMG_DIR; ?>/room1.png" class="gallery__img gallery__img-1 image-link" title="design 1">
          <div class="gallery__wrapper"></div>
        </a>
        <a href="<?php echo IMG_DIR; ?>/room2.png" class="gallery__img gallery__img-2 image-link" title="design 2">
          <div class="gallery__wrapper"></div>
        </a>
        <a href="<?php echo IMG_DIR; ?>/room3.png" class="gallery__img gallery__img-3 image-link" title="design 3">
          <div class="gallery__wrapper"></div>
        </a>
        <a href="<?php echo IMG_DIR; ?>/room4.png" class="gallery__img gallery__img-4 image-link" title="design 4">
          <div class="gallery__wrapper"></div>
        </a>
        <a href="<?php echo IMG_DIR; ?>/room5.png" class="gallery__img gallery__img-5 image-link" title="design 5">
          <div class="gallery__wrapper"></div>
        </a>
        <a href="<?php echo IMG_DIR; ?>/room6.png" class="gallery__img gallery__img-6 image-link" title="design 6">
          <div class="gallery__wrapper"></div>
        </a>
      </div>
    </div>    
  </section>

  <section class="about">
    <div class="container">
      <h2 class="about__title title">Build your needs with Archmove</h2>
      <div class="about__box">
        <div class="about__img"></div>
        <div class="about__block">
          <ul class="about__list">
            <li class="about__item">
              <div class="about__marker about__marker-1"></div>
              <div class="about__items">
                <h3 class="about__subtitle">100% guaranteed project completion</h3>
                <p class="about__text">
                  Build safe, comfortable and transparent with a project management application with a joint account.
                </p>
              </div>
            </li>
            <li class="about__item">
              <div class="about__marker about__marker-2"></div>
              <div class="about__items">
                <h3 class="about__subtitle">No additional fees</h3>
                <p class="about__text">
                  There are no hidden costs. The value of the offer you get is the value you paid.
                </p>
              </div>
            </li>
            <li class="about__item">
              <div class="about__marker about__marker-3"></div>
              <div class="about__items">
                <h3 class="about__subtitle">Get escort from the Team</h3>
                <p class="about__text">
                  Monitor reports from the Arsitag team who check directly in the field.
                </p>
              </div>
            </li>
          </ul>
          <button class="about__btn btn">CONSULTATION</button>
        </div>
      </div>
    </div>
    
  </section>

  <section class="feedback">
    <div class="container">
      <h2 class="feedback__title title">Sound Too Good To Be True?</h2>
      <div class="feedback__box">
        <div class="slider">
          <div class="feedback__slider slider__item">
            <p class="feedback__text ">
              We just wanted to thank you for this fantastic website! We are so grateful 
              for being able to advertise our Petite cabin and receive feedback from people 
              from all over the U.S. and even further.
            </p>
            <h4 class="feedback__author"><span class="feedback__author--bold">Adam Morph</span> — CEO A lfatech</h4>
          </div>
          <div class="feedback__slider slider__item">
            <p class="feedback__text ">
              I ordered this product in your store. I've been waiting for a week, and you still haven't delivered it.
              According to information I gleaned from Yelp.
            </p>
            <h4 class="feedback__author"><span class="feedback__author--bold">Harry Hors</span> — Head of department</h4>
          </div>
          <div class="feedback__slider slider__item">
            <p class="feedback__text ">
              I have been waiting for a long time for this GPU to be available. And finally I got it. Now I want to share 
              my emotions with those who are just planning to buy.
            </p>
            <h4 class="feedback__author"><span class="feedback__author--bold">Sudhir Meena</span> — Software Engineer</h4>
          </div>
          <div class="feedback__slider slider__item">
            <p class="feedback__text ">
              This is a success as a work of art and as a product for a mass audience too.
              I highly recommend watching this for those who love the feeling of nostalgia.
            </p>
            <h4 class="feedback__author"><span class="feedback__author--bold">Natalya Makatovich</span> — Business analyst– Itransition Group</h4>
          </div>
          <div class="feedback__slider slider__item">
            <p class="feedback__text ">
              You know, contrary to popular belief I didn't send that e-mail to get feedback from everyone. 
              I was thinking, since I've been mocked for most of today.
            </p>
            <h4 class="feedback__author"><span class="feedback__author--bold">Valeri Kollert</span> — UX/UI Designer</h4>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="realize">
    <div class="container">
      <div class="realize__box">
        <div class="realize__img"></div>
        <div class="realize__block">
          <h2 class="realize__title title">Realize your dream project with <span class="realize__title--pink">Archmove</span></h2>
          <button class="realize__btn btn">FREE CONSULTATION</button>
        </div>
      </div>
    </div>
  </section>

  <section class="partners">
    <div class="container">
      <h2 class="partners__title title">Our Partners</h2>
      <div class="partners__box">
        <img class="partners__img" src="<?php echo IMG_DIR; ?>/logo-1.png" alt="partner">
        <img class="partners__img" src="<?php echo IMG_DIR; ?>/logo-2.png" alt="partner">
        <img class="partners__img" src="<?php echo IMG_DIR; ?>/logo-3.png" alt="partner">
        <img class="partners__img" src="<?php echo IMG_DIR; ?>/logo-4.png" alt="partner">
        <img class="partners__img" src="<?php echo IMG_DIR; ?>/logo-5.png" alt="partner">
      </div>
    </div>
  </section>

  <?php get_footer(); ?>