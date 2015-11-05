<?php

echo 'This is simple string\n' . "\n";

echo "This is double quoted string\n";

echo <<<DOC
This is some heredoc\n
DOC;

$somevar = 'shit';
echo <<<'DOC'
This is some nowdoc\n
DOC;


class SomeClass {
  private $some = <<<DOC
Can I do that?
DOC;
}
