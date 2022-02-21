<?php
      session_start();
      $toggle=0;
      
      
     
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST['click']=="ADD")
        {   
           
          add();
          header("Location: todo.php");
        }
        else if($_POST['click']=="delete")
        {
            
           delete();
           header("Location: todo.php");
           
        }
        else if($_POST['click']=="edit")
        {
          
          
          
          header("Location: edit.php");
     
        }
        else if($_POST['click']=="update")
        {  
           update($_POST["tasknameOriginal"],$_POST["name"]);
           header("Location: todo.php");
  
        }


        else
        {
        
        }
        
        
    
      }


function add()
{

  $_SESSION['data'][]=$_POST['name'];
   
}
function delete()
{

    $_tominus=$_POST['taskname'];
    foreach($_SESSION['data'] as $key=>$data)
    {

        
          
        if($data==$_tominus)
        {

            array_splice($_SESSION['data'],$key,1);
            break;
    
        }
    }
 
  
  
}

function update($tasknameOriginal,$name )
{
  
  foreach($_SESSION['data'] as $key=>$data)
  {

      
        
      if($data==$tasknameOriginal)
      {

        $_SESSION['data'][$key]=$name;
          break;
  
      }
  }
  
}