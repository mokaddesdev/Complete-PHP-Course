<?php
/**
 * php output
 * 1. echo
 * 2. print
 */

echo 'Hello World!';
echo ( "Hello World!" );
print 'Hello World!';
print ( 'Hello World!' );

//! echo vs print echo => no return value but print => return value true(1) or false(0)
echo "1"; // valid
echo "1", "2"; // valid
//? echo("1", "2"); // invalid
print "2"; // valid
print("2"); // valid
//? print "2", "3"; //invalid
//? print("2","3"); // invalid