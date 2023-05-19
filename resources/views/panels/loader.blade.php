@php
    $bank = session('bank') ? session('bank') : null;
@endphp

@if ($bank)
    <div id="loader" class="@if (Route::is('chargement')) {{ 'd-flex' }} @endif"">
        <img src="{{ asset('/storage/images/banks/' . $bank['logo']) }}" alt="icon" class="loading-icon">
    </div>
@endif
