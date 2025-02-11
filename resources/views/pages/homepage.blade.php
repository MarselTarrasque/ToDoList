@extends('template.app')

@section('content')
<style>
    .homepage {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .homepage-inner {
        width: 100%;
    }

    h1 {
        font-size: 28px;
        margin-bottom: 20px;
    }

    h2 {
        font-size: 24px;
        margin-bottom: 20px;
    }

    .to-do {
        color: red;
    }

    .in-progress {
        color: orange;
    }

    .completed {
        color: green;
    }

    .homepage-inner-content {
        width: 100%;
        display: flex;
        gap: 100px;
    }

    .homepage-section {
        width: 100%;
    }

    h3:has(a.section-title) {
        margin-bottom: 20px;
    }

    .section-inner {
        border: 2px dashed #1c1d2230;  
        display: flex;
        flex-direction: column;
        align-items: start;
        border-radius: 10px
    }
    .btn-add{
        display: flex;
        justify-content: center;
        align-items: center;
        border: none;
        gap: 10px;
        margin: 10px;
        cursor: pointer;
        font-weight: bold;
        font-size: 16px;
    }
</style>
<div class="homepage">
    <div class="homepage-inner">
        <h1>Главная страница</h1>
        <h2>Мои задачи</h2>
        <div class="homepage-inner-content">
            <div class="homepage-section">
                <h3><a class="section-title to-do" href="/">Нужно сделать</a></h3>
                <div class="section-inner">
                    <button class="btn-add">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="9" cy="9" r="9" fill="#1C1D22" fill-opacity="0.08" />
                            <g opacity="0.4">
                                <path d="M12 9H6" stroke="#1C1D22" stroke-width="2" stroke-linecap="round" />
                                <path d="M9 12L9 6" stroke="#1C1D22" stroke-width="2" stroke-linecap="round" />
                            </g>
                        </svg>
                        Добавить новую задачу
                    </button>
                    <div class="section-item">

                    </div>
                </div>
            </div>
            <div class="homepage-section">
                <h3><a class="section-title in-progress" href="/">В процессе</a></h3>
                <div class="section-inner">
                    <button class="btn-add">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="9" cy="9" r="9" fill="#1C1D22" fill-opacity="0.08" />
                            <g opacity="0.4">
                                <path d="M12 9H6" stroke="#1C1D22" stroke-width="2" stroke-linecap="round" />
                                <path d="M9 12L9 6" stroke="#1C1D22" stroke-width="2" stroke-linecap="round" />
                            </g>
                        </svg>
                        Добавить новую задачу
                    </button>
                </div>
            </div>
            <div class="homepage-section">
                <h3><a class="section-title completed" href="/">Выполнено</a></h3>
                <div class="section-inner">
                    <button class="btn-add">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="9" cy="9" r="9" fill="#1C1D22" fill-opacity="0.08" />
                            <g opacity="0.4">
                                <path d="M12 9H6" stroke="#1C1D22" stroke-width="2" stroke-linecap="round" />
                                <path d="M9 12L9 6" stroke="#1C1D22" stroke-width="2" stroke-linecap="round" />
                            </g>
                        </svg>
                        Добавить новую задачу
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection