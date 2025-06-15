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
     */
    public function edit(Request $request): View
    {
        // SQL:
        // SELECT * FROM users WHERE id = current_user_id;

        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Memperbarui informasi profil pengguna.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            // Jika email berubah, set verifikasi email menjadi NULL
            // SQL:
            // UPDATE users SET email_verified_at = NULL WHERE id = current_user_id;
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        // SQL:
        // UPDATE users 
        // SET name = ?, email = ?, ... 
        // WHERE id = current_user_id;

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Menghapus akun pengguna dari sistem.
     */
    public function destroy(Request $request): RedirectResponse
    {
        // Validasi bahwa password sesuai
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        // Logout user dari sistem
        Auth::logout();

        // SQL:
        // DELETE FROM users WHERE id = current_user_id;
        $user->delete();

        // Hapus sesi dan regenerasi token keamanan
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
