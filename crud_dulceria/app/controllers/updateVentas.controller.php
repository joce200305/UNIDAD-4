
<script>
    $(document).ready(() => {

        $("#actualizarVentas").click(() => {
            let FechaVenta = $("#FechaVenta").val()
            let CantidadVendida = $("#CantidadVendida").val()
            let PrecioUnitario = $("#PrecioUnitario").val()
            let TotalVenta = $("#TotalVenta").val()
            let MetodoPago = $("#MetodoPago").val()
            let ClienteNombre = $("#ClienteNombre").val()
            let ClienteEmail = $("#ClienteEmail").val()
            let DireccionEnvio = $("#DireccionEnvio").val()
            
            $.ajax({
                data: {
                    FechaVenta, 
                    CantidadVendida, 
                    PrecioUnitario, 
                    TotalVenta, 
                    MetodoPago, 
                    ClienteNombre, 
                    ClienteEmail, 
                    DireccionEnvio
                },
                url: "./app/models/process/updateVentas.process.php",
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
                            window.location = "./readVentas"
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