<?php

namespace App\Http\Controllers;
use App\Models\Click;
use Illuminate\Http\Request;

class ClickTrackerController extends Controller
{
    public function track($target, Request $request)
    {
        // Simpan data klik ke database
        Click::create([
            'target' => $target,
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
        ]);

        // List redirect URL berdasarkan target
        $redirectUrls = [
            'github' => 'https://github.com/gilangpramnnaa',
            'portfolio' => 'https://yourportfolio.com',
            'discord' => 'https://discord.com/users/yourid',
            'facebook' => 'https://facebook.com/yourprofile',
            'instagram' => 'https://instagram.com/yourusername',
        ];

        return redirect($redirectUrls[$target] ?? '/');
    }
}
