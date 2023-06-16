<<<<<<< HEAD
<?php 
function dd($in)
{
    echo('<pre>');
    var_dump($in);
    die;
=======
<?php 
function dd($in)
{
    echo('<pre>');
    var_dump($in);
    die;
}
function urlIs($value)
{
    return $_SERVER['REQUEST_URI']==$value;
>>>>>>> 1b62c82 (new changes 2)
}