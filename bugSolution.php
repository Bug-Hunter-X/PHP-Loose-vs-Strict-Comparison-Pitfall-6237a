function foo(a, b) {
  if (a === b) {
    return true; 
  }
  return false;
}

//This is the correct way to compare variables in PHP to avoid type juggling.
$a = 0;
$b = '0';
var_dump(foo($a,$b)); // bool(false)

$a = 0;
$b = 0;
var_dump(foo($a,$b)); // bool(true)

$a = '0';
$b = '0';
var_dump(foo($a,$b)); // bool(true) 