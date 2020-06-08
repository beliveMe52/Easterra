@extends('layouts.layout')

@section('style')
<link rel="stylesheet" href="cssss/about.css">
@endsection

@section('script')
<script src="js/about-us.js"></script>
@endsection


@section('main')
    <div class="link_silver">
      <a href="/">Home</a> -
      <a href="/about-us">About-us</a>
    </div>
    <main>
      <div class="main-img">
        <img src="./../img/about-us/main-img.png" alt="" />
      </div>
      <div class="about-us">
        <div class="about-us__ajax-navigation">
          <a class="ajax" href="about-us" id="about-us">About us</a>
          <a
            class="ajax"
            href="/get-to-know"
            id="why-easterra"
            >Why Easterra</a
          >
          <a
            class="ajax"
            href="/experience"
            id="experience"
            >Customer Experience</a
          >
          <a
            class="ajax"
            href="/careers"
            id="careers"
            >Careers</a
          >
        </div>
        <div class="back-img">
          <img src="./../img/about-us/amcharts.pixelMap.png" alt="pixelMap">
        </div>
        <div class="back-img-2">
          <img src="./../img/about-us/Group 316.png" alt="Group316.png">
        </div>
        <div class="wraper-corporate">
          <div class="ajax-replace">
            <h1>About us</h1>
            <div class="about-us__text">
              <p>
                Easterra is a multi-layered infrastructure-based provider of
                integrated telecom solutions. Our operations and strategy are
                focused on Eastern Europe, whereas a leading managed telecom
                services provider, our priority is to ensure we remain a unified
                Company with constant development of our network. We aim to not
                only remain the preferred partner and supplier of telecom
                solutions but t o further extend our impact via progressive
                innovation and enhanced customer satisfaction.
              </p>
              <p>
                We consider our region to be a unified area in which we can
                guarantee maximum quality of service provision. In cooperation
                with our partners, our well-established, reliable and
                high-performance network grants our partners simplified access
                to the entire continent. Easterra’s uniquely positioned to help
                our partners to optimise their cost-effectiveness by delivering
                cost-conscious best connectivity solution for their needs.
              </p>
              <div class="empty-2"></div>
            </div>
            <div class="we-are">
              <h1>We are</h1>
              <div class="border"></div>
              <ul>
                <li>
                  <h2>commited</h2>
                  <p>
                    Our commitment starts by listening to the customers’ needs.
                    Easterra knows how hard our partners work to make their
                    businesses successful. We seek to understand their needs and
                    develop innovative communication solutions that really makes
                    a difference in every aspect. We know exceptional service is
                    important, and we intend to go above and beyond, and way
                    over the top. We believe that a deeper level of trust can be
                    built with incredible service.
                  </p>
                </li>
                <li>
                  <h2>honest</h2>
                  <p>
                    We are serious about honesty – both as it applies to the
                    integrity of our partnerships and in being true to our
                    service suppliers. We follow our words with actions and let
                    the results speak for themselves.. By being forthright, we
                    are easier to do business with and show that we have
                    integrity.
                  </p>
                </li>
                <li>
                  <h2>local</h2>
                  <p>
                    Though we operate across the region, we live and work in the
                    same cities as our partners. Our dedicated and skilled
                    employees work as a team to deliver services at the highest
                    standards and speed in the telecom industry.
                  </p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="wraper-corporate">
      <div class="request-callback">
        <h1>Request a callback</h1>
        <form>
          <div class="inpt">
            <input type="text" class="callback-inputs" id='login' name="login" >
            <label for="login">
               <span>NAME<span class="redstar">*</span>  </span>
           </label>
         </div>
            <div class="inpt">
               <input type="email" class="callback-inputs" id="email" name="email" id="email">
               <label for="email">
                  <span>email<span class="redstar">*</span>  </span>
              </label>
            </div>
            <div class="inpt">
               <input type="text" class="callback-inputs" id="number" name="number" id="number">
               <label for="number">
                  <span>NAME<span class="redstar">*</span>  </span>
              </label>
            </div>
          <div class="input-checkbox">
            <div class="input-checkbox__item">
              <input type="checkbox" name="subscribe" id="subscribe" />
              <label for="subscribe"
                ><i></i> I would like to subscribe to updates from Expereo</label>
            </div>
            <div class="input-checkbox__item">
              <input type="checkbox" name="permission" id="permission" />
              <label for="permission"
                ><i></i> I hereby give consent to Expereo to hold my personal data in
                accordance with the EU GDPR legislation.</label>
            </div>
          </div>
          <button id="request">request a callback</button>
        </form>
      </div>
    </div>
    </main>
@endsection
