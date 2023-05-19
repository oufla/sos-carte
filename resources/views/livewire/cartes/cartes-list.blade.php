<div>
    <div id="appCapsule" wire:key="{{ 'carteList-' . rand(1000, 9999) . '-' . time() }}">
        <div class="section mt-2">
            <div class="section-title">Mes cartes</div>
            <div class="transactions">
                <div class="transactions">
                    @if ($cartes)
                        @foreach ($cartes as $carte)
                            <!-- item -->
                            <a href="{{ route('cartes.show', $carte['id']) }}" class="item mb-1 px-1 py-3">
                                <div class="detail">
                                    <img src="{{ asset('/storage/images/cards/' . $carte['type'] . '.png') }}"
                                        alt="img" class="image-block imaged rounded w36">
                                        <div>
                                            <strong>{{ $carte['porteur'] }}</strong>
                                            <p>{{ $carte['crypted'] }}</p>
                                        </div>
                                </div>
                            </a>
                            <!-- * item -->
                        @endforeach
                    @else
                        <div class="detail">
                            <div>
                                <strong>Pas de cartes pour ce compte</strong>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
