@extends('layouts.app', ['page' => __('Share'), 'pageSlug' => 'crypshare'])

@section('content')

<div class="container">
    <div id="infoconteiner" class=" mt-5 infoconteiner">
        <div id="infobtn" class="infobtn">
            <a id="button1" class="btn btn-default" style="color: white;border-radius:5px !important">SOC</a>
        </div>
        <div id="infobtn2" class="infobtn2">
            <a id="button2" class="btn btn-default" style="color: white;border-radius:5px !important">BM</a>
        </div>
        <div id="infobtn3" class="infobtn3">
            <a id="button3" class="btn btn-default" style="color: white;border-radius:5px !important">FAN Pages</a>
        </div>
    </div>
    <div id="info" class="mt-4 infocard" style="display: none;">
        <!-- Здесь разместите вашу информацию -->
        <table class="table tablesorter " id="">
            <thead class=" text-primary">
                <tr>
                    <th scope="col">SOC</th>
                    <th scope="col">Email</th>
                    <th scope="col">Creation Date</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Admin Admin</td>
                    <td>
                        <a href="mailto:admin@black.com">admin@black.com</a>
                    </td>
                    <td>24/02/2020 16:47</td>
                    <td class="text-right">
                        <div class="dropdown">
                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <a class="dropdown-item" href="#">Edit</a>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div id="info2" class="mt-4 infocard" style="display: none;">
        <!-- Здесь разместите вашу информацию -->
        <table class="table tablesorter " id="">
            <thead class=" text-primary">
                <tr>
                    <th scope="col">BM</th>
                    <th scope="col">Email</th>
                    <th scope="col">Creation Date</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Admin Admin</td>
                    <td>
                        <a href="mailto:admin@black.com">admin@black.com</a>
                    </td>
                    <td>24/02/2020 16:47</td>
                    <td class="text-right">
                        <div class="dropdown">
                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <a class="dropdown-item" href="#">Edit</a>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div id="info3" class="mt-4 infocard" style="display: none;">
        <!-- Здесь разместите вашу информацию -->
        <table class="table tablesorter " id="">
            <thead class=" text-primary">
                <tr>
                    <th scope="col">FAN Pages</th>
                    <th scope="col">Email</th>
                    <th scope="col">Creation Date</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Admin Admin</td>
                    <td>
                        <a href="mailto:admin@black.com">admin@black.com</a>
                    </td>
                    <td>24/02/2020 16:47</td>
                    <td class="text-right">
                        <div class="dropdown">
                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <a class="dropdown-item" href="#">Edit</a>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection

@push('js')
<script>
    const infoconteiner = document.getElementById('infoconteiner');

    const infobtnstart = document.createElement('div');
    const infobtnend = document.createElement('div');

    const infobtnstart2 = document.createElement('div');
    const infobtnend2 = document.createElement('div');

    const infobtn = document.getElementById('infobtn');
    const infobtn2 = document.getElementById('infobtn2');
    const infobtn3 = document.getElementById('infobtn3');

    const button1 = document.getElementById('button1');
    const button2 = document.getElementById('button2');
    const button3 = document.getElementById('button3');

    const info = document.getElementById('info');

    var isButton1Clicked = false; // Переменная для отслеживания состояния кнопки
    var isButton2Clicked = false; // Переменная для отслеживания состояния кнопки
    var isButton3Clicked = false; // Переменная для отслеживания состояния кнопки

    button1.addEventListener('click', () => {
        if (!isButton1Clicked) {

            infoconteiner.appendChild(infobtnstart);
            infobtnstart.appendChild(infobtn);
            
            infobtnstart.style.width = ('70%')

            infoconteiner.appendChild(infobtnend);
            infobtnend.appendChild(infobtn2);
            infobtnend.appendChild(infobtn3);

            infoconteiner.style.justifyContent = ('space-between')
            infobtnend.style.display = ('flex')

            button1.classList.remove('btn-default');
            button1.classList.add('btn-primary');

            // Показываем информацию
            info.style.display = 'block';

            isButton1Clicked = true; // Устанавливаем флаг, что кнопка была нажата
            // Отменяем действия для кнопки 2 и 3
            isButton2Clicked = false;
            isButton3Clicked = false;

            // Очищаем контейнер от кнопок 2 и 3
            if (infoconteiner.contains(infobtnstart2)) {
                infoconteiner.removeChild(infobtnstart2);
                infoconteiner.removeChild(infobtnend2);

                info2.style.display = 'none';
                info3.style.display = 'none';

                button2.classList.remove('btn-primary');
                button3.classList.remove('btn-primary');
                button2.classList.add('btn-default');
                button3.classList.add('btn-default');
            }
            if (info2.style.display = 'block') {
                info2.style.display = 'none';
                button2.classList.remove('btn-primary');
                button2.classList.add('btn-default');
            }

        } else {
            infoconteiner.appendChild(infobtn);
            infoconteiner.appendChild(infobtn2);
            infoconteiner.appendChild(infobtn3);

            infobtn2.style.width = ('')
            
            infoconteiner.removeChild(infobtnstart);
            infoconteiner.removeChild(infobtnend);

            button1.classList.remove('btn-primary');
            button1.classList.add('btn-default');

            info.style.display = 'none';

            isButton1Clicked = false; // Сбрасываем флаг, что кнопка была нажата
        }
    });



    button2.addEventListener('click', () => {
        if (!isButton2Clicked) {
            infobtn2.style.width = ('70%')
            infobtn2.style.textAlign = ('center')

            info2.style.display = 'block';

            button2.classList.add('btn-primary');
            button2.classList.remove('btn-default');

            isButton2Clicked = true; // Устанавливаем флаг, что кнопка была нажата

            // Отменяем действия для кнопки 1 и 3
            isButton1Clicked = false;
            isButton3Clicked = false;

            // Очищаем контейнер от кнопок 1 и 3
            if (infoconteiner.contains(infobtnstart)) {
                infoconteiner.appendChild(infobtn);
                infoconteiner.appendChild(infobtn2);
                infoconteiner.appendChild(infobtn3);
                infoconteiner.removeChild(infobtnstart);
                infoconteiner.removeChild(infobtnend);
                info.style.display = 'none';
                button1.classList.remove('btn-primary');
                button1.classList.add('btn-default');
            }
            if (infoconteiner.contains(infobtnstart2)) {
                infoconteiner.appendChild(infobtn);
                infoconteiner.appendChild(infobtn2);
                infoconteiner.appendChild(infobtn3);
                infoconteiner.removeChild(infobtnstart2);
                infoconteiner.removeChild(infobtnend2);
                info3.style.display = 'none';
                button3.classList.remove('btn-primary');
                button3.classList.add('btn-default');
            }


        } else {
            info2.style.display = 'none';
            
            infobtn2.style.width = ('')

            button2.classList.remove('btn-primary');
            button2.classList.add('btn-default');

            isButton2Clicked = false; // Сбрасываем флаг, что кнопка была нажата
        }
    });


    button3.addEventListener('click', () => {
        if (!isButton3Clicked) {

            infoconteiner.appendChild(infobtnstart2);
            infobtnstart2.appendChild(infobtn);
            infobtnstart2.appendChild(infobtn2);

            infoconteiner.appendChild(infobtnend2);
            infobtnend2.appendChild(infobtn3);
            
            infobtnend2.style.width = ('70%')
            infobtnend2.style.textAlign = ('end')

            infoconteiner.style.justifyContent = ('space-between')
            infobtnstart2.style.display = ('flex')

            button3.classList.add('btn-primary');
            button3.classList.remove('btn-default');

            // Показываем информацию
            info3.style.display = 'block';

            isButton3Clicked = true; // Устанавливаем флаг, что кнопка была нажата

            // Отменяем действия для кнопки 1 и 2
            isButton1Clicked = false;
            isButton2Clicked = false;

            // Очищаем контейнер от кнопок 1 и 2
            if (infoconteiner.contains(infobtnstart)) {
                infoconteiner.removeChild(infobtnstart);
                infoconteiner.removeChild(infobtnend);
                info.style.display = 'none';
                button1.classList.remove('btn-primary');
                button1.classList.add('btn-default');
            }
            if (info2.style.display = 'block') {
                info2.style.display = 'none';
                button2.classList.remove('btn-primary');
                button2.classList.add('btn-default');
            }

        } else {
            infoconteiner.appendChild(infobtn);
            infoconteiner.appendChild(infobtn2);
            infoconteiner.appendChild(infobtn3);

            infoconteiner.removeChild(infobtnstart2);
            infoconteiner.removeChild(infobtnend2);

            button3.classList.remove('btn-primary');
            button3.classList.add('btn-default');

            infobtn2.style.width = ('')

            info3.style.display = 'none';

            isButton3Clicked = false; // Сбрасываем флаг, что кнопка была нажата
        }
    });
    document.addEventListener("DOMContentLoaded", function() {
        button1.click();
    });
</script>
@endpush