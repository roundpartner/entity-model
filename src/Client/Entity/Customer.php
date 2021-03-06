<?php

namespace RoundPartner\Model\Client\Entity;

/**
 * @property integer $customer_id
 * @property string $business_name
 * @property string $title
 * @property string $first_name
 * @property string $last_name
 * @property string $telephone
 * @property string $mobile
 * @property string $email
 * @property integer $note_id
 * @property string $customer_status
 * @property string $created
 * @property string $modified
 *
 * @property Address[] $address
 */
class Customer
{
    public function __construct()
    {
        $this->address = array();
    }
}
