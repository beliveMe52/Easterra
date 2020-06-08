<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Easterra</title>

   <link rel="stylesheet" href="cssss/style.css">
     <link rel="stylesheet" href="cssss/adaptive.css" />
    @yield('style')
</head>
<body class="Site">
      <header>
         <div class="info">
            <div class="info__number">
               <div class="number">
                  <a href="tel:+995322194477">
                    <img src="./../img/phone.svg" class="phone-img" alt="phone"><span>+995322194477</span>
                  </a>
               </div>
            </div>
            <div class="info__mail">
               <div class="mail">
                  <a href="mailto:support@easterra.com">
                  <img src="./../img/mail.svg" class="mail-img" alt="mail"><span>support@easterra.com</span>
                  </a>
            </div>
            </div>
            <div class="nav-button">
               <img src="./../adaptive/img/menu.svg" id="open-menu" alt="menu.png">
            </div>
            <div class="close-menu-btn">
               <img src="./../adaptive/img/Group 356.svg" id="close-menu" alt="close.png">
            </div>
            <div class="empty"></div>
            <div class="info__login login">
               <a href="#">
                  <img src="./../img/login.svg" alt="login"><span>LOGIN</span>
               </a>
            </div>
         </div>
        <div class="wraper-corporate">
         <div class="navigation">
            <div class="navigation__logo">
               <a href="/">
                  <img src="./../img/eastera_eng_logo_fine.png" alt="logo">
               </a>
            </div>
            <div class="nav-warper">
            <div class="navigation__nav-bar nav-bar">
               <div class="nav-bar__about-us"><a href="/about-us">About us</a></div>
               <div class="nav-bar__products-services"><a href="/product-services">Products & Services</a></div>
               <div class="nav-bar__partners"><a href="/partners">Partners</a></div>
               <div class="nav-bar__blog"><a href="/blog">Blog</a></div>
               <div class="nav-bar__reviews"><a href="/reviews">Reviews</a></div>
               <div class="nav-bar__contacts"><a href="/contacts">Contacts</a></div>
               <div class="nav-bar__search-img"><img src="./../img/search-logo.svg" alt="search-logo"></div>
            </div>
            </div>
            <div class="empty"></div>
            <div class="contact-us-btn"><a href="/contacts">CONTACT US</a></div>
         </div>
       </div>
      </header>
      <div class="media-nav">
         <a href="/about-us"><div class="nav-bar__about-us">About us</div></a>
         <a href="/product-services"><div class="nav-bar__products-services">Products & Services</div></a>
         <a href="/partners"><div class="nav-bar__partners">Partners</div></a>
         <a href="/blog"><div class="nav-bar__blog">Blog</div></a>
         <a href="/reviews"><div class="nav-bar__reviews">Reviews</div></a>
         <a href="/contacts"><div class="nav-bar__contacts">Contacts</div></a>
   </div>


       @yield('main')



       <footer>
         <div class="footer-wrap">
           <div class="footer__contacts">
             <ul>
               <li><a href="#">Easterra</a></li>
               <li><a href="#">44 Shalva Nutsubidze </a></li>
               <li><a href="#">0177, Tbilisi, Georgia</a></li>
               <li><a href="#">+995 322 194477</a></li>
               <li><a href="#">sales@easterra.com</a></li>
               <li class="social-logo">
                 <img src="./../img/social-contacts/facebook-1.svg" alt="" />
                 <img src="./../img/social-contacts/twitter.svg" alt="" />
                 <img src="./../img/social-contacts/linkedin 2.svg" alt="" />
                 <img src="./../img/social-contacts/Group 327.svg" alt="" />
               </li>
             </ul>
           </div>
           <div class="footer__company">
             <ul>
               <li>
                 <h1><a href="#">Company</a></h1>
               </li>
               <li><a href="#">About us</a></li>
               <li><a href="#">Products & Services</a></li>
               <li><a href="#">Partners</a></li>
               <li><a href="#">Blog</a></li>
             </ul>
           </div>
           <div class="footer__support">
             <ul>
               <li>
                 <h1><a href="#">Support</a></h1>
               </li>
               <li><a href="#">Privacy</a></li>
               <li><a href="#">Cookies</a></li>
               <li><a href="#">Use Policy</a></li>
               <li><a href="#">Terms & Conditions</a></li>
               <li><a href="#">Contacts</a></li>
             </ul>
           </div>
           <div class="footer__search">
             <input type="text" id="footer-search" placeholder="SEARCH" /><button
               id="footer-search-btn"
             >
               <img src="./../img/footer-rearch.svg" alt="search-logo" />
             </button>
           </div>
         </div>
       </footer>
       <div class="right-reserved">
          <div class="right">2020. All rights reserved.</div>
          <div class="made-by">made by <strong>Straut & Skobelev</strong></div>
       </div>

       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
       <script src="js/navbar.js"></script>
              @yield('script')
 </body>
 </html>
