@extends('layouts.app', ['pageSlug' => 'crypprofileacc'])

@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
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

                    </div>
                </div>
                <div class="card-body">

                    <div class="">
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                                <tr>
                                    <th scope="col">Рекламный кабинет</th>
                                    <th scope="col">Финансы</th>
                                    <th scope="col">Status Office</th>
                                    <th scope="col">Status API</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="my-tr">
                                    <td class="my-td">
                                        <span class="my-td-none">SOC</span></br>
                                        <ul style="list-style-type: none;">
                                            <li>
                                                <div class="d-flex">
                                                    <p>
                                                        AD ACC ID: <a href="{{ route('pages.crypprofileadacc') }}">522907474482429 </a>
                                                    <p class="status-indicator"></p>
                                                    <p class="ml-1" style="font-size: 10px; color:red; align-items:flex-start;">14</p>
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <p>

                                                    Часовой пояс: TZ_ASIA_BANGKOK
                                                </p>
                                            </li>
                                            <li>
                                                <p>

                                                    Валюта: USD
                                                </p>
                                            </li>
                                        </ul>
                                    </td>
                                    <td class="my-td">
                                        <ul style="list-style-type: none;">
                                            <li>
                                                <p>Spend: 0$</p>
                                            </li>
                                            <li>
                                                <p>Unpaid: 100$</p>
                                            </li>
                                            <li>
                                                <p>Тип: -</p>
                                            </li>
                                            <li>
                                                <p>Лимит: 0$</p>
                                            </li>
                                            <li>
                                                <p>Credit Card: -</p>
                                            </li>
                                        </ul>
                                    </td>
                                    <td>
                                        <div class="d-block">
                                            <button class="btn btn-danger btn-sm">DISABLED</button>
                                        </div>
                                        <div class="block mt-2">
                                            <button class="btn btn-danger btn-sm">ADS_INTEGRITY_POLICY</button>
                                        </div>
                                    </td>
                                    <td class=" m-t-c">
                                        <div class="d-block">
                                            <button class="btn btn-success btn-sm">GOOD</button>
                                        </div>
                                        <div class="block mt-2">
                                            <button class="btn btn-success btn-sm">2023-06-05 03:00:35</button>
                                        </div>
                                    </td>
                                    <td class=" m-t-c">
                                        <button type="button" rel="tooltip" class="btn btn-info btn-sm btn-icon">
                                            <i class="tim-icons icon-refresh-02"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="my-tr-2">
                                    <td class="my-td">
                                        <span class="my-td-none">BM</span></br>
                                        <ul style="list-style-type: none;">
                                            <li>
                                                <div class="d-flex">
                                                    <p>
                                                        AD ACC ID: <a href="{{ route('pages.crypprofileadacc') }}">522907474482429 </a>
                                                    <p class="status-indicator"></p>
                                                    <p class="ml-1" style="font-size: 10px; color:red; align-items:flex-start;">14</p>
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <p>

                                                    Часовой пояс: TZ_ASIA_BANGKOK
                                                </p>
                                            </li>
                                            <li>
                                                <p>

                                                    Валюта: USD
                                                </p>
                                            </li>
                                        </ul>
                                    </td>
                                    <td class="my-td">
                                        <ul style="list-style-type: none;">
                                            <li>
                                                <p>Spend: 0$</p>
                                            </li>
                                            <li>
                                                <p>Unpaid: 100$</p>
                                            </li>
                                            <li>
                                                <p>Тип: -</p>
                                            </li>
                                            <li>
                                                <p>Лимит: 0$</p>
                                            </li>
                                            <li>
                                                <p>Credit Card: -</p>
                                            </li>
                                        </ul>
                                    </td>
                                    <td>
                                        <div class="d-block">
                                            <button class="btn btn-danger btn-sm">DISABLED</button>
                                        </div>
                                        <div class="block mt-2">
                                            <button class="btn btn-danger btn-sm">ADS_INTEGRITY_POLICY</button>
                                        </div>
                                    </td>
                                    <td class=" m-t-c">
                                        <div class="d-block">
                                            <button class="btn btn-success btn-sm">GOOD</button>
                                        </div>
                                        <div class="block mt-2">
                                            <button class="btn btn-success btn-sm">2023-06-05 03:00:35</button>
                                        </div>
                                    </td>
                                    <td class=" m-t-c">
                                        <button type="button" rel="tooltip" class="btn btn-info btn-sm btn-icon">
                                            <i class="tim-icons icon-refresh-02"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="my-td">
                                        <ul style="list-style-type: none;">
                                            <li>
                                                <div class="d-flex">
                                                    <p>
                                                        AD ACC ID: <a href="{{ route('pages.crypprofileadacc') }}">522907474482429 </a>
                                                    <p class="status-indicator"></p>
                                                    <p class="ml-1" style="font-size: 10px; color:red; align-items:flex-start;">14</p>
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <p>

                                                    Часовой пояс: TZ_ASIA_BANGKOK
                                                </p>
                                            </li>
                                            <li>
                                                <p>

                                                    Валюта: USD
                                                </p>
                                            </li>
                                        </ul>
                                    </td>
                                    <td class="my-td">
                                        <ul style="list-style-type: none;">
                                            <li>
                                                <p>Spend: 0$</p>
                                            </li>
                                            <li>
                                                <p>Unpaid: 100$</p>
                                            </li>
                                            <li>
                                                <p>Тип: -</p>
                                            </li>
                                            <li>
                                                <p>Лимит: 0$</p>
                                            </li>
                                            <li>
                                                <p>Credit Card: -</p>
                                            </li>
                                        </ul>
                                    </td>
                                    <td>
                                        <div class="d-block">
                                            <button class="btn btn-danger btn-sm">DISABLED</button>
                                        </div>
                                        <div class="block mt-2">
                                            <button class="btn btn-danger btn-sm">ADS_INTEGRITY_POLICY</button>
                                        </div>
                                    </td>
                                    <td class=" m-t-c">
                                        <div class="d-block">
                                            <button class="btn btn-success btn-sm">GOOD</button>
                                        </div>
                                        <div class="block mt-2">
                                            <button class="btn btn-success btn-sm">2023-06-05 03:00:35</button>
                                        </div>
                                    </td>
                                    <td class=" m-t-c">
                                        <button type="button" rel="tooltip" class="btn btn-info btn-sm btn-icon">
                                            <i class="tim-icons icon-refresh-02"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer py-4">
                    <nav class="d-flex justify-content-end" aria-label="...">

                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>







<!-- for table right -->
<div class="fixed-plugin2">
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
                    <!-- <button type="button" class="btn btn-danger btn-sm btn-icon ml-2" style="height: 37px;width: 37px;">
                        X
                    </button> -->
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
                                <th>Рекламный кабинет</th>
                                <th>Финансы</th>
                                <th>Status Office</th>
                                <th>Status API</th>
    
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="my-tr">
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
                                <td class="">
                                    <span class="float-span">SOC</span></br>
                                    <ul style="list-style-type: none;">
                                        <li>
                                            <div class="d-flex">
                                                <p>
                                                    AD ACC ID: <a href="">522907474482429 </a>
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <p>
    
                                                Часовой пояс: TZ_ASIA_BANGKOK
                                            </p>
                                        </li>
                                        <li>
                                            <p>
    
                                                Валюта: USD
                                            </p>
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <ul style="list-style-type: none;">
                                        <li>
                                            <p>Spend: 0$</p>
                                        </li>
                                        <li>
                                            <p>Unpaid: 100$</p>
                                        </li>
                                        <li>
                                            <p>Тип: -</p>
                                        </li>
                                        <li>
                                            <p>Лимит: 0$</p>
                                        </li>
                                        <li>
                                            <p>Credit Card: -</p>
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <div class="d-block">
                                        <button class="btn btn-danger btn-sm">DISABLED</button>
                                    </div>
                                    <div class="block mt-2">
                                        <button class="btn btn-danger btn-sm">ADS_INTEGRITY_POLICY</button>
                                    </div>
                                </td>
                                <td class=" m-t-c">
                                    <div class="d-block">
                                        <button class="btn btn-success btn-sm">GOOD</button>
                                    </div>
                                    <div class="block mt-2">
                                        <button class="btn btn-success btn-sm">2023-06-05 03:00:35</button>
                                    </div>
                                </td>
    
    
                            </tr>
                            <tr class="my-tr-2">
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
                                <td class="">
                                    <span class="float-span">BM</span></br>
                                    <ul style="list-style-type: none;">
                                        <li>
                                            <div class="d-flex">
                                                <p>
                                                    AD ACC ID: <a href="">522907474482429 </a>
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <p>
    
                                                Часовой пояс: TZ_ASIA_BANGKOK
                                            </p>
                                        </li>
                                        <li>
                                            <p>
    
                                                Валюта: USD
                                            </p>
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <ul style="list-style-type: none;">
                                        <li>
                                            <p>Spend: 0$</p>
                                        </li>
                                        <li>
                                            <p>Unpaid: 100$</p>
                                        </li>
                                        <li>
                                            <p>Тип: -</p>
                                        </li>
                                        <li>
                                            <p>Лимит: 0$</p>
                                        </li>
                                        <li>
                                            <p>Credit Card: -</p>
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <div class="d-block">
                                        <button class="btn btn-danger btn-sm">DISABLED</button>
                                    </div>
                                    <div class="block mt-2">
                                        <button class="btn btn-danger btn-sm">ADS_INTEGRITY_POLICY</button>
                                    </div>
                                </td>
                                <td class=" m-t-c">
                                    <div class="d-block">
                                        <button class="btn btn-success btn-sm">GOOD</button>
                                    </div>
                                    <div class="block mt-2">
                                        <button class="btn btn-success btn-sm">2023-06-05 03:00:35</button>
                                    </div>
                                </td>
    
    
                            </tr>
                            <tr >
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
                                <td class="">
                                    <ul style="list-style-type: none;">
                                        <li>
                                            <div class="d-flex">
                                                <p>
                                                    AD ACC ID: <a href="">522907474482429 </a>
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <p>
    
                                                Часовой пояс: TZ_ASIA_BANGKOK
                                            </p>
                                        </li>
                                        <li>
                                            <p>
    
                                                Валюта: USD
                                            </p>
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <ul style="list-style-type: none;">
                                        <li>
                                            <p>Spend: 0$</p>
                                        </li>
                                        <li>
                                            <p>Unpaid: 100$</p>
                                        </li>
                                        <li>
                                            <p>Тип: -</p>
                                        </li>
                                        <li>
                                            <p>Лимит: 0$</p>
                                        </li>
                                        <li>
                                            <p>Credit Card: -</p>
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <div class="d-block">
                                        <button class="btn btn-danger btn-sm">DISABLED</button>
                                    </div>
                                    <div class="block mt-2">
                                        <button class="btn btn-danger btn-sm">ADS_INTEGRITY_POLICY</button>
                                    </div>
                                </td>
                                <td class=" m-t-c">
                                    <div class="d-block">
                                        <button class="btn btn-success btn-sm">GOOD</button>
                                    </div>
                                    <div class="block mt-2">
                                        <button class="btn btn-success btn-sm">2023-06-05 03:00:35</button>
                                    </div>
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
                                <td class="">
                                    <ul style="list-style-type: none;">
                                        <li>
                                            <div class="d-flex">
                                                <p>
                                                    AD ACC ID: <a href="">522907474482429 </a>
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <p>
    
                                                Часовой пояс: TZ_ASIA_BANGKOK
                                            </p>
                                        </li>
                                        <li>
                                            <p>
    
                                                Валюта: USD
                                            </p>
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <ul style="list-style-type: none;">
                                        <li>
                                            <p>Spend: 0$</p>
                                        </li>
                                        <li>
                                            <p>Unpaid: 100$</p>
                                        </li>
                                        <li>
                                            <p>Тип: -</p>
                                        </li>
                                        <li>
                                            <p>Лимит: 0$</p>
                                        </li>
                                        <li>
                                            <p>Credit Card: -</p>
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <div class="d-block">
                                        <button class="btn btn-danger btn-sm">DISABLED</button>
                                    </div>
                                    <div class="block mt-2">
                                        <button class="btn btn-danger btn-sm">ADS_INTEGRITY_POLICY</button>
                                    </div>
                                </td>
                                <td class=" m-t-c">
                                    <div class="d-block">
                                        <button class="btn btn-success btn-sm">GOOD</button>
                                    </div>
                                    <div class="block mt-2">
                                        <button class="btn btn-success btn-sm">2023-06-05 03:00:35</button>
                                    </div>
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