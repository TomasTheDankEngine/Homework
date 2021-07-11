<?php
namespace Bank;

class UserController {
    public function index()
    {
        return App::view('login');
    }

    public function login()
    {
        $users = json_decode(file_get_contents(DIR.'/users.json'));
        foreach ($users as $user) {
            if ($user['uname'] == $_POST['uname']) {
                if ($user['pass'] == md5($_POST['pass'])) {
                    $_SESSION['approved'] = true;
                    $_SESSION['user'] = $user['uname'];
                    App::setMsg('Welcome, '.$_SESSION['name']);
                    App::redirect();
                }
            }
        }
        App::setMsg('Incorrect username or password.');
        App::redirect('login');
    }

    public function logout()
    {
        unset($_SESSION['approved'], $_SESSION['name']);
        App::setMsg('Successfully logged out.');
        App::redirect('login');
    }
}