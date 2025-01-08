<?php

namespace app\Services;

use app\Modals\UserModals;

class UserServices {
    private UserModals $usermodals;

    public function __construct(UserModals $usermodals) {
        $this->usermodals = $usermodals;
    }

    public function login($email, $password) {
        $user = $this->usermodals->getByField('email', $email);

        if(!$user) {
            throw new \Exception("Usuário não encontrado.");
        }
        if ($password != $user['password']) {
            throw new \Exception("Senha incorreta.");
        }
        $_SESSION['login'] = $user;
        return true;
    }

    public function create($name, $nickname, $email, $email2, $password, $password2) {

        if ($this->usermodals->getByField('name',$email)) {
            throw new \Exception("Email já cadastrado.");
        }

        if ($this->usermodals->getByField('nickname',$email)) {
            throw new \Exception("Apelido já cadastrado.");
        }

        if ($this->usermodals->getByField('email',$email)) {
            throw new \Exception("Email já cadastrado.");
        }
        
        if ($email != $email2) {
            throw new \Exception("Os emails não são iguais.");
        }

        if ($password != $password2) {
            throw new \Exception("As senhas não são iguais.");
        }

        $this->usermodals->create($name, $nickname, $email, $password);
    }

}
