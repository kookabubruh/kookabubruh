<?php
include 'VarDumper.php';
class animal
{
	public $legs = 2;
	public $arms = 2;
	public $health = 1;
	public $tail = 1;
	public $eyes = 2;
	public $steps = 1;
  public function go()
{
 	 if ($this->steps != 0)
 	 {
 		return $this->steps++;
 	 }
}
  public function jump()
  {
  	if ($this->steps != 0)
  	$this->$legs--;
  }
  public function say($text)
  {
	echo $text;
	$this->$arms--;
  }
  public function kill()
  {
  	$this->$health--;
  }




}
$s = new animal();
VarDumper::dump($s,10,true);
$s->go();
VarDumper::dump($s,10,true);
$s->jump();
VarDumper::dump($s,10,true);
$s->say('Даня лох');
VarDumper::dump($s,10,true);
$s->kill();
VarDumper::dump($s,10,true);










?>