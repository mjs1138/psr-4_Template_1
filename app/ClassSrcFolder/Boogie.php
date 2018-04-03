<?php namespace ClassSrcFolder_TopLevelNamespace; //This is the alias defined in composer.json

class Boogie
{
    public function __construct()
    {
        $className = __CLASS__;
        $nameSpace = __NAMESPACE__;
        $functionName = __FUNCTION__;
        $dirName = __DIR__;
        echo('I am the function: <i>' . $functionName . '</i><br>');
        echo('I am in class: <i>' . $className . '</i><br>');
        echo('Which is in the Namespace: <i>' . $nameSpace . '</i><br>');
        echo('I live in the directory: <i>' .  $dirName  . '</i><br>');
        echo('My job is to say: <strong>Boogie</strong><br>');
        echo('<br><br>');
    }
}