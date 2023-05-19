<div class="appBottomMenu">
    <a href="{{ route('accueil') }}" class=" text-theme-primary custom item @if (Route::is('accueil')) {{ 'active' }} @endif">
        <div class="col">
            <ion-icon name="cash-outline"></ion-icon>
            <strong>Comptes</strong>
        </div>
    </a>
    <a href="{{ route('orders.list') }}" class=" text-theme-primary custom item @if (Route::is('orders.show') || Route::is('orders.list') ) {{ 'active' }} @endif">
        <div class="col">
            <ion-icon name="swap-horizontal-outline"></ion-icon>
            <strong>Transactions</strong>
        </div>
    </a>
    <a href="{{ route('cartes.list') }}" class=" text-theme-primary custom item @if (Route::is('cartes.show') || Route::is('cartes.list') ) {{ 'active' }} @endif">
        <div class="col">
            <ion-icon name="card-outline"></ion-icon>
            <strong>Cartes</strong>
        </div>
    </a>
    <a href="{{ route('contact') }}" class=" text-theme-primary custom item @if (Route::is('contact')) {{ 'active' }} @endif">
        <div class="col">
            <ion-icon name="chatbubble-outline"></ion-icon>
            <strong>Contact</strong>
        </div>
    </a>
    <a href="{{ route('profil') }}" class="cursor-pointer text-theme-primary custom  item @if (Route::is('profil')) {{ 'active' }} @endif">
        <div class="col">
            <ion-icon name="menu-outline"></ion-icon>
            <strong>Plus</strong>
        </div>
    </a>
</div>


