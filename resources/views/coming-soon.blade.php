@extends('layouts.app') @section('content')

<section class="section section-single context-dark bg-image" style="background-image: url(images/bg-soon.jpg);">
    <div class="section-single-inner">
        <header class="section-single-header page-header">
            <div class="page-head-inner">
                <a class="brand" href="index.html"><img class="brand-logo-dark" src="images/logo-default-231x49.png" alt="" width="231" height="49" srcset="images/logo-default-231x49.png 2x" /><img class="brand-logo-light" src="images/logo-inverse-231x49.png" alt="" width="231" height="49"
                        srcset="images/logo-inverse-231x49.png 2x" /></a>
            </div>
        </header>
        <div class="section-single-main">
            <div class="container">
                <h3>We’re Getting Ready To Launch In</h3>
                <!-- TimeCircles-->
                <div class="countdown" data-countdown="data-countdown" data-to="2020-12-31">
                    <div class="countdown-block countdown-block-days">
                        <svg class="countdown-circle" x="0" y="0" width="136" height="136" viewbox="0 0 100 100" data-progress-days="">
                    <circle class="countdown-circle-bg" cx="50" cy="50" r="41"></circle>
                    <circle class="countdown-circle-fg clipped" cx="50" cy="50" r="48"></circle>
                  </svg>
                        <div class="countdown-wrap">
                            <div class="countdown-counter h3" data-counter-days="">00</div>
                        </div>
                        <div class="h5 countdown-title">days</div>
                    </div>
                    <div class="countdown-block countdown-block-hours">
                        <svg class="countdown-circle" x="0" y="0" width="136" height="136" viewbox="0 0 100 100" data-progress-hours="">
                    <circle class="countdown-circle-bg" cx="50" cy="50" r="41"></circle>
                    <circle class="countdown-circle-fg clipped" cx="50" cy="50" r="48"></circle>
                  </svg>
                        <div class="countdown-wrap">
                            <div class="countdown-counter h3" data-counter-hours="">00</div>
                        </div>
                        <div class="h5 countdown-title">hours</div>
                    </div>
                    <div class="countdown-block countdown-block-minutes">
                        <svg class="countdown-circle" x="0" y="0" width="136" height="136" viewbox="0 0 100 100" data-progress-minutes="">
                    <circle class="countdown-circle-bg" cx="50" cy="50" r="41"></circle>
                    <circle class="countdown-circle-fg clipped" cx="50" cy="50" r="48"></circle>
                  </svg>
                        <div class="countdown-wrap">
                            <div class="countdown-counter h3" data-counter-minutes="">00</div>
                        </div>
                        <div class="h5 countdown-title">minutes</div>
                    </div>
                    <div class="countdown-block countdown-block-seconds">
                        <svg class="countdown-circle" x="0" y="0" width="136" height="136" viewbox="0 0 100 100" data-progress-seconds="">
                    <circle class="countdown-circle-bg" cx="50" cy="50" r="41"></circle>
                    <circle class="countdown-circle-fg clipped" cx="50" cy="50" r="48"></circle>
                  </svg>
                        <div class="countdown-wrap">
                            <div class="countdown-counter h3" data-counter-seconds="">00</div>
                        </div>
                        <div class="h5 countdown-title">seconds</div>
                    </div>
                </div>
                <div class="rd-mailform-wrap">
                    <!-- RD Mailform-->
                    <form class="rd-form rd-mailform rd-form-inline form-lg" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="https://ld-wt73.template-help.com/wt_prod-23024/bat/rd-mailform.php">
                        <div class="form-wrap wow fadeInUp">
                            <input class="form-input" id="subscribe-form-0-email" type="email" name="email" data-constraints="@Email @Required" />
                            <label class="form-label" for="subscribe-form-0-email">Enter your e-mail address</label>
                        </div>
                        <div class="form-button wow fadeInRight">
                            <button class="button button-shadow-2 button-zakaria button-lg button-secondary" type="submit">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="section-single-footer">
            <div class="container text-center">
                <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>.&nbsp;</span><span>Sweet Bakery</span><span>.&nbsp;</span><span>All Rights Reserved</span><span>.&nbsp;</span><a href="privacy-policy.html">Privacy Policy.</a></p>
            </div>
        </div>

    </div>
</section>
@endsection