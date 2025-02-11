<style>
    nav {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        gap: 10px;
        padding: 20px 10px;
    }

    .sidebar-nav-link {
        border-radius: 100%;
        padding: 13px;
    }

    .sidebar {
        max-width: min-content;
        display: flex;
        flex-direction: column;
        background-color: #1c1d22;
        height: 100vh;
    }
</style>
<div class="sidebar">
    <nav>
        <a href="{{ route('view.homepage') }}" class="sidebar-nav-link">
            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g opacity="1">
                    <path
                        d="M2.75 4.58333C2.75 3.57081 3.57081 2.75 4.58333 2.75H8.25C9.26252 2.75 10.0833 3.57081 10.0833 4.58333V8.25C10.0833 9.26252 9.26252 10.0833 8.25 10.0833H4.58333C3.57081 10.0833 2.75 9.26252 2.75 8.25V4.58333ZM8.25 4.58333H4.58333V8.25H8.25V4.58333ZM11.9167 4.58333C11.9167 3.57081 12.7375 2.75 13.75 2.75H17.4167C18.4292 2.75 19.25 3.57081 19.25 4.58333V8.25C19.25 9.26252 18.4292 10.0833 17.4167 10.0833H13.75C12.7375 10.0833 11.9167 9.26252 11.9167 8.25V4.58333ZM17.4167 4.58333H13.75V8.25H17.4167V4.58333ZM2.75 13.75C2.75 12.7375 3.57081 11.9167 4.58333 11.9167H8.25C9.26252 11.9167 10.0833 12.7375 10.0833 13.75V17.4167C10.0833 18.4292 9.26252 19.25 8.25 19.25H4.58333C3.57081 19.25 2.75 18.4292 2.75 17.4167V13.75ZM8.25 13.75H4.58333V17.4167H8.25V13.75ZM11.9167 13.75C11.9167 12.7375 12.7375 11.9167 13.75 11.9167H17.4167C18.4292 11.9167 19.25 12.7375 19.25 13.75V17.4167C19.25 18.4292 18.4292 19.25 17.4167 19.25H13.75C12.7375 19.25 11.9167 18.4292 11.9167 17.4167V13.75ZM17.4167 13.75H13.75V17.4167H17.4167V13.75Z"
                        fill="white" />
                </g>
            </svg>
        </a>
        <a href="{{ route('view.profile') }}" class="sidebar-nav-link">
            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g opacity="1">
                    <path
                        d="M11 3.66671C8.97496 3.66671 7.33333 5.30833 7.33333 7.33337C7.33333 9.35842 8.97496 11 11 11C13.025 11 14.6667 9.35842 14.6667 7.33337C14.6667 5.30833 13.025 3.66671 11 3.66671ZM5.5 7.33337C5.5 4.29581 7.96243 1.83337 11 1.83337C14.0376 1.83337 16.5 4.29581 16.5 7.33337C16.5 10.3709 14.0376 12.8334 11 12.8334C7.96243 12.8334 5.5 10.3709 5.5 7.33337ZM7.33333 16.5C5.81455 16.5 4.58333 17.7313 4.58333 19.25C4.58333 19.7563 4.17293 20.1667 3.66667 20.1667C3.16041 20.1667 2.75 19.7563 2.75 19.25C2.75 16.7187 4.80203 14.6667 7.33333 14.6667H14.6667C17.198 14.6667 19.25 16.7187 19.25 19.25C19.25 19.7563 18.8396 20.1667 18.3333 20.1667C17.8271 20.1667 17.4167 19.7563 17.4167 19.25C17.4167 17.7313 16.1854 16.5 14.6667 16.5H7.33333Z"
                        fill="white" />
                </g>
            </svg>
        </a>
        {{-- @if(Auth::guest()){
        <a href="header-nav-link" class="nav-link">Зарегестрироваться/Вход</a>
        }
        @else{
        <a href="header-nav-link" class="nav-link">Профиль</a>
        } --}}
    </nav>
</div>