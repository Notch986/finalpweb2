<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Provider extends Entity
{
    protected $_accessible = [
        "Name" => true,
        "Status" => true,
        "Phone" => true
    ];
}
