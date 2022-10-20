@extends('layouts.app')
@section('content')
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
                        </div>  <div class="data__table-row">
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
    <div class="mgom__global">
            <div class="container">
                <h2 class="sub__heading">MIGOM GLOBAL CORP.</h2>
                <div class="mgom__subtitle">
                    Migom Global Corp. is a publicly traded company that unites the leading e-banking and wealth management service providers, providing stable returns and growth opportunities.
                </div>
                <div class="mgom__cards">
                    <div class="mgom_card">
                        <div class="card__img-wrapper">
                            <img src="/assets/img/why-img1-1.png" width="60" height="60" alt="">
                        </div>
                        <h3 class="card__header">
                            Transparency
                        </h3>
                        <div class="card__content">
                            We provide our shareholders with full information on our decisions, ensuring full transparency.
                        </div>

                    </div>
                    <div class="mgom_card">
                        <div class="card__img-wrapper">
                            <img src="/assets/img/why-img2-1.png" width="60" height="60" alt="">
                        </div>
                        <h3 class="card__header">
                            Expertise
                        </h3>
                        <div class="card__content">
                            Migom ecosystem brings together independent thinkers with many years of experience across affiliated fields
                        </div>

                    </div>
                    <div class="mgom_card">
                        <div class="card__img-wrapper">
                            <img src="/assets/img/why-img3-1.png" width="60" height="60" alt="">
                        </div>
                        <h3 class="card__header">
                            Opportunity
                        </h3>
                        <div class="card__content">
                            You can become a part of an international company with a global vision and long-term goals                        </div>

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
                            Just enter your existing Migom Bank username and password and login into your Migom Bank e-wallet.
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
                            It's easy to set your favorite card as your default payment method and tailor other preferences to your needs.                        </div>
                    </div>
                    <div class="app__col">
                        <div class="image__wrapper">
                            <img src="/assets/img/andpay.png" width="358" height="368" alt="">
                        </div>
                        <div class="col__title">
                            And pay or transfer funds
                        </div>
                        <div class="col_content">
                            Paying and transferring funds is simple and rewarding when you use cards linked to your Migom Bank account.
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


                        Migom Bank™ for cryptocurrency exchanges: unprecedented liquidity and traditional banking of highest standards

                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="mgom__news">
        <div class="container">
            <h3 class="sub__heading">
                Get started in a few simple steps
            </h3>
            <div class="mgom__news-wrapper">
                <a href="" class="mgom__news-item">
                    <div class="image__wrapper">
                        <img src="/assets/img/publ1-1.jpg" width="300" height="225" alt="">
                    </div>
                </a>
                <a href="" class="mgom__news-item">
                    <div class="image__wrapper">
                        <img src="/assets/img/publ1-1.jpg" width="300" height="225" alt="">
                    </div>
                </a>
                <a href="" class="mgom__news-item">
                    <div class="image__wrapper">
                        <img src="/assets/img/publ1-1-1.jpg" width="300" height="225" alt="">
                    </div>
                </a>
                <a href="" class="mgom__news-item">
                    <div class="image__wrapper">
                        <img src="/assets/img/publ5.jpg" width="300" height="225" alt="">
                    </div>
                </a>
                <a href="" class="mgom__news-item">
                    <div class="image__wrapper">
                        <img src="/assets/img/publ2.jpg" width="300" height="225" alt="">
                    </div>
                </a>
                <a href="" class="mgom__news-item">
                    <div class="image__wrapper">
                        <img src="/assets/img/publ1.jpg" width="300" height="225" alt="">
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="mgom__media">
        <h2 class="sub__heading">
            In the media
        </h2>
        <div class="mgom__media-row">
            <a href="" class="mgom__media-item">
                <img src="/assets/img/wsj.svg" style="width: 4rem;" alt="">
            </a>
            <a href="" class="mgom__media-item">
                <img src="/assets/img/forbes.svg" style="width: 6rem;" alt="">
            </a>
            <a href="" class="mgom__media-item">
                <img src="/assets/img/reuters.svg"  alt="">
            </a>
            <a href="" class="mgom__media-item">
                <img src="/assets/img/medium.svg"  alt="">
            </a>
            <a href="" class="mgom__media-item">
                <img src="/assets/img/2.svg" alt="">
            </a>
        </div>
    </div>
@endsection
