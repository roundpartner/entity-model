<?php

namespace RoundPartner\Test\Unit;

use RoundPartner\Model\Client\Entity\Customer;

class CustomerTest extends \PHPUnit_Framework_TestCase
{
    public function testCreateInstanceOfCustomer()
    {
        new Customer();
    }
}
