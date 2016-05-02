<?php

namespace RoundPartner\Test\Unit;

use RoundPartner\Model\Client\Entity\Address;
use RoundPartner\Model\Client\Entity\Customer;

class CustomerTest extends \PHPUnit_Framework_TestCase
{
    public function testCreateInstanceOfCustomer()
    {
        $entity = new Customer();
        $entity->address[] = new Address();
    }
}
