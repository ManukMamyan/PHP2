<?php

namespace app\controllers;

use core\base\Controller;

class UserController extends Controller
{
    public function auth() {
        if ($this->request->post('login') && $this->request->post('password')) {
            if ($this->request->post('login') == 'admin' && $this->request->post('password') == '123123') {
                $this->request->session('user', 'admin');
                $this->request->redirect('user/home');
            } else {
                return $this->render('auth', [
                    'error' => 'Правильный логин и пароль: admin 123123'
                ]);
            }
        } else {
            return $this->render('auth', [
                'error' => 'Введите логин: admin пароль: 123123'
            ]);
        }
    }

    public function home() {
        if ($this->request->session('user')) {
            return $this->render('home', [
                'session' => $_SESSION['user']
            ]);
        }
        $this->request->redirect('/');
    }

    public function logout() {
        if ($this->request->session('user')) {
            unset($_SESSION['user']);
        }
        $this->request->redirect('/');
    }
}