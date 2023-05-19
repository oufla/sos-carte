<div>
    <div id="appCapsule" wire:key="{{ 'carteView-' . rand(1000, 9999) . '-' . time() }}">
        <div class="section mt-2">
            <div class="card">
                <div class="transactions border-none mt-2">
                    <!-- item -->
                    <a href="#" class="item py-2" style="box-shadow: none;">
                        <div class="detail">
                            <img src="{{ asset('/storage/images/cards/' . $carte['type'] . '.png') }}" alt="img"
                                class="image-block imaged rounded w36">
                            <div>
                                <strong>{{ $carte['porteur'] }}</strong>
                                <p>{{ $carte['crypted'] }}</p>
                            </div>
                        </div>
                    </a>
                    <!-- * item -->
                </div>
                @if ($carte['status'] && $carte['status'] == 'inactive')
                    <div class="text-center cursor-pointer">
                        <span class="badge badge-secondary">Carte verouillée</span>
                    </div>
                @elseif ($carte['status'] && $carte['status'] == 'opposee')
                    <div class="text-center cursor-pointer">
                        <span class="badge badge-secondary">Carte en opposition</span>
                    </div>
                @endif
                <div class="mt-2 mb-2 px-2 d-flex justify-content-between align-items-center cursor-pointer">
                    <a href="#" class="get-modal-name" data-modal="opposition"
                    data-bs-toggle="modal" data-bs-target="#options-carte">
                        <h5 class="mx-2">
                            <span class="iconbox ">
                                <ion-icon name="lock-closed-outline" role="img" class="md"
                                    aria-label="lock closed outline"></ion-icon>
                            </span>
                            <u class="mt-1">Faire opposition</u>
                        </h5>
                    </a>
                    <a href="#">
                        <h5 class="mx-2">
                            <span class="iconbox ">
                                <ion-icon name="options-outline" role="img" class="md"
                                    aria-label="options outline">
                                </ion-icon>
                            </span>
                            <u class="mt-1">Gestion des plafonds</u>
                        </h5>
                    </a>
                </div>
            </div>
        </div>
        <div class="listview-title mt-2">
            <span class="mb-2">Paramètres de carte</span>
        </div>
        <div class="row px-3">
            <div class="col-4">
                <div class="card">
                    <div class="mt-1 d-flex justify-content-between align-items-center cursor-pointer">
                        <div style="font-size: 20px;" class="iconbox px-1">
                            <ion-icon name="cart-outline" role="img" aria-label="cart outline" class="hydrated">
                            </ion-icon>
                        </div>
                        <div class="form-switch ms-2">
                            <input class="form-check-checkbox form-check-input custom get-modal-name" data-modal="paiements"
                                type="checkbox" id="paiementsSwitch"
                                wire:model.lazy="paiements"
                                data-bs-toggle="modal" data-bs-target="#options-carte"
                                @if ($paiements) checked @endif>
                        </div>
                    </div>
                    <h5 class="mx-2 pe-2">Paiements internet</h5>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="mt-1 d-flex justify-content-between align-items-center cursor-pointer">
                        <div style="font-size: 20px;" class="iconbox px-1">
                            <ion-icon role="img" aria-label="storefront outline" class="hydrated md"
                                name="storefront-outline">
                            </ion-icon>
                        </div>
                        <div class="form-switch ms-2">
                            <input class="form-check-checkbox custom form-check-input get-modal-name" data-modal="magasin"
                                type="checkbox" id="magasinSwitch" wire:model.lazy="magasin"
                                data-bs-toggle="modal" data-bs-target="#options-carte"
                                @if ($magasin) checked @endif>
                        </div>
                    </div>
                    <h5 class="mx-2 pe-2">Paiements TPE</h5>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="mt-1 d-flex justify-content-between align-items-center cursor-pointer">
                        <div style="font-size: 20px;" class="iconbox px-1">
                            <ion-icon name="cash-outline" role="img" aria-label="cash outline" class="hydrated md">
                            </ion-icon>
                        </div>
                        <div class="form-switch ms-2">
                            <input class="form-check-checkbox custom form-check-input get-modal-name" data-modal="retrait"
                                type="checkbox" id="retraitSwitch" wire:model.lazy="retrait"
                                data-bs-toggle="modal" data-bs-target="#options-carte"
                                @if ($retrait) checked @endif>
                        </div>
                    </div>
                    <h5 class="mx-2 pe-2">Retrait au guichet</h5>
                </div>
            </div>
        </div>

        <div class="listview-title mt-2">
            <span class="mb-2">Sécurité</span>
        </div>
        <ul class="listview image-listview inset text mb-2">
            <li>
                <a href="#" data-modal="verrouillage" class="item get-modal-name"
                data-bs-toggle="modal" data-bs-target="#options-carte">
                    <div class="icon-box bg-theme-primary custom">
                        <ion-icon name="lock-closed-outline" role="img" class="md hydrated"
                            aria-label="cash outline"></ion-icon>
                    </div>
                    <div class="in">
                        <div>Verrouiller ma carte</div>
                    </div>
                </a>
            </li>
            <li>
                <a href="#" class="item">
                    <div class="icon-box bg-theme-primary custom">
                        <ion-icon name="apps-outline" role="img" class="md hydrated" aria-label="apps outline">
                        </ion-icon>
                    </div>
                    <div class="in">
                        <div>Voir mon code Pin</div>
                    </div>
                </a>
            </li>
        </ul>
    </div>

    @include('partials.modals.carte.modal-options-carte')
</div>
