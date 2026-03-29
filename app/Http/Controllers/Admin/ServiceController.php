<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::with('features')->orderBy('sort_order')->get();
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        $service = Service::create($request->only([
            'title', 'description', 'price', 'icon', 'color'
        ]));

        foreach ($request->features ?? [] as $feature) {
            $service->features()->create(['title' => $feature]);
        }

        return redirect()->route('admin.services.index');
    }

    public function edit(Service $service)
    {
        $service->load('features');
        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $service->update($request->only([
            'title', 'description', 'price', 'icon', 'color'
        ]));

        $service->features()->delete();

        foreach ($request->features ?? [] as $feature) {
            $service->features()->create(['title' => $feature]);
        }

        return redirect()->route('admin.services.index');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return back();
    }
}
