<?php
$dir = opendir(__DIR__);
var_dump(__DIR__);
echo __DIR__."\n";
var_dump($dir);

$i = array("a","b" =>"c","d");
print "0:$i[0]" ;
print("\n");
print "1:".$i[1];
print("\n");
print("2:".$i[2]);
print("\n");
print("b:".$i["b"]);
print("\n");

class Tippy{
  var $a;
  function __construct(){
    $this->a = function (){
      echo "Gochiusa\n";
    };
    var_dump($this->a);
    //$this->a; Doesn't work...
  }
}
$t = new Tippy();

print Tesagure."\n";
var_dump(var_dump);


?>
