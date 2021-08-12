<?php
$list = json_decode(file_get_contents("invites.json"));
for($i = 0;$i < count($list);$i++){
    echo '<p class="lista">'. $list[$i]->name."  TEMPLO: ".$list[$i]->templo." FIESTA: ".$list[$i]->fiesta."</p>";
}
?>
<style>
    .lista:nth-child(odd){
        background:#ced4da;
        margin:0px;
        padding:10px;
    }
    
</style>