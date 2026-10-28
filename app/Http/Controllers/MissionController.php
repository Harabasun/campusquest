<?php

namespace App\Http\Controllers;

class MissionController extends Controller
{
    public function index()
    {
        $missions = [
            ['id' => 1, 'title' => 'Seminar Nasional AI', 'category' => 'Akademik', 'xp' => 100],
            ['id' => 2, 'title' => 'Lomba Hackathon', 'category' => 'Lomba', 'xp' => 300],
            ['id' => 3, 'title' => 'Bakti Sosial Desa', 'category' => 'Sosial', 'xp' => 150],
        ];

        return view('missions.index', compact('missions'));
    }
}