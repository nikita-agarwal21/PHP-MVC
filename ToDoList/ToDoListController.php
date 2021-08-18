<?php
    
require_once 'TodoList.php';
require_once 'TodolistDao.php';
require_once 'DatabaseUtilities.php';
require_once 'TodolistDaoImpl.php';

   
     
     if ( isset($_POST['task']) )
     {
          $task = $_POST['task'];

          $todolistDao = new ToDoListDaoImpl();
          
          
              $task = $todolistDao->add($task);
        
              $lists=$todolistDao->update();
         
         
          $_POST['lists'] = $lists;

          
     }
     include 'ToDoListMVC.php';
?>