@extends('layouts.layout')

@section('style')
<link rel="stylesheet" href="cssss/home.css">
<link rel="stylesheet" href="cssss/main.css">
<link rel="stylesheet" href="cssss/owl.carousel.min.css">
<link rel="stylesheet" href="cssss/owl.theme.default.min.css">
 <link rel="stylesheet" href="cssss/swiper.min.css">


 <link rel="stylesheet" href="cssss/vegas.min.css">
@endsection


@section('script')
<script src="js/about-us.js"></script>
<script src="js/owl.carousel.min.js"></script>

<script src="js/carousel.js"></script>
<script src="js/placeholder.js"></script>
<script src="js/swiper.min.js"></script>





    <script src="http://zeptojs.com/zepto.min.js"></script>
    <script src="js/vegas.min.js"></script>

@endsection

@section('main')
<main class="Site-content">
  <!-- Swiper -->
  <div class="swiper-container">
    <div class="swiper-wrapper">

      <div class="swiper-slide inside-slider">
          <div class="inside-slider__text">
            Dedicated data services for your business
          </div>
          <div class="inside-slider__btn">
            <button class="adout-easterra-btn">more about easterra</button>
          </div>
      </div>
      <div class="swiper-slide inside-slider">
          <div class="inside-slider__text">
            Dedicated data services for your business123
          </div>
          <div class="inside-slider__btn">
            <button class="adout-easterra-btn">more about easterra</button>
          </div>
      </div>

    </div>
    <!-- <div class="swiper-pagination"></div> -->
  </div>

  <div class="wraper-corporate">
    <div class="services">
      <div class="services__telecom">
        <div class="telecom-title">
          <img src="./../img/telecom.svg" alt="telecom.svg" />
          <p>Wholesale Telecom Services</p>
        </div>
        <div class="telecom-text">
          Easterra was built by people who believed in finding “a better
          way.” From the very beginning, we’ve focused on taking out the
          complexity. As a leading provider of IT and telecommunications
          services in Eastern Europe, our quest to find a better way – a
          simpler way – to move your business forward.
        </div>
      </div>

      <div class="services__corporate-it">
        <div id="empty-img"></div>
        <div class="corporate-it-title">
          <img src="./../img/services.png" alt="services" />
          <p>Corporate IT Services</p>
        </div>
        <div class="corporate-it-text">
          You need comprehensive IT support. That’s why we offer a complete
          suite of services, customized to fit into your organization. With
          an extensive experience in various business environments, our team
          will help streamline your technology to move your business
          forward.
        </div>
      </div>
    </div>
    <div class="all-services-btn">
      <a href="/product-services"><button id="all-services">ALL SERVICES</button></a>
    </div>
    <div class="background-img">
      <img src="./../img/Group43.png" alt="Group43.png" />
    </div>

    <div class="get-to-know">
      <div class="get-to-know__about about">
        <div class="about__ho-we-are">
          Get to Know Easterra
        </div>
        <div class="about__experts">
          Experts in Telecom Networks
        </div>
        <div class="about__title">
          Easterra is a multi-layered infrastructure-based provider of
          integrated telecom solutions.
        </div>
        <div class="about__one">
          One Network, One Region, One Provider.
        </div>
        <div class="about__about-us-btn">
          <button>ABOUT US</button>
        </div>
      </div>

      <div class="get-to-know__reviews reviews">
        <div class="reviews__about-person">
          <img src="./../img/person.png" alt="person" />
          <p>Mike Nomland, IT Director, Festival Foods</p>
        </div>
        <div class="reviews__quote quote">
          <div class="quote__title">What our clients say</div>
          <div class="quote__text">
            <img src="./../img/quotes.svg" alt="quotes" />
            <p>
              “The goals of our new communications system are to improve
              employee productivity and efficiency, simplify maintenance and
              reduce costs. I estimate we’ll save at least $25,000 per year
              on managed services costs alone.”
            </p>
            <img src="./../img/quotes-end.svg" alt="quotes-end" />
          </div>
        </div>
        <div class="reviews-btn">
          <button id="reviews-btn">
            reviews <img src="./../img/Arrow 4.svg" alt="Arrow" />
          </button>
        </div>
      </div>
    </div>
    <div class="advantages">
      <div class="advantages__item">
        <img src="./../img/advantages.svg" alt="advantages" />
        <h1>THE ADVANTAGES</h1>
        <p>
          You benefit from the seamless region-wide network provided by
          Easterra (see our coverage map).
        </p>
      </div>
      <div class="advantages__item">
        <img src="./../img/nature.svg" alt="nature" />
        <h1>THE NATURE</h1>
        <p>Ensuring customer satisfaction is the top priority for us.</p>
      </div>
      <div class="advantages__item">
        <img src="./../img/human.svg" alt="human" />
        <h1>THE HUMAN TOUCH</h1>
        <p>
          Challenging the usual telecom providers processes, no runaround or
          bureaucracies.
        </p>
      </div>
      <div class="advantages__item">
        <img src="./../img/excelent.svg" alt="excelent" />
        <h1>THE EXELLENCE</h1>
        <p>
          Quality is a word that is over used, especially in sales and
          marketing, and it is often used without any clear idea of what it
          actually means.
        </p>
      </div>
    </div>
    <div class="request-callback">
      <h1>Request a callback</h1>
      <form>
        <div class="inpt">
          <input
            type="text"
            class="callback-inputs"
            id="login"
            name="login"
            onblur="eventBlur"
          />
          <label for="login">
            <span>NAME<span class="redstar">*</span> </span>
          </label>
        </div>
        <div class="inpt">
          <input
            type="email"
            class="callback-inputs"
            id="email"
            name="email"
            id="email"
            onblur="eventBlur"
          />
          <label for="email">
            <span>email<span class="redstar">*</span> </span>
          </label>
        </div>
        <div class="inpt">
          <input
            type="text"
            class="callback-inputs"
            id="number"
            name="number"
            id="number"
            onblur="eventBlur"
          />
          <label for="number">
            <span>PHONE NUMBER<span class="redstar">*</span></span>
          </label>
        </div>

        <div class="input-checkbox">
          <div class="input-checkbox__item">
            <input type="checkbox" name="subscribe" id="subscribe" />
            <label for="subscribe"
              ><i></i>I would like to subscribe to updates from
              Expereo</label
            >
          </div>
          <div class="input-checkbox__item">
            <input type="checkbox" name="permission" id="permission" />
            <label for="permission"
              ><i></i>I hereby give consent to Expereo to hold my personal
              data in accordance with the EU GDPR legislation.</label
            >
          </div>
        </div>
        <button id="request">request a callback</button>
      </form>
    </div>
    <h1 id="whats-new">WHATS NEW</h1>
    <div class="news owl-carousel">
      <div class="news-item" data-merge="2">
        <img src="./../img/news/Rectangle 8.7.png" alt="" />
        <h1>GCCM CIS 2019, Almaty Kazakhstan</h1>
        <p>
          Easterra team will be heading to the GCCM CIS 2019 in Almaty next
          month. If you are looking to partner with a provider who puts
          relationships first, please contact us to schedule a meeting.
        </p>
        <p>11.04.2019</p>
      </div>
      <div class="news-item" data-merge="2">
        <img src="./../img/news/Rectangle 8.8.png" alt="" />
        <h1>CIS 2018 GCCM - Almaty</h1>
        <p>
          Carrier Community is organizing annual global carrier community
          meetings in CIS since 2017 for the members. CC is organizing its
          2nd annual CIS 2018 GCCM – Almaty on 4th & 5th September 2018 at
          The Rixos Hotel. More than 350+ Club Members.
        </p>
        <p>12.03.2019</p>
      </div>
      <div class="news-item" data-merge="5">
        <img src="./../img/news/Rectangle 8.10.png" alt="Rectangle 8.10" />
        <h1>UCOM completes merger of Orange Armenia</h1>
        <p id="last-news">
          Armenian broadband access provider UCOM has completed the merger
          and reorganisation of its recently acquired Orange Armenia unit,
          which will allow it to improve the quality and range of services
          provided by the enlarged company. The news of the merger – carried
          out.
        </p>
        <p class="data">11.04.2019</p>
      </div>
    </div>

    <div class="all-news-btn">
      <button id="all-news">ALL NEWS</button>
    </div>
  </div>
</main>

@endsection
