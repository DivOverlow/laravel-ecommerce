@extends('layout')

@section('title', 'Search Results Algolia')

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/algolia.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/instantsearch.css@7.3.1/themes/reset-min.css" integrity="sha256-t2ATOGCtAIZNnzER679jwcFcKYfLlw01gli6F6oszk8=" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/instantsearch.css@7.3.1/themes/algolia-min.css" integrity="sha256-HB49n/BZjuqiCtQQf49OdZn63XuKFaxcIHWf0HNKte8=" crossorigin="anonymous">
@endsection

@section('content')

    @component('components.breadcrumbs')
        <a href="/">Home</a>
        <i class="fa fa-chevron-right breadcrumb-separator"></i>
        <span>Search</span>
    @endcomponent

    <div class="container">
        @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif

        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    <div class="container">
        <example></example>
        <div class="search-results-container-algolia">
            <div>
                <h2>Search</h2>
                <div id="search-box">
                    <!-- searchBox widget will appear here -->
                </div>

                <div id="stats">
                    <!-- Stats widget will appear here -->
                </div>

                <h2>Categories</h2>
                <div id="refinement-list">
                    <!-- category widget will appear here -->
                </div>
            </div>
            <div>
                <h2>Search Results</h2>
                <div id="hits">
                    <!-- Hits widget will appear here -->
                </div>

                <div id="pagination">
                    <!-- Pagination widget will appear here -->
                </div>
            </div>
        </div> <!-- end search-results-container -->
    </div>


@endsection

@section('extra-js')
    <!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
    <script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
    <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
    <script src="{{asset('js/algolia.js')}}"></script>
{{--    <script src="https://cdn.jsdelivr.net/npm/algoliasearch@3.33.0/dist/algoliasearchLite.min.js" integrity="sha256-3Laj91VXexjTlFLgL8+vvIq27laXdRmFIcO2miulgEs=" crossorigin="anonymous"></script>--}}
    <script src="https://cdn.jsdelivr.net/npm/algoliasearch@3.33.0/dist/algoliasearchLite.min.js" integrity="sha256-3Laj91VXexjTlFLgL8+vvIq27laXdRmFIcO2miulgEs=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/instantsearch.js@3.4.0/dist/instantsearch.production.min.js" integrity="sha256-pM0n88cBFRHpSn0N26ETsQdwpA7WAXJDvkHeCLh3ujI=" crossorigin="anonymous"></script>
    <script src="{{asset('js/algolia-instantsearch.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
@endsection
