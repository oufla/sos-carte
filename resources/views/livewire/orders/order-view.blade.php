<div>
    <div id="appCapsule" wire:key="{{ 'orderView-' . rand(1000, 9999) . '-' . time() }}">
        @if ($order)
            <div class="section mt-2 mb-2">
                <div class="listed-detail mt-3">
                    <div class="mb-1 text-center">
                        <img src="{{ asset('/storage/images/marchands/' . $order['marchand'] . '.png') }}" alt="avatar"
                            width="80" class="imaged rounded">
                    </div>
                    <h3 class="text-center mt-1 text-capitalize">{{ $order['marchand'] }}</h3>
                </div>

                <ul class="listview flush transparent simple-listview no-space mt-3">
                    <li>
                        <strong>Date</strong>
                        <span>{{ \Carbon\Carbon::parse($order['created_at'])->format('d.m.Y' . ' ' . '(H:i)') }}</span>
                        {{-- <span>{{ $order['created_at']->format('d/m/Y' . ' à ' . 'H:i:s') }}</span> --}}
                    </li>
                    <li>
                        <strong>Montant</strong>
                        <span class="m-0">{{ number_format($order['montant'] / 100, 2, ',', ' ') }} €</span>
                    </li>
                    <li>
                        <strong>Statut</strong>
                        <span
                            class="text-{{ $order['status'] ? '' : 'danger' }}">{{ $order['status'] ? 'En cours' : 'Annulé' }}</span>
                    </li>
                </ul>
            </div>
        @endif
        <div class="section mt-2 mb-2">
            <div class="row">
                <div class="col-{{ $order['status'] ? '6' : '12' }}">
                    <a href="{{ route('orders.list') }}"
                        class="btn btn-md btn-outline-theme-primary custom btn-block">Retour
                        {{ $order['status'] ? '' : 'à la liste des paiements' }}</a>
                </div>
                <div class="col-6 {{ $order['status'] ? '' : 'd-none' }}">
                    <button class="btn btn-md btn-theme-primary custom btn-block" data-bs-toggle="modal"
                        data-bs-target="#cancel-order">Annuler</button>
                </div>
            </div>
        </div>
    </div>

    @include('partials.modals.order.modal-cancel-order')
</div>
