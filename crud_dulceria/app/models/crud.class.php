
<?php
class Crud {
    private $conexion;
    private $host = "localhost";
    private $user = "root";
    private $pass = "0305";
    private $bd = "tienda";

    public function __construct()
    {
        $this->conexion = new PDO("mysql:host=$this->host;dbname=$this->bd",$this->user, $this->pass);
    }

    public function read()
    {
        $query = "SELECT * FROM Productos";
        $stmt = $this->conexion->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        unset($this->conexion);
        return $result;
    }

    public function create($datos_producto) {
        $query = "INSERT INTO Productos(Nombre, Descripcion, Precio, Stock, FechaCreacion, Proveedor, Categoria, FechaCaducidad) VALUES (:Nombre, :Descripcion, :Precio, :Stock, :FechaCreacion, :Proveedor, :Categoria, :FechaCaducidad)";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(":Nombre", $datos_producto["Nombre"]);
        $stmt->bindParam(":Descripcion", $datos_producto["Descripcion"]);
        $stmt->bindParam(":Precio", $datos_producto["Precio"]);
        $stmt->bindParam(":Stock", $datos_producto["Stock"]);
        $stmt->bindParam(":FechaCreacion", $datos_producto["FechaCreacion"]);
        $stmt->bindParam(":Proveedor", $datos_producto["Proveedor"]);
        $stmt->bindParam(":Categoria", $datos_producto["Categoria"]);
        $stmt->bindParam(":FechaCaducidad", $datos_producto["FechaCaducidad"]);
        $stmt->execute();

        unset($this->conexion);
        return json_encode($stmt);
    }

    public function update($datos_producto) {
        $query = "UPDATE Productos SET  Nombre = :Nombre, Descripcion = :Descripcion, Precio = :Precio, Stock = :Stock, FechaCreacion = :FechaCreacion, Proveedor = :Proveedor, Categoria = :Categoria, FechaCaducidad = :FechaCaducidad WHERE ID = :ID";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(":ID", $datos_producto["ID"]);
        $stmt->bindParam(":Nombre", $datos_producto["Nombre"]);
        $stmt->bindParam(":Descripcion", $datos_producto["Descripcion"]);
        $stmt->bindParam(":Precio", $datos_producto["Precio"]);
        $stmt->bindParam(":Stock", $datos_producto["Stock"]);
        $stmt->bindParam(":FechaCreacion", $datos_producto["FechaCreacion"]);
        $stmt->bindParam(":Proveedor", $datos_producto["Proveedor"]);
        $stmt->bindParam(":Categoria", $datos_producto["Categoria"]);
        $stmt->bindParam(":FechaCaducidad", $datos_producto["FechaCaducidad"]);
        $stmt->execute();

        unset($this->conexion);
        return $stmt;
    }

    public function delete($ID_producto) {
        $query = "DELETE FROM Productos WHERE ID = :ID";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(":ID", $ID_producto);
        $stmt->execute();

        unset($this->conexion);
        return $stmt;
    }

    public function show($ID_producto) {
        $query = "SELECT * FROM Productos WHERE ID = :ID";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(":ID", $ID_producto);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        unset($this->conexion);
        return $result;
    }
    public function readInventario()
    {
        $query = "SELECT * FROM Inventario";
        $stmt = $this->conexion->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        unset($this->conexion);
        return $result;
    }
    public function createInventario($datos_inventario) {
        $query = "INSERT INTO Inventario(FechaIngreso, CantidadIngresada, Proveedor, NumeroFactura, FechaCaducidad, UbicacionAlmacen, Notas) VALUES (:FechaIngreso, :CantidadIngresada, :Proveedor, :NumeroFactura, :FechaCaducidad, :UbicacionAlmacen, :Notas)";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(":FechaIngreso", $datos_inventario["FechaIngreso"]);
        $stmt->bindParam(":CantidadIngresada", $datos_inventario["CantidadIngresada"]);
        $stmt->bindParam(":Proveedor", $datos_inventario["Proveedor"]);
        $stmt->bindParam(":NumeroFactura", $datos_inventario["NumeroFactura"]);
        $stmt->bindParam(":FechaCaducidad", $datos_inventario["FechaCaducidad"]);
        $stmt->bindParam(":UbicacionAlmacen", $datos_inventario["UbicacionAlmacen"]);
        $stmt->bindParam(":Notas", $datos_inventario["Notas"]);
        $stmt->execute(); 
        unset($this->conexion);
        return json_encode($stmt);
    }
    public function updateInventario($datos_inventario) {
        $query = "UPDATE Inventario SET  FechaIngreso = :FechaIngreso, CantidadIngresada = :CantidadIngresada, Proveedor = :Proveedor, NumeroFactura = :NumeroFactura, FechaCaducidad = :FechaCaducidad, UbicacionAlmacen = :UbicacionAlmacen, Notas = :Notas WHERE ID = :ID";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(":ID", $datos_inventario["ID"]);
        $stmt->bindParam(":FechaIngreso", $datos_inventario["FechaIngreso"]);
        $stmt->bindParam(":CantidadIngresada", $datos_inventario["CantidadIngresada"]);
        $stmt->bindParam(":Proveedor", $datos_inventario["Proveedor"]);
        $stmt->bindParam(":NumeroFactura", $datos_inventario["NumeroFactura"]);
        $stmt->bindParam(":FechaCaducidad", $datos_inventario["FechaCaducidad"]);
        $stmt->bindParam(":UbicacionAlmacen", $datos_inventario["UbicacionAlmacen"]);
        $stmt->bindParam(":Notas", $datos_inventario["Notas"]);
        $stmt->execute();

        unset($this->conexion);
        return $stmt;
    }
    public function deleteInventario($ID_inventario) {
        $query = "DELETE FROM Inventario WHERE ID = :ID";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(":ID", $ID_inventario);
        $stmt->execute();

        unset($this->conexion);
        return $stmt;
    }

    public function showInventario($ID_inventario) {
        $query = "SELECT * FROM Inventario WHERE ID = :ID";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(":ID", $ID_inventario);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        unset($this->conexion);
        return $result;
    }
    public function readVentas()
    {
        $query = "SELECT * FROM Ventas";
        $stmt = $this->conexion->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        unset($this->conexion);
        return $result;
    }

    public function createVentas($datos_ventas) {
        $query = "INSERT INTO Ventas(FechaVenta, CantidadVendida, PrecioUnitario, TotalVenta, MetodoPago, ClienteNombre, ClienteEmail, DireccionEnvio) VALUES (:FechaVenta, :CantidadVendida, :PrecioUnitario, :TotalVenta, :MetodoPago, :ClienteNombre, :ClienteEmail, :DireccionEnvio)";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(":FechaVenta", $datos_ventas["FechaVenta"]);
        $stmt->bindParam(":CantidadVendida", $datos_ventas["CantidadVendida"]);
        $stmt->bindParam(":PrecioUnitario", $datos_ventas["PrecioUnitario"]);
        $stmt->bindParam(":TotalVenta", $datos_ventas["TotalVenta"]);
        $stmt->bindParam(":MetodoPago", $datos_ventas["MetodoPago"]);
        $stmt->bindParam(":ClienteNombre", $datos_ventas["ClienteNombre"]);
        $stmt->bindParam(":ClienteEmail", $datos_ventas["ClienteEmail"]);
        $stmt->bindParam(":DireccionEnvio", $datos_ventas["DireccionEnvio"]);
        $stmt->execute();

        unset($this->conexion);
        return json_encode($stmt);
    }

    public function updateVentas($datos_ventas) {
        $query = "UPDATE Ventas SET  FechaVenta = :FechaVenta, CantidadVendida = :CantidadVendida, PrecioUnitario = :PrecioUnitario, TotalVenta = :TotalVenta, MetodoPago = :MetodoPago, ClienteNombre = :ClienteNombre, ClienteEmail = :ClienteEmail, DireccionEnvio = :DireccionEnvio WHERE ID = :ID";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(":ID", $datos_ventas["ID"]);
        $stmt->bindParam(":FechaVenta", $datos_ventas["FechaVenta"]);
        $stmt->bindParam(":CantidadVendida", $datos_ventas["CantidadVendida"]);
        $stmt->bindParam(":PrecioUnitario", $datos_ventas["PrecioUnitario"]);
        $stmt->bindParam(":TotalVenta", $datos_ventas["TotalVenta"]);
        $stmt->bindParam(":MetodoPago", $datos_ventas["MetodoPago"]);
        $stmt->bindParam(":ClienteNombre", $datos_ventas["ClienteNombre"]);
        $stmt->bindParam(":ClienteEmail", $datos_ventas["ClienteEmail"]);
        $stmt->bindParam(":DireccionEnvio", $datos_ventas["DireccionEnvio"]);
        $stmt->execute();

        unset($this->conexion);
        return $stmt;
    }

    public function deleteVentas($ID_ventas) {
        $query = "DELETE FROM Ventas WHERE ID = :ID";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(":ID", $ID_ventas);
        $stmt->execute();

        unset($this->conexion);
        return $stmt;
    }

    public function showVentas($ID_ventas) {
        $query = "SELECT * FROM Ventas WHERE ID = :ID";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(":ID", $ID_ventas);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        unset($this->conexion);
        return $result;
    }
}


?>

