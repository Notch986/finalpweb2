<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OrdersFixture
 */
class OrdersFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'ID' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Order Code', 'autoIncrement' => true, 'precision' => null],
        'CLIENT_ID' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'This order\'s client ID', 'precision' => null, 'autoIncrement' => null],
        'EMPLOYEE_ID' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'This order\'s employee ID', 'precision' => null, 'autoIncrement' => null],
        'Date' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'Order date', 'precision' => null],
        'Amount' => ['type' => 'smallinteger', 'length' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Order amount', 'precision' => null],
        'Description' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Order description', 'precision' => null],
        '_indexes' => [
            'CLIENT_ID' => ['type' => 'index', 'columns' => ['CLIENT_ID'], 'length' => []],
            'EMPLOYEE_ID' => ['type' => 'index', 'columns' => ['EMPLOYEE_ID'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['ID'], 'length' => []],
            'orders_ibfk_2' => ['type' => 'foreign', 'columns' => ['EMPLOYEE_ID'], 'references' => ['employees', 'ID'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'orders_ibfk_1' => ['type' => 'foreign', 'columns' => ['CLIENT_ID'], 'references' => ['clients', 'ID'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // phpcs:enable
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'ID' => 1,
                'CLIENT_ID' => 1,
                'EMPLOYEE_ID' => 1,
                'Date' => '2021-12-26',
                'Amount' => 1,
                'Description' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
