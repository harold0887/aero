<?php

namespace App\Http\Controllers;

use Gate;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests\PasswordRequest;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('profile.user-profile');
    }


    //actualizar foto de perfil
    public function update(ProfileRequest $request)
    {

        auth()->user()->update(
            $request->merge(['picture' => $request->photo ? $request->photo->store('profile', 'public') : null])
                ->except([$request->hasFile('photo') ? '' : 'picture'])
        );

        return back()->with('success', "Perfil actualizado con éxito");
    }

    //actualizar contraseña
    public function password(PasswordRequest $request)
    {


        auth()->user()->update(['password' => Hash::make($request->get('password'))]);

        return back()->with('success', "Contraseña actualizada con éxito");

    }
}
