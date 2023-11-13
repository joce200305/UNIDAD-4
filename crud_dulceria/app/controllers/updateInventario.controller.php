
<script>
    $(document).ready(() => {

        $("#actualizarInventario").click(() => {
            let ID = $("#ID").val();
            let FechaIngreso = $("#FechaIngreso").val()
            let CantidadIngresada = $("#CantidadIngresada").val()
            let Proveedor = $("#Proveedor").val()
            let NumeroFactura = $("#NumeroFactura").val()
            let FechaCaducidad = $("#FechaCaducidad").val()
            let UbicacionAlmacen = $("#UbicacionAlmacen").val()
            let Notas = $("#Notas").val()
            $.ajax({
                data: {
                    ID, 
                    FechaIngreso, 
                    CantidadIngresada, 
                    Proveedor, 
                    NumeroFactura, 
                    FechaCaducidad, 
                    UbicacionAlmacen, 
                    Notas
                },
                url: "./app/models/process/updateInventario.process.php",
                type: "POST",
                success: () => {
                    Swal.fire({
                        title: 'Producto actualizado',
                        text: "Actualizaste el producto con exito!",
                        icon: 'success',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Ok!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location = "./readInventario"
                        }
                    })
                },
                error: () => {
                    Swal.fire({
                        title: 'Producto no actualizado',
                        text: "No actualizaste el producto correctamente!",
                        icon: 'error',
                        confirmButtonColor: '#d33',
                        confirmButtonText: 'Ok!'
                    })
                }
            })
        })
    })
</script>