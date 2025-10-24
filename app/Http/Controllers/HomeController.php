<?php
// app/Http/Controllers/HomeController.php
namespace App\Http\Controllers;

class HomeController extends Controller
{
    // Menampilkan halaman CV
    public function index()
    {
        return view('pages.home');
    }
}