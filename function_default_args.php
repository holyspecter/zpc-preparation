<?php

function someFunc($a, $b = null, $c) {
  echo "Nothing!\n";
}

someFunc(1, 2, 3); // produces PHP Warning:  Missing argument 3 for someFunc()
// someFunc(1, 2, 3); // works fine
