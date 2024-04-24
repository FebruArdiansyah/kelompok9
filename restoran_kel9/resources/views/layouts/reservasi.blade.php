<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Landing Page Reservasi</title>
    <link rel="stylesheet" href="frontend/assets/css/reservasi.css" />
  </head>

  <body>
    <div class="reservasi-container">
      <div class="reservasi-content">
        <div class="reservasi-text">
          <h2>Han's Restaurant</h2>
          <p>Isi form di bawah ini jika tertarik dengan produk kami</p>
        </div>
        <div class="Ordercontainer">
          <form data-aos="zoom-in-down" class="Order" action="#" method="POST">
            <div class="horizontal-input">
              <label for="">Nama Lengkap :</label>
              <input
                type="text"
                class="form-control"
                placeholder="Masukan nama lengkap"
                required
              />
            </div>
            <div class="horizontal-input">
              <label for="">Nomor Telfon :</label>
              <input
                type="tel"
                class="form-control"
                placeholder="08xxxxxxxxxx"
                required
                maxlength="13"
              />
            </div>
            <div class="horizontal-input">
              <label for="">Gmail :</label>
              <input
                type="email"
                class="form-control"
                placeholder="Your Gmail"
                required
              />
            </div>
            <div class="horizontal-input">
              <label for="jam" class="form-label">Jam</label>
              <input type="time" class="form-control" id="jam" />
            </div>
            <div class="horizontal-input">
              <label for="paket">Paket :</label>
              <select id="paket" class="form-control" required>
                <option value="">Pilih Paket</option>
                <option value="p1">Paket 1</option>
                <option value="p2">Paket 2</option>
                <option value="p3">Paket 3</option>
              </select>
            </div>
            <div class="horizontal-input">
              <label for="jumlah_orang" class="form-label">Jumlah Orang</label>
              <select class="form-control" id="jumlah_orang">
                <option value="1">1 orang</option>
                <option value="2">2 orang</option>
                <option value="3">3 orang</option>
                <option value="4">4 orang</option>
                <option value="5">5 orang</option>
              </select>
            </div>
            <div class="horizontal-input">
              <label for="">Tanggal order:</label>
              <input type="date" class="form-control" required />
            </div>
            <div id="menuContainer" style="display: none">
              <div class="horizontal-input">
                <label for="menu">Pilihan Menu Makanan :</label>
                <select id="menu" class="form-control" required>
                  <option value="">Pilih Menu</option>
                  <option value="menu1">Menu 1</option>
                  <option value="menu2">Menu 2</option>
                  <option value="menu3">Menu 3</option>
                </select>
              </div>
            </div>
            <div id="menuContainer">
              <div class="horizontal-input">
                <label for="menu">Pilihan Menu Makanan :</label>
                <select id="menu" class="form-control" required>
                  <option value="">Pilih Menu</option>
                  <option value="menu1">Menu 1</option>
                  <option value="menu2">Menu 2</option>
                  <option value="menu3">Menu 3</option>
                </select>
              </div>
            </div>
            <button data-aos="fade-up" class="butOn">Kirim</button>
          </form>
        </div>
      </div>
      <div class="reservasi-img">
        <img src="frontend/assets/img/image.png" alt="resto" />
      </div>
    </div>

    <script src="javascript/javascript.js"></script>

    <!-- <div class="reservation-form">
    <section class="sec-form-reservation"><div class="container"><div class="wrap-title"><h4>RESERVATION</h4> <p class="subtitle text-label"><span> SCBD </span></p> <p>
        1. Kindly enter the number of guests expected to attend. We cannot
        guarantee seat availability upon arrival if the actual number
        differs from what you have entered.
      </p> <p>
        2. A maximum wait period of 15 minutes is allowed. If you go beyond
        this time and we are unable to reach you, the reserved seat may be
        released.
      </p> <p>
        3. For reservations with more than 15 people, please make the
        reservation directly via WhatsApp in
        <span class="text-gold"><a href="" target="_blank">here</a></span>.
      </p></div> <div class="wrap-content"><form enctype="multipart/form-data" action="#" autocomplete="off"><div class="row"><div class="col-lg-4 col-6 col-sm-6"><div class="form-group"><label for="First Name" class="label required">First Name</label> <input type="text" placeholder="Your First Name" class="form-control form-custom"></div></div> <div class="col-lg-4 col-6 col-sm-6"><div class="form-group"><label for="Last Name" class="label required">Last Name</label> <input type="text" placeholder="Your Last Name" class="form-control form-custom"></div></div> <div class="col-lg-4 col-12 col-sm-6"><div class="form-group position-relative"><label for="phone" class="label required">Phone</label> <div class="input-group mb-3"><div class="input-group-prepend form-custom rounded-t px-3 d-flex align-items-center custom-close-button"><div><span>
                      🇮🇩
                      +62
                    </span></div></div> <input type="text" placeholder="Your Phone Number" class="form-control form-custom"></div> <div class="phone-cc" style="display: none;"><input type="text" placeholder="Country name" class="form-control form-custom-search"> <span>
                  🇮🇩
                  +62&nbsp;
                  Indonesia
                </span>
            </div>
        </div>
    </div> -->

    <!-- <div class="col-lg-4 col-12 col-sm-6">
        <div class="form-group">
            <label for="gmail" class="label required">Email</label> 
            <input type="text" placeholder="Your Gmail" class="form-control form-custom">
        </div>
    </div> -->

    <!--  <div class="col-lg-4 col-12 col-sm-6">
        <div class="form-group"><label for="date" class="label required">Date</label> 
            <div class="group-icon"><span>
                <img src="/_nuxt/img/calendar2.98fec62.svg" alt="time" class="img-fluid"></span> 
                <input type="text" placeholder="Your Date" readonly="readonly" class="form-control form-custom input-times">
            </div> -->

    <!-- <div data-helptext="Press the arrow keys to navigate by day, Home and End to navigate to week ends, PageUp and PageDown to navigate by month, Alt+PageUp and Alt+PageDown to navigate by year" class="calendar vc-container vc-blue" style="display: none !important;"><div data-v-39b30300="" class="vc-popover-content-wrapper"></div>
             <div class="vc-pane-container"><div data-v-5be4b00c="" class="vc-pane-layout" style="grid-template-columns: repeat(1, 1fr);"><div data-v-74ad501d="" class="vc-pane row-from-end-1 column-from-end-1"><div data-v-74ad501d="" class="vc-header align-center"><div data-v-74ad501d="" class="vc-title">April 2024</div></div>
             <div data-v-74ad501d="" class="vc-weeks"><div data-v-74ad501d="" class="vc-weekday">S</div>
             <div data-v-74ad501d="" class="vc-weekday">M</div>
             <div data-v-74ad501d="" class="vc-weekday">T</div>
             <div data-v-74ad501d="" class="vc-weekday">W</div>
             <div data-v-74ad501d="" class="vc-weekday">T</div>
             <div data-v-74ad501d="" class="vc-weekday">F</div>
             <div data-v-74ad501d="" class="vc-weekday">S</div><div data-v-4420d078="" data-v-74ad501d="" class="vc-day id-2024-03-31 day-31 day-from-end-1 weekday-1 weekday-position-1 weekday-ordinal-5 weekday-ordinal-from-end-1 week-6 week-from-end-1 in-prev-month on-top on-left vc-day-box-center-center is-not-in-month"><span data-v-4420d078="" aria-label="Sunday, March 31, 2024" aria-disabled="true" role="button" class="vc-day-content vc-focusable is-disabled">31</span>
            </div> -->

    <!-- <div data-v-4420d078="" data-v-74ad501d="" class="vc-day id-2024-04-01 day-1 day-from-end-30 weekday-2 weekday-position-2 weekday-ordinal-1 weekday-ordinal-from-end-5 week-1 week-from-end-5 is-first-day in-month on-top vc-day-box-center-center"><span data-v-4420d078="" tabindex="-1" aria-label="Monday, April 1, 2024" aria-disabled="true" role="button" class="vc-day-content vc-focusable is-disabled">1</span>
            </div>
            <div data-v-4420d078="" data-v-74ad501d="" class="vc-day id-2024-04-02 day-2 day-from-end-29 weekday-3 weekday-position-3 weekday-ordinal-1 weekday-ordinal-from-end-5 week-1 week-from-end-5 in-month on-top vc-day-box-center-center">
                <span data-v-4420d078="" tabindex="-1" aria-label="Tuesday, April 2, 2024" aria-disabled="true" role="button" class="vc-day-content vc-focusable is-disabled">2</span>
            </div>
            <div data-v-4420d078="" data-v-74ad501d="" class="vc-day id-2024-04-03 day-3 day-from-end-28 weekday-4 weekday-position-4 weekday-ordinal-1 weekday-ordinal-from-end-4 week-1 week-from-end-5 in-month on-top vc-day-box-center-center">
                <span data-v-4420d078="" tabindex="-1" aria-label="Wednesday, April 3, 2024" aria-disabled="true" role="button" class="vc-day-content vc-focusable is-disabled">3</span>
            </div>
            <div data-v-4420d078="" data-v-74ad501d="" class="vc-day id-2024-04-04 day-4 day-from-end-27 weekday-5 weekday-position-5 weekday-ordinal-1 weekday-ordinal-from-end-4 week-1 week-from-end-5 in-month on-top vc-day-box-center-center">
                <span data-v-4420d078="" tabindex="-1" aria-label="Thursday, April 4, 2024" aria-disabled="true" role="button" class="vc-day-content vc-focusable is-disabled">4</span>
            </div>
            <div data-v-4420d078="" data-v-74ad501d="" class="vc-day id-2024-04-05 day-5 day-from-end-26 weekday-6 weekday-position-6 weekday-ordinal-1 weekday-ordinal-from-end-4 week-1 week-from-end-5 in-month on-top vc-day-box-center-center">
                <span data-v-4420d078="" tabindex="-1" aria-label="Friday, April 5, 2024" aria-disabled="true" role="button" class="vc-day-content vc-focusable is-disabled">5</span>
            </div>
            <div data-v-4420d078="" data-v-74ad501d="" class="vc-day id-2024-04-06 day-6 day-from-end-25 weekday-7 weekday-position-7 weekday-ordinal-1 weekday-ordinal-from-end-4 week-1 week-from-end-5 in-month on-top on-right vc-day-box-center-center">
                <span data-v-4420d078="" tabindex="-1" aria-label="Saturday, April 6, 2024" aria-disabled="true" role="button" class="vc-day-content vc-focusable is-disabled">6</span>
            </div>
            <div data-v-4420d078="" data-v-74ad501d="" class="vc-day id-2024-04-07 day-7 day-from-end-24 weekday-1 weekday-position-1 weekday-ordinal-1 weekday-ordinal-from-end-4 week-2 week-from-end-4 in-month on-left vc-day-box-center-center">
                <span data-v-4420d078="" tabindex="-1" aria-label="Sunday, April 7, 2024" aria-disabled="true" role="button" class="vc-day-content vc-focusable is-disabled">7</span>
            </div>
            <div data-v-4420d078="" data-v-74ad501d="" class="vc-day id-2024-04-08 day-8 day-from-end-23 weekday-2 weekday-position-2 weekday-ordinal-2 weekday-ordinal-from-end-4 week-2 week-from-end-4 in-month vc-day-box-center-center">
                <span data-v-4420d078="" tabindex="-1" aria-label="Monday, April 8, 2024" aria-disabled="true" role="button" class="vc-day-content vc-focusable is-disabled">8</span>
            </div>
            <div data-v-4420d078="" data-v-74ad501d="" class="vc-day id-2024-04-09 day-9 day-from-end-22 weekday-3 weekday-position-3 weekday-ordinal-2 weekday-ordinal-from-end-4 week-2 week-from-end-4 in-month vc-day-box-center-center">
                <span data-v-4420d078="" tabindex="-1" aria-label="Tuesday, April 9, 2024" aria-disabled="true" role="button" class="vc-day-content vc-focusable is-disabled">9</span>
            </div>
            <div data-v-4420d078="" data-v-74ad501d="" class="vc-day id-2024-04-10 day-10 day-from-end-21 weekday-4 weekday-position-4 weekday-ordinal-2 weekday-ordinal-from-end-3 week-2 week-from-end-4 in-month vc-day-box-center-center">
                <span data-v-4420d078="" tabindex="-1" aria-label="Wednesday, April 10, 2024" aria-disabled="true" role="button" class="vc-day-content vc-focusable is-disabled">10</span>
            </div>
            <div data-v-4420d078="" data-v-74ad501d="" class="vc-day id-2024-04-11 day-11 day-from-end-20 weekday-5 weekday-position-5 weekday-ordinal-2 weekday-ordinal-from-end-3 week-2 week-from-end-4 in-month vc-day-box-center-center">
                    <span data-v-4420d078="" tabindex="-1" aria-label="Thursday, April 11, 2024" aria-disabled="true" role="button" class="vc-day-content vc-focusable is-disabled">11</span>
                </div>
                <div data-v-4420d078="" data-v-74ad501d="" class="vc-day id-2024-04-12 day-12 day-from-end-19 weekday-6 weekday-position-6 weekday-ordinal-2 weekday-ordinal-from-end-3 week-2 week-from-end-4 is-today in-month vc-day-box-center-center">
                    <span data-v-4420d078="" tabindex="0" aria-label="Friday, April 12, 2024" aria-disabled="false" role="button" class="vc-day-content vc-focusable">12</span>
                </div>
                <div data-v-4420d078="" data-v-74ad501d="" class="vc-day id-2024-04-13 day-13 day-from-end-18 weekday-7 weekday-position-7 weekday-ordinal-2 weekday-ordinal-from-end-3 week-2 week-from-end-4 in-month on-right vc-day-box-center-center">
                    <span data-v-4420d078="" tabindex="-1" aria-label="Saturday, April 13, 2024" aria-disabled="false" role="button" class="vc-day-content vc-focusable">13</span>
                </div>
                <div data-v-4420d078="" data-v-74ad501d="" class="vc-day id-2024-04-14 day-14 day-from-end-17 weekday-1 weekday-position-1 weekday-ordinal-2 weekday-ordinal-from-end-3 week-3 week-from-end-3 in-month on-left vc-day-box-center-center">
                    <span data-v-4420d078="" tabindex="-1" aria-label="Sunday, April 14, 2024" aria-disabled="false" role="button" class="vc-day-content vc-focusable">14</span>
                </div>
                <div data-v-4420d078="" data-v-74ad501d="" class="vc-day id-2024-04-15 day-15 day-from-end-16 weekday-2 weekday-position-2 weekday-ordinal-3 weekday-ordinal-from-end-3 week-3 week-from-end-3 in-month vc-day-box-center-center">
                    <span data-v-4420d078="" tabindex="-1" aria-label="Monday, April 15, 2024" aria-disabled="false" role="button" class="vc-day-content vc-focusable">15</span>
                </div>
                <div data-v-4420d078="" data-v-74ad501d="" class="vc-day id-2024-04-16 day-16 day-from-end-15 weekday-3 weekday-position-3 weekday-ordinal-3 weekday-ordinal-from-end-3 week-3 week-from-end-3 in-month vc-day-box-center-center">
                    <span data-v-4420d078="" tabindex="-1" aria-label="Tuesday, April 16, 2024" aria-disabled="false" role="button" class="vc-day-content vc-focusable">16</span>
                </div>
                <div data-v-4420d078="" data-v-74ad501d="" class="vc-day id-2024-04-17 day-17 day-from-end-14 weekday-4 weekday-position-4 weekday-ordinal-3 weekday-ordinal-from-end-2 week-3 week-from-end-3 in-month vc-day-box-center-center">
                    <span data-v-4420d078="" tabindex="-1" aria-label="Wednesday, April 17, 2024" aria-disabled="false" role="button" class="vc-day-content vc-focusable">17</span>
                </div>
                <div data-v-4420d078="" data-v-74ad501d="" class="vc-day id-2024-04-18 day-18 day-from-end-13 weekday-5 weekday-position-5 weekday-ordinal-3 weekday-ordinal-from-end-2 week-3 week-from-end-3 in-month vc-day-box-center-center">
                    <span data-v-4420d078="" tabindex="-1" aria-label="Thursday, April 18, 2024" aria-disabled="false" role="button" class="vc-day-content vc-focusable">18</span>
                </div>
                <div data-v-4420d078="" data-v-74ad501d="" class="vc-day id-2024-04-19 day-19 day-from-end-12 weekday-6 weekday-position-6 weekday-ordinal-3 weekday-ordinal-from-end-2 week-3 week-from-end-3 in-month vc-day-box-center-center">
                    <span data-v-4420d078="" tabindex="-1" aria-label="Friday, April 19, 2024" aria-disabled="false" role="button" class="vc-day-content vc-focusable">19</span>
                </div>
                <div data-v-4420d078="" data-v-74ad501d="" class="vc-day id-2024-04-20 day-20 day-from-end-11 weekday-7 weekday-position-7 weekday-ordinal-3 weekday-ordinal-from-end-2 week-3 week-from-end-3 in-month on-right vc-day-box-center-center">
                    <span data-v-4420d078="" tabindex="-1" aria-label="Saturday, April 20, 2024" aria-disabled="false" role="button" class="vc-day-content vc-focusable">20</span>
                </div>
                <div data-v-4420d078="" data-v-74ad501d="" class="vc-day id-2024-04-21 day-21 day-from-end-10 weekday-1 weekday-position-1 weekday-ordinal-3 weekday-ordinal-from-end-2 week-4 week-from-end-2 in-month on-left vc-day-box-center-center">
                    <span data-v-4420d078="" tabindex="-1" aria-label="Sunday, April 21, 2024" aria-disabled="false" role="button" class="vc-day-content vc-focusable">21</span>
                </div>
                <div data-v-4420d078="" data-v-74ad501d="" class="vc-day id-2024-04-22 day-22 day-from-end-9 weekday-2 weekday-position-2 weekday-ordinal-4 weekday-ordinal-from-end-2 week-4 week-from-end-2 in-month vc-day-box-center-center">
                    <span data-v-4420d078="" tabindex="-1" aria-label="Monday, April 22, 2024" aria-disabled="false" role="button" class="vc-day-content vc-focusable">22</span>
                </div>
                <div data-v-4420d078="" data-v-74ad501d="" class="vc-day id-2024-04-23 day-23 day-from-end-8 weekday-3 weekday-position-3 weekday-ordinal-4 weekday-ordinal-from-end-2 week-4 week-from-end-2 in-month vc-day-box-center-center">
                    <span data-v-4420d078="" tabindex="-1" aria-label="Tuesday, April 23, 2024" aria-disabled="false" role="button" class="vc-day-content vc-focusable">23</span>
                </div>
                <div data-v-4420d078="" data-v-74ad501d="" class="vc-day id-2024-04-24 day-24 day-from-end-7 weekday-4 weekday-position-4 weekday-ordinal-4 weekday-ordinal-from-end-1 week-4 week-from-end-2 in-month vc-day-box-center-center">
                    <span data-v-4420d078="" tabindex="-1" aria-label="Wednesday, April 24, 2024" aria-disabled="false" role="button" class="vc-day-content vc-focusable">24</span>
                </div>
                <div data-v-4420d078="" data-v-74ad501d="" class="vc-day id-2024-04-25 day-25 day-from-end-6 weekday-5 weekday-position-5 weekday-ordinal-4 weekday-ordinal-from-end-1 week-4 week-from-end-2 in-month vc-day-box-center-center">
                    <span data-v-4420d078="" tabindex="-1" aria-label="Thursday, April 25, 2024" aria-disabled="false" role="button" class="vc-day-content vc-focusable">25</span>
                </div>
                <div data-v-4420d078="" data-v-74ad501d="" class="vc-day id-2024-04-26 day-26 day-from-end-5 weekday-6 weekday-position-6 weekday-ordinal-4 weekday-ordinal-from-end-1 week-4 week-from-end-2 in-month vc-day-box-center-center">
                    <span data-v-4420d078="" tabindex="-1" aria-label="Friday, April 26, 2024" aria-disabled="false" role="button" class="vc-day-content vc-focusable">26</span>
                </div>
                <div data-v-4420d078="" data-v-74ad501d="" class="vc-day id-2024-04-27 day-27 day-from-end-4 weekday-7 weekday-position-7 weekday-ordinal-4 weekday-ordinal-from-end-1 week-4 week-from-end-2 in-month on-right vc-day-box-center-center">
                    <span data-v-4420d078="" tabindex="-1" aria-label="Saturday, April 27, 2024" aria-disabled="false" role="button" class="vc-day-content vc-focusable">27</span>
                </div>
                <div data-v-4420d078="" data-v-74ad501d="" class="vc-day id-2024-04-28 day-28 day-from-end-3 weekday-1 weekday-position-1 weekday-ordinal-4 weekday-ordinal-from-end-1 week-5 week-from-end-1 in-month on-left vc-day-box-center-center">
                        <span data-v-4420d078="" tabindex="-1" aria-label="Sunday, April 28, 2024" aria-disabled="false" role="button" class="vc-day-content vc-focusable">28</span>
                    </div>
                    <div data-v-4420d078="" data-v-74ad501d="" class="vc-day id-2024-04-29 day-29 day-from-end-2 weekday-2 weekday-position-2 weekday-ordinal-5 weekday-ordinal-from-end-1 week-5 week-from-end-1 in-month vc-day-box-center-center">
                        <span data-v-4420d078="" tabindex="-1" aria-label="Monday, April 29, 2024" aria-disabled="false" role="button" class="vc-day-content vc-focusable">29</span>
                    </div>
                    <div data-v-4420d078="" data-v-74ad501d="" class="vc-day id-2024-04-30 day-30 day-from-end-1 weekday-3 weekday-position-3 weekday-ordinal-5 weekday-ordinal-from-end-1 week-5 week-from-end-1 is-last-day in-month vc-day-box-center-center">
                        <span data-v-4420d078="" tabindex="-1" aria-label="Tuesday, April 30, 2024" aria-disabled="false" role="button" class="vc-day-content vc-focusable">30</span>
                    </div>
                    <div data-v-4420d078="" data-v-74ad501d="" class="vc-day id-2024-05-01 day-1 day-from-end-31 weekday-4 weekday-position-4 weekday-ordinal-1 weekday-ordinal-from-end-5 week-1 week-from-end-5 in-next-month vc-day-box-center-center is-not-in-month">
                        <span data-v-4420d078="" aria-label="Wednesday, May 1, 2024" aria-disabled="false" role="button" class="vc-day-content vc-focusable">1</span>
                    </div>
                    <div data-v-4420d078="" data-v-74ad501d="" class="vc-day id-2024-05-02 day-2 day-from-end-30 weekday-5 weekday-position-5 weekday-ordinal-1 weekday-ordinal-from-end-5 week-1 week-from-end-5 in-next-month vc-day-box-center-center is-not-in-month">
                        <span data-v-4420d078="" aria-label="Thursday, May 2, 2024" aria-disabled="false" role="button" class="vc-day-content vc-focusable">2</span>
                    </div>
                    <div data-v-4420d078="" data-v-74ad501d="" class="vc-day id-2024-05-03 day-3 day-from-end-29 weekday-6 weekday-position-6 weekday-ordinal-1 weekday-ordinal-from-end-4 week-1 week-from-end-5 in-next-month vc-day-box-center-center is-not-in-month">
                        <span data-v-4420d078="" aria-label="Friday, May 3, 2024" aria-disabled="false" role="button" class="vc-day-content vc-focusable">3</span>
                    </div>
                    <div data-v-4420d078="" data-v-74ad501d="" class="vc-day id-2024-05-04 day-4 day-from-end-28 weekday-7 weekday-position-7 weekday-ordinal-1 weekday-ordinal-from-end-4 week-1 week-from-end-5 in-next-month on-right vc-day-box-center-center is-not-in-month">
                        <span data-v-4420d078="" aria-label="Saturday, May 4, 2024" aria-disabled="false" role="button" class="vc-day-content vc-focusable">4</span>
                    </div>
                    <div data-v-4420d078="" data-v-74ad501d="" class="vc-day id-2024-05-05 day-5 day-from-end-27 weekday-1 weekday-position-1 weekday-ordinal-1 weekday-ordinal-from-end-4 week-2 week-from-end-4 in-next-month on-bottom on-left vc-day-box-center-center is-not-in-month">
                        <span data-v-4420d078="" aria-label="Sunday, May 5, 2024" aria-disabled="false" role="button" class="vc-day-content vc-focusable">5</span>
                    </div>
                    <div data-v-4420d078="" data-v-74ad501d="" class="vc-day id-2024-05-06 day-6 day-from-end-26 weekday-2 weekday-position-2 weekday-ordinal-1 weekday-ordinal-from-end-4 week-2 week-from-end-4 in-next-month on-bottom vc-day-box-center-center is-not-in-month">
                        <span data-v-4420d078="" aria-label="Monday, May 6, 2024" aria-disabled="false" role="button" class="vc-day-content vc-focusable">6</span>
                    </div>
                    <div data-v-4420d078="" data-v-74ad501d="" class="vc-day id-2024-05-07 day-7 day-from-end-25 weekday-3 weekday-position-3 weekday-ordinal-1 weekday-ordinal-from-end-4 week-2 week-from-end-4 in-next-month on-bottom vc-day-box-center-center is-not-in-month">
                        <span data-v-4420d078="" aria-label="Tuesday, May 7, 2024" aria-disabled="false" role="button" class="vc-day-content vc-focusable">7</span>
                    </div>
                    <div data-v-4420d078="" data-v-74ad501d="" class="vc-day id-2024-05-08 day-8 day-from-end-24 weekday-4 weekday-position-4 weekday-ordinal-2 weekday-ordinal-from-end-4 week-2 week-from-end-4 in-next-month on-bottom vc-day-box-center-center is-not-in-month">
                        <span data-v-4420d078="" aria-label="Wednesday, May 8, 2024" aria-disabled="false" role="button" class="vc-day-content vc-focusable">8</span>
                    </div>
                    <div data-v-4420d078="" data-v-74ad501d="" class="vc-day id-2024-05-09 day-9 day-from-end-23 weekday-5 weekday-position-5 weekday-ordinal-2 weekday-ordinal-from-end-4 week-2 week-from-end-4 in-next-month on-bottom vc-day-box-center-center is-not-in-month">
                        <span data-v-4420d078="" aria-label="Thursday, May 9, 2024" aria-disabled="false" role="button" class="vc-day-content vc-focusable">9</span>
                    </div>
                    <div data-v-4420d078="" data-v-74ad501d="" class="vc-day id-2024-05-10 day-10 day-from-end-22 weekday-6 weekday-position-6 weekday-ordinal-2 weekday-ordinal-from-end-3 week-2 week-from-end-4 in-next-month on-bottom vc-day-box-center-center is-not-in-month">
                        <span data-v-4420d078="" aria-label="Friday, May 10, 2024" aria-disabled="false" role="button" class="vc-day-content vc-focusable">10</span>
                    </div>
                    <div data-v-4420d078="" data-v-74ad501d="" class="vc-day id-2024-05-11 day-11 day-from-end-21 weekday-7 weekday-position-7 weekday-ordinal-2 weekday-ordinal-from-end-3 week-2 week-from-end-4 in-next-month on-bottom on-right vc-day-box-center-center is-not-in-month">
                        <span data-v-4420d078="" aria-label="Saturday, May 11, 2024" aria-disabled="false" role="button" class="vc-day-content vc-focusable">11</span>
                    </div>
                </div>
            </div> 
        </div> 
        -->

    <!-- <div class="vc-arrows-container title-center">
            <div role="button" class="vc-arrow is-left is-disabled">
                <svg data-v-63f7b5ec="" width="26px" height="26px" viewBox="0 -1 16 34" class="vc-svg-icon">
                    <path data-v-63f7b5ec="" d="M11.196 10c0 0.143-0.071 0.304-0.179 0.411l-7.018 7.018 7.018 7.018c0.107 0.107 0.179 0.268 0.179 0.411s-0.071 0.304-0.179 0.411l-0.893 0.893c-0.107 0.107-0.268 0.179-0.411 0.179s-0.304-0.071-0.411-0.179l-8.321-8.321c-0.107-0.107-0.179-0.268-0.179-0.411s0.071-0.304 0.179-0.411l8.321-8.321c0.107-0.107 0.268-0.179 0.411-0.179s0.304 0.071 0.411 0.179l0.893 0.893c0.107 0.107 0.179 0.25 0.179 0.411z">
                    </path>
                </svg>
            </div>
            
            <div role="button" class="vc-arrow is-right">
                <svg data-v-63f7b5ec="" width="26px" height="26px" viewBox="-5 -1 16 34" class="vc-svg-icon">
                    <path data-v-63f7b5ec="" d="M10.625 17.429c0 0.143-0.071 0.304-0.179 0.411l-8.321 8.321c-0.107 0.107-0.268 0.179-0.411 0.179s-0.304-0.071-0.411-0.179l-0.893-0.893c-0.107-0.107-0.179-0.25-0.179-0.411 0-0.143 0.071-0.304 0.179-0.411l7.018-7.018-7.018-7.018c-0.107-0.107-0.179-0.268-0.179-0.411s0.071-0.304 0.179-0.411l0.893-0.893c0.107-0.107 0.268-0.179 0.411-0.179s0.304 0.071 0.411 0.179l8.321 8.321c0.107 0.107 0.179 0.268 0.179 0.411z">
                    </path>
                </svg>
            </div>
        </div>
    </div>
    <div data-v-39b30300="" class="vc-popover-content-wrapper">
    </div>
</div>
</div>
</div>  -->

    <!-- <div class="col-lg-4 col-6 col-sm-6"><div class="form-group">
    <label for="Time" class="label required">Time</label> 
    <div id="times">
        <div class="group-icon">
            <span>
                <img src="/_nuxt/img/time-white.912deac.svg" alt="time" class="img-fluid">
            </span> 
            <input type="text" placeholder="Select Times" custom="times" readonly="readonly" class="form-control form-custom input-times">
        </div> 
        
        <div class="times mb-3" style="display: none;">
            <h2>
                <span class="me-2">
                    <img src="/_nuxt/img/time-white.912deac.svg" alt="Meatguy Steakhouse" class="img-fluid">
                </span>
                    Select Time
                  </h2> <div class="border-bottom"></div> <div class="row"></div></div> <div class="times mb-3" style="display: none;"><h2><span class="me-2"><img src="/_nuxt/img/time-white.912deac.svg" alt="Meatguy Steakhouse" class="img-fluid"></span>
                    Select Hour
                  </h2> <div class="border-bottom"></div> <div class="row"></div></div></div></div></div> <div class="col-lg-12" style="display: none;"><div class="form-group"><label class="label">Choose Area</label> <div class="area-wrapper"></div></div></div> <div class="col-lg-4 col-6 col-sm-6" style="display: none;"><div class="form-group"><label for="seats" class="label required">Adults</label> <select name="seats" class="form-select form-custom"><option value="">Choose seats</option> </select></div></div> <div class="col-lg-4 col-6 col-sm-6"><div class="form-group"><label for="phone" class="label">Child (Under 2 years)</label> <select name="children" id="" class="form-select form-custom"><option value="">Choose Child (Under 2 years)</option> <option value="1">
                  1 Children
                </option><option value="2">
                  2 Children
                </option><option value="3">
                  3 Children
                </option><option value="4">
                  4 Children
                </option><option value="5">
                  5 Children
                </option><option value="6">
                  6 Children
                </option><option value="7">
                  7 Children
                </option><option value="8">
                  8 Children
                </option><option value="9">
                  9 Children
                </option><option value="10">
                  10 Children
                </option></select></div></div> <div class="col-lg-4 col-6 col-sm-6"><div class="form-group"><label for="Occasion" class="label">Occasion</label> <select name="Occasion" id="Occasion" class="form-select form-custom"><option value="">Choose occasion</option> <option value="No Event">
                  No Event
                </option><option value="Lunch">
                  Lunch
                </option><option value="Dinner">
                  Dinner
                </option><option value="Birthday">
                  Birthday
                </option><option value="Anniversary">
                  Anniversary
                </option><option value="other">
                  Other
                </option></select></div></div> <div class="col-lg-12"><div class="form-group"><label for="phone" class="label">Special Request</label> <textarea type="text" placeholder="Please Specify your Request (If Any)" cols="30" rows="4" class="form-control form-custom"></textarea></div></div> <div class="col-lg-12"><div class="wrap-card"><h4>PLEASE READ THE RESERVATION TERMS AND CONDITION :</h4> <div class="card-body"><ol><li>
                    Enjoy your feast within a 90 minutes time limit from the
                    moment you're seated.
                  </li> <li>
                    Dress in Smart Casual attire; wearing slippers are not
                    allowed.
                  </li> <li>
                    Children aged two and above are considered additional
                    guests.
                  </li> <li>
                    A down payment is necessary to secure your reservation
                    and will be automatically deducted from your total bill.
                  </li> <li>
                    Due cancellation, your deposit becomes a floating
                    deposit for two weeks.
                  </li> <li>
                    You can reschedule once, but any further changes will
                    result in the loss of the down payment.
                  </li> <li>
                    Please be punctual. We'll reach out via WhatsApp (1x)
                    and call (2x). The table will be released without a
                    response.
                  </li></ol></div></div></div> <div class="col-lg-12 text-center"><div class="form-group reservation-button"><input type="checkbox" name="check" class="input-check"> <h6 class="text-ket text-start">
                I have read and agree to the above
                <span class="text-gold">Terms and Condition.</span></h6></div> <button type="submit" class="btn btn-gold col-5" disabled="">
              CONTINUE BOOKING PAYMENT
            </button></div></div></form></div></div> <div class="scrolling"></div></section>
        </div> -->
  </body>
</html>
