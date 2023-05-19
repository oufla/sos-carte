<!-- ========= JS Files =========  -->

<!-- jQuery -->
<script src="{{ asset(mix('vendors/js/vendors.min.js')) }}"></script>

<!-- Bootstrap -->

<!-- Ionicons -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<!-- Base Js File -->
<script src="{{ asset(mix('js/core/base.js')) }}"></script>
<script src="{{ asset(mix('js/pages/app-client-pages.js')) }}"></script>
<script src="{{ asset(mix('/js/app.js')) }}"></script>

<!-- Livewire Scripts -->
@livewireScripts

