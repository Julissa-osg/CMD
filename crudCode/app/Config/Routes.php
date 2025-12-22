<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Rutas para el CRUD (COPIAR ESTO) - YA LAS TIENES
$routes->get('/', 'Crud::index');
$routes->post('crear', 'Crud::crear');
$routes->get('obtenerNombre/(:num)', 'Crud::obtenerNombre/$1');
$routes->post('actualizar', 'Crud::actualizar');
$routes->get('eliminar/(:num)', 'Crud::eliminar/$1');

// ============== AGREGAR ESTAS NUEVAS RUTAS ==============
// Rutas para Reportes
$routes->get('reportes', 'Reportes::index');           // Página principal de reportes
$routes->get('reportes/excel', 'Reportes::excel');     // Descargar Excel básico
$routes->get('reportes/pdf', 'Reportes::pdf');         // Descargar PDF básico
$routes->get('reportes/csv', 'Reportes::csv');         // Descargar CSV
$routes->get('reportes/usuarios', 'Reportes::usuariosExcel'); // Reporte usuarios BD
// =======================================================

// IMPORTANTE: COMENTAR o ELIMINAR esta línea original:
// $routes->get('/', 'Home::index');
