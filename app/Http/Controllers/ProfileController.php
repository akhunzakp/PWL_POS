<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function upload(Request $request)
{
    $request->validate([
        'profile_photo' => 'required|file|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $namaFile = uniqid() . '_' . $request->profile_photo->getClientOriginalName();
    $path = $request->profile_photo->storeAs('profile_photos', $namaFile, 'public');

    session(['photo' => $path]); // Simpan path-nya di session
    return back();
}

}
