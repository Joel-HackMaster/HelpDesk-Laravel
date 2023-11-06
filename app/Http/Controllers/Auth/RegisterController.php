<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Empleado;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'Codigo' => ['required', 'string', 'max:255'],
            'NombreCompleto' => ['required', 'string', 'max:255'],
            'DNI' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'Empresa' => ['required', 'string', 'max:255'],
            'Estado' => ['required', 'string', 'max:255'],
            'Rol' => ['required', 'string', 'max:255'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'codigo' => $data['Codigo'],
            'nombre' => $data['NombreCompleto'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'rol' => $data['Rol'],
            'empresa' => $data['Empresa'],
            'estado'=> $data['Estado'],
        ]);
    
        // Crear un nuevo empleado en la tabla de empleados asociado al usuario
        $empleado = Empleado::create([
            'Codigo' => $data['Codigo'],
            'NombreCompleto' => $data['NombreCompleto'],
            'DNI' => $data['DNI'],
            'Correo' => $data['email'],
            'Empresa' => $data['Empresa'],
            'Estado' => $data['Estado'],
            'Rol' => $data['Rol'], // Otros campos de empleado
        ]);

        return $user;
    }

    protected function redirectPath()
    {
        return '/';
    }
}
