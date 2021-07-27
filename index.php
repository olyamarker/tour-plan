<?php include('header.php')?>
    <section class="hotel">
      <div class="container">
        <div class="hotel-info">
          <div class="hotel-info__text">
            <div class="hotel-wrapper">
              <div class="stars">
                <img src="img/Star.svg" alt="star" />
                <img src="img/Star.svg" alt="star" />
                <img src="img/Star.svg" alt="star" />
                <img src="img/Star.svg" alt="star" />
                <img src="img/Star.svg" alt="star" />
              </div>
              <h1 class="hotel-name hotel-info__name">GRAND HILTON HOTEL</h1>
              <span class="offer hotel-info__offer">Flash Offer</span>
            </div>
            <!-- /.hotel-wrapper -->
            <p class="hotel-description hotel-info__description">
              Half-Board/ All Inclusive + Complimentary Activities + Child Stays
              Free
            </p>
          </div>
          <!-- /.hotel-info__text -->
          <div data-toggle="modal" data-href="#rating-modal" class="rating hotel-info__rating">
            <span class="rating__text">User Rattings</span>
            <span class="rating__counter">4.5/5</span>
          </div>
          <!-- /.hotel-info__right -->
        </div>
        <!-- /.hotel-info -->
        <div class="hotel-grid">
          <div class="swiper-container hotel-slider hotel__slider">
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide hotel-slider__item">
                <img
                  class="hotel-slider__image"
                  src="img/slide.jpg"
                  alt="slide"
                />
              </div>
              <div class="swiper-slide hotel-slider__item">
                <img
                  class="hotel-slider__image"
                  src="img/slide-2.jpg"
                  alt="slide"
                />
              </div>
              <div class="swiper-slide hotel-slider__item">
                <img
                  class="hotel-slider__image"
                  src="img/slide-3.jpg"
                  alt="slide"
                />
              </div>
              <div class="swiper-slide hotel-slider__item">
                <img
                  class="hotel-slider__image"
                  src="img/slide-4.jpg"
                  alt="slide"
                />
              </div>
              <div class="swiper-slide hotel-slider__item">
                <img
                  class="hotel-slider__image"
                  src="img/slide-5.jpg"
                  alt="slide"
                />
              </div>
            </div>
            <!-- If we need navigation buttons -->
            <button
              class="hotel-slider__button hotel-slider__button--prev"
            ></button>
            <button
              class="hotel-slider__button hotel-slider__button--next"
            ></button>
          </div>
          <!-- /.swiper-container -->
          <div class="hotel-right">
            <div class="booking">
              <div class="booking__info">
                <div class="booking__price">
                  <span class="booking__start">price starts as</span>
                  <strong class="booking__pricetag">$ 8,500</strong>
                  <span class="booking__per-room">per room / night</span>
                </div>
                <!-- /.booking__price -->
                <div class="booking__room">
                  <div class="booking__text">
                    <img
                      src="img/user.svg"
                      alt="Icon: user"
                      class="booking__icon"
                    />
                    <span class="booking__description">2 x Guests</span>
                  </div>
                  <div class="booking__text">
                    <img
                      src="img/home.svg"
                      alt="Icon: home"
                      class="booking__icon"
                    />
                    <span class="booking__description">1 x Room</span>
                  </div>
                </div>
                <!-- /.booking__room -->
              </div>
              <!-- /.booking__info -->
              <div class="booking__call-center">
                <span class="booking__heading">Quick Booking</span>
                <a class="booking__number" href="tel:12100">
                  <img src="img/phone-call-0.svg" alt="Icon: phone" />
                  <span class="booking__num">12100</span>
                </a>
              </div>
              <!-- /.booking__call-center -->
              <button data-toggle="modal" data-href="#booking-modal" class="button booking__button">View Other Options</button>
            </div>
            <!-- /.booking -->
            <div class="map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2455.209760134983!2d47.8149753159857!3d52.021276280820516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x416b8ebf32d98293%3A0x832984a5a72e9b5b!2z0YPQuy4gMzAg0LvQtdGCINCf0L7QsdC10LTRiywgOdCwLCDQkdCw0LvQsNC60L7QstC-LCDQodCw0YDQsNGC0L7QstGB0LrQsNGPINC-0LHQuy4sIDQxMzg2MA!5e0!3m2!1sru!2sru!4v1626249094923!5m2!1sru!2sru"
                width="100%"
                height="213"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
              ></iframe>
            </div>
            <!-- /.map -->
          </div>
          <!-- /.hotel-right -->
        </div>
        <!-- /.hotel-grid -->
      </div>
      <!-- /.container -->
    </section>
    <section class="packages">
      <div class="container">
        <h2 class="packages__title">Other Packages</h2>
        <div class="packages-wrapper">
          <div class="packages__card packages__card-1">
            <img
              src="img/packages__image-0.jfif"
              alt="packages__image-0"
              class="packages__image packages__image-1"
            />
            <div class="flash-offer flash-offer-1">Flash Offer</div>
            <div class="packages__information packages__information-1">
              <div class="stars packages__stars">
                <img src="img/Star.svg" alt="star" />
                <img src="img/Star.svg" alt="star" />
                <img src="img/Star.svg" alt="star" />
                <img src="img/Star.svg" alt="star" />
                <img src="img/Star.svg" alt="star" />
              </div>
              <div class="packages__info">
                <h3 class="packages__subtitle">Hotel Blue Haven</h3>
                <p class="packages__descript-1">
                  Aute quis duis excepteur excepteur ipsum cat eiusmod
                  consectetur enim laborum magna llit. Ipsum est fugiat velit ea
                  llamco do esse ut in veniam sun in onsequat. Aute quis duis
                  epteur excepteur ipsum occaecat eiusmod nsectetur enim laborum
                  magna mollit. Ipsum est fugiat velit ea ullamco do
                </p>
                <div class="descr">
                  <div class="packages__text">
                    <img
                      src="img/map-pin.svg"
                      alt="Icon: map-pin"
                      class="packages__icon"
                    />
                    <span class="packages__description"
                      >1749 Wheeler Ridge Delaware</span
                    >
                  </div>
                  <div class="packages__text">
                    <img
                      src="img/user.svg"
                      alt="Icon: user"
                      class="packages__icon"
                    />
                    <span class="packages__description">2 x Guests</span>
                  </div>
                  <div class="packages__text">
                    <img
                      src="img/home.svg"
                      alt="Icon: home"
                      class="packages__icon"
                    />
                    <span class="packages__description">1 x Room</span>
                  </div>
                </div>
                <span class="packages__last-price">$ 10,500</span>
              </div>
              <!-- info -->
              <div class="packages__price packages__price-1">
                <strong class="packages__new-price">$ 8,500</strong>
                <button class="button packages__button">Book Now</button>
              </div>
              <!-- /.package__price -->
            </div>
            <!-- /. packages__information-->
          </div>
          <div class="packages__card packages__card-2">
            <img
              src="img/packages__image-1.jfif"
              alt="packages__image-1"
              class="packages__image"
            />
            <div class="flash-offer">Flash Offer</div>
            <div class="packages__information">
              <div class="packages__info">
                <h3 class="packages__subtitle">LUX* Belle Mare</h3>
                <div class="descr">
                  <div class="packages__text">
                    <img
                      src="img/map-pin.svg"
                      alt="Icon: map-pin"
                      class="packages__icon"
                    />
                    <span class="packages__description"
                      >1749 Wheeler Ridge Delaware</span
                    >
                  </div>
                  <div class="packages__text">
                    <img
                      src="img/user.svg"
                      alt="Icon: user"
                      class="packages__icon"
                    />
                    <span class="packages__description">2 x Guests</span>
                  </div>
                  <div class="packages__text">
                    <img
                      src="img/home.svg"
                      alt="Icon: home"
                      class="packages__icon"
                    />
                    <span class="packages__description">1 x Room</span>
                  </div>
                </div>
                <span class="packages__last-price">$ 8,500</span>
              </div>
              <!-- info -->
              <div class="packages__price">
                <strong class="packages__new-price">$ 3,000</strong>
                <button class="button packages__button">Book Now</button>
              </div>
              <!-- /.package__price -->
            </div>
            <!-- /. packages__information-->
          </div>
          <div class="packages__card packages__card-3">
            <img
              src="img/packages__image-2.jfif"
              alt="packages__image-2"
              class="packages__image"
            />
            <div class="flash-offer">Flash Offer</div>
            <div class="packages__information">
              <div class="packages__info">
                <h3 class="packages__subtitle">White Palace</h3>
                <div class="descr">
                  <div class="packages__text">
                    <img
                      src="img/map-pin.svg"
                      alt="Icon: map-pin"
                      class="packages__icon"
                    />
                    <span class="packages__description"
                      >1749 Wheeler Ridge Delaware</span
                    >
                  </div>
                  <div class="packages__text">
                    <img
                      src="img/user.svg"
                      alt="Icon: user"
                      class="packages__icon"
                    />
                    <span class="packages__description">2 x Guests</span>
                  </div>
                  <div class="packages__text">
                    <img
                      src="img/home.svg"
                      alt="Icon: home"
                      class="packages__icon"
                    />
                    <span class="packages__description">1 x Room</span>
                  </div>
                </div>
                <span class="packages__last-price">$ 8,500</span>
              </div>
              <!-- info -->
              <div class="packages__price">
                <strong class="packages__new-price">$ 9,500</strong>
                <button class="button packages__button">Book Now</button>
              </div>
              <!-- /.package__price -->
            </div>
            <!-- /. packages__information-->
          </div>
          <div class="packages__card packages__card-4">
            <img
              src="img/packages__image-3.jfif"
              alt="packages__image-3"
              class="packages__image"
            />
            <div class="flash-offer">Flash Offer</div>
            <div class="packages__information">
              <div class="packages__info">
                <h3 class="packages__subtitle">Luxury Place</h3>
                <div class="descr">
                  <div class="packages__text">
                    <img
                      src="img/map-pin.svg"
                      alt="Icon: map-pin"
                      class="packages__icon"
                    />
                    <span class="packages__description"
                      >1749 Wheeler Ridge Delaware</span
                    >
                  </div>
                  <div class="packages__text">
                    <img
                      src="img/user.svg"
                      alt="Icon: user"
                      class="packages__icon"
                    />
                    <span class="packages__description">2 x Guests</span>
                  </div>
                  <div class="packages__text">
                    <img
                      src="img/home.svg"
                      alt="Icon: home"
                      class="packages__icon"
                    />
                    <span class="packages__description">1 x Room</span>
                  </div>
                </div>
                <span class="packages__last-price">$ 4,500</span>
              </div>
              <!-- info -->
              <div class="packages__price">
                <strong class="packages__new-price">$ 2,500</strong>
                <button class="button packages__button">Book Now</button>
              </div>
              <!-- /.package__price -->
            </div>
            <!-- /. packages__information-->
          </div>
          <div class="packages__card packages__card-5">
            <img
              src="img/packages__image-4.jfif"
              alt="packages__image-4"
              class="packages__image"
            />
            <div class="flash-offer">Flash Offer</div>
            <div class="packages__information">
              <div class="packages__info">
                <h3 class="packages__subtitle">Hotel Five Star</h3>
                <div class="descr">
                  <div class="packages__text">
                    <img
                      src="img/map-pin.svg"
                      alt="Icon: map-pin"
                      class="packages__icon"
                    />
                    <span class="packages__description"
                      >1749 Wheeler Ridge Delaware</span
                    >
                  </div>
                  <div class="packages__text">
                    <img
                      src="img/user.svg"
                      alt="Icon: user"
                      class="packages__icon"
                    />
                    <span class="packages__description">2 x Guests</span>
                  </div>
                  <div class="packages__text">
                    <img
                      src="img/home.svg"
                      alt="Icon: home"
                      class="packages__icon"
                    />
                    <span class="packages__description">1 x Room</span>
                  </div>
                </div>
                <span class="packages__last-price">$ 6,500</span>
              </div>
              <!-- info -->
              <div class="packages__price">
                <strong class="packages__new-price">$ 3,500</strong>
                <button class="button packages__button">Book Now</button>
              </div>
              <!-- /.package__price -->
            </div>
            <!-- /. packages__information-->
          </div>
        </div>
      </div>
      <!-- /.container -->
    </section>
    <section
      class="newsletter parallax-window"
      data-parallax="scroll"
      data-speed="0.5"
      data-image-src="img/newsletter-bg.jpg"
    >
      <div class="newsletter-wrapper">
        <h2 class="newsletter-title newsletter__title">
          subscribe to our
          <span class="newsletter-title__strong">Newsletter</span>
        </h2>
        <form action="#" class="subscribe newsletter__subscribe">
          <input
            type="text"
            class="subscribe__input"
            placeholder="Your email address"
          />
          <button class="subscribe__button">Send</button>
        </form>
      </div>
      <!-- /.newsletter-wrapper -->
    </section>
    <section class="reviews">
      <div class="container">
        <h2 class="reviews__title">What people think about us</h2>
        <div class="swiper-container reviews-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="reviews-slider__item">
                <div class="reviews-slider__profile">
                  <img
                    src="img/reviews-avatar.jfif"
                    alt="Photo: Megan Fox"
                    class="reviews-slider__avatar"
                  />
                  <h3 class="reviews-slider__user-name">Megan Fox</h3>
                  <span class="reviews-slider__date">Stayed 18 Nov, 2019</span>
                  <div class="reviews-slider__rating">
                    <img src="img/Star.svg" alt="star" />
                    <img src="img/Star.svg" alt="star" />
                    <img src="img/Star.svg" alt="star" />
                    <img src="img/Star.svg" alt="star" />
                    <img src="img/Star.svg" alt="star" />
                  </div>
                  <!-- /.reviews-slider__rating -->
                </div>
                <!-- /.reviews-slider__profile -->
                <p class="reviews-slider__text">
                  It was very nice hotel with cleanliness. Staff behavior was
                  good and polite. They welcome us very well. Issue was only
                  that Lift was not in working and we were allotted to 3rd floor
                  and amenities articles were in corner of gallery which were
                  giving bad feeling. Breakfast was good and support of the
                  staff was also very nice. Location is not good as per
                  atmosphere, it is very nearby most of the popular places but
                  self location in a narrow street is not good. Overall it was a
                  good experience and could recommend.
                </p>
              </div>
              <!-- /.reviews-slider__item -->
            </div>
            <!-- /.swiper-slide -->
            <div class="swiper-slide">
              <div class="reviews-slider__item">
                <div class="reviews-slider__profile">
                  <img
                    src="img/reviews-avatar-2.jfif"
                    alt="Photo: Megan Fox"
                    class="reviews-slider__avatar"
                  />
                  <h3 class="reviews-slider__user-name">Barbara Richardson</h3>
                  <span class="reviews-slider__date">Stayed 23 Oct, 2019</span>
                  <div class="reviews-slider__rating">
                    <img src="img/Star.svg" alt="star" />
                    <img src="img/Star.svg" alt="star" />
                    <img src="img/Star.svg" alt="star" />
                    <img src="img/Star.svg" alt="star" />
                    <img src="img/Star.svg" alt="star" />
                  </div>
                  <!-- /.reviews-slider__rating -->
                </div>
                <!-- /.reviews-slider__profile -->
                <p class="reviews-slider__text">
                  It was very nice hotel with cleanliness. Staff behavior was
                  good and polite. They welcome us very well. Issue was only
                  that Lift was not in working and we were allotted to 3rd floor
                  and amenities articles were in corner of gallery which were
                  giving bad feeling. They welcome us very well. Issue was only
                  that Lift was not in working and we were allotted to 3rd floor
                  and amenities articles were in corner of gallery which were
                  giving bad feeling.
                </p>
              </div>
              <!-- /.reviews-slider__item -->
            </div>
            <!-- /.swiper-slide -->
          </div>
          <!-- /.swiper-wrapper -->
          <button
            class="reviews-slider__button reviews-slider__button--prev"
          ></button>
          <button
            class="reviews-slider__button reviews-slider__button--next"
          ></button>
        </div>
        <!-- /.reviews-slider -->
      </div>
      <!-- /.container -->
    </section>
    <section class="activities">
      <div class="container">
        <h2 class="activities__title">Other Activities</h2>
        <div class="activities-wrapper">
          <div class="card activities__card">
            <img
              src="img/activity-1.jpg"
              alt="The curious corner 
            of chamarel"
              class="card__image"
            />
            <h3 class="card__title">The curious corner of chamarel</h3>
            <button class="card__button">Book Now</button>
          </div>
          <!-- /.card -->
          <div class="card activities__card">
            <img
              src="img/activity-2.jpg"
              alt="Gymkhana club golf
            course"
              class="card__image"
            />
            <h3 class="card__title">Gymkhana club golf course</h3>
            <button class="card__button">Book Now</button>
          </div>
          <!-- /.card -->
          <div class="card activities__card">
            <img
              src="img/activity-3.jpg"
              alt="Tamarind falls hiking trip - full day"
              class="card__image"
            />
            <h3 class="card__title">Tamarind falls hiking trip - full day</h3>
            <button class="card__button">Book Now</button>
          </div>
          <!-- /.card -->
          <div class="card activities__card">
            <img
              src="img/activity-4.jpg"
              alt="The blue marine discovery
            quest"
              class="card__image"
            />
            <h3 class="card__title">The blue marine discovery quest</h3>
            <button class="card__button">Book Now</button>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.activities-wrapper -->
      </div>
      <!-- /.container -->
    </section>
    <div class="modal" id="booking-modal">
      <div class="modal__overlay"></div>
      <!-- /.modal__overlay -->
      <div class="modal__dialog">
        <a href="#" class="modal__close">
          <img src="img/close.svg" alt="Icon: close">
        </a>
        <h3 class="modal__title modal__title--mb-3">Send us a message</h3>
            <form action="send.php" method="POST" class="modal__form">
              <input
                type="text"
                class="input modal__input"
                placeholder="Your Full Name*"
                name="name"
              />
              <input
                type="text"
                class="input modal__input"
                placeholder="Phone Number*"
                name="phone"
              />
              <textarea
                class="message modal__message"
                placeholder="Message"
                name="message"
              ></textarea>
              <button class="button modal__button" type="submit">Send</button>
              <span class="modal__info">* Required Fields</span>
            </form>
      </div>
      <!-- /.modal__dialog -->
    </div>
    <!-- /.modal -->
    <div class="modal" id="rating-modal">
      <div class="modal__overlay"></div>
      <!-- /.modal__overlay -->
      <div class="modal__dialog">
        <a href="#" class="modal__close">
          <img src="img/close.svg" alt="Icon: close">
        </a>
        <h3 class="modal__title modal__title--mb-3">Send us a feedback</h3>
            <form action="send.php" method="POST" class="modal__form">
              <input
                type="text"
                class="input modal__input"
                placeholder="Your Full Name*"
                name="name"
              />
              <input
                type="text"
                class="input modal__input"
                placeholder="Phone Number*"
                name="phone"
              />
              <textarea
                class="message modal__message"
                placeholder="Message"
                name="message"
              ></textarea>
              <button class="button modal__button" type="submit">Send</button>
              <span class="modal__info">* Required Fields</span>
            </form>
      </div>
      <!-- /.modal__dialog -->
    </div>
    <!-- /.modal -->
<?php include('footer.php') ?>