@extends('layouts.app', ['page' => __('Profile'), 'pageSlug' => 'crypprofile'])

@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="d-flex">
                        <div class=" col-3">
                            <button type="button" class="btn btn-success btn-sm btn-icon" style="height: 40px;width: 40px;">
                                <a href="{{ route('pages.crypprofileadd') }}" style="color: white;">
                                    <i class="tim-icons icon-simple-add"></i>
                                </a>
                            </button>
                        </div>
                        <div class="col-9 text-right">

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
                                    <a class="dropdown-item" href="#">Valentin Team</a>
                                    <ul>
                                        <li class="dropdown-item">Bayer 1</li>
                                        <li class="dropdown-item">Bayer 2</li>
                                    </ul>
                                    <a class="dropdown-item" href="#">Poli</a>
                                </div>
                            </div>
                            <button type="button" class="btn btn-danger btn-sm btn-icon" style="height: 40px;width: 40px;">
                                <i class="tim-icons icon-simple-remove"></i>
                            </button>
                        </div>

                    </div>
                </div>
                <div class="card-body">

                    <div class="">
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                                <tr>
                                    <th scope="col">Profile Account</th>
                                    <th scope="col">Status Account</th>
                                    <th scope="col">Status API</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="my-td seller_li">
                                        
                                        <ul style="list-style-type: none;">
                                            <li>
                                                <a href="{{ route('pages.crypprofileacc') }}">
                                                    tara5wcbrenda | 8
                                                </a>
                                                <i class="fas fa-copy icon icon_hov ml-2" data-copytext="https://wiki.skullsecurity.org/index.php/Main_Page"></i></br>
                                            </li>
                                            <li class="">
                                                
                                                <div class="seller d-flex mt-2">
                                                    <h5 style="font-size: 14px;">Seller: </h4>
                                                    <p class="p_1_2 ml-1 p1"> HIU</p>
                                                    <p class="p_1_2 hidden_p">Valentin</p>
                                                    <p class="p_1_2 hidden_p">Poli</p>
                                                    <p class="p_1_2 hidden_p">Lori</p>
                                                </div>
                                                
                                            </li>
                                            <li class="d-flex">
                                                <h5 style="font-size: 14px;">Buyer: </h4>
                                                <p class="ml-1">Poli</p>
                                            </li>
                                        </ul>
                                    </td>
                                    <td>
                                        <button class="btn btn-primary btn-sm">Active</button>
                                    </td>
                                    <td>
                                        <button class="btn btn-primary btn-sm">Active</button>
                                    </td>
                                    <td class=" m-t-c">
                                        <button type="button" rel="tooltip" class="btn btn-info btn-sm btn-icon">
                                            <i class="tim-icons icon-refresh-02"></i>
                                        </button>
                                        <button type="button" rel="tooltip" class="btn btn-success btn-sm btn-icon">
                                            <i class="tim-icons icon-pencil"></i>
                                        </button>
                                        <button type="button" rel="tooltip" class="btn btn-danger btn-sm btn-icon">
                                            <i class="tim-icons icon-simple-remove"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="my-td seller_li">
                                        
                                        <ul style="list-style-type: none;">
                                            <li>
                                                <a href="{{ route('pages.crypprofileacc') }}">
                                                    tara5wcbrenda | 8
                                                </a><i class="fas fa-copy icon icon_hov ml-2" data-copytext="https://www.wikipedia.org/"></i></br>
                                            </li>
                                            <li class="">
                                                
                                                <div class="seller d-flex mt-2">
                                                    <h5 style="font-size: 14px;">Seller: </h4>
                                                    <p class="ml-1 p1"> GrandPA</p>
                                                </div>
                                                
                                            </li>
                                            <li class="d-flex">
                                                <h5 style="font-size: 14px;">Buyer: </h4>
                                                <p class="ml-1">Poli</p>
                                            </li>
                                        </ul>
                                    </td>
                                    <td>
                                        <button class="btn btn-primary btn-sm">Active</button>
                                    </td>
                                    <td>
                                        <button class="btn btn-primary btn-sm">Active</button>
                                    </td>
                                    <td class=" m-t-c">
                                        <button type="button" rel="tooltip" class="btn btn-info btn-sm btn-icon">
                                            <i class="tim-icons icon-refresh-02"></i>
                                        </button>
                                        <button type="button" rel="tooltip" class="btn btn-success btn-sm btn-icon">
                                            <i class="tim-icons icon-pencil"></i>
                                        </button>
                                        <button type="button" rel="tooltip" class="btn btn-danger btn-sm btn-icon">
                                            <i class="tim-icons icon-simple-remove"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="my-td seller_li">
                                        
                                        <ul style="list-style-type: none;">
                                            <li>
                                                <a href="{{ route('pages.crypprofileacc') }}">
                                                    tara5wcbrenda | 8
                                                </a><i class="fas fa-copy icon icon_hov ml-2" data-copytext="https://www.wikipedia.org/"></i></br>
                                            </li>
                                            <li class="">
                                                
                                                <div class="seller d-flex  mt-2">
                                                    <h5 style="font-size: 14px;">Seller: </h4>
                                                    <p class="p_1_2 ml-1 p1"> Loli</p>
                                                    <p class="p_1_2 hidden_p">Victor</p>
                                                    <p class="p_1_2 hidden_p">Kama</p>
                                                    <p class="p_1_2 hidden_p">Logo</p>
                                                    <p class="p_1_2 hidden_p">Abduramanhajiev</p>
                                                    <p class="p_1_2 hidden_p">Pipa</p>
                                                </div>
                                                
                                            </li>
                                            <li class="d-flex">
                                                <h5 style="font-size: 14px;">Buyer: </h4>
                                                <p class="ml-1">Poli</p>
                                            </li>
                                        </ul>
                                    </td>
                                    <td>
                                        <button class="btn btn-primary btn-sm">Active</button>
                                    </td>
                                    <td>
                                        <button class="btn btn-primary btn-sm">Active</button>
                                    </td>
                                    <td class=" m-t-c">
                                        <button type="button" rel="tooltip" class="btn btn-info btn-sm btn-icon">
                                            <i class="tim-icons icon-refresh-02"></i>
                                        </button>
                                        <button type="button" rel="tooltip" class="btn btn-success btn-sm btn-icon">
                                            <i class="tim-icons icon-pencil"></i>
                                        </button>
                                        <button type="button" rel="tooltip" class="btn btn-danger btn-sm btn-icon">
                                            <i class="tim-icons icon-simple-remove"></i>
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


<div class="fixed-plugin4">
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

            <div class="d-block fixed-div">

                <table class="table tablesorter fixed-table" id="">
                    <thead class=" text-primary">
                        <tr>
                            <th scope="col">Actions</th>
                            <th scope="col">TAG</th>
                            <th scope="col">Profile Account</th>
                            <th scope="col">Status Account</th>
                            <th scope="col">Status API</th>
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
                            <div class="d-block">
                                    <button class="btn btn-danger btn-sm">DISABLED</button>
                                </div>
                            </td>
                            <td class="my-td">
                                <ul style="list-style-type: none;display: grid !important;  text-align: center;">
                                    <li>
                                        <a href="{{ route('pages.crypprofileacc') }}">
                                            tara5wcbrenda | 8
                                        </a><i class="fas fa-copy icon"></i></br>
                                    </li>
                                    <li>
                                        <p>

                                            Seller: HIU
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Buyer: Poli
                                        </p>
                                    </li>
                                </ul>
                            </td>
                            <td>
                                <button class="btn btn-primary btn-sm">Active</button>
                            </td>
                            <td>
                                <button class="btn btn-primary btn-sm">Active</button>
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
                            <div class="d-block">
                                    <button class="btn btn-danger btn-sm">DISABLED</button>
                                </div>
                            </td>
                            <td class="my-td">
                                <ul style="list-style-type: none; display: grid !important;  text-align: center;">
                                    <li>
                                        <a href="{{ route('pages.crypprofileacc') }}">
                                            tara5wcbrenda | 8
                                        </a><i class="fas fa-copy icon"></i></br>
                                    </li>
                                    <li>
                                        <p>

                                            Seller: HIU
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Buyer: Poli
                                        </p>
                                    </li>
                                </ul>
                            </td>
                            <td>
                                <button class="btn btn-primary btn-sm">Active</button>
                            </td>
                            <td>
                                <button class="btn btn-primary btn-sm">Active</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>



        </ul>
    </div>
