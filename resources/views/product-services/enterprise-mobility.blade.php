


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
      <h1>Enterprise Mobility</h1>
      <div class="drop-down-list__text">
        Organizations deploy mobile environments to provide their employees with devices and applications to access corporate information systems, to embed them in the existing IT infrastructure in a secure manner. Sofline has all the necessary expertise for deployment of mobility solutions.
     </div>
      <ul>
        <li>
          <input type="checkbox" checked />
          <i></i>
          <h2>
            <img src="/img/about-us/human.svg" alt="human" /> <div class="item-list-title">Infrastructure</div>
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
            <img src="/img/about-us/human.svg" alt="human" /><div class="item-list-title">Security</div>
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
            <div class="item-list-title">Mobile devices</div>
          </h2>
          <p>

               Tasks in terms of business
               To organize the working process of mobile employees you will need modern, reliable and convenient mobile devices that suit every one of them. Very often creating really mobile working places requires specialized equipment and tools (mobile projectors, printers, scanners, etc.) or protective equipment for mechanical impacts that can function under extreme conditions.
               Tasks in terms of IT
               Selection of convenient general purpose and specialized mobile devices
               Configuration and connection of the devices
               Maintenance
               Approach
               The selection of devices should be executed as part of general mobilization strategy in your organization.
               Why us?
               Softline has got the highest partner statuses of the hardware manufacturers which allows us to offer the best prices and supply terms of mobile devices and thousands of other hardware items. We offer a full range of related services from consulting on optimal solution selection to extended technical support and outsourcing of mobile infrastructure management.

          </p>
        </li>
      </ul>
    </div>

    @endsection
