<?php
$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];
function pfun($array,$value)
{
  $filtereda = array_filter($array);
  $randoma = array_rand($filtereda,$value);
  $result = array_map(function ($i) use ($filtereda){
    return $filtereda[$i];
  }, $randoma);
  return $result;
}

echo "<pre>";
print_r(pfun($planets, 2));
print_r(pfun($planets, 3));
print_r(pfun($planets, 2));
print_r(pfun($planets, 4));
print_r(pfun($planets, 5));
?>