


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
  <h1>Technical Support and Outsourcing</h1>
  <ul>
    <li>
      <input type="checkbox" checked />
      <i></i>
      <h2>
        <img src="./../img/about-us/human.svg" alt="human" />
        <div class="item-list-title">Benefit from Delegation of IT Routines</div>
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
        <img src="./../img/about-us/human.svg" alt="human" />
        <div class="item-list-title">Same Service Level Worldwide</div>
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
        <img src="./../img/about-us/human.svg" alt="human" />
        <div class="item-list-title">Total Quality Control</div>
      </h2>
      <p>
        Of course, the agreement describes the necessary service level in a clear way but there is something more. When we get engaged to a customer’s IT infrastructure we discover its strengths and weaknesses, give recommendations on optimizing and increasing reliability. Total quality control is executed by our experts, service project managers who take care of the customer during all the term of agreement 24/7.
      </p>
    </li>
    </li>
  </ul>
</div>
@endsection
