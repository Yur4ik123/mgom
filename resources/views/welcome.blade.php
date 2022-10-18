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
@endsection
