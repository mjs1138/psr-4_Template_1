<?php
require_once __DIR__ . '/app/bootstrap.php';

use ClassSrcFolder_TopLevelNamespace\Boogie as Boogie;
use ClassSrcFolder_TopLevelNamespace\BoogieBoogie;

use ClassSrcFolder_TopLevelNamespace\Database;

$boogie = new Boogie();

$boogieBoogie = new BoogieBoogie();

$database = new Database();

$a=1;

$database->query('INSERT INTO mytable (FName, LName, Age, Gender) VALUES (:fname, :lname, :age, :gender)');

$database->bind(':fname', 'John');
$database->bind(':lname', 'Smith');
$database->bind(':age', '24');
$database->bind(':gender', 'male');

$database->execute();

echo $database->lastInsertId();