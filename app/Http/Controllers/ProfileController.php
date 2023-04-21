<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    public function loyalty(Request $request): View
    {
        return view('profile.loyalty', [
            'user' => $request->user(),
        ]);
    }

    public function password(Request $request): View
    {
        return view('profile.password', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated(
            
        ));

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function history()
    {
        return view('profile.history');
    }

    public function avatar(Request $request)
    {
        $user = Auth::User(); 
        $this->validate(
            $request,
            [
                'foto' => 'mimes:png,jpeg,jpg'
            ]
        );

        $path = 'foto/'.$user->foto;
        if(File::exists($path))
        {
            File::delete($path);
        }
        $foto = $request->file('foto');
        $name = 'avatar_' . date('Ymdhis') . '.' . $request->file('foto')->getClientOriginalExtension();
        $foto->move('foto/', $name);

        $user = Auth::user();
        $user->foto = $name;
        $user->update();
        return Redirect('/profile');
    }
}
