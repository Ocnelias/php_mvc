<?php

namespace Admin\Model;

use Application\Model\AdminEntity;

class Admin extends AdminEntity
{
    /**
     * Login a admin
     * @param string $login
     * @param string $password
     * @return boolean
     */
    public function logIn(string $login, string $password)
    {


        /*
         * admin login
         */

        return ($login == 'admin' && $password == '123') ? 1 : false;
    }
}