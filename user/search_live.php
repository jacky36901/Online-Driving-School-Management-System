<?php
include("connection.php");
if(! empty($_POST["state_id"])) {
    $a=$_POST["state_id"];
    ?>


<div class="input-group stylish-input-group" id="city_list">
<input type="text" name="search" value="<?php echo $a:?>" class="form-control" placeholder="search.." onkeyup="showResult(this.value)">
    <span class="input-group-addon">
        <button type="submit" name="submit">
        <i class="fa fa-search" aria-hidden="true"></i></button>
    </span>
          
    <div id="livesearch"></div>
</div>
<?php
}
?>