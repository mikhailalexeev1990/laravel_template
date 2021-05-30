@extends('layout')

@section('title', 'Main page')

@section('main')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-3 mb-3">Test</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div id="app"></div>
            </div>
        </div>
    </div>
@endsection


@section('additional-scripts')
    <script src="{{mix('js/vue/app.js')}}"></script>
@endsection

