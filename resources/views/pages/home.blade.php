@extends('template.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('assets/home.css') }}">
    <div class="homepage">
        <div class="homepage-inner">
            <h1 class="title">Главная страница</h1>
            <div class="buttons-block">
                <input class="btn" name="homenav" id="btn1" type="radio" checked>
                <label class="btn1-label" for="btn1">
                    <p>Все проекты</p>
                </label>
                <input class="btn btn-add" name="homenav" id="btn2" type="radio">
                <label class="btn2-label" for="btn2">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="9" cy="9" r="9" fill="#1C1D22" fill-opacity="0.08" />
                        <g opacity="0.4">
                            <path d="M12 9H6" stroke="#1C1D22" stroke-width="2" stroke-linecap="round" />
                            <path d="M9 12L9 6" stroke="#1C1D22" stroke-width="2" stroke-linecap="round" />
                        </g>
            </svg>
                    Новый проект
                </label>
            </div>
            <div class="homepanels-all">
                <div class="homepanel" id="panel1">
                    Panel1
                </div>
                <div class="homepanel-add-new" id="panel2">
                    Panel2
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const btn1 = document.getElementById('btn1');
            const btn2 = document.getElementById('btn2');
            const panel1 = document.getElementById('panel1');
            const panel2 = document.getElementById('panel2');
            function updatePanelsVisibility() {
                if (btn1.checked) {
                    panel1.style.display = 'block';
                    panel2.style.display = 'none';
                } else if (btn2.checked) {
                    panel1.style.display = 'none';
                    panel2.style.display = 'block';
                }
            }
            updatePanelsVisibility();
            btn1.addEventListener('change', updatePanelsVisibility);
            btn2.addEventListener('change', updatePanelsVisibility);
        });
    </script>
@endsection