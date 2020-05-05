


@extends('layouts.layout')

@section('style')
<link rel="stylesheet" href="cssss/product-services.css" />
@endsection

@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/product-services.js"></script>

@endsection


@section('main')
<main>
  <div class="product-services">
    <div class="product-services__ajax-navigation">
      <a
        class="ajax"
        href="/product-services"
        id="it-infrastructure"
        >IT Infrastructure</a
      >
      <a
        class="ajax"
        href="/telecom-services"
        id="telecom-services"
        >Wholesale Telecom Services</a
      >
      <a
        class="ajax"
        href="/info"
        id="info-security"
        >Information Security</a
      >
      <a
        class="ajax"
        href="/enterprise"
        id="enterprise-mobility"
        >Enterprise Mobility</a
      >
      <a
        class="ajax"
        href="/support"
        id="support"
        >Technical Support and Outsourcing</a
      >
    </div>
    <div class="block">
      <div class="drop-down-list">
        <h1>IT Infrastructure</h1>
        <ul>
          <li>
            <input type="checkbox" checked />
            <i></i>
            <h2>
              <img src="/img/about-us/human.svg" alt="human" />
              <div class="item-list-title">Infrastructure Solutions</div>
            </h2>
            <p>
              This page was written in HTML and CSS. The CSS was compiled
              from SASS. I used Normalize as my CSS reset and -prefix-free
              to save myself some headaches. I haven't quite gotten the hang
              of Slim for compiling into HTML, but someday I'll use it since
              its syntax compliments that of SASS. Regardless, this could
              all be done in plain HTML and CSS.
            </p>
          </li>
          <li>
            <input type="checkbox" checked />
            <i></i>
            <h2>
              <img src="/img/about-us/human.svg" alt="human" />
              <div class="item-list-title">Engineering Equipment</div>
            </h2>
            <p>
              By making the open state default for when :checked isn't
              detected, we can make this system accessable for browsers that
              don't recognize :checked. The fallback is simply an open
              accordion. The accordion can be manipulated with Javascript
              (if needed) by changing the "checked" property of the input
              element.
            </p>
          </li>
          <li>
            <input type="checkbox" checked />
            <i></i>
            <h2>
              <img src="/img/about-us/human.svg" alt="human" />
              <div class="item-list-title">Networking Infrastructure</div>
            </h2>
            <p>
              By making the open state default for when :checked isn't
              detected, we can make this system accessable for browsers that
              don't recognize :checked. The fallback is simply an open
              accordion. The accordion can be manipulated with Javascript
              (if needed) by changing the "checked" property of the input
              element.
            </p>
          </li>
          <li>
            <input type="checkbox" checked />
            <i></i>
            <h2>
              <img src="/img/about-us/human.svg" alt="human" />
              <div class="item-list-title">Virtualization</div>
            </h2>
            <p>
              By making the open state default for when :checked isn't
              detected, we can make this system accessable for browsers that
              don't recognize :checked. The fallback is simply an open
              accordion. The accordion can be manipulated with Javascript
              (if needed) by changing the "checked" property of the input
              element.
            </p>
          </li>
          <li>
            <input type="checkbox" checked />
            <i></i>
            <h2>
              <img src="/img/about-us/human.svg" alt="human" />
              <div class="item-list-title">Management Systems</div>
            </h2>
            <p>
              By making the open state default for when :checked isn't
              detected, we can make this system accessable for browsers that
              don't recognize :checked. The fallback is simply an open
              accordion. The accordion can be manipulated with Javascript
              (if needed) by changing the "checked" property of the input
              element.
            </p>
          </li>
        </ul>
      </div>
    </div>
  </div>
</main>

@endsection
