<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        $user = [
            'name' => 'Igor Simanjuntak',
            'faculty' => 'Fakultas Informatika',
            'level' => 5,
            'xp' => 720,
            'next_xp' => 1000,
            'rank' => 3,
            'missions_done' => 12,
        ];

        $badges = [
            ['name' => 'Pemula', 'icon' => '🌱'],
            ['name' => 'Aktif Seminar', 'icon' => '🎤'],
            ['name' => 'Juara Lomba', 'icon' => '🏆'],
        ];

        $activities = [
            ['title' => 'Seminar Nasional AI', 'status' => 'Disetujui', 'xp' => 100],
            ['title' => 'Lomba Hackathon', 'status' => 'Menunggu', 'xp' => 300],
            ['title' => 'Bakti Sosial Desa', 'status' => 'Ditolak', 'xp' => 150],
        ];

        return view('dashboard', compact('user', 'badges', 'activities'));
    }
}