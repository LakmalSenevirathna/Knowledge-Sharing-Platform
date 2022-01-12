<?php

$sql = "SELECT indexno, stdname FROM student";
$result = mysqli_query($conn, $sql) or dei ("error");

if(mysqli_num_rows($result) > 0){
    while($posts = mysqli_fetch_assoc($result)){
        $index = $posts['indexno'];
        $stdname = $posts['stdname'];

        ?>
        <option value="<?php echo $index;?>"> <?php echo $index;?> - <?php echo $stdname;?> </option>

        <?php

    }
}

?>


<select name="per1" id="per1">
  <option selected="selected">Choose one</option>
  <?php
    foreach($names as $name) { ?>
      <option value="<?= $name['name'] ?>"><?= $name['name'] ?></option>
  <?php
    } ?>
</select> 