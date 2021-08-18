<?php
  

  

 
   $lists = false;

 

   if ( isset($_POST['lists']))
   $lists= $_POST['lists'];
?>

<html>
  <head>
  </head>

   <body>
      <form name="ToDoListForm" method="POST" action="ToDoListController.php" >
         <br>
         <br>
       
        <label for='task'> task to be added:</label>
         <input type="text" id='task' name="task" required  />
         <br>
         <br>
         <input type="submit" value="add" />
         <br>
         <br>
         <?php 
           if ( $lists )
           {
              
         ?>
            <table border = "1">
            <tr><th>date</th><th>time</th><th>task</th></tr>
           <?php foreach ($lists as $list)
           {
           ?>

                <tr><td> <?php  $day=strtotime($list->getDate() ) ;echo date('d/m/y',$day);  ?></td>
              <td> <?php  $ti=strtotime($list->getTime()); echo  date("h:i:sa",$ti);?></td>
                <td> <?php echo $list->gettask(); ?></td>
                </tr>
           
             
        <?php
        }
    }

        ?>
         </table>
        
            </form>
   </body>
</html>