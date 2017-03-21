<?php
\Larakit\StaticFiles\Manager::package('larakit/sf-angular-nestable')
    ->setSourceDir('public')
    ->ngModule('ng-nestable')
    ->usePackage('larakit/sf-angular-larakit')
    ->jsPackage('angular-nestable.js');