
    <?php
    $id=$_GET['id'];
    echo"<script>
    if(confirm('Are you sure?')){
        location.href='1.5.php?id=".$id."';}
        else{
        location.href='wenzhangguanli.php';
     }</script>"
        ?>