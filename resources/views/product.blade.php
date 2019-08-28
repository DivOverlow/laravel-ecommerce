@extends('layout')

@section('title', $product->name)

@section('extra-css')
    <link rel="stylesheet" href="{{asset('css/algolia.css')}}">
@endsection

@section('content')

    @component('components.breadcrumbs')
        <a href="/">Home</a>
        <i class="fa fa-chevron-right breadcrumbs-separator"></i>
        <span><a href="{{ route('shop.index') }}">Shop</a></span>
        <i class="fa fa-chevron-right breadcrumbs-separator"></i>
        <span>{{ $product->name }}</span>
    @endcomponent

{{--    <div class="breadcrumbs">--}}
{{--        <div class="container">--}}
{{--            <a href="/">Home</a>--}}
{{--            <i class="fa fa-chevron-right breadcrumb-separator"></i>--}}
{{--            <a href="{{ route('shop.index') }}">Shop</a>--}}
{{--            <i class="fa fa-chevron-right breadcrumb-separator"></i>--}}
{{--            <span>Macbook Pro</span>--}}
{{--        </div>--}}
{{--    </div> <!-- end breadcrumbs -->--}}

    <div class="container">
        @if (session()->has('success_message'))
            <div class="spacer"></div>
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif

        @if(count($errors) > 0)
            <div class="spacer"></div>
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{!!  $error !!} </li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <div class="product-section container">
        <div>
            <div class="product-section-image">
{{--                <img src="{{ productImage($product->image) }}" alt="product">--}}
                <img src="{{ Voyager::image($product->image) }}" alt="product" class="active" id="currentImage">
                {{--            <img src="{{ asset('storage/'.$product->image) }}" alt="product">--}}
                {{--            <img src="{{ asset('img/products/'.$product->slug.'.jpg') }}" alt="product">--}}
            </div>
            <div class="product-section-images">
{{--                <div class="product-section-thumbnail selected">--}}
{{--                    <img src="{{ asset('img/no_image.png') }}" alt="product">--}}
{{--                </div>--}}
                <div class="product-section-thumbnail selected">
                    <img src="{{Voyager::image($product->image)}}" alt="product">
                </div>

                @if ($product->images)
                    @foreach(json_decode($product->images, true) as $image)
                    <div class="product-section-thumbnail">
                        <img src="{{ Voyager::image($image) }}" alt="product">
{{--                        <img src="{{ productImage($image) }}" alt="product">--}}
                    </div>
                    @endforeach
                @endif
            </div>
        </div>
        <div class="product-section-information">
            <h1 class="product-section-title">{{ $product->name }}</h1>
            <div class="product-section-subtitle">{!! $product->details !!}</div>
            <div>{!!  $stockLevel  !!}</div>
            <div class="product-section-price">{{ $product->presentPrice() }}</div>

            <p>
                {!! $product->description !!}
            </p>

            <p>&nbsp;</p>
        @if ($product->quantity > 0)
            <form action="{{ route('cart.store') }}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $product->id }}">
                <input type="hidden" name="name" value="{{ $product->name }}">
                <input type="hidden" name="price" value="{{ $product->price }}">
                <button type="submit" class="button button-plain">Add to Cart</button>
            </form>
        @endif
        </div>
    </div> <!-- end product-section -->

    @include('partials.might-like')

@endsection

@section('extra-js')
    <script>
        (function () {
            const currentImage = document.querySelector('#currentImage');
            const images = document.querySelectorAll('.product-section-thumbnail');

            images.forEach((element) => element.addEventListener('click', thumbnailClick));

            function thumbnailClick(e) {
                // currentImage.src = this.querySelector('img').src;

                currentImage.classList.remove('active');

                currentImage.addEventListener('transitionend', () => {
                    currentImage.src = this.querySelector('img').src;
                    currentImage.classList.add('active');
                });

                images.forEach((element) => element.classList.remove('selected'));
                this.classList.add('selected');

            }
        })();
    </script>
@endsection

@section('extra-js')
    <!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
    <script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
    <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
    <script src="{{asset('js/algolia.js')}}"></script>
@endsection
