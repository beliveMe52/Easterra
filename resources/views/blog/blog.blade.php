
@extends('layouts.layout')

@section('style')

<link rel="stylesheet" href="cssss/blog.css">
@endsection


@section('main')
<div class="link_silver">
  <a href="/">Home</a> -
  <a href="/blog">Blog</a>
</div>
<main>
   <div class="wraper-corporate">
   <div class="news-title">Latest news and articles</div>
   <div class="news">

      @foreach ($posts as $post)

      <a href="blog/{{$post['id']}}">
         <div class="news-item item">
            <img src="storage/{{$post['photo']}}" alt="" class="item__img">
            <h2 class="item__title">{{$post['title']}}</h2>
            <p class="item__text">{{$post['text']}}
            </p>
            <p class="item__date">{{$post['date']}}</p>
         </div>
      </a>

      @endforeach


   </div>
   <div class="more-news">
   <a href="?page={{$prev}}">
      <div class="img-1">
         <img src="img/arrow.svg" alt="arrow1">
      </div>
   </a>
   @for ($i = 1; $i <= $page_count; $i++)

   <a href="?page={{$i}}">{{$i}}</a>

   @endfor
   <a href="?page={{$next}}">
      <div class="img-1">
         <img src="img/arrow.svg" alt="arrow2">
      </div>
      </a>
   </div>
   </div>
</main>







@endsection
