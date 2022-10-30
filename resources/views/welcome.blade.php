@extends('layouts.app')
@section('content')
    <div class="letter">
        <div class="container">
            <div class="letter__wrapper">
                <div class="col">
                    <div class="img__wrapper">
                        <img src="/assets/img/letter2.png" width="520" height="350" alt="">
                    </div>
                </div>
                <div class="col">
                    <h3 class="heading">LETTER FROM THE PRESIDENT</h3>
                    <p class="text-left mt-3">‘Migom global Corp represents the evolution of the ‘Holding Company’ in
                        the financial industry. Banking to many, is ubiquitous with finance and yet the financial
                        industry has evolved far beyond banking. Banks no longer serve all the requirements of financial
                        intermediation.</p>
                    <p class="text-left mt-3">Regulatory approvals in jurisdictions play their part in ensuring the
                        fragmentation of the industry and in any fragmented landscape, therein exists opportunities to
                        gain market share, through growth of wholly owned subsidiaries or through acquisition of
                        licensed entities, rather than see distressed entities be liquidated.</p>
                    <a href="#" class="collapsible">
                        + Read More
                    </a>
                    <div class="collapse__content">
                        <div class="card card__body">
                            <p>Migom Global Corp takes advantage of this disaggregation and strives to work alongside
                                established commercial entities and its synergistic ventures to better serve emerging
                                markets, in a geographical and consumer orientated context.</p>
                            <p>Applying these differentiations in growth markets allows us to explore and benefit from
                                key areas of growth, as we can move nimbly to take advantage of economic factors
                                impacting new markets.</p>
                            <p>Our team is globally distributed, diverse and well experienced in all aspects of finance,
                                but as a whole reflects the collection of companies that we own and above all, focused
                                on the opportunities within as well as outside of our group!’</p>
                            <p><img loading="lazy" class="wp-image-2018 alignleft"
                                    src="http://mgom.com/home/images/assets/thomas-1.png" alt="" width="73" height="73">
                            </p>
                            <p><img loading="lazy" class="alignnone wp-image-2019"
                                    src="http://mgom.com/home/images/assets/signature-mgom-300x79.jpg" alt=""
                                    width="156" height="41"></p>
                            <p><strong>Thomas A. Schaetti, President</strong></p>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>
    <div class="chart__block">
        <h2 class="sub__heading">STOCK QUOTES & CHARTS</h2>
        <div class="container">
            <div class="data__side">
                <h5 class="side__header">MIGOM GLOBAL CORP</h5>
                <div class="side__trading">
                    Other OTC. Currency in USD
                </div>
                <div class="prices">
                    <span id="price" class="h5">100.24</span>
                    <span id="change" class="text-success">0.000</span>
                    <span id="changePercent" class="text-success">0.00%</span>
                </div>
                <div class="data__table">
                    <div class="data__table-col">
                        <div class="data__table-row">
                            <div class="data__name">Previous Close</div>
                            <div class="data__value"><b>100.24</b></div>
                        </div>
                        <div class="data__table-row">
                            <div class="data__name">Open</div>
                            <div class="data__value"><b>100.24</b></div>
                        </div>
                        <div class="data__table-row">
                            <div class="data__name">Bid</div>
                            <div class="data__value"><b>n/a - n/a</b></div>
                        </div>
                        <div class="data__table-row">
                            <div class="data__name">Ask</div>
                            <div class="data__value"><b>n/a - n/a</b></div>
                        </div>
                        <div class="data__table-row">
                            <div class="data__name">Days Range</div>
                            <div class="data__value"><b>100.24 - 100.24</b></div>
                        </div>
                        <div class="data__table-row">
                            <div class="data__name">52 Week Range</div>
                            <div class="data__value"><b>2.00 - 100.24</b></div>
                        </div>
                        <div class="data__table-row">
                            <div class="data__name">Volume</div>
                            <div class="data__value"><b>100</b></div>
                        </div>

                    </div>
                    <div class="data__table-col">
                        <div class="data__table-row">
                            <div class="data__name">Market Cap</div>
                            <div class="data__value"><b>n/a</b></div>
                        </div>
                        <div class="data__table-row">
                            <div class="data__name">Beta (3Y Monthly)</div>
                            <div class="data__value"><b>n/a</b></div>
                        </div>
                        <div class="data__table-row">
                            <div class="data__name">PE Ratio (TTM)</div>
                            <div class="data__value"><b>61.30887</b></div>
                        </div>
                        <div class="data__table-row">
                            <div class="data__name">EPS (TTM)</div>
                            <div class="data__value"><b>1.635</b></div>
                        </div>
                        <div class="data__table-row">
                            <div class="data__name">Forward Dividend & Yield</div>
                            <div class="data__value"><b>n/a</b></div>
                        </div>
                        <div class="data__table-row">
                            <div class="data__name">Ex-Dividend Date</div>
                            <div class="data__value"><b>n/a</b></div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="chart__side">
                <canvas id="myChart" width="400" height="300"></canvas>
            </div>
        </div>
    </div>
    {{--    <div class="mgom__global">--}}
    {{--            <div class="container">--}}
    {{--                <h2 class="sub__heading">MIGOM GLOBAL CORP.</h2>--}}
    {{--                <div class="mgom__subtitle">--}}
    {{--                    Migom Global Corp. is a publicly traded company that unites the leading e-banking and wealth management service providers, providing stable returns and growth opportunities.--}}
    {{--                </div>--}}
    {{--                <div class="mgom__cards">--}}
    {{--                    <div class="mgom_card">--}}
    {{--                        <div class="card__img-wrapper">--}}
    {{--                            <img src="/assets/img/why-img1-1.png" width="60" height="60" alt="">--}}
    {{--                        </div>--}}
    {{--                        <h3 class="card__header">--}}
    {{--                            Transparency--}}
    {{--                        </h3>--}}
    {{--                        <div class="card__content">--}}
    {{--                            We provide our shareholders with full information on our decisions, ensuring full transparency.--}}
    {{--                        </div>--}}

    {{--                    </div>--}}
    {{--                    <div class="mgom_card">--}}
    {{--                        <div class="card__img-wrapper">--}}
    {{--                            <img src="/assets/img/why-img2-1.png" width="60" height="60" alt="">--}}
    {{--                        </div>--}}
    {{--                        <h3 class="card__header">--}}
    {{--                            Expertise--}}
    {{--                        </h3>--}}
    {{--                        <div class="card__content">--}}
    {{--                            Migom ecosystem brings together independent thinkers with many years of experience across affiliated fields--}}
    {{--                        </div>--}}

    {{--                    </div>--}}
    {{--                    <div class="mgom_card">--}}
    {{--                        <div class="card__img-wrapper">--}}
    {{--                            <img src="/assets/img/why-img3-1.png" width="60" height="60" alt="">--}}
    {{--                        </div>--}}
    {{--                        <h3 class="card__header">--}}
    {{--                            Opportunity--}}
    {{--                        </h3>--}}
    {{--                        <div class="card__content">--}}
    {{--                            You can become a part of an international company with a global vision and long-term goals                        </div>--}}

    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--    </div>--}}
    <div class="mgom__app">
        <div class="container">
            <div class="mgom__global-row ">
                <h2 class="row__header">
                    MIGOM GLOBAL CORP.
                </h2>
                <div class="row-3">
                    <div class="app__col">
                        <div class="image__wrapper app__rounded-img">
                            <img src="/assets/img/why-img1-1.png" width="60" height="60" alt="">
                        </div>
                        <div class="col__title">
                            Transparency
                        </div>
                        <div class="col_content">
                            We provide our shareholders with full information on our decisions, ensuring full
                            transparency.

                        </div>
                    </div>
                    <div class="app__col">
                        <div class="image__wrapper  app__rounded-img">
                            <img src="/assets/img/why-img2-1.png" width="60" height="60" alt="">
                        </div>
                        <div class="col__title">
                            Expertise
                        </div>
                        <div class="col_content"> Migom ecosystem brings together independent thinkers with many years
                            of experience across affiliated fields
                        </div>
                    </div>
                    <div class="app__col">
                        <div class="image__wrapper  app__rounded-img">
                            <img src="/assets/img/why-img3-1.png" width="60" height="60" alt="">
                        </div>
                        <div class="col__title">
                            Opportunity
                        </div>
                        <div class="col_content">
                            You can become a part of an international company with a global vision and long-term goals
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mgom__app">
        <div class="container">
            <div class="mgom__global-row ">
                <h2 class="row__header">
                    Get started in a few simple steps
                </h2>
                <div class="row-3">
                    <div class="app__col">
                        <div class="image__wrapper">
                            <img src="/assets/img/signin.png" width="361" height="368" alt="">
                        </div>
                        <div class="col__title">
                            Simply sign-in
                        </div>
                        <div class="col_content">
                            Just enter your existing Migom Bank username and password and login into your Migom Bank
                            e-wallet.
                        </div>
                    </div>
                    <div class="app__col">
                        <div class="image__wrapper">
                            <img src="/assets/img/pickcard.png" width="364" height="368" alt="">
                        </div>
                        <div class="col__title">
                            Set up your preferences
                        </div>
                        <div class="col_content">
                            It's easy to set your favorite card as your default payment method and tailor other
                            preferences to your needs.
                        </div>
                    </div>
                    <div class="app__col">
                        <div class="image__wrapper">
                            <img src="/assets/img/andpay.png" width="358" height="368" alt="">
                        </div>
                        <div class="col__title">
                            And pay or transfer funds
                        </div>
                        <div class="col_content">
                            Paying and transferring funds is simple and rewarding when you use cards linked to your
                            Migom Bank account.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mgom__blog">
        <div class="container">
            <h2 class="sub__heading">Company Blogs</h2>
            <div class="mgom__blog-row">
                <a class="mgom__blog-item">
                    <div class="image__wrapper">
                        <img src="/assets/img/photo1628103404_post-1-770x403.png" width="770" height="403" alt="">
                    </div>
                    <div class="item__title">

                        Multicurrency IBAN with Migom Bank™: easier and faster way to make international payments

                    </div>
                </a>
                <a class="mgom__blog-item">
                    <div class="image__wrapper">
                        <img src="/assets/img/photo1628103384_post3-770x403.jpeg" width="770" height="403" alt="">
                    </div>
                    <div class="item__title">


                        Introducing QR code payments


                    </div>
                </a>
                <a class="mgom__blog-item">
                    <div class="image__wrapper">
                        <img src="/assets/img/photo1628103384_post3-770x403.jpeg" width="770" height="403" alt="">
                    </div>
                    <div class="item__title">


                        Migom Bank™ for cryptocurrency exchanges: unprecedented liquidity and traditional banking of
                        highest standards

                    </div>
                </a>
            </div>
        </div>
    </div>

    {{--    <div class="mgom__news">--}}
    {{--        <div class="container">--}}
    {{--            <h3 class="sub__heading">--}}
    {{--                Get started in a few simple steps--}}
    {{--            </h3>--}}
    {{--            <div class="mgom__news-wrapper">--}}
    {{--                <a href="" class="mgom__news-item">--}}
    {{--                    <div class="image__wrapper">--}}
    {{--                        <img src="/assets/img/publ1-1.jpg" width="300" height="225" alt="">--}}
    {{--                    </div>--}}
    {{--                </a>--}}
    {{--                <a href="" class="mgom__news-item">--}}
    {{--                    <div class="image__wrapper">--}}
    {{--                        <img src="/assets/img/publ1-1.jpg" width="300" height="225" alt="">--}}
    {{--                    </div>--}}
    {{--                </a>--}}
    {{--                <a href="" class="mgom__news-item">--}}
    {{--                    <div class="image__wrapper">--}}
    {{--                        <img src="/assets/img/publ1-1-1.jpg" width="300" height="225" alt="">--}}
    {{--                    </div>--}}
    {{--                </a>--}}
    {{--                <a href="" class="mgom__news-item">--}}
    {{--                    <div class="image__wrapper">--}}
    {{--                        <img src="/assets/img/publ5.jpg" width="300" height="225" alt="">--}}
    {{--                    </div>--}}
    {{--                </a>--}}
    {{--                <a href="" class="mgom__news-item">--}}
    {{--                    <div class="image__wrapper">--}}
    {{--                        <img src="/assets/img/publ2.jpg" width="300" height="225" alt="">--}}
    {{--                    </div>--}}
    {{--                </a>--}}
    {{--                <a href="" class="mgom__news-item">--}}
    {{--                    <div class="image__wrapper">--}}
    {{--                        <img src="/assets/img/publ1.jpg" width="300" height="225" alt="">--}}
    {{--                    </div>--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}

    <div class="sec__filings">
        <div class="container">
            <h2 class="heading">
                Sec Filings
            </h2>
            <div class="row">
                <div class="col">
                    <a href="" class="filings__link">
                        Migom Global Corp. SEC CIK #0001697412
                    </a>
                </div>
                <div class="col">
                    <a href="" class="filings__link">
                        MGOM : Migom Global Corp. SEC CIK 0001697412
                    </a>
                </div>

            </div>
        </div>
    </div>
    <div class="mgom__media">
        <h2 class="sub__heading">
            In the media
        </h2>
        <div class="mgom__media-row">
            <a href="" class="mgom__media-item">
                <img src="/assets/img/ACCESSWIRE.png" style="width: 100%" alt="">
            </a>
            <a href="" class="mgom__media-item">
                <img src="/assets/img/silogo-new.png" style="width:100%" alt="">
            </a>
            <a href="" class="mgom__media-item">
                <img src="/assets/img/nasdaq.svg" style="width:     100%;" alt="">
            </a>
            <a href="" class="mgom__media-item">
                <img src="/assets/img/yahoo.png" alt="">
            </a>
            <a href="" class="mgom__media-item">
                <img src="/assets/img/bloomberg.png" alt="">
            </a>
        </div>
    </div>
    <div class="feedback">
        <div class="container">
            <h2 class="heading">
                Investor Enquiries
            </h2>
            <h3 class="sub__heading">
                If you have a question regarding our services, feel free to contact us using the form below.
            </h3>
            <div class="feedback-wrapper">
                <div class="col">
                    <div class="img__wrapper">
                        <img src="./assets/img/image-migom-investment.png" width="665" height="456" alt="">
                    </div>
                </div>
                <div class="col">
                    <form action="" id="feedback_form" class="default__form">
                        <div class="form__row col__2">
                            <div class="input__wrapper">
                                <input type="text" class="input" placeholder="Enter your First Name *" required>
                            </div>
                            <div class="input__wrapper">
                                <input type="text" class="input" placeholder="Enter your last name " required>
                            </div>
                            <div class="input__wrapper">
                                <input type="email" class="input" placeholder="Enter your email *" required>
                            </div>
                            <div class="input__wrapper">
                                <input type="tel" class="input" placeholder="Enter your Phone Number *" required>
                            </div>
                        </div>
                        <div class="form__row">
                            <div class="input__wrapper">
                                <textarea class="textarea" rows="3" placeholder="Your message here" required></textarea>
                            </div>
                        </div>
                        <div class="text__right">
                            <button type="submit" class="btn__submit">Submit</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
