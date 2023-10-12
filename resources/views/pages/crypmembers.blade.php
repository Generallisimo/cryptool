
@extends('layouts.app', ['page' => __('Members'), 'pageSlug' => 'crypmembers'])

@section('content')
<div class="btn-group mb-3">
    <button type="button" class="btn btn-primary">Filters</button>
    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="sr-only">Toggle Dropdown</span>
    </button>
    <div class="dropdown-menu dropdown-black">
        <a class="dropdown-item" href="#">Action1</a>
        <a class="dropdown-item" href="#">Action2</a>
    </div>
</div>
<div class="row">

    <div class="card" style="width: 350px; height:600px">
        <div style="margin-top: 30px;margin-left: 30px;">
            <h1>Sellers:</h1>
        </div>
    </div>
    <div class="card" style="width: 350px; height:600px; margin-left:30px">
        <div style="margin-top: 30px;margin-left: 30px;">
            <h1>Buyers:</h1>
        </div>
    </div>
    <div class="">
        <div class="card" style="width: 300px; height:250px; margin-left:30px">
            <div style="margin-top: 30px;margin-left: 30px;">
                <h1>Chats:</h1>
            </div>
        </div>
        <div class="card" style="width: 300px; height:250px; margin-left:30px"></div>
    </div>
</div>

@endsection