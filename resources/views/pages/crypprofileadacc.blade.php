@extends('layouts.app', ['pageSlug' => 'crypprofileadacc'])

@section('content')

<div class="content">
    <div class="row">
        <div class="col-md-12">


            <div class="row">

                <div class="col-12 text-right">

                    <div class="btn-group">
                        <form class="form-inline ml-auto">
                            <div class="form-group has-white">
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <button type="submit" class="btn btn-link btn-icon btn-round">
                                <i class="tim-icons icon-zoom-split"></i>
                            </button>
                        </form>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary">Filters</button>
                        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu dropdown-black">
                            <a class="dropdown-item" href="#">Action1</a>
                            <a class="dropdown-item" href="#">Action2</a>
                        </div>
                    </div>
                </div>


                <div class="col-12 text-right">
                    <div>

                        <button id="toggleViewButton" class="btn btn-info btn-sm mr-5 mb-4"><i class="tim-icons icon-bullet-list-67"></i></button>
                    </div>
                </div>





            </div>


        </div>



        <div class="col-md-3">
            <div class="card">
                <img src="{{ asset('image/test.jpg') }}" class="card-img-top" alt="Картинка 1">
                <div class="card-body" style="height: 160px;">
                    <h5 class="card-title">Creative AD ID 6233457631606</h5>
                    <p class="card-text">Название: Promotie lokaal bedrijf Eliens Beauty Palace</p>
                    <p class="card-text">Spend: - </p>
                    <p class="card-text">Status: Active </p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img src="{{ asset('image/test.jpg') }}" class="card-img-top" alt="Картинка 1">
                <div class="card-body" style="height: 160px;">
                    <h5 class="card-title">Creative AD ID 6233457631606</h5>
                    <p class="card-text">Название: Promotie lokaal bedrijf Eliens Beauty Palace</p>
                    <p class="card-text">Spend: - </p>
                    <p class="card-text">Status: Active </p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <img src="{{ asset('image/test.jpg') }}" class="card-img-top" alt="Картинка 1">
                <div class="card-body" style="height: 160px;">
                    <h5 class="card-title">Creative AD ID 6233457631606</h5>
                    <p class="card-text">Название: Promotie lokaal bedrijf Eliens Beauty Palace</p>
                    <p class="card-text">Spend: - </p>
                    <p class="card-text">Status: Active </p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <img src="{{ asset('image/test.jpg') }}" class="card-img-top" alt="Картинка 1">
                <div class="card-body" style="height: 160px;">
                    <h5 class="card-title">Creative AD ID 6233457631606</h5>
                    <p class="card-text">Название: Promotie lokaal bedrijf Eliens Beauty Palace</p>
                    <p class="card-text">Spend: - </p>
                    <p class="card-text">Status: Active </p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <img src="{{ asset('image/test.jpg') }}" class="card-img-top" alt="Картинка 1">
                <div class="card-body" style="height: 160px;">
                    <h5 class="card-title">Creative AD ID 6233457631606</h5>
                    <p class="card-text">Название: Promotie lokaal bedrijf Eliens Beauty Palace</p>
                    <p class="card-text">Spend: - </p>
                    <p class="card-text">Status: Active </p>
                </div>
            </div>
        </div>
    </div>
</div>



<div id="table-view" class="fixed-div2" style="display: none;">
    <table id="myTable" class="table tablesorter fixed-table2">
        <thead class="text-primary">
            <tr >
                <th>AD ID</th>
                <th>Creative</th>
                <th>Название</th>
                <th>Spend</th>
                <th>Status</th>
                <th>Клики по ссылке</th>
                <th>CPC</th>
                <th>Лиды</th>
                <th>CPL</th>
                <th>CR</th>
                <th>CTR</th>
                <th>CPM</th>
                <th>Расходы</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    6233457631606
                </td>
                <td>
                    <img style="width: 200px;" src="{{ asset('image/test.jpg') }}" class="card-img-top" alt="Картинка 1">
                </td>
                <td>
                    Promotie lokaal bedrijf Eliens Beauty Palace
                </td>
                <td>
                    -
                </td>
                <td>
                    active
                </td>
                <td>
                    365
                </td>
                <td>
                    11
                </td>
                <td>
                    0.98
                </td>
                <td>
                    0
                </td>
                <td>
                    0
                </td>
                <td>
                    0
                </td>
                <td>
                    3.01
                </td>
                <td>
                    29.53
                </td>
            </tr>
            <tr>
                <td>
                    6233457631606
                </td>
                <td>
                    <img style="width: 200px;" src="{{ asset('image/test.jpg') }}" class="card-img-top" alt="Картинка 1">
                </td>
                <td>
                    Promotie lokaal bedrijf Eliens Beauty Palace
                </td>
                <td>
                    -
                </td>
                <td>
                    active
                </td>
                <td>
                    365
                </td>
                <td>
                    11
                </td>
                <td>
                    0.98
                </td>
                <td>
                    0
                </td>
                <td>
                    0
                </td>
                <td>
                    0
                </td>
                <td>
                    3.01
                </td>
                <td>
                    29.53
                </td>
            </tr>
            <tr>
                <td>
                    6233457631606
                </td>
                <td>
                    <img style="width: 200px;" src="{{ asset('image/test.jpg') }}" class="card-img-top" alt="Картинка 1">
                </td>
                <td>
                    Promotie lokaal bedrijf Eliens Beauty Palace
                </td>
                <td>
                    -
                </td>
                <td>
                    active
                </td>
                <td>
                    365
                </td>
                <td>
                    11
                </td>
                <td>
                    0.98
                </td>
                <td>
                    0
                </td>
                <td>
                    0
                </td>
                <td>
                    0
                </td>
                <td>
                    3.01
                </td>
                <td>
                    29.53
                </td>
            </tr>
            <tr>
                <td>
                    6233457631606
                </td>
                <td>
                    <img style="width: 200px;" src="{{ asset('image/test.jpg') }}" class="card-img-top" alt="Картинка 1">
                </td>
                <td>
                    Promotie lokaal bedrijf Eliens Beauty Palace
                </td>
                <td>
                    -
                </td>
                <td>
                    active
                </td>
                <td>
                    365
                </td>
                <td>
                    11
                </td>
                <td>
                    0.98
                </td>
                <td>
                    0
                </td>
                <td>
                    0
                </td>
                <td>
                    0
                </td>
                <td>
                    3.01
                </td>
                <td>
                    29.53
                </td>
            </tr>
        </tbody>
    </table>
</div>





<!-- for table right -->
<div class="fixed-plugin3">
    <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
            <i style="color: white; padding:10px" class="fa fa-table fa-2x"> </i>
        </a>
        <ul class="dropdown-menu">

            <div class="">
                <form action="" class="d-flex" style="justify-content: end;">
                    <div class="form-group mt-1">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seller">
                    </div>
                    <button type="button" class="btn btn-danger btn-sm btn-icon ml-2" style="height: 37px;width: 37px;">
                        X
                    </button>
                    <button type="button" class="btn btn-success btn-sm btn-icon ml-2" style="height: 37px;width: 37px;">
                        V
                    </button>
                </form>
            </div>

            <form action="">

                <div class="d-block fixed-div">
    
                    <table class="table fixed-table ">
                        <thead class=" text-primary">
                            <tr>
                                <th>Actions</th>
                                <th>AD ID</th>
                                <th>Creative</th>
                                <th>Название</th>
                                <th>Spend</th>
                                <th>Status</th>
                                <th>Клики по ссылке</th>
                                <th>CPC</th>
                                <th>Лиды</th>
                                <th>CPL</th>
                                <th>CR</th>
                                <th>CTR</th>
                                <th>CPM</th>
                                <th>Расходы</th>
    
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" value="">
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
    
                                </td>
                                <td>
                                    6233457631606
                                </td>
                                <td>
                                    <img style="width: 200px;" src="{{ asset('image/test.jpg') }}" class="card-img-top" alt="Картинка 1">
                                </td>
                                <td>
                                    Promotie lokaal bedrijf Eliens Beauty Palace
                                </td>
                                <td>
                                    -
                                </td>
                                <td>
                                    active
                                </td>
                                <td>
                                    365
                                </td>
                                <td>
                                    11
                                </td>
                                <td>
                                    0.98
                                </td>
                                <td>
                                    0
                                </td>
                                <td>
                                    0
                                </td>
                                <td>
                                    0
                                </td>
                                <td>
                                    3.01
                                </td>
                                <td>
                                    29.53
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" value="">
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
    
                                </td>
                                <td>
                                    6233457631606
                                </td>
                                <td>
                                    <img style="width: 200px;" src="{{ asset('image/test.jpg') }}" class="card-img-top" alt="Картинка 1">
                                </td>
                                <td>
                                    Promotie lokaal bedrijf Eliens Beauty Palace
                                </td>
                                <td>
                                    -
                                </td>
                                <td>
                                    active
                                </td>
                                <td>
                                    365
                                </td>
                                <td>
                                    11
                                </td>
                                <td>
                                    0.98
                                </td>
                                <td>
                                    0
                                </td>
                                <td>
                                    0
                                </td>
                                <td>
                                    0
                                </td>
                                <td>
                                    3.01
                                </td>
                                <td>
                                    29.53
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" value="">
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
    
                                </td>
                                <td>
                                    6233457631606
                                </td>
                                <td>
                                    <img style="width: 200px;" src="{{ asset('image/test.jpg') }}" class="card-img-top" alt="Картинка 1">
                                </td>
                                <td>
                                    Promotie lokaal bedrijf Eliens Beauty Palace
                                </td>
                                <td>
                                    -
                                </td>
                                <td>
                                    active
                                </td>
                                <td>
                                    365
                                </td>
                                <td>
                                    11
                                </td>
                                <td>
                                    0.98
                                </td>
                                <td>
                                    0
                                </td>
                                <td>
                                    0
                                </td>
                                <td>
                                    0
                                </td>
                                <td>
                                    3.01
                                </td>
                                <td>
                                    29.53
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </form>



        </ul>
    </div>
</div>



@endsection








@push('js')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Подключение jQuery (если необходимо) -->

<script>
    $(document).ready(function() {
        // Покажите карточки (элементы с классом "card")
        $('.card').show();

        $('#toggleViewButton').on('click', function() {
            if ($('.card').is(':visible')) {
                // Переключаемся на таблицу
                $('.card').hide();
                $('#table-view').show();
            } else {
                // Переключаемся на карточки
                $('.card').show();
                $('#table-view').hide();
            }
        });

    });
</script>




