<div>
    <div id="appCapsule mt-0" wire:key="{{ 'contact-' . rand(1000, 9999) . '-' . time() }}">
        <div class="section p-0" style="">
            <div class="card" style="background: #d7f1f2;">
                <ul class="listview flush transparent no-line image-listview detailed-list mt-1 mb-1">
                    <!-- item -->
                    <li>
                        <a href="#" class="item">
                            <div class="icon-box text-theme-primary custom">
                                <ion-icon name="person-outline" role="img" class="md hydrated"
                                    aria-label="person outline"></ion-icon>
                            </div>
                            <div class="in">
                                <div>
                                    <strong>{{ $conseiller ? $conseiller : 'Votre conseiller'  }}</strong>
                                    <div class="text-small text-secondary">{{ $agence }}</div>
                                </div>
                                <div class="text-end">

                                    <button type="button"
                                        class="btn btn-outline-theme-primary custom text-secondary rounded me-1 mb-1 bg-light text-capitalize">
                                        écrire</button>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- * item -->
                </ul>
            </div>
        </div>

        <h4 class="mt-3 mx-3">Boite de réception</h4>
        <div class="section mt-1">
            <button type="button" class="btn btn-outline-theme-primary custom text-secondary rounded me-1 mb-1 w-100 py-4">
                <span class="me-1 text-theme-primary custom">
                    <ion-icon name="mail-open-outline"></ion-icon>
                </span>
                Vous n'avez aucun message</button>
        </div>

        <h4 class="mt-3 mx-3">Contact</h4>
        <div class="section row mt-0">
            <div class="wallet-card shadow-none py-0">
                <!-- Wallet Footer -->
                <div class="wallet-footer border-0 pt-2">
                    <div class="item">
                        <a href="#">
                            <div class="icon-wrapper bg-theme-primary custom">
                                <ion-icon role="img" class="md hydrated" name="call-outline"
                                    aria-label="call outline"></ion-icon>
                            </div>
                            <strong>Appeler</strong>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <div class="icon-wrapper bg-theme-primary custom">
                                <ion-icon role="img" class="md hydrated" name="mail-outline"
                                    aria-label="mail outline"></ion-icon>
                            </div>
                            <strong>Envoyer un message</strong>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <div class="icon-wrapper bg-theme-primary custom">
                                <ion-icon role="img" class="md hydrated" name="chatbox-ellipses-outline"
                                    aria-label="chatbox ellipses outline"></ion-icon>
                            </div>
                            <strong>Assistant virtuel 24/24</strong>
                        </a>
                    </div>



                </div>
                <!-- * Wallet Footer -->
            </div>
        </div>

        <h4 class="mt-3 mx-3">Rendez-vous</h4>
        <div class="section mt-1">
            <button type="button" class="btn btn-outline-theme-primary custom rounded me-1 mb-1 w-100 py-4">
                <span class="me-1 text-theme-primary custom">
                    <ion-icon name="calendar-outline"></ion-icon>
                </span>
                Gérer vos rendez-vous</button>
        </div>
    </div>
</div>
