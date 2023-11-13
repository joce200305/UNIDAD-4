<script>
    const eliminarInventario = (ID) => {
        Swal.fire({
            title: 'Estas seguro de eliminar ese inventario?',
            text: "Si lo borras no podras recuperarlo!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Borralo!'
        }).then((result) => {
            window.location = `./deleteInventario&ID=${ID}`
        })
    }
</script>

