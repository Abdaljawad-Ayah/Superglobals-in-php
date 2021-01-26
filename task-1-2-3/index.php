<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


  <title>Document</title>

</head>

<!-- First Task -->

<!-- <p>first task</p> -->
<!-- <body>
  <!-- <?php if (isset($_POST['form_submitted'])): ?>
  <h2>Beautiful <?php echo $_POST['fname']; ?> </h2>

  <p>You Are In
    <?php echo $_POST['fname'] . ' ' . $_POST['pwd']; ?>
  </p>

  <p>Go <a href="/index.php">back</a> to the form</p>

  <?php else: ?>

  <form class="form-horizontal" action="index.php" method="POST">

    <div class="col-sm-10">
      Email: <input type="text" class="form-control" name="fname">
    </div>



    <div class="col-sm-10">
      Password: <input type="password" class="form-control" name="pwd">
    </div>




    <input type="hidden" name="form_submitted" value="1">

    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </form>
  <?php endif; ?> -->





</body>

<!-- <p>Second task</p> -->

<body>
  <!-- <?php if(isset($_GET['form_submitted'])):?>
  <h2>Search Results For <?php echo $_GET['Search']; ?></h2>
  <?php if ($_GET['Search'] == "GET"): ?>

  <p>The GET method displays its values in the URL</p>

  <?php else:?>
  <p>No match found</p>
  <?php endif;?>
  <p>Go <a href="/index.php">back</a> to the form</p>
  <?php else: ?>
  <h2>Simple Search Engine - Type in GET </h2>
  <form class="form-horizontal" action="index.php" method="GET">

    <div class="col-sm-10">
      Search: <input type="text" class="form-control" name="Search">
    </div>

    <input type="hidden" name="form_submitted" value="1">

    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-dark">Go</button>
    </div>

  </form>
  <?php endif;?> -->







  <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script> -->
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <!-- <p>Third task</p> -->

  <!-- <form method="post" class="col-sm-10">
    <div class="form-group">
      <label for="exampleFormControlInput1"></label>
      Enter Number A <input type="number" name="A" class="form-control" id="exampleFormControlInput1"
        placeholder="Number" />
    </div>

    <div class="form-group">
      <label for="exampleFormControlInput1"></label>
      Enter Number B<input type="number" name="B" class="form-control" id="exampleFormControlInput1"
        placeholder="Number" />
    </div> <br>
    <select name="operator" class="col-sm-offset-2 col-sm-10 btn btn-dark">
      <option>+</option>
      <option>-</option>
      <option>/</option>
      <option>*</option>
    </select>
    <br> <br>
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="cal" value="=" class="btn btn-dark">=</button>
    </div>
    <br>

    <?php 
  if(isset($_POST['cal'])){
    $A = $_POST['A'];
    $B = $_POST['B'];
    if($_POST['operator']=='+')
    echo $A + $B;
    elseif ($_POST['operator']=='-')
    echo $A - $B;
    elseif ($_POST['operator']=='/')
    echo $A / $B;
    elseif ($_POST['operator']=='*')
    echo $A * $B;
   
  }
?>

  </form> -->
</body>

</html>