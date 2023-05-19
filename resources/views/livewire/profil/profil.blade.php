<div>
    <div id="appCapsule" wire:key="{{ 'profil-' . rand(1000, 9999) . '-' . time() }}">
        <div class="section mt-3 text-center">
            <div class="mb-2">
                <img src="https://ui-avatars.com/api/?name={{ $fullName }}&amp;color={{ ltrim($bank['theme_color'], '#') }}&amp;background={{ ltrim($bank['font_color'], '#') }}"
                    alt="avatar" width="80" class="imaged rounded">
                {{-- <img src="{{ asset('/storage/images/banks/' . $bank['logo']) }}" alt="avatar" width="60"  class="imaged "> --}}
            </div>
            <h3 class="mt-1 text-secondary text-capitalize ">{{ $fullName }}</h3>
        </div>
        <div class="listview-title mt-1">Mes informations</div>
        <ul class="listview image-listview inset">
            <li>
                <a class="item">
                    <div class="icon-box bg-theme-primary custom">
                        <ion-icon name="call-outline" role="img" class="md hydrated" aria-label="card outline">
                        </ion-icon>
                    </div>
                    <div class="in" data-bs-toggle="modal" data-bs-target="#fiabiliser-mobile">
                        <div class="py-1">
                            <h4 class="my-0">{{ $mobile ? $mobile['number'] : '******' }}</h4>
                        </div>
                        <span class="text-muted">{{ $mobile['is_fiabilise'] ? 'Fiabilisé' : 'Non fiabilisé' }} </span>
                    </div>
                </a>
            </li>
            <li>
                <a class="item">
                    <div class="icon-box bg-theme-primary custom">
                        <ion-icon name="home-outline" role="img" class="md hydrated" aria-label="card outline">
                        </ion-icon>
                    </div>
                    <div class="in">
                        <div class="py-1">
                            <h4 class="my-0">{{ $fixe ? $fixe['number'] : '******' }}</h4>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a class="item">
                    <div class="icon-box bg-theme-primary custom">
                        <ion-icon name="at-outline" role="img" class="md hydrated" aria-label="at outline">
                        </ion-icon>
                    </div>
                    <div class="in">
                        <div class="py-1">
                            <h4 class="my-0">{{ $email ? $email['email_address'] : '******' }}</h4>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a class="item">
                    <div class="icon-box bg-theme-primary custom">
                        <ion-icon name="location-outline" role="img" class="md hydrated" aria-label="cash outline">
                        </ion-icon>
                    </div>
                    <div class="in">
                        <div class="py-1">
                            @if ($address)
                                <h4 class="my-0">{{ $address['address_line'] }}</h4>
                                <h4 class="my-0">{{ $address['zipcode'] }} {{ $address['city'] }}</h4>
                            @else
                                <h4 class="my-0">******</h4>
                            @endif
                        </div>
                    </div>
                </a>
            </li>
        </ul>

        <div class="listview-title mt-1">Paramètres</div>
        <ul class="listview image-listview text mb-2 inset">
            <li>
                <a href="#" class="item" data-bs-toggle="modal" data-bs-target="#changement-pass">
                    <div class="icon-box bg-theme-primary custom">
                        <ion-icon name="lock-closed-outline" role="img" class="md hydrated"
                            aria-label="lock outline"></ion-icon>
                    </div>
                    <div class="in">
                        <div>Modifier mon mot de passe</div>
                    </div>
                </a>
            </li>
            <li>
                <a href="#" class="item">
                    <div class="icon-box bg-theme-primary custom">
                        <ion-icon name="document-outline" role="img" class="md hydrated"
                            aria-label="document outline"></ion-icon>
                    </div>
                    <div class="in">
                        <div>Mes pièces justificatives</div>
                    </div>
                </a>
            </li>
        </ul>

        <div class="listview-title mt-1">Thème</div>
        <ul class="listview image-listview text inset no-line mb-2">
            <li>
                <div class="item">
                    <div class="icon-box bg-theme-primary custom">
                        <ion-icon name="moon-outline" role="img" class="md hydrated" aria-label="moon outline">
                        </ion-icon>
                    </div>
                    <div class="in">
                        <div>Mode sombre</div>
                        <div class="form-check form-switch  ms-2">
                            <input class="form-check-input custom dark-mode-switch" type="checkbox" id="darkmodeSwitch">
                            <label class="form-check-label" for="darkmodeSwitch"></label>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>

    @include('partials.modals.profil.modal-fiabilisation-mobile')
    @include('partials.modals.profil.modal-changement-pass')
</div>
