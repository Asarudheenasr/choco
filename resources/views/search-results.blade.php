@extends('layouts.app') @section('content')
<section class="breadcrumbs-custom">
    <div class="parallax-container" data-parallax-img="images/breadcrumbs-bg.jpg">
        <div class="breadcrumbs-custom-body parallax-content context-dark">
            <div class="container">
                <h2 class="breadcrumbs-custom-title">Search Results</h2>
            </div>
        </div>
    </div>
    <div class="breadcrumbs-custom-footer">
        <div class="container">
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.html">Home</a></li>
                <li><a href="search-results.html#">Elements</a></li>
                <li class="active">Search Results</li>
            </ul>
        </div>
    </div>
</section>
<!-- Search results-->
<section class="section section-xl bg-default">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-9">
                <!-- RD Search-->
                <form class="rd-form rd-search rd-form-inline" action="search-results.html" method="GET">
                    <div class="form-wrap">
                        <label class="form-label" for="rd-search-form-input">Search</label>
                        <input class="form-input" id="rd-search-form-input" type="text" name="s" autocomplete="off">
                    </div>
                    <div class="form-button">
                        <button class="button button-primary" type="submit">Search</button>
                    </div>
                </form>
                <div class="rd-search-results"></div>
            </div>
        </div>
    </div>
</section>
@endsection