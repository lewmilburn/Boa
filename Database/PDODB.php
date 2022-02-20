<?php

/**
 * Boa PDO Library
 * @author      Lewis Milburn <contact@lewismilburn.com>
 * @license     Apache-2.0 License
 */

namespace Boa\Database;

use Boa\App;
use PDO;

class PDODB extends App
{
    /**
     * @var PDO
     */
    private PDO $pdodb;
    public array $settings;

    public function __construct()
    {
        // Construct parent class.
        parent::__construct();
        global $settings;
        $settings = parent::Settings();

        // Connect to the database.
        $dsn = "mysql:host=".$settings['database_hostname'].";dbname=".$settings['database_database'].";charset=".$settings['database_charset'];
        $this->pdodb = new PDO($dsn);
    }

    public function Query($string, $driver = 'NONE') {
        return null;
    }

    public function Prepare($string) {
        return null;
    }
}