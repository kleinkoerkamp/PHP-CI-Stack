<?php
/**
 * Created by PhpStorm.
 * User: frankkleinkoerkamp
 * Date: 4-11-2014
 * Time: 14:36
 */
class UserTest extends PHPUnit_Framework_TestCase {

    public function testSetFirstName() {
        $user = new User();
        $user->setFirstName("Frank");
        $user->setLastName("Klein Koerkamp");

        $this->assertEquals("Frank", $user->getFirstName());
        $this->assertEquals("Klein Koerkamp", $user->getLastName());
        $this->assertEquals("Frank Klein Koerkamp", $user->getFullName());
    }
}
 