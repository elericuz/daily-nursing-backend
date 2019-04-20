<?php

use Slim\Http\Request;
use Slim\Http\Response;
use InstagramScraper\Instagram;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;


$app->options('/{routes:.+}', function ($request, $response, $args) {
    return $response;
});

$app->add(function ($req, $res, $next) {
    $response = $next($req, $res);
    return $response
        ->withHeader('Access-Control-Allow-Origin', '*')
        ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
        ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');
});

// Routes

//$app->get('/[{name}]', function (Request $request, Response $response, array $args) {
//    // Sample log message
//    $this->logger->info("Asteria '/' route");
//
//    // Render index view
//    return $this->renderer->render($response, 'index.phtml', $args);
//
//});

$app->get('/patients/[{name}]', 'Controller\Patient:getPatients');
$app->get('/patients/profile/[{patientId}]', 'Controller\Patient:getProfile');
$app->get('/patients/monitor/nursery/[{patientId}]', 'Controller\Patient:getNurseMonitoring');
$app->get('/patients/monitor/balance/[{patientId}]', 'Controller\Patient:getBalance');
$app->get('/patients/monitor/observations/[{patientId}]', 'Controller\Patient:getObservations');
$app->put('/patients/monitor/nursery/{patientId}', 'Controller\Patient:saveNurseMonitoring');
$app->put('/patients/monitor/balance/{patientId}', 'Controller\Patient:saveBalance');
$app->put('/patients/monitor/obs/{patientId}', 'Controller\Patient:saveObservation');
$app->put('/patients/add', 'Controller\Patient:savePatient');
$app->get('/patients/get/{patientId}', 'Controller\Patient:getProfile');
$app->put('/patients/update', 'Controller\Patient:updatePatient');

$app->get('/kardex/{patientId}', 'Controller\Kardex:getAll');
$app->get('/kardex/get/[{kardexId}]', 'Controller\Kardex:get');
$app->put('/kardex/add', 'Controller\Kardex:save');
$app->delete('/kardex/remove/[{kardexId}]', 'Controller\Kardex:remove');

$app->get('/treatments', 'Controller\Treatment:getAll');
$app->get('/treatments/get/[{treatmentId}]', 'Controller\Treatment:get');
$app->put('/treatments/add', 'Controller\Treatment:save');
$app->delete('/treatments/remove/[{treatmentId}]', 'Controller\Treatment:remove');

$app->get('/procedures', 'Controller\Procedure:getAll');
$app->get('/procedures/get/[{procedureId}]', 'Controller\Procedure:get');
$app->put('/procedures/add', 'Controller\Procedure:save');
$app->delete('/procedures/remove/[{procedureId}]', 'Controller\Procedure:remove');

// Catch-all route to serve a 404 Not Found page if none of the routes match
// NOTE: make sure this route is defined last
$app->map(['GET', 'POST', 'PUT', 'DELETE', 'PATCH'], '/{routes:.+}', function($req, $res) {
    $handler = $this->notFoundHandler; // handle using the default Slim page not found handler
    return $handler($req, $res);
});
