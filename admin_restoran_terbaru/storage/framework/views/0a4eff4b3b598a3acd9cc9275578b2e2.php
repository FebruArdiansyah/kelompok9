

<?php $__env->startSection('content'); ?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div
      class="container position-relative text-center text-lg-start"
      data-aos="zoom-in"
      data-aos-delay="100"
    >
      <div class="row">
        <div class="col-lg-8">
          <h1>Welcome to <span>Restaurantly</span></h1>
          <h2>Delivering great food for more than 18 years!</h2>

          <div class="btns">
            <a href="https://wa.me/6282113862854" class="btn-menu animated fadeInUp scrollto">Ask me</a>
            <a id="tombol"
              href="<?php echo e(route('layouts.reservasi')); ?>"
              class="btn-book animated fadeInUp scrollto"
              >Book a Table</a>
          </div>
        </div>
        <div
          class="col-lg-4 d-flex align-items-center justify-content-center position-relative"
          data-aos="zoom-in"
          data-aos-delay="200"
        >
          <a
            href="https://www.youtube.com/watch?v=GlrxcuEDyF8"
            class="glightbox play-btn"
          ></a>
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero -->

  <!-- ======= Why Us Section ======= -->
  <section id="why-us" class="why-us">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>Why Us</h2>
        <p>Why Choose Our Restaurant</p>
      </div>

      <div class="row">
        <div class="col-lg-4">
          <div class="box" data-aos="zoom-in" data-aos-delay="100">
            <span>01</span>
            <h4>Kombinasi Cita Rasa Klasik dan Kontemporer:</h4>
            <p>
              Han`s Restoran memadukan cita rasa klasik Belanda dengan
              teknik memasak kontemporer, memberikan sentuhan modern pada
              hidangan tradisional. Ini menciptakan pengalaman kuliner yang
              menarik dan berbeda.
            </p>
          </div>
        </div>

        <div class="col-lg-4 mt-4 mt-lg-0">
          <div class="box" data-aos="zoom-in" data-aos-delay="200">
            <span>02</span>
            <h4>Kualitas Bahan dan Keahlian Kuliner</h4>
            <p>
              Setiap hidangan di Han`s Restoran disusun dengan bahan
              berkualitas tinggi dan dipilih secara cermat, mempersembahkan
              rasa otentik dari warisan kuliner Belanda. Kombinasi ini
              dengan keahlian kuliner yang tinggi menciptakan hidangan yang
              luar biasa.
            </p>
          </div>
        </div>

        <div class="col-lg-4 mt-4 mt-lg-0">
          <div class="box" data-aos="zoom-in" data-aos-delay="300">
            <span>03</span>
            <h4>Pelayanan Berkualitas</h4>
            <p>
              Han`s Restoran bangga memberikan pelayanan terbaik kepada
              setiap tamu. Staf mereka yang ramah dan berpengetahuan siap
              membantu Anda dalam memilih hidangan terbaik dan menjawab
              setiap pertanyaan tentang menu.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Why Us Section -->


  <!-- ======= Book A Table Section ======= -->

  <section id="book-a-table" class="book-a-table">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>Reservation</h2>
        <p>Book a Table</p>
      </div>

      <form
        action="forms/book-a-table.php"
        method="post"
        role="form"
        class="php-email-form"
        data-aos="fade-up"
        data-aos-delay="100"
      >
        <div class="row">
          <div class="col-lg-4 col-md-6 form-group">
            <input
              type="text"
              name="name"
              class="form-control"
              id="name"
              placeholder="Your Name"
              data-rule="minlen:4"
              data-msg="Please enter at least 4 chars"
            />
            <div class="validate"></div>
          </div>
          <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
            <input
              type="email"
              class="form-control"
              name="email"
              id="email"
              placeholder="Your Email"
              data-rule="email"
              data-msg="Please enter a valid email"
            />
            <div class="validate"></div>
          </div>
          <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
            <input
              type="text"
              class="form-control"
              name="phone"
              id="phone"
              placeholder="Your Phone"
              data-rule="minlen:4"
              data-msg="Please enter at least 4 chars"
            />
            <div class="validate"></div>
          </div>
          <div class="col-lg-4 col-md-6 form-group mt-3">
            <input
              type="text"
              name="date"
              class="form-control"
              id="date"
              placeholder="Date"
              data-rule="minlen:4"
              data-msg="Please enter at least 4 chars"
            />
            <div class="validate"></div>
          </div>
          <div class="col-lg-4 col-md-6 form-group mt-3">
            <input
              type="text"
              class="form-control"
              name="time"
              id="time"
              placeholder="Time"
              data-rule="minlen:4"
              data-msg="Please enter at least 4 chars"
            />
            <div class="validate"></div>
          </div>
          <div class="col-lg-4 col-md-6 form-group mt-3">
            <input
              type="number"
              class="form-control"
              name="people"
              id="people"
              placeholder="# of people"
              data-rule="minlen:1"
              data-msg="Please enter at least 1 chars"
            />
            <div class="validate"></div>
          </div>
        </div>
        <div class="form-group mt-3">
          <textarea
            class="form-control"
            name="message"
            rows="5"
            placeholder="Message"
          ></textarea>
          <div class="validate"></div>
        </div>
        <div class="mb-3">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">
            Your booking request was sent. We will call back or send an
            Email to confirm your reservation. Thank you!
          </div>
        </div>
        <div class="text-center">
          <button type="submit">Book a Table</button>
        </div>
      </form>
    </div>
  </section>
  <!-- End Book A Table Section -->


  
  <!-- ======= Chefs Section ======= -->
  <section id="chefs" class="chefs">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>Chefs</h2>
        <p>Our Proffesional Chefs</p>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="member" data-aos="zoom-in" data-aos-delay="100">
            <img
              id="p"
              src="frontend/assets/img/chefs/king-abdi.png"
              class="img-fluid"
              alt=""
            />
            <div class="member-info">
              <div class="member-info-content">
                <h4>King Abdi</h4>
                <span>Master Chef</span>
              </div>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="member" data-aos="zoom-in" data-aos-delay="200">
            <img
              id="p"
              src="frontend/assets/img/chefs/chefs4.png"
              class="img-fluid"
              alt=""
            />
            <div class="member-info">
              <div class="member-info-content">
                <h4>Samuel Siraij</h4>
                <span>Patissier</span>
              </div>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="member" data-aos="zoom-in" data-aos-delay="300">
            <img
              id="r"
              src="frontend/assets/img/chefs/renata.png"
              class="img-fluid"
              alt=""
            />
            <div class="member-info">
              <div class="member-info-content">
                <h4>Renata</h4>
                <span>Cook</span>
              </div>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Chefs Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Us</p>
      </div>
    </div>

    <div data-aos="fade-up">
      <iframe
        style="border: 0; width: 100%; height: 350px"
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
        frameborder="0"
        allowfullscreen
      ></iframe>
    </div>

    <div class="container" data-aos="fade-up">
      <div class="row mt-5">
        <div class="col-lg-4">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p>A108 Adam Street, New York, NY 535022</p>
            </div>

            <div class="open-hours">
              <i class="bi bi-clock"></i>
              <h4>Open Hours:</h4>
              <p>
                Monday-Saturday:<br />
                11:00 AM - 2300 PM
              </p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>info@example.com</p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>+1 5589 55488 55s</p>
            </div>
          </div>
        </div>

        <div class="col-lg-8 mt-5 mt-lg-0">
          <form
            action="forms/contact.php"
            method="post"
            role="form"
            class="php-email-form"
          >
            <div class="row">
              <div class="col-md-6 form-group">
                <input
                  type="text"
                  name="name"
                  class="form-control"
                  id="name"
                  placeholder="Your Name"
                  required
                />
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input
                  type="email"
                  class="form-control"
                  name="email"
                  id="email"
                  placeholder="Your Email"
                  required
                />
              </div>
            </div>
            <div class="form-group mt-3">
              <input
                type="text"
                class="form-control"
                name="subject"
                id="subject"
                placeholder="Subject"
                required
              />
            </div>
            <div class="form-group mt-3">
              <textarea
                class="form-control"
                name="message"
                rows="8"
                placeholder="Message"
                required
              ></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">
                Your message has been sent. Thank you!
              </div>
            </div>
            <div class="text-center">
              <button type="submit">Send Message</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->
</main>
<!-- End #main -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/frontend/index.blade.php ENDPATH**/ ?>