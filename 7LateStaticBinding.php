<?php

// this variable assign on run time
// static $a = "i m late static binding";
// echo $a;

?>

<?php

class DB{
    protected static $table = "baseTable";
    public function select(){
       // echo "select * FROM " . self::$table; // when self replace to static that is called late static binding
        echo "select * FROM " . static::$table ;
    }
    public function insert(){
        echo "INSERT into " . static::$table;
    }
}
class abc extends DB{
    protected static $table = 'abc '; // when abc insert value in $table
}
class userAccounts extends DB{
    protected static $table = 'user_accounts';

}
$accounts = new userAccounts;
$abc = new abc;

$abc->select();
$accounts->insert();

?>