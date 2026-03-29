<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Lead;
use App\Models\Service;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'type' => ['required', 'in:service,course'],
            'entity_id' => ['nullable', 'integer'],
            'name' => ['nullable', 'string', 'max:255'],
            'phone' => ['nullable', 'string', 'max:255'],
            'email' => ['nullable', 'email', 'max:255'],
            'message' => ['nullable', 'string'],
            'source' => ['nullable', 'string', 'max:50'],
        ]);
        $entity = null;
        if ($data['type'] === 'service' && !empty($data['entity_id'])) {
            $entity = Service::find($data['entity_id']);
        }
        if ($data['type'] === 'course' && !empty($data['entity_id'])) {
            $entity = Course::find($data['entity_id']);
        }
        $title = $entity?->title;
        $waNumber = preg_replace('/\D+/', '', config('services.whatsapp.number', '77077801011'));
        $waText = "Здравствуйте! Интересует {$data['type']}";
        if ($title) {
            $waText .= ": {$title}";
        }
        if (!empty($data['name'])) {
            $waText .= "\nИмя: {$data['name']}";
        }
        if (!empty($data['phone'])) {
            $waText .= "\nТелефон: {$data['phone']}";
        }
        if (!empty($data['email'])) {
            $waText .= "\nEmail: {$data['email']}";
        }
        if (!empty($data['message'])) {
            $waText .= "\nСообщение: {$data['message']}";
        }
        $whatsappUrl = "https://wa.me/{$waNumber}?text=" . urlencode($waText);
        $lead = Lead::create([
            'type' => $data['type'],
            'entity_id' => $data['entity_id'] ?? null,
            'name' => $data['name'] ?? null,
            'phone' => $data['phone'] ?? null,
            'email' => $data['email'] ?? null,
            'source' => $data['source'] ?? 'api',
            'status' => 'new',
            'title' => $title,
            'message' => $data['message'] ?? null,
            'whatsapp_url' => $whatsappUrl,
            'ip' => $request->ip(),
            'user_agent' => (string) $request->userAgent(),
        ]);

        return response()->json([
            'success' => true,
            'lead' => $lead,
            'whatsapp_url' => $whatsappUrl,
        ], 201);
    }
}