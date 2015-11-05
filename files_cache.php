<?php

while (! is_executable('some.txt')) {
	echo "File is not executable\n";
	sleep(2);
}

echo "File is executable.";
