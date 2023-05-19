$('.modal').on('shown.bs.modal', function () {
    // Find the first input element in the modal and set focus
    $(this).find('input:first').focus();
});

// Listeners

document.addEventListener('livewire:load', function () {
    const links = document.querySelectorAll('.get-modal-name');
    links.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            const targetLink = e.target.closest('.get-modal-name');
            const modal = targetLink.getAttribute('data-modal');
            livewire.emit('getModal', modal);
        });
    });
});
