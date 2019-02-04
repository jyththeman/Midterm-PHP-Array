<!DOCTYPE html>
<html>
<body>

    
<?php  
    $ppl = array(
        "Peter"=>"35",
        "Ben"=>"37",
        "Joe"=>"43",
    );
    asort($ppl);
    foreach($ppl as $name => $age){
        echo "Key=$name, value=$age"."<br>";
    }
    
?>  
</body>
</html>