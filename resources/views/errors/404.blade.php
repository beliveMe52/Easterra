


@extends('layouts.layout')

@section('style')

<link rel="stylesheet" href="../cssss/404.css">
<link rel="stylesheet" href="../cssss/style.css">
  <link rel="stylesheet" href="../cssss/adaptive.css" />
@endsection




@section('main')
<main>
  <div class="wraper-corporate">
    <div class="error-title">Woops...</div>
    <div class="error">
      <h1 class="error__number">40<span>4</span></h1>
      <div class="error__message">This page is doesn’t exist</div>
      <a href="/"><button class="error__home-btn" >home</button></a>

    </div>
  </div>
</main>
@endsection
