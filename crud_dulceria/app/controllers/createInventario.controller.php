<script>
    $(document).ready(() => {
        $("#agregarInventario").click(() => {
            let FechaIngreso = $("#FechaIngreso").val()
            let CantidadIngresada = $("#CantidadIngresada").val()
            let Proveedor = $("#Proveedor").val()
            let NumeroFactura = $("#NumeroFactura").val()
            let FechaCaducidad = $("#FechaCaducidad").val()
            let UbicacionAlmacen = $("#UbicacionAlmacen").val()
            let Notas = $("#Notas").val()
            
            
            $.ajax({
                data: {
                    FechaIngreso, 
                    CantidadIngresada, 
                    Proveedor, 
                    NumeroFactura, 
                    FechaCaducidad, 
                    UbicacionAlmacen, 
                    Notas
                },
                url: "./app/models/process/createInventario.process.php",
                type: "POST",
                success: (res) => {
                    Swal.fire({
                        title: 'Inventario agregado',
                        text: "El inventario fue agregado con exito!",
                        icon: 'success',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location = "./readInventario"
                        }
                    })
                },
                error: (err) => {
                    console.log(err, "la peticion tuvo un error")
                }
            })
        })
    })
</script>