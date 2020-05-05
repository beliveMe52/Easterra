
@extends('layouts.layout')

@section('style')

<link rel="stylesheet" href="cssss/contacts.css">
@endsection


@section('main')
<main>
   <div class="main-contacts">
      <div class="main-contacts__info">
         <div class="contacts-title">
            <h1>
                   Delivering experiences
             <span id="beyong">Beyond expectations</span>
            </h1>
          </div>
          <div class="contacts-text">
             <p>
               Our partner-centric industry leading capabilities – is complemented by pro-active customer-oriented support and some of the highly motivated and most experienced staff in the industry.
               <p>
                  Our sincere commitment to excellence has always been at the heart of what we do, then, now, today, and tomorrow.
               </p>
             </p>
          </div>

          <div class="contacts">
            <h1>
               <p>
                  +995 32 2 194 477
                  sales@easterra.com
               </p>
               <p>
                 Easterra
               </p>
               <p>
                     44 Shalva Nutsubidze
                     0177, Tbilisi, Georgia
               </p>
            </h1>
          </div>
      </div>

      <div class="main-contacts__form form">
         <div class="form-title"><h1>Get in touch with us</h1></div>
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
                     <span>PHONE NUMBER<span class="redstar">*</span></span>
                 </label>
               </div>
                  <textarea name="help" id="help-contacts" cols="30" rows="10" placeholder="how can we help?"></textarea>
            <div class="check-boxes">
               <p>
                  <input type="checkbox" name="updates" id="updates">
                  <label for="updates"><i></i>I would like to subscribe to updates from Expereo</label>
               </p>
               <p>
                  <input type="checkbox" name="consert" id="consert">
                  <label for="consert"><i></i>I hereby give consent to Expereo to hold my personal data in accordance with the EU GDPR legislation.</label>
               </p>
            </div>
            <button id="subscribe-contacts-btn">subscribe</button>
         </form>
      </div>
   </div>
</main>

@endsection
