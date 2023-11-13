<script>
    $(document).ready(() => {
        $("#agregarVentas").click(() => {
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
                url: "./app/models/process/createVentas.process.php",
                type: "POST",
                success: (res) => {
                    Swal.fire({
                        title: 'Producto agregado',
                        text: "El producto fue agregado con exito!",
                        icon: 'success',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location = "./readVentas"
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