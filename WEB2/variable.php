<!DOCTYPE html>
<html>
    <body>
        <h1>Variables</h1>

        <?php
        $name = "egoing";
        echo "Lorem ipsum is placeholder text ".$name.
        "commonly used in the graphic, 
        print, and publishing industries 
        for previewing layouts and visual mockups. by ".$name;
        
        class foo{
            var $bar = 'I am bar';
            var $arr = array('I am A.','I am B.', 'I am C');
            var $r = 'I am r.';
        }

        $foo = new foo();
        $bar = 'bar';
        $baz = array('foo','bar','baz','quux');
        ehco $foo -> $bar."\n";
        ech $foo -> {$baz[1]}."\n";

        $start = 'b';
        $end = 'ar';
        echo $foo -> {$start.$end}."\n";

        $arr = 'arr';
        echo $foo -> {$arr[1]}."\n";
        ?>

    </body>
</html>