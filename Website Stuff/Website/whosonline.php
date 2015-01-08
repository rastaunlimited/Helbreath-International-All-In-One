<?php
class WhosOnline{
    var $mysqlhost='localhost';
    var $mysqluser='root';
    var $mysqlpass='';
    var $mysqldatabase='epco';
    var $mysqltable='whosonline';
    /**
    * $idletime = amount of time before an idle user is
    * considered inactive.  In Seconds
    * 
    * @var string
    */
    var $idletime='600';
    /**
    * $deletetime = amount of time before a user is
    * deleted from the database for being idle
    * 
    * @var string
    */
    var $deletetime='1200';
    /**
    * $bail - If set to true, it will auto return all the
    * functions if there is an error, so no mysql/class
    * errors will be displayed 
    * 
    * @var bool
    */
    var $bail=true;
    /**
    * $die - If set to true, the current PHP script will
    * exit completely.  
    * 
    * @var bool
    */
    var $die=false;
    /**
    * $quit - Once the class bails, it will return if true
    * 
    * @var bool
    */
    var $quit=false;
    /**
    * $mysqlerrors - If true, will display mysql_errors
    * instead of standard errors
    * 
    * @var bool
    */
    var $mysqlerrors=false;
    /**
    * $images - Array containing numbers 0-10 and corresponding
    * images
    * 
    * @var array
    */
    var $images = array();
    /**
    * $username - String that relates to the session variable for the user name.
    * 
    * @var string
    */
    var $username = 'Guest';
    /**
    * WhosOnline::WhosOnline($host,$user,$password,$database [,$table] [,$autoupdate])
    * 
    * For reverse compatibility with older versions of PHP
    * 
    * @param string $host MySQL Host (localhost)
    * @param string $user MySQL database user
    * @param string $password MySQL user password
    * @param string $database MySQL database
    * @param optional string $table MySQL table
    * @param optional bool $autoupdate
    * @return null Always null
    */
    function WhosOnline($host,$user,$password,$database,$table='',$autoupdate=false)
    {
        $this->_construct($host,$user,$password,$database);
        return;
    }
    /**
    * WhosOnline::_construct($host, $user, $password, $database [,$table] [,$autoupdate])
    * 
    * This creates the database connection and is created
    * by simply typing:
    * 
    * $whosonline = new WhosOnline('localhost','root','','epco');
    * 
    * By utilizing $table and $autocomplete, you do not need to WhosOnline::Update()
    * 
    * @param string $host MySQL Host (localhost)
    * @param string $user MySQL database user
    * @param string $password MySQL user password
    * @param string $database MySQL database
    * @param optional string $table MySQL table
    * @param optional bool $autoupdate
    * @return null Always null 
    */
    function _construct($host,$user,$password,$database,$table='',$autoupdate=false)
    {
        $this->mysqlhost=$host;
        $this->mysqluser=$user;
        $this->mysqlpass=$password;
        $this->mysqldatabase=$database;
        $this->Connect();
        if($table!='' && $autoupdate==true)
        {
            $this->TableSet($table);
            $this->Update();
        }
        return;
    }
    /**
    * WhosOnline::Connect()
    * 
    * Connects to a mysql database and stores the connection.  MySQL
    * variables must be set prior to connection, either through
    * WhosOnline::_construct() or by setting individual variables
    * 
    * @return null Always null
    */
    function Connect()
    {
        $this->dbh = @mysql_connect($this->mysqlhost,$this->mysqluser,$this->mysqlpass,true);
        if (!$this->dbh)
            $this->Error('Could not connect to the database.  Please check your connection settings.');
        if($this->quit)
            return;
        if(!@mysql_select_db($this->mysqldatabase,$this->dbh))
            $this->Error('Invalid database.  Possibly typo or user does not have privileges on that database');
        return;
    }
    /**
    * WhosOnline::TableSet($table, $create=true)
    * 
    * Checks for the table.  If it doesn't exist it will create the
    * table if $create is true, otherwise it will return an error.
    * 
    * @param string $table MySQL table where data is stored
    * @param bool $create If true, a new table will be created, else echo MySQL error
    * @return null Always null
    */
    function TableSet($table, $create=true)
    {
        if($this->quit)
            return;
        $this->mysqltable=$table;
        $tables = array(); 
        $query = @mysql_query("SHOW TABLES FROM ".$this->mysqldatabase,$this->dbh); 
        while ($row = mysql_fetch_array($query)) { 
            $tables[] = $row[0];
        }
        if(!in_array($table,$tables) && $create==true)
            $this->CreateTable();   
        else if(!in_array($table,$tables))
            $this->Error('Table not found in database.');
        return;        
    }
    /**
    * WhosOnline::CreateTable()
    * 
    * Creates a MySQL table to store the data.
    * 
    * @return null Always null
    */
    function CreateTable()
    {
        $query="CREATE TABLE ".$this->mysqltable." (sid varchar(100),time int(100), user varchar(100))";
        if(!mysql_query($query,$this->dbh))
            $this->Error('Unable to create table.');
        return;    
    }
    /**
    * WhosOnline::Error($message,$mysql)
    * 
    * Displays an error message.  If $bail is set to true, it will close the class.
    * If $die is set to true, it will terminate the PHP display
    * 
    * @param string $message Error message to be echoed
    * @param string $message Error from mysql    
    * @return null Always null 
    */
    function Error($message,$mysql='')
    {
        if($this->die && $this->mysqlerrors)
            die($mysql);
        else if($this->die)
            die($message);
        if($this->mysqlerrors)
            echo $mysql;
        else
            echo $message;
        if($this->bail)
            $this->quit=true;
        return;
    }
    /**
    * WhosOnline::DisplayMysqlErrors()
    * 
    * When called, it will turn on mysql error display
    * 
    * @return null Always null
    */
    function DisplayMysqlErrors()
    {
        $this->mysqlerrors=true;
        return;
    }
    /**
    * WhosOnline::_destruct()
    * 
    * Class destructor
    * 
    * @return bool Always true
    */
    function _destruct()
    {
        return true;
    }
    /**
    * WhosOnline::Update()
    * 
    * Update the users online
    * 
    * @return null Always null
    * 
    */
    function Update()
    {
        if($this->quit)
            return;
        $sid = session_id();
        $query="SELECT * FROM ".$this->mysqltable." WHERE sid='$sid'";
        $time=time();
        $rows=mysql_num_rows(mysql_query($query,$this->dbh));
        if($rows!=0)
            $query2="UPDATE ".$this->mysqltable." SET time='$time', user='".$this->username."' WHERE sid='$sid'";
        else
            $query2="INSERT INTO ".$this->mysqltable." (sid,time,user) VALUES ('$sid','$time','".$this->username."')";
        if(!@mysql_query($query2,$this->dbh))
            $this->Error('Error updating the user database.');
        $this->Delete();
        return;
    }
    /**
    * WhosOnline::Data($return = 'INT')
    * 
    * Returns the number of users considered "Online".
    * If $return = 'ARRAY', an array of user names will be returned.
    * 
    * @return int $users The number of people online
    * @return array $online An array with the individual people online
    */
    function Data($return = 'INT')
    {
        if($this->quit)
            return;
        $now=time();
        $load=(int)$now-$this->idletime;
        $query = "SELECT * FROM ".$this->mysqltable;
        $result=mysql_query($query,$this->dbh);
        $users=0;
        $members=0;
        $guests=0;
        $online=array();
        while($row=mysql_fetch_array($result))
        {
            if((int)$row['time']>$load)
            {
                if($row['user']!='Guest')
                {
                    $online[]=$row['user'];
                    $members++;
                }else
                    $guests++;
                $users++;
            }
        }
        $online['count']=$users;
        $online['members']=$members;
        $online['guests']=$guests;
        if($return=="INT")
            return $users;
        else
            return $online;
    }
    /**
    * WhosOnline::DisplayImages
    * 
    * Like WhosOnline::Data(), displays the number of users online
    * but formatted a user defined pictures.
    * 
    * @return string $output A html string with the digits represented by images
    */
    function DisplayImages()
    {
        if(count($this->images)!=10)
            $this->Error('Only '.count($this->images).' images defined.');
        if($this->quit)
            return;
        $now=time();
        $load=(int)$now-$this->idletime;
        $query = "SELECT * FROM ".$this->mysqltable;
        $result=mysql_query($query,$this->dbh);
        $users=0;
        while($row=mysql_fetch_array($result))
        {
            if((int)$row['time']>$load)
                $users++;
        }
        $array=str_split($users);
        $output='';
        foreach($array as $digit)
        {
            $output.="<img src='{$this->images[$digit]}'>";    
        }
        return $output;
    }
    /**
    * WhosOnline::Delete()
    * 
    * Deletes users who have "idled" to long from the database
    * 
    * @return null Always null
    */
    function Delete()
    {
        $now=time();
        $load=(int)$now-$this->deletetime;
        $query = "SELECT * FROM ".$this->mysqltable;
        $result=mysql_query($query,$this->dbh);
        $count=0;
        while($row=mysql_fetch_array($result))
        {
            if((int)$row['time']<$load)
                $sid[$count]="SID='{$row['sid']}'";
            $count++;
        }
        if(count($sid)>0)
        {
            $todelete=implode(" OR ",$sid);
            mysql_query("DELETE FROM ".$this->mysqltable." WHERE $todelete");
        }
        return;
    }
    /**
    * WhosOnline::SetImage($int,$src)
    * 
    * Sets images to be displayed by counter if WhosOnline::ImageDisplay=true;
    * 
    * @param int $int The number
    * @param string $src Location of image
    * @return null Always null
    */
    function SetImage($int,$src)
    {
        if(is_int($int) && $int<10 && $int>=0)
        {
            $this->images[$int]=$src;
        }
        return;
    }
    /**
    * WhosOnline::UpdateUser($sessionvar, $type)
    * 
    * Updates WhosOnline::username to match the session variable that is provided.
    * $type indicates if the variable is in the session array or just another string.
    * 
    * @param string $sessionvar Location of username in $_SESSION array
    * @param string $type Either "SESSION" or "STRING"
    * @return null Always null
    */
    function UpdateUser($sessionvar, $type = "SESSION")
    {
        if(!empty($sessionvar) && array_key_exists($sessionvar,$_SESSION))
            $this->username=$_SESSION[$sessionvar];
        return;
    }
}
?>