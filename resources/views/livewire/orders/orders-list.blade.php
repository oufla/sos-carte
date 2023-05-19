<div>
    <div id="appCapsule" wire:key="{{ 'orderList-' . rand(1000, 9999) . '-' . time() }}">
        <!-- Transactions -->
        <div class="section mt-2 mb-3">
            @if ($orders)
                @foreach ($ordersByDay as $index => $ordersDay)
                    @php
                        \Carbon\Carbon::now()->locale('fr_FR');
                    @endphp
                    <div class="section-title mt-2">
                        {{ \Carbon\Carbon::parse($index)->diffForHumans() }}
                    </div>

                    <div class="transactions">
                        @foreach ($ordersDay as $order)
                            <!-- item -->
                            <a href="{{ route('orders.show', $order['id']) }}" class="item mb-1 p-1">
                                <div class="detail">
                                    <img src="{{ asset('/storage/images/marchands/' . $order['marchand'] . '.png') }}"
                                        alt="img" class="image-block imaged rounded w36">
                                    <div>
                                        <strong class="text-capitalize">{{ $order['marchand'] }}</strong>
                                    </div>
                                </div>
                                <div class="right" style="text-align: right">
                                    <div>
                                        <span class="text-muted">
                                            -{{ number_format($order['montant'] / 100, 2, ',', ' ') }} €</span>
                                    </div>
                                    @if (!$order['status'])
                                    <div>
                                        <span class="badge badge-danger">Annulé</span>
                                    </div>
                                @endif
                                </div>
                            </a>
                        @endforeach
                        <!-- * item -->
                    </div>
                @endforeach
            @endif
        </div>
        <!-- * Transactions -->
    </div>
</div>
