<?php

//Usuario quer acessar a págia de cadastro
$routes->get('cadastro', 'AuthController::mostrarPaginaCadastro');

//Usuario envia dados de cadastro
$routes->post('cadastro', 'AuthController::realizarCadastro');


$routes->get('login', 'AuthController::mostrarPaginaLogin');
$routes->post('login', 'AuthController::realizarLogin');


$routes->get('logout', 'AuthController::logout');

//simulação para uma área protegida do sistema
$routes->get('dashboard', 'Home::index');

$routes->get('/cuidador', 'CuidadorController::index');
$routes->get('/cuidador/criar', 'CuidadorController::criar');
$routes->post('/cuidador/armazenar', 'CuidadorController::armazenar');
$routes->get('/cuidador/editar/(:num)', 'CuidadorController::editar/$1');
$routes->post('/cuidador/atualizar/(:num)', 'CuidadorController::atualizar/$1');
$routes->get('/cuidador/excluir/(:num)', 'CuidadorController::excluir/$1');

$routes->get('/visitante', 'VisitanteController::index');
$routes->get('/visitante/criar', 'VisitanteController::criar');
$routes->post('/visitante/armazenar', 'VisitanteController::armazenar');
$routes->get('/visitante/editar/(:num)', 'VisitanteController::editar/$1');
$routes->post('/visitante/atualizar/(:num)', 'VisitanteController::atualizar/$1');
$routes->get('/visitante/excluir/(:num)', 'VisitanteController::excluir/$1');

$routes->get('/paciente', 'PacienteController::index');
$routes->get('/paciente/criar', 'PacienteController::criar');
$routes->post('/paciente/armazenar', 'PacienteController::armazenar');
$routes->get('/paciente/editar/(:num)', 'PacienteController::editar/$1');
$routes->post('/paciente/atualizar/(:num)', 'PacienteController::atualizar/$1');
$routes->get('/paciente/excluir/(:num)', 'PacienteController::excluir/$1');

$routes->get('/plano_alta', 'PlanoAltaController::index');
$routes->get('/plano_alta/criar', 'PlanoAltaController::criar');
$routes->post('/plano_alta/armazenar', 'PlanoAltaController::armazenar');
$routes->get('/plano_alta/editar/(:num)', 'PlanoAltaController::editar/$1');
$routes->post('/plano_alta/atualizar/(:num)', 'PlanoAltaController::atualizar/$1');
$routes->get('/plano_alta/excluir/(:num)', 'PlanoAltaController::excluir/$1');

$routes->get('/plano_cuidado', 'PlanoCuidadoController::index');
$routes->get('/plano_cuidado/criar', 'PlanoCuidadoController::criar');
$routes->post('/plano_cuidado/armazenar', 'PlanoCuidadoController::armazenar');
$routes->get('/plano_cuidado/editar/(:num)', 'PlanoCuidadoController::editar/$1');
$routes->post('/plano_cuidado/atualizar/(:num)', 'PlanoCuidadoController::atualizar/$1');
$routes->get('/plano_cuidado/excluir/(:num)', 'PlanoCuidadoController::excluir/$1');

?>

