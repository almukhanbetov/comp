<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        return response()->json(
            Service::with('features')->orderBy('sort_order')->get()
        );
    }

    public function show(Service $service)
    {
        return response()->json(
            $service->load('features')
        );
    }
}