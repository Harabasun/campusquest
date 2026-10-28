<?php

namespace App\Http\Controllers;

class LeaderboardController extends Controller
{
    public function index()
    {
        $players = collect([
            ['name' => 'Anggita Cahyati Hidayat', 'faculty' => 'Fakultas Teknik Elektro', 'level' => 8, 'xp' => 1850],
            ['name' => 'Nur Syadira', 'faculty' => 'Fakultas Rekayasa Industri', 'level' => 7, 'xp' => 1500],
            ['name' => 'Igor Simanjuntak', 'faculty' => 'Fakultas Informatika', 'level' => 5, 'xp' => 720],
            ['name' => 'Nayla Assyifa', 'faculty' => 'Fakultas Ekonomi & Bisnis', 'level' => 4, 'xp' => 640],
            ['name' => 'Naira Cahaya Putri Dermawan Sinaga', 'faculty' => 'Fakultas Komunikasi & Ilmu Sosial', 'level' => 3, 'xp' => 410],
        ])->sortByDesc('xp')->values();

        $faculties = $players->pluck('faculty')->unique()->values();

        return view('leaderboard', compact('players', 'faculties'));
    }
}