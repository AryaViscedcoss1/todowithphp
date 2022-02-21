<?php session_start()?>
<?php

$_SESSION['data'];
$toggle=0;
$_SESSION['incompleted'];
//Array ( [taskname] => ghjghj [click] => edit )

?>
<html>
    <head>
        <title>TODO List</title>
        <link href="style.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <h2>TODO LIST</h2>
            <h3><?php echo $_POST['taskname']?></h3>
            <p>
            <?php
            
                echo '
                <form action="function.php" method="post">
                <input type="hidden" id="task" name="tasknameOriginal" value="'.$_POST["taskname"].'">
              <input type="text" id="update-task" name="name">
              <input type="submit" name="click" value="update" >
              </form>'
            ?>
           
            </p>
    
            <h3>Todo</h3>
            <ul id="incomplete-tasks">
            <?php 
            /*
            foreach($_SESSION['data'] as $key=>$value)
            {?>
            <li>
            <form action="edit.php" method="post">
            <input type="checkbox" name="check" value='1' ><label><?php echo $value ?></label><input type="text" name="taskname" value="<?php echo $value ?>" style="display:none"><input name="click" class="edit button" value="edit" type="submit">
            </form>
            <form action="function.php" method="post">
            <input type="text" name="taskname" value="<?php echo $value ?>" style="display:none"><input  class="delete button" name="click" value="delete" type="submit">
            </form>
            </li>
            
            <?php }
            */
            ?>

            </ul>
    
            <h3>Completed</h3>
            <ul id="completed-tasks">
                <li><input type="checkbox" checked><label>See the Doctor</label><input type="text"><button class="edit">Edit</button><button class="delete">Delete</button></li>
            </ul>
        </div>
        
    
    </body>
</html>