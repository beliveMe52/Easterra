@extends('layouts.layout')

@section('style')
<link rel="stylesheet" href="cssss/reviews.css">
<link rel="stylesheet" href="cssss/owl.carousel.min.css">
<link rel="stylesheet" href="cssss/owl.theme.default.min.css">
 <link rel="stylesheet" href="cssss/swiper.min.css">
@endsection

@section('script')
<script src="js/reviews.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/navbar.js"></script>
<script src="js/carousel.js"></script>
<script src="js/placeholder.js"></script>
<script src="js/swiper.min.js"></script>
@endsection


@section('main')
<div class="link_silver">
   <a href="/">Home</a>
</div>

<main class="Site-content">
   <h1 class="clients-say">What our clients say</h1>
   <div class="swiper-container">
      <div class="swiper-wrapper">
         <div class="wrapper">
            <div class="get-to-know__reviews reviews swiper-slide">
               <div class="reviews__about-person">
                  <div class="img-wraper">
                     <img src="./../img/person.png" alt="person" />
                  </div>
               <p>Mike Nomland, IT Director, Festival Foods</p>
               </div>
               <div class="reviews__quote quote">
               <div class="quote__text">

                  <p>
                     <img src="./../img/quotes.svg" alt="quotes" />
                     “The goals of our new communications system are to improve
                     employee productivity and efficiency, simplify maintenance and
                     reduce costs. I estimate we’ll save at least $25,000 per year
                     on managed services costs alone.”
                     <img src="./../img/quotes-end.svg" alt="quotes-end" />
                  </p>
               </div>
               </div>

               </div>



</div>

</div>
<div id="flex-box">
<!-- <div class="limitation">
<i class="arrow-right"></i> -->
<div class="swiper-pagination"></div>
<!-- <i class="arrow-left"></i> -->
</div>
</div>

</div>

</div>

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
</main>

@endsection
