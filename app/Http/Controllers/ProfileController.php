<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Menampilkan form profil pengguna.
     * 
     * SQL terkait (implisit):
     * SELECT * FROM users WHERE id = current_user_id;
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Memperbarui informasi profil pengguna.
     * 
     * SQL terkait:
     * UPDATE users 
     * SET name = ?, email = ?, ... 
     * WHERE id = current_user_id;
     * 
     * Jika email diubah:
     *   SET email_verified_at = NULL
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            // Reset verifikasi email jika email diubah
            $request->user()->email_verified_at = null;
        }

        $request->user()->save(); // Simpan perubahan ke database

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Menghapus akun pengguna dari sistem.
     * 
     * SQL terkait:
     * DELETE FROM users WHERE id = current_user_id;
     */
    public function destroy(Request $request): RedirectResponse
    {
        // Validasi bahwa password yang dimasukkan sesuai
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        // Logout user dari sistem
        Auth::logout();

        // Hapus user dari database
        $user->delete();

        // Hapus sesi dan regenerasi token
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
