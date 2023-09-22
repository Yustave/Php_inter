<?php

class charater{
    public $name,$level,$party,$dps,$activestatus;

    public function setname(string $name){
        $this->name = $name;
    }

    public function getname() : string
    {
        return $this->name;
    }

    public function setlvl(int $level){
        $this->level = $level;
    }

    public function getlvl() : int
    {
        return $this->level;
    }

    public function setparty(array $party){
        $this->wepon = $party;
    }

    public function getparty() : array
    {
        return $this->party;
    }

    public function setdps(float $dps){
        $this->dps = $dps;
    }

    public function getdps() : float
    {
        return $this->dps;
    }

    public function setactivestatus(bool $activestatus){
        $this->activestatus = $activestatus;
    }

    public function getactivestatus() : bool
    {
        return $this->activestatus;
    }

}

class battleform{
    public $race,$wepon,$skillcount,$battlestyle;

    public function __construct(string $race,array $wepon,int $skillcount,bool $battlestyle){
        $this->race =$race;
        $this->wepon =$wepon;
        $this->skillcount =$skillcount;
        $this->battlestyle =$battlestyle;
    }

    public function getrace() : string
    {
        return $this->race;
    }

    public function getwepon() : array
    {
        return $this->wepon;
    }

    public function getskillcount() : int
    {
        return $this->skillcount;
    }

    public function getbattlestyle() : bool
    {
        return $this->battlestyle;
    }
    
}

class charater_set_up{
    public $charater,$batttleform;

    public function __construct(charater $charater,battleform $batttleform){
        $this->charater = $charater;
        $this->batttleform = $batttleform;
    }

    public function getcharater() : charater {
        return $this->charater;
    }

    public function batttleform() : batttleform {
        return $this->batttleform;
    }

}
$C_Yustave =new charater;
$C_Yustave->setname("Yustave");
$C_Yustave->setlvl(3);
$C_Yustave->setparty(["Member"=>"Kekki","Member"=>"La Van","Member"=>"Asuna"]);
$C_Yustave->setdps(50.5);
$C_Yustave->setactivestatus(TRUE);

$C_Kekki =new charater;
$C_Kekki->setname("kekki");
$C_Kekki->setlvl(2);
$C_Kekki->setparty(["Leader"=>"Yustave","Member"=>"La Van","Member"=>"Asuna"]);
$C_Kekki->setdps(50.5);
$C_Kekki->setactivestatus(TRUE);

$B_Yustave = new battleform("Archangel",["Divine Sword","Wings Of Justice"],3,True);
$B_Kekki = new battleform("Saiyan",["Unstopaable Fit","Tempest of blade"],3,True);

$Csetup_Yustave= new charater_set_up($C_Yustave,$B_Yustave);
$Csetup_Kekki= new charater_set_up($C_Kekki,$B_Kekki);

$list = [$Csetup_Yustave,$Csetup_Kekki];
$serialize = serialize($list);
$ary = unserialize($serialize);
echo "<pre>".print_r($ary,true)."</pre>";




?>