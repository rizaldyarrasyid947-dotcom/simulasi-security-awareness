<?php

namespace App\Http\Controllers;

use App\Models\Visit;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TrackingController extends Controller
{
    public function show(string $token)
    {
        return view('share-location', compact('token'));
    }

    public function store(Request $request, string $token)
    {
        $data = $request->validate([
            'latitude' => ['required', 'numeric', 'between:-90,90'],
            'longitude' => ['required', 'numeric', 'between:-180,180'],
            'accuracy' => ['nullable', 'numeric', 'min:0'],
            'consent_given' => ['required', 'boolean'],
        ]);

        if (!$data['consent_given']) {
            return response()->json([
                'message' => 'Izin lokasi diperlukan untuk simulasi ini.'
            ], 403);
        }

        $ua = $request->userAgent() ?? '';

        Visit::create([
            'token' => $token,
            'ip_address' => $request->ip(),
            'user_agent' => $ua,
            'browser' => $this->browser($ua),
            'platform' => $this->platform($ua),
            'device' => $this->device($ua),
            'latitude' => $data['latitude'],
            'longitude' => $data['longitude'],
            'accuracy' => $data['accuracy'] ?? null,
            'consent_given' => true,
            'accessed_at' => now(),
        ]);

        return response()->json([
            'message' => 'Lokasi berhasil dibagikan untuk simulasi security awareness.'
        ]);
    }

    public function dashboard()
    {
        $visits = Visit::latest('accessed_at')->get();

        return view('dashboard-visits', compact('visits'));
    }

    private function browser(string $ua): string
    {
      return match (true) {
    str_contains($ua, 'Edg/') => 'Microsoft Edge',
    str_contains($ua, 'Brave') => 'Brave',
    str_contains($ua, 'Chrome/') => 'Chrome',
    str_contains($ua, 'Firefox/') => 'Firefox',
    str_contains($ua, 'Safari/') && !str_contains($ua, 'Chrome/') => 'Safari',
    default => 'Unknown',
};
    }

    private function platform(string $ua): string
    {
        return match (true) {
            str_contains($ua, 'Android') => 'Android',
            str_contains($ua, 'iPhone') || str_contains($ua, 'iPad') => 'iOS',
            str_contains($ua, 'Windows') => 'Windows',
            str_contains($ua, 'Mac OS') => 'macOS',
            str_contains($ua, 'Linux') => 'Linux',
            default => 'Unknown',
        };
    }

    private function device(string $ua): string
    {
        return preg_match('/Mobile|Android|iPhone|iPad/i', $ua)
            ? 'Mobile'
            : 'Desktop';
    }
}
