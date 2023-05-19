<link rel="stylesheet" href="{{ asset(mix('css/app.css')) }}" />
@php
    $bank = session('bank') ? session('bank') : null;
@endphp

@if ($bank)
    <style>
        :root {
            --theme-color: <?php echo $bank['theme_color']; ?>;
            --font-color: <?php echo $bank['font_color']; ?>;
        }
    </style>
@endif
