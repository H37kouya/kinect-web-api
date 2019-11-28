<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\DetectedPersonService;
use Exception;

class DetectedController extends Controller
{
    private $_service;

    public function __construct(DetectedPersonService $service)
    {
        $this->_service = $service;
    }

    public function detected(Request $request)
    {
        return $this->_service->create_column($request);
    }

    public function getPeopleCount(Request $request)
    {
        return $this->_service->getPeopleCount($request);
    }
}
