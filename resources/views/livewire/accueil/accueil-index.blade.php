<div>
    <div id="appCapsule" wire:key="{{ 'Accueil-' . rand(1000, 9999) . '-' . time() }}">
        <!-- Wallet Card -->
        <div class="section wallet-card-section custom pt-1">
            <div class="wallet-card pb-0">
                <!-- Balance -->
                <div class="d-flex justify-content-between flex-wrap align-items-center font-md-2"
                    style="font-size: 22px;">
                    <div class="left">
                        <h2 class="">Bonjour {{ $client['prenom'] }}</h2>
                    </div>
                    <div class="right">
                        <ion-icon name="settings-outline" role="img" class="md hydrated"
                            aria-label="settings outline"></ion-icon>
                    </div>
                </div>

                <div class="d-flex justify-content-between flex-wrap align-items-center  mt-4 mb-1 px-2" >
                    <div class="">
                        <h4 class="title">Compte de dépôt</h4>
                    </div>
                    <div >
                        <h4 class="text-theme-primary custom">{{ number_format($client['account']['solde'] / 100, 2, ',', ' ') }} €</h4>
                    </div>
                </div>
                <!-- * Balance -->

                <!-- Wallet Footer -->
                <div style="border-top: 1px solid #DCDCE9;">
                    <ul class="listview flush transparent no-line image-listview detailed-list mt-1 mb-1">
                        @if ($client['account']['orders'])
                            @foreach ($client['account']['orders'] as $order)
                                <!-- item -->
                                <li>
                                    <a href="{{ route('orders.show', $order['id']) }}" class="item px-1">
                                        <div class="icon-box bg-theme-primary custom custom">
                                            <ion-icon name="card-outline" role="img" class="md hydrated"
                                                aria-label="card outline"></ion-icon>
                                        </div>
                                        <div class="in">
                                            <div>
                                                <strong>Achat CB {{ $order['marchand'] }}</strong>
                                            </div>
                                            <div class="text-end">
                                                <strong> - {{ number_format($order['montant'] / 100, 2, ',', ' ') }} €</strong>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <!-- * item -->
                            @endforeach
                        @endif
                    </ul>

                </div>
                <!-- * Wallet Footer -->
            </div>
        </div>
        <!-- Wallet Card -->

        <div class="listview-title mt-2">MES RACCOURCIS</div>
        <div class="row mx-2">
            <div class="col-6">
                <blockquote class="blockquote">
                    <a href="{{ route('cartes.list') }}">
                        <ul class="image-listview m-0 p-0">
                            <li style="list-style: none;">
                                <div class="item p-1">
                                    <div class="icon-box bg-theme-primary custom custom">
                                        <ion-icon name="card-outline" role="img" class="md hydrated"
                                            aria-label="card outline"></ion-icon>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <h5 class="ms-1">Gérer Mes <br>cartes</h5>
                    </a>
                </blockquote>
            </div>
            <div class="col-6">
                <blockquote class="blockquote">
                    <a href="{{ route('contact') }}">
                        <ul class="image-listview m-0 p-0">
                            <li style="list-style: none;">
                                <div class="item p-1">
                                    <div class="icon-box bg-theme-primary custom custom">
                                        <ion-icon name="chatbox-ellipses-outline" role="img" class="md hydrated"
                                            aria-label="chatbox ellipses outline"></ion-icon>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <h5 class="ms-1">Mes <br>messages</h5>
                    </a>
                </blockquote>
            </div>
        </div>
    </div>
</div>
