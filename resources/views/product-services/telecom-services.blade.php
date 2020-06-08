


@extends('layouts.layout')

@section('style')
<link rel="stylesheet" href="cssss/product-services.css" />
@endsection

@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/product-services.js"></script>

@endsection


@section('main')
<div class="drop-down-list-ajax">
  <h1>Information Security</h1>
  <div class="drop-down-list__text">
    Easterra was built by people who believed in finding “a better way.”
    From the very beginning, we’ve focused on taking out the complexity. As
    a leading provider of IT and telecommunications services in Eastern
    Europe, our quest to find a better way – a simpler way – to move your
    business forward. That’s why our services consistently outperform the
    competition on flexibility, customer satisfaction and
    cost-effectiveness, giving our customers worldwide the power to access
    Eastern Europe faster, collaborate more easily, and connect anywhere,
    any time. Our goal is to become a long-term partner that contributes to
    the success of your company by providing high-quality telecommunication
    services that are tailored to your needs. The brief overview of our key
    products and services. We would love to give you a more detailed guide
    and information.
  </div>
  <ul>
    <li>
      <input type="checkbox" checked />
      <i></i>
      <h2>
        <img src="/img/about-us/human.svg" alt="human" />
        <div class="item-list-title">vPoP</div>
      </h2>
      <p>
        This page was written in HTML and CSS. The CSS was compiled from
        SASS. I used Normalize as my CSS reset and -prefix-free to save
        myself some headaches. I haven't quite gotten the hang of Slim for
        compiling into HTML, but someday I'll use it since its syntax
        compliments that of SASS. Regardless, this could all be done in
        plain HTML and CSS.
      </p>
    </li>
    <li>
      <input type="checkbox" checked />
      <i></i>
      <h2>
        <img src="/img/about-us/human.svg" alt="human" />
        <div class="item-list-title">Private Ethernet Line</div>
      </h2>
      <p>
        By making the open state default for when :checked isn't detected,
        we can make this system accessable for browsers that don't recognize
        :checked. The fallback is simply an open accordion. The accordion
        can be manipulated with Javascript (if needed) by changing the
        "checked" property of the input element.
      </p>
    </li>
    <li>
      <input type="checkbox" checked />
      <i></i>
      <h2>
        <img src="/img/about-us/human.svg" alt="human" />
        <div class="item-list-title">Private Local Access</div>
      </h2>
      <p>
        By making the open state default for when :checked isn't detected,
        we can make this system accessable for browsers that don't recognize
        :checked. The fallback is simply an open accordion. The accordion
        can be manipulated with Javascript (if needed) by changing the
        "checked" property of the input element.
      </p>
    </li>
    <li>
      <input type="checkbox" checked />
      <i></i>
      <h2>
        <img src="/img/about-us/human.svg" alt="human" />
        <div class="item-list-title">SDH Channel</div>
      </h2>
      <p>
        By making the open state default for when :checked isn't detected,
        we can make this system accessable for browsers that don't recognize
        :checked. The fallback is simply an open accordion. The accordion
        can be manipulated with Javascript (if needed) by changing the
        "checked" property of the input element.
      </p>
    </li>
  </ul>
</div>
@endsection
