<?php

namespace App\Http\Controllers\AdministrativeUnit;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * Class AdminUnitShowController
 * @package App\Http\Controllers\AdministrativeUnit
 */
class AdminUnitShowController extends Controller
{
    public function show($id)
    {
        return $id;
    }
}
