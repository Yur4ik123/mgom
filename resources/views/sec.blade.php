@extends('layouts.app')
@section('body-classes', 'sec__page')
@section('content')
    <div class="page__heading">
        <div class="container">
            <h1 class="page__header">SEC Filings</h1>
        </div>
    </div>
    <div class="container">
        <div class="sec__items-wrapper" id="sec-items-wrapper">
            <div class="sec__table-heading table__row">
                <div class="col">Date</div>
                <div class="col">Filing Type</div>
                <div class="col">Filing Description</div>
                <div class="col">Download / View</div>
            </div>
            <div class="sect__table-list " id="sec-table-list">

            </div>

        </div>
    </div>
@endsection
