<?php echo "======Task Four======"?>


<?php

$errors = "";
  $db = mysqli_connect('localhost', 'root','' , 'todo');

  if(isset($_POST['submit'])){
    $task = $_POST['task'];
    if (empty($task)){
       $errors = "you must fill in this task";
    }else{
      mysqli_query($db,"INSERT INTO tasks (task) VALUES('$task)");
      header('location: index.php');
    
    }
  }
  if(isset($_GET['del_task'])){
    $id = $_GET['del_task'];
    mysqli_query($db, "DELETE FROM tasks WHERE id=$id");
    header('location: index.php');
  }

  $tasks = mysqli_query($db, "SELECT * FROM tasks");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Todo</title>
</head>

<body>
  <div class="heading">
    <h2>Todo</h2>
  </div>


  <form method="POST" action="index.php">
    <?php if (isset($errors)) {?>
    <p><?php echo $errors ;?></p>
    <?php }?>
    <input type="text" name="task" class="task_input">
    <button type="submit" class="add_btn" name="submit">Add Task</button>
  </form>

  <table>
    <thead>
      <tr>
        <th>N</th>
        <th>Task</th>
        <th>Action</th>
      </tr>
    </thead>

    <tbody>
      <?php $i = 1; while ($row = mysqli_fetch_array($tasks)){ ?>
      <tr>
        <td><?php echo $i ?></td>
        <td class="task"><?php echo $row['task']; ?></td>
        <td class="delete">
          <a href="index.php?del_task=<?php echo $row['id'];?>">x</a>
        </td>
      </tr>

      <?php $i++; } ?>
    </tbody>
  </table>
  <br> <br>
  <?php echo "======Task Five======"?>
  <!-- Script name -->
  <?php
     echo '<pre>';
     print_r($_SERVER['SCRIPT_NAME'])
  ?>

  <!-- Project name -->
  <?php
$current_file_name = basename($_SERVER['PHP_SELF']);
echo $current_file_name."\n";

?>

  <br> <br>
  <?php echo "======Task Six======"?>

  <?php
     echo '<pre>';
     print_r($_SERVER);
  ?>
  <br> <br>
  <?php echo "======Task Nine======"?>

  <?php
// in order for this to workout try to go the same page in a different tab then return to the first page you would see athat the array is working.

// first way 

// setcookie("user_name", "John", time() +60,'/','http://localhost/superGlobals/taskFour/index.php', false ,false);
// echo'the cookie has been set for 60 sec';

// setcookie("user_name", "John", time() - 360,'/','http://localhost/superGlobals/taskFour/index.php');
  
    
  // this is retrieving
  
  // print_r($_COOKIE); 
  // echo '<pre>';

  // second way 

  $cookie_name = "index_cookie";
  $cookie_value = "test_cookie";
  setcookie($cookie_name, $cookie_value, time() + (86400 *30), '/');
  
  $cookie_name= "http";
  if(!isset($_COOKIE['$cookie_name'])){
    print 'Cookie with name "'. $cookie_name . '"  does not exist...';
  }else{
    print 'Cookie with name "' . $cookie_name . '" value is: ' . $_COOKIE[$cookie_name];
  }

  $cookie_name = 'index_cookie';
$cookie_value = 'test_cookie_updated';
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), '/');
?>
</body>

</html>