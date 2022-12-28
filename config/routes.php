<?php

use Apidog\Controller\breedListController;
use Apidog\Controller\findBreedController;
use Apidog\Controller\raceListController;

return [
    '/' => breedListController::class,
    '/search'=> findBreedController::class,
    '/racelist'=> raceListController::class,
];
