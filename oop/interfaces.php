<pre>

<?php
interface CrudApp
{

    function create();
    function read();
    function update();
    function delete();
}


class User implements CrudApp
{

    function update()
    {
        echo "Update";
    }
    function read()
    {

        echo "Read";
    }
    function create()
    {

        echo "create";
    }
    function delete()
    {


        echo "delete";
    }


    static function show()
    {
        echo "show";
    }
}



//className :: method()/property
User :: show();




?>


</pre>