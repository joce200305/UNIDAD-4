CREATE DATaBASE tienda;
USE tienda;

-- Crear la tabla 'Productos'
CREATE TABLE Productos (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(255),
    Descripcion TEXT,
    Precio DECIMAL(10, 2),
    Stock INT,
    FechaCreacion DATE,
    Proveedor VARCHAR(255),
    Categoria VARCHAR(255),
    FechaCaducidad DATE
);

-- Crear la tabla 'Ventas'
CREATE TABLE Ventas (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    ProductoID INT,
    FechaVenta DATE,
    CantidadVendida INT,
    PrecioUnitario DECIMAL(10, 2),
    TotalVenta DECIMAL(10, 2),
    MetodoPago VARCHAR(255),
    ClienteNombre VARCHAR(255),
    ClienteEmail VARCHAR(255),
    DireccionEnvio VARCHAR(255),
    FOREIGN KEY (ProductoID) REFERENCES Productos(ID)
);

-- Crear la tabla 'Inventario'
CREATE TABLE Inventario (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    ProductoID INT,
    FechaIngreso DATE,
    CantidadIngresada INT,
    Proveedor VARCHAR(255),
    NumeroFactura VARCHAR(255),
    FechaCaducidad DATE,
    UbicacionAlmacen VARCHAR(255),
    Notas TEXT,
    FOREIGN KEY (ProductoID) REFERENCES Productos(ID)
);

