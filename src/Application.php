<?php 

namespace Ikonc;

use Ikonc\Http\Route;
use Ikonc\Database\DB;
use Ikonc\Http\Request;
use Ikonc\Http\Response;
use Ikonc\Support\Config;
use Ikonc\Support\Session;
use Ikonc\Database\Managers\MySQLManager;
use Ikonc\Database\Managers\SQLiteManager;

class Application
{
    protected Route $route;
    protected Request $request;
    protected Response $response;
    protected DB $db;             //step 1
    protected Config $config;
    protected Session $session;

    public function __construct()
    {
        $this->request = new Request;
        $this->response = new Response;
        $this->route = new Route($this->request, $this->response);  
        $this->db = new DB($this->getDatabaseDriver());     //step 2
        $this->config = new Config($this->loadConfigurations());  
        $this->session = new Session; 
    }

    protected function getDatabaseDriver()  //step 3
    {
         return match(env('DB_DRIVER')) {
            'sqlite' => new SQLiteManager,
            'mysql'  => new MySQLManager,
            default  => new SQLiteManager
        };
    }

    protected function loadConfigurations()
    {
        foreach(scandir(config_path()) as $file) {
            if ($file == '.' || $file == '..') {
                continue;
            }
            $filename = explode('.', $file)[0];

            yield $filename => require config_path() . $file;
        }

    }

    public function run()
    {
        $this->db->init();
        $this->route->resolve();
    }

    public function __get($name)
    {
        if(property_exists($this, $name)) {
            return $this->$name;
        }
    }

}   
