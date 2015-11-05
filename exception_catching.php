<?php

class MyException extends \Exception
{
}

try {
  throw new MyException("My Exception");
} catch (\Exception $e) {
  echo "first catch\n";
  throw $e;
} catch (MyException $e) {
  echo "second catch\n";
  throw $e;
} catch (\Exception $e) {
  echo "third catch\n";
}
