<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;


use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;


use Illuminate\Support\Facades\Mail;  ///IMPORTA 
use App\Mail\SendMail;///IMPORTA 
use App\Mail\SendAdminMail;///IMPORTA 

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
        ])->validate();

        $user = User::create([         ///non il return perche uscirebbe dal metodo ma creo $user 
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);



        // Invio mail all’utente
        Mail::to($user->email)->send(new SendMail($user));

         // Invio mail all’admin
        Mail::to('admin@example.com')->send(new SendAdminMail($user));
 
        return $user;
    }
}
