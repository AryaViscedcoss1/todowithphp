<?php session_start()?>
<?php include 'function.php';

$_SESSION['data'];
$_SESSION['incompleted'];

$heading="ADD ITEM";

?>
<html>
    <head>
        <title>TODO List</title>
        <link href="style.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <h2>TODO LIST</h2>
            <h3><?php echo "ADD Item" ?></h3>
            <p>
            <?php
            
            
              echo ' <form action="function.php" method="post">
              <input type="text" id="new-task" name="name">
              <input type="submit" name="click"value="ADD" >
              </form>';
            
            
            ?>
           
            </p>
    
            <h3>Todo</h3>
            <ul id="incomplete-tasks">
            <?php 
            foreach($_SESSION['data'] as $key=>$value)
            {?>
            <li>
            <form action="function.php" method="post">
            <input type="checkbox" type="submit" name="click" value='1' ><input type="text" name="taskname" value="<?php echo $value ?>" style="display:none">
            </form>
            <form action="edit.php" method="post">
            <label><?php echo $value ?></label><input type="text" name="taskname" value="<?php echo $value ?>" style="display:none"><input name="click" class="edit button" value="edit" type="submit">
            </form>
            <form action="function.php" method="post">
            <input type="text" name="taskname" value="<?php echo $value ?>" style="display:none"><input  class="delete button" name="click" value="delete" type="submit">
            </form>
            </li>
            
            <?php }
            ?>

            </ul>
    
            <h3>Completed</h3>
            <ul id="completed-tasks">
            <?/*
            foreach($_SESSION['incompleted'] as $key=>$value)
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
            
            */?>
            </ul>
        </div>
        
    
    </body>
</html>