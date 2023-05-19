@php
    $bank = session('bank') ? session('bank') : null;
@endphp

<div class="appHeader bg-theme-primary custom text-light border-0 @if (Route::is('accueil')) {{ 'bg-theme-primary text-light border-0' }} @endif">

    <div class="left">
        <a href="#" class="headerButton text-theme-color">
            <ion-icon name="menu-outline" role="img" class="md hydrated" aria-label="menu outline"></ion-icon>
        </a>
    </div>
    <div class="pageTitle">
        <img src="{{ asset('/storage/images/banks/' . $bank['logo']) }}" alt="logo" class=" rounded imaged w36">
    </div>
    <div class="right">
        <a class="headerButton text-theme-color">
            <ion-icon class="icon md hydrated" name="notifications-outline" role="img"
                aria-label="notifications outline"></ion-icon>
        </a>
    </div>

    {{-- @if (Route::is('accueil'))
    <div class="left">
        <a href="#" class="headerButton">
            <ion-icon name="menu-outline" role="img" class="md hydrated" aria-label="menu outline"></ion-icon>
        </a>
    </div>
    <div class="pageTitle">
        <img src="{{ asset('/storage/images/banks/' . $bank['logo']) }}" alt="logo" class=" rounded imaged w36">
    </div>
    <div class="right">
        <a class="headerButton">
            <ion-icon class="icon md hydrated" name="notifications-outline" role="img"
                aria-label="notifications outline"></ion-icon>
        </a>
    </div>
    @else
        <div class="left">
            <a href="#" class="appheaderButton goBack">
                <ion-icon name="chevron-back-outline" role="img" class="md hydrated"
                    aria-label="chevron back outline">
                </ion-icon>
            </a>
        </div>
        <div class="pageTitle text-capitalize"> {{ Route::currentRouteName() }} </div>
    @endif --}}
</div>
