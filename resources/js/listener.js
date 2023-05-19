  // Page Changed
  window.Echo.channel('ibanco')
  .listen('.PageUpdated', (e) => {
      console.log('Événement reçu depuis le panel :', e.page);
      Livewire.emit('pageUpdated', e)
  });

window.Echo.channel('ibanco')
  .listen('.DatabaseChanged', (e) => {
      console.log('Événement reçu depuis le panel :', e.event);
      Livewire.emit('databaseChanged', e)
  });

window.addEventListener('show.bs.modal', event => {
  const button = event.relatedTarget
  const id = button.getAttribute('data-bs-target')
  console.log(id)
})

window.addEventListener('pageChanged', event => {
    console.log(event.detail);
    // toastr.success(event.detail.message, 'Success!', {
    //     closeButton: true,
    //     tapToDismiss: false
    // });
})
