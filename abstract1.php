<?php
abstract class UserAccount {
protected string $username;

public function __construct($username){
    $this->username = $username ;
      }

    public function login (){
        echo " user $this->username has logged in welcome back <br>";

  
    }
  
    abstract public function downloadGame();

}

class FreeAccount extends UserAccount {
   public function downloadGame(){
        echo " $this->username (Free Account): Download speed limited to 1 MB/s. Upgrade to Premium for max speed! <br>";
    }

}
class PremiunAccount extends UserAccount {
    public function downloadGame(){
        echo " $this->username (Premium Account): Downloading at Unlimited Speed (100 MB/s)! Enjoy your game! <br>";
    }
}
$player1= new FreeAccount("noobgamer");
$player1->login();
$player1->downloadGame();
echo "<br>";
$player2=new PremiunAccount("programer");
$player2->login();
$player2->downloadGame();
?>