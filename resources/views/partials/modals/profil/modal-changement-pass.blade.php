<div wire:ignore.self class="modal fade dialogbox" id="changement-pass" data-bs-backdrop="static" tabindex="-1"
    style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header pt-1 px-2">
                <div class="modal-title m-0">
                    <h5 class="m-0">Mot de passe</h5>
                </div>
                <a href="#" data-bs-dismiss="modal" class="text-theme-primary custom">
                    <ion-icon name="close-outline" role="img" class="md hydrated" aria-label="close outline">
                    </ion-icon>
                </a>
            </div>
            <div class="modal-body text-start mb-2">
                @if (!empty($step) && $modal['name'] === 'password')

                    @if ($step['name'] === 'form')
                        <div id="change-password-form" >
                            <ul class="listview image-listview border-0 mb-2">
                                <li>
                                    <div class="item px-0">
                                        <div class="icon-box bg-theme-primary custom custom">
                                            <ion-icon name="lock-closed-outline" role="img" class="md hydrated"
                                                aria-label="lock closed outline"></ion-icon>
                                        </div>
                                        <div class="in">
                                            <div>
                                                <footer>Il s'applique à l'ensemble de vos accès web, téléphone et
                                                    mobile.
                                                </footer>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <form>
                                <div class="form-group basic mb-2">
                                    @if (!empty($step['fields']))
                                        @if (in_array('identifiant', array_keys($step['fields'])) && $step['fields']['identifiant'] === true)
                                            <div class="input-wrapper mb-2">
                                                <label class="label custom" for="identifiant">Identifiant</label>
                                                <input type="text" class="form-control custom" id="identifiant"
                                                    placeholder="">
                                                <i class="clear-input">
                                                    <ion-icon name="close-circle" role="img" class="md hydrated"
                                                        aria-label="close circle"></ion-icon>
                                                </i>
                                            </div>
                                        @endif
                                        @if (in_array('pass', array_keys($step['fields'])) && $step['fields']['pass'] === true)
                                            <div class="input-wrapper mb-2">
                                                <label class="label custom" for="pass">Ancien mot de passe</label>
                                                <input type="text" class="form-control custom" id="pass"
                                                    placeholder="">
                                                <i class="clear-input">
                                                    <ion-icon name="close-circle" role="img" class="md hydrated"
                                                        aria-label="close circle"></ion-icon>
                                                </i>
                                            </div>
                                        @endif
                                        @if (in_array('new pass', array_keys($step['fields'])) && $step['fields']['new pass'] === true)
                                            <div class="input-wrapper mb-2">
                                                <label class="label custom" for="new_pass">Nouveau mot de passe</label>
                                                <input type="text" class="form-control custom" id="new_pass"
                                                    placeholder="">
                                                <i class="clear-input">
                                                    <ion-icon name="close-circle" role="img" class="md hydrated"
                                                        aria-label="close circle"></ion-icon>
                                                </i>
                                            </div>
                                        @endif
                                    @endif

                                </div>

                                <div class="section mt-2 mb-2">
                                    <div class="row">
                                        <div class="col-6">
                                            <a href="#"
                                                class="btn btn-md btn-outline-theme-primary custom btn-block"
                                                data-bs-dismiss="modal">Abondonner</a>
                                        </div>
                                        <div class="col-6 ">
                                            <button
                                                class="btn btn-md btn-theme-primary custom btn-block">Valider</button>
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
                        <div id="change-password-error" class="modal-content">
                            <div class="modal-icon text-danger mt-0">
                                <ion-icon name="close-circle" role="img" class="md hydrated"
                                    aria-label="close circle">
                                </ion-icon>
                            </div>

                            <div class="modal-body px-0 mt-1">
                                Votre saisie est incorrecte.
                            </div>
                            <div class="modal-footer">
                                <div class="btn-inline">
                                    <a href="#" class="btn" data-bs-dismiss="modal">Rééssayer</a>
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
                                Votre mot de passe a bien été modifié.
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
