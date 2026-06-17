<?php

namespace App\Controllers;

class AuthController extends BaseController
{
    public function pageLogin()
    {
        return view('login');
    }



    public function authenticate()
    {
        $model = new \App\Models\UserModel();

        $user = $model
            ->where('email', $this->request->getPost('email'))
            ->first();

        if (
            $user &&
            $user['mot_de_passe'] === $this->request->getPost('password')
        ) {

            session()->set($user);
            session()->set('isLoggedIn', true);

            return redirect()->to('/caisse/choix');
        }

        return redirect()->to('/login')
            ->with('error', 'Identifiants invalides')
            ->withInput();
    }

    public function logout()
    {
        session()->destroy();

        return redirect()->to('/login');
    }
}
