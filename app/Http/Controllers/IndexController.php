<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Visite;
class IndexController extends Controller
{
    public function index(Request $request)
    {
        $visitorId = $request->cookie('visitor_id');

        if (!$visitorId) {
            $visitorId = Str::uuid()->toString();
            // Définir le cookie d'identifiant du visiteur pendant 30 jours
            cookie('visitor_id', $visitorId, 30 * 24 * 60);
        }

        Visite::create([
            'visitor_id' => $visitorId,
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'visited_at' => now(),
        ]);

        return view('scout.index');
    }
}
