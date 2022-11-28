@extends('front.layout')
@section('contant')

<div class="binduz-er-recent-news-box">
    <div class="binduz-er-recent-news-title">
        <h3 class="binduz-er-title">Recent News</h3>
    </div>
    @foreach ($post as $item)
        <div class="binduz-er-recent-news-item mb-20">
            <div class="binduz-er-thumb">
                <img src="{{ asset('storage/' . $item->image) }}" alt=""
                style="height: 50px" style="width: 50px">
            </div>
            <div class="binduz-er-content">
                <div class="binduz-er-meta-item">
                    <div class="binduz-er-meta-categories">
                        <a href="#">{{  $item->category->title }}</a>
                    </div>
                    <div class="binduz-er-meta-date">
                        <span><i class="fal fa-calendar-alt"></i>{{!! $item->created_at !!}}</span>
                    </div>
                </div>
                <h5 class="binduz-er-title"><a href="#">{{!! $item->title !!}}</a></h5>
                <p>{{ $item->smallDesc }}</p>
            </div>
        </div>
    @endforeach
  {{-- {{$post->links()}} --}}

</div>

@endsection