</div>






<style>
    .overlay{
        position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.5);
  z-index: 1000;
  /* display: flex; */
  justify-content: center;
  align-items: center;
    }
</style>

@endsection




@push('js')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // для копирования по кнопке
    const copyIcons = document.querySelectorAll('.icon');

    copyIcons.forEach(function(icon) {
        icon.addEventListener('click', function() {
            const copyText = icon.getAttribute('data-copytext');
            const tempInput = document.createElement('input');
            tempInput.value = copyText;
            document.body.appendChild(tempInput);
            tempInput.select();
            document.execCommand('copy');
            document.body.removeChild(tempInput);
            icon.style.color = '#e14eca';

            setTimeout(function() {
                icon.style.color = '';
            }, 1000);
        });
    });

    // для iframe
    const sellerRows = document.querySelectorAll('.seller');
    const Card = document.querySelector('.overlay');

    sellerRows.forEach(function(row) {
        const sellerNames = row.querySelectorAll('.p_1_2');
        const p1 = row.querySelector('.p1');
        let hiddenContent = null;

        const hasHiddenElements = sellerNames.length > 0;

        if (hasHiddenElements) {
            const card = row.closest('.card'); 
            
            const dots = document.createElement('span');
            p1.appendChild(dots);
            dots.textContent = "..."
            p1.insertAdjacentElement('afterend', dots);

            row.addEventListener('click', function(event) {

                if (hiddenContent) {
                    row.removeChild(hiddenContent);
                    hiddenContent = null;
                    
                } else {
                    hiddenContent = document.createElement('div'); // Используйте document.createElement
                    hiddenContent.classList.add('hidden-content');
                    hiddenContent.style.padding = '20px';
                    hiddenContent.style.zIndex = '2000';
                    hiddenContent.style.position = 'absolute';
                    hiddenContent.style.right = ' 25%';
                    hiddenContent.style.background = '#32325d';
                    hiddenContent.style.borderRadius = '10px';
                    hiddenContent.style.top = ' 35%';
                    hiddenContent.style.width = '35%';
                    hiddenContent.color = "white";
                    hiddenContent.style.fontSize = "20px";
                    hiddenContent.style.border = "1px solid";
                    
                    const p_card = document.createElement('p');
                    hiddenContent.appendChild(p_card);
                    p_card.textContent = "Sellers:"
                    
                    Card.style.display = 'flex';


                    // Добавляем обработчик события click для скрытого окна
                    hiddenContent.addEventListener('click', function(event) {
                        event.stopPropagation(); // Предотвращаем всплытие события
                    });

                    sellerNames.forEach(function(name, i) {
                        if (name.classList.contains('p_1_2')) {
                            var sellerElement = document.createElement('p');
                            sellerElement.textContent = (i+1)+ '.  ' + name.textContent;
                            sellerElement.style.borderBottom = '1px solid';
                            hiddenContent.appendChild(sellerElement);

                        }
                    });
                    var paragraphElement = hiddenContent.querySelector('p');
                    paragraphElement.style.textAlign = 'center';
                    paragraphElement.style.borderBottom = '1px solid';
                    
                    
                    card.appendChild(hiddenContent); // Добавьте карточке, а не строке
                }

                event.stopPropagation();
            });
            
            // наведние на скрытый текст
            row.addEventListener('mouseover', function () {
                p1.style.color = "#e14eca";
                dots.style.color = "#e14eca";
            });

            row.addEventListener('mouseout', function () {
                p1.style.color = "";
                dots.style.color = "";
            });

            // Обработчик события для закрытия окна при клике вне строки и на строку
            document.addEventListener('click', function(event) {
                if (hiddenContent && event.target !== row && !hiddenContent.contains(event.target)) {
                    p1.style.color = "rgba(255, 255, 255, 0.8)";
                    dots.style.color = "rgba(255, 255, 255, 0.8)";
                    card.removeChild(hiddenContent); // Удалите из карточки, а не строки
                    hiddenContent = null;
                    Card.style.display = 'none';
                }
            });
        }
    });
});
</script>

@endpush

