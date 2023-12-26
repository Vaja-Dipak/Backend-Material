<?php
class Queryclass{
    public $Query;
    public function select ($val)
    {
        $this->Query="SELECT $val";
        return $this;
    }
    public function from($tbl)
    {
        $this->Query .= " FROM $tbl";
        return $this;
    }
    public function where($id)
    {
        $this->Query .=" WHERE userid = $id";
        return $this;
    }
}
$D=new Queryclass();
echo $q= $D ->select('*')-> Query;
echo "<br>";
echo $q=$D->select("username, password")->Query;
echo "<br>";
$q=$D -> select("username,password")->from("Jay Maheshwari");
print_r($q->Query);
echo "<br>";
echo $q= $D -> select("*")->from("users")->where(45)->Query;
echo "<br>";
echo $q=$D -> select("*")->from("users")->where(70)->Query;

?>