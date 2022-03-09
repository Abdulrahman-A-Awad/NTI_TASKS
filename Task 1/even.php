<?php
if(isset($_POST['num']))
{
  if($number = $_POST['number']){;
  if($number%2 == 0)
    {
    $result = " $number is a Even number ";
    }
  else
    {
    $result =" $number is an Odd number ";
    }
  }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Even Or Odd</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
          <div class="row ">
              <div class="col-12 mt-5 text-center text-primary font-weight-bold h3">
                ODD OR EVEN
              </div>
              <div class="col-4 offset-4 mt-3">
                  
                    <form action="" method="post">
                        <div class="form-group">
                          <input type="number" name="number" id="number" class="form-control" placeholder="Enter Your Number To Check" aria-describedby="helpId">
                          <!-- <input type="number" name="phone" id="ID" class="form-control" placeholder="Enter You Phone" aria-describedby="helpId"> -->
                        </div>
                          <?php if(isset($result)){
                            echo $result;
                          }?>
                        <div class="form-group">
                           <button class="btn btn-outline-primary"  name="num" value="Check Please">Check Please</button>
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