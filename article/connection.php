<?php
/**
 * Created by PhpStorm.
 * User: jy
 * Date: 2016/7/23
 * Time: 10:38
 */
include ("config.php");

class connection{
    private $c_host;
    private $c_username;
    private $c_password;
    private $c_db;

    function __construct()
    {
        global $CFG ;
        $this->c_username=$CFG['username'];
        $this->c_password=$CFG['password'];
        $this->c_host=$CFG['host'];
        $this->c_db=$CFG['db'];

    }

    function conn(){
        if (!$conn=mysql_connect($this->getCHost(),$this->getCUsername(),$this->getCPassword())){
            echo 'error';
        }
        else{
            echo 'ok';
            mysql_select_db($this->getCDb(),$conn);
            return $conn;
        }
    }

    /**
     * @return mixed
     */
    public function getCHost()
    {
        return $this->c_host;
    }

    /**
     * @param mixed $c_host
     */
    public function setCHost($c_host)
    {
        $this->c_host = $c_host;
    }

    /**
     * @return mixed
     */
    public function getCUsername()
    {
        return $this->c_username;
    }

    /**
     * @param mixed $c_username
     */
    public function setCUsername($c_username)
    {
        $this->c_username = $c_username;
    }

    /**
     * @return mixed
     */
    public function getCPassword()
    {
        return $this->c_password;
    }

    /**
     * @param mixed $c_password
     */
    public function setCPassword($c_password)
    {
        $this->c_password = $c_password;
    }

    /**
     * @return mixed
     */
    public function getCDb()
    {
        return $this->c_db;
    }

    /**
     * @param mixed $c_db
     */
    public function setCDb($c_db)
    {
        $this->c_db = $c_db;
    }

    /**
     * @return mixed
     */



}
