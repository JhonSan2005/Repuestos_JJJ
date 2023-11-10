<?php
// despliegue.php
include("funciones.php");

// Resto del código...
//echo agregarProducto('Aguja','12.000','12','cuto');



// include("funciones.php");

// $productos = listarProductos();

// if (!empty($productos)) {
//     echo "<h2>Lista de Repuestos</h2>";
//     echo "<table border='1'>";
//     echo "<tr><th>ID</th><th>Nombre</th><th>Precio</th><th>Stock</th></tr>";

//     foreach ($productos as $producto) {
//         echo "<tr>";
//         echo "<td>" . $producto['id'] . "</td>";
//         echo "<td>" . $producto['nombre'] . "</td>";
//         echo "<td>" . $producto['precio'] . "</td>";
//         echo "<td>" . $producto['stock'] . "</td>";
//         echo "</tr>";
//     }

//     echo "</table>";
// } else {
//     echo "<p>No hay repuestos disponibles.</p>";
// }
// 
//  echo realizarVenta('3','1');
// echo eliminarProducto('1');
// $resultado = buscarProductosPorNombre('piston');

// if (!empty($resultado)) {
//     echo "<h2>Resultados de la búsqueda:</h2>";
//     echo "<table border='1'>";
//     echo "<tr><th>ID</th><th>Nombre</th><th>Precio</th><th>Stock</th><th>Proveedor</th></tr>";

//     foreach ($resultado as $producto) {
//         echo "<tr>";
//         echo "<td>" . $producto['id'] . "</td>";
//         echo "<td>" . $producto['nombre'] . "</td>";
//         echo "<td>" . $producto['precio'] . "</td>";
//         echo "<td>" . $producto['stock'] . "</td>";
//         echo "<td>" . $producto['proveedor'] . "</td>";
//         echo "</tr>";
//     }

//     echo "</table>";
// } else {
//     echo "<p>No se encontraron resultados.</p>";
// }
// echo calcularTotalVentasPorProducto('3');
// Para imprimir los proveedores
// $proveedores = obtenerProveedores();

// if (is_array($proveedores)) {
//     echo "<h2>Lista de Proveedores</h2>";
//     echo "<ul>";
//     foreach ($proveedores as $proveedor) {
//         echo "<li>" . $proveedor . "</li>";
//     }
//     echo "</ul>";
// } else {
//     echo "<p>$proveedores</p>";
// }
// echo obtenerCantidadTotalEnStock();


// Para imprimir el historial de ventas
// echo obtenerHistorialVentas();

$detallesProducto = obtenerDetallesProducto('3');

if ($detallesProducto) {
    echo "<h2>Detalles del Producto</h2>";
    echo "<p>ID: " . $detallesProducto['id'] . "</p>";
    echo "<p>Nombre: " . $detallesProducto['nombre'] . "</p>";
    echo "<p>Precio: " . $detallesProducto['precio'] . "</p>";
    echo "<p>Stock: " . $detallesProducto['stock'] . "</p>";
    echo "<p>Proveedor: " . $detallesProducto['proveedor'] . "</p>";
} else {
    echo "Producto no encontrado.";
}


