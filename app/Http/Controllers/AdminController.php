<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function show_postingan()
    {
        return view('admin.postingan');
    }

    public function show_arsip()
    {
        return view('admin.arsip');
    }
    public function show_pengaturan()
    {
        return view('admin.pengaturan');
    }
    public function show_logout()
    {
        return view('admin.logout');
    }
    public function show_pengguna()
    {
        return view('admin.pengguna');
    }
    public function show_grafik()
    {
        return view('admin.grafik');
    }
    public function show_kalender()
    {
        return view('admin.kalender');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}