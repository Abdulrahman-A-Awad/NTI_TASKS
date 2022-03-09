<?php

if(isset($_POST['result']))
 {
  if($ph=$_POST['phy']){;
  if($ch=$_POST['chem']){;
  if($bi=$_POST['bio']){;
  if($mt=$_POST['maths']){;
  if($co=$_POST['com']){;
  $total=0;
  $per=0;
  $total = $ph + $ch + $bi + $mt + $co;
  $per=($ph+$ch+$bi+$mt+$co)/5; 
  $result_mark = "The Total Marks Is: $total <br>";
  $result_per = "Percentage Student Is: $per % </br>";
  if($per>=90)
  {
   $per=1;
  }
  else if($per>=80)
  {
   $per=2;
  }
  else if($per>=70)
  {
   $per=3;
  }
  else if($per>=60)
  {
   $per=4;
  }
  else if($per>=40)
  {
   $per=5;
  }
  else
  {
   $per=6;
  }
  
  switch($per)
  {
   case 1:
   $result_gr = "Grade : A";
   break;

   case 2:
    $result_gr = "Grade : B";
   break;

   case 3:
    $result_gr = "Grade : C";
   break;
   
   case 4:
    $result_gr = "Grade : D";
   break;
   
   case 5:
    $result_gr = "Grade : E";
   break;
   
   default:
   $result_gr = "Fail!!";
  }
  }
  }
  }
   }
   
}
 }

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Grade Student</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
          <div class="row ">
              <div class="col-12 mt-4 text-center text-primary font-weight-bold h3">
                Grade Students
              </div>
              <div class="col-4 offset-4 mt-3">
                  
                    <form action="" method="post">
                        <div class="form-group">
                        <input type="number" name="phy" id="phy" class="form-control" placeholder="Physics" aria-describedby="helpId">
                        <input type="number" name="chem" id="chem" class="form-control mt-3" placeholder="Chemistry" aria-describedby="helpId">
                        <input type="number" name="bio" id="bio" class="form-control mt-3" placeholder="Biology" aria-describedby="helpId">
                        <input type="number" name="maths" id="maths" class="form-control mt-3" placeholder="Mathematics" aria-describedby="helpId">
                        <input type="number" name="com" id="com" class="form-control mt-3" placeholder="Computer" aria-describedby="helpId">
                        </div>
                        <?php
                          if(isset($result_mark))
                          {
                            echo $result_mark;
                          } 
                          if(isset($result_per))
                          {
                            echo $result_per;
                          } 
                          if(isset($result_gr))
                          {
                            echo $result_gr;
                          } 
                        ?>
                        <div class="form-group">
                           <button class="btn btn-outline-primary"  name="result" value="Result Grade">Check Please</button>
                        </div>
                    </form>
              </div>
          </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>