<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class ProvidersTable extends Table
{
    public function initialize(array $config): void
    {
        $this->setTable("providers");
    }
}