@extends('layouts.app') @section('content')
<section class="breadcrumbs-custom">
    <div class="parallax-container" data-parallax-img="images/breadcrumbs-bg.jpg">
        <div class="breadcrumbs-custom-body parallax-content context-dark">
            <div class="container">
                <h2 class="breadcrumbs-custom-title">Tabs &amp; Accordions</h2>
            </div>
        </div>
    </div>
    <div class="breadcrumbs-custom-footer">
        <div class="container">
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.html">Home</a></li>
                <li><a href="tabs-and-accordions.html#">Elements</a></li>
                <li class="active">Tabs &amp; Accordions</li>
            </ul>
        </div>
    </div>
</section>
<!-- Tabs and Accordion-->
<section class="section section-xl bg-default text-md-left">
    <div class="container">
        <div class="row row-30 justify-content-center justify-content-xl-between">
            <div class="col-md-6">
                <h3>Accordions</h3>
                <!-- Bootstrap collapse-->
                <div class="card-group-custom card-group-corporate" id="accordion1" role="tablist" aria-multiselectable="false">
                    <!-- Bootstrap card-->
                    <article class="card card-custom card-corporate">
                        <div class="card-header" role="tab">
                            <div class="card-title"><a id="accordion1-card-head-jaitrach" data-toggle="collapse" data-parent="#accordion1" href="tabs-and-accordions.html#accordion1-card-body-dujfbqyw" aria-controls="accordion1-card-body-dujfbqyw" aria-expanded="true" role="button">How can I change something in my order?
                        <div class="card-arrow">
                          <div class="icon"></div>
                        </div></a></div>
                        </div>
                        <div class="collapse show" id="accordion1-card-body-dujfbqyw" aria-labelledby="accordion1-card-head-jaitrach" data-parent="#accordion1" role="tabpanel">
                            <div class="card-body">
                                <p>If you need to change something in your order, please contact us immediately. We usually process orders within 30 minutes, and once we have processed your order, we will be unable to make any changes.</p>
                            </div>
                        </div>
                    </article>
                    <!-- Bootstrap card-->
                    <article class="card card-custom card-corporate">
                        <div class="card-header" role="tab">
                            <div class="card-title"><a class="collapsed" id="accordion1-card-head-xjvqtnbg" data-toggle="collapse" data-parent="#accordion1" href="tabs-and-accordions.html#accordion1-card-body-ixrgsynw" aria-controls="accordion1-card-body-ixrgsynw" aria-expanded="false"
                                    role="button">How can I pay for my order?
                        <div class="card-arrow">
                          <div class="icon"></div>
                        </div></a></div>
                        </div>
                        <div class="collapse" id="accordion1-card-body-ixrgsynw" aria-labelledby="accordion1-card-head-xjvqtnbg" data-parent="#accordion1" role="tabpanel">
                            <div class="card-body">
                                <p>We accept Visa, MasterCard, and American Express credit and debit cards for your convenience.</p>
                            </div>
                        </div>
                    </article>
                    <!-- Bootstrap card-->
                    <article class="card card-custom card-corporate">
                        <div class="card-header" role="tab">
                            <div class="card-title"><a class="collapsed" id="accordion1-card-head-adymxvpa" data-toggle="collapse" data-parent="#accordion1" href="tabs-and-accordions.html#accordion1-card-body-chloqqba" aria-controls="accordion1-card-body-chloqqba" aria-expanded="false"
                                    role="button">How long will my order take to be delivered?
                        <div class="card-arrow">
                          <div class="icon"></div>
                        </div></a></div>
                        </div>
                        <div class="collapse" id="accordion1-card-body-chloqqba" aria-labelledby="accordion1-card-head-adymxvpa" data-parent="#accordion1" role="tabpanel">
                            <div class="card-body">
                                <p>Delivery times will depend on your location. Once payment is confirmed your order will be packaged. Delivery can be expected within a day.</p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-md-6 col-xl-5">
                <h3>Horizontal Tabs</h3>
                <!-- Bootstrap tabs-->
                <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-1">
                    <!-- Nav tabs-->
                    <div class="nav-tabs-wrap">
                        <ul class="nav nav-tabs">
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="tabs-and-accordions.html#tabs-1-1" data-toggle="tab">About</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="tabs-and-accordions.html#tabs-1-2" data-toggle="tab">Our mission</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="tabs-and-accordions.html#tabs-1-3" data-toggle="tab">Our goals</a></li>
                        </ul>
                    </div>
                    <!-- Tab panes-->
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tabs-1-1">
                            <p>Cum nomen prarere, omnes peses amor pius, rusticus racanaes. Ubi est mirabilis gemna? Cum gabalium velum, omnes fugaes</p>
                            <p>Ubi est peritus devatio? A falsis, adelphis peritus apolloniates. Est raptus clabulare, cesaris. Cum pulchritudine manducare, omnes genetrixes captis bassus</p>
                        </div>
                        <div class="tab-pane fade" id="tabs-1-2">
                            <p>Vae. Dexter fiscina aliquando vitares animalis est. Nunquam convertam bulla. Cum pars prarere, omnes seculaes</p>
                            <p>Navis dexter historia est. Luba, homo, et indictio. Emeritis eposs ducunt ad animalis. Cum solem assimilant, omnes byssuses vitare clemens, secundus nixuses.</p>
                        </div>
                        <div class="tab-pane fade" id="tabs-1-3">
                            <p>A falsis, historia primus gallus. Est bassus tabes, cesaris. Gallus de mirabilis agripeta, locus mens! Primus ratione</p>
                            <p>Cur eleates accelerare? Heu. Ecce, superbus onus! Demolitione secundus homo est. Cum cacula congregabo, omnes coordinataees acquirere dexter, flavum galataees.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection