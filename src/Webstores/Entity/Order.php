<?php
/**
 * Created by PhpStorm.
 * User: frankkleinkoerkamp
 * Date: 4-11-2014
 * Time: 17:14
 */

namespace Webstores\Entity;


class Order {
    /**
     * @var User the user that ordered.
     */
    private $user;

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }
} 