<?php

namespace TDengine;

use TDengine\Resource;
use TDengine\Statement;
/**
 * @method void connect()
 * @method string getHost()
 * @method string getUsername()
 * @method string getPass()
 * @method string getDb()
 * @method mixed getServerInfo()
 * @method void selectDb()
 * @method int getPort()
 * @method Resource query(string $sql)
 * @method void close()
 * @method Statement prepare(string $insert)
 */
class Connection
{
    public string $host;
    public int $port;
    public string $username;
    public string $password;
    public string $dbname;

    public function __construct($host, $port, $username, $password, $dbname)
    {
        $this->host = $host;
        $this->port = $port;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;
    }
}
