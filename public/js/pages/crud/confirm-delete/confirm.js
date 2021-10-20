
function confirmDelete(id) {

    Swal.fire({
            title: "Você realmente quer excluir esse registro?",
            //text: "Processo irreversível!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: '#F64E60',
            confirmButtonText: 'Sim, Eu quero!',
            cancelButtonText: "Não, Cancelar!",
            closeOnConfirm: false,
            closeOnCancel: false
        }).then((result) => {
        if (result.value) {
            window.livewire.emit('delete',id);
        }
    });
}
