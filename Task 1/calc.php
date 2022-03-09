<?php

if(isset($_POST['calc']))
 {
    if($op=$_POST['op']){;
    if($firstNumber=$_POST['num1']){;
    if($secondNumber=$_POST['num2']){;
     switch($op)
        {
        case '+':
           $result = (($firstNumber + $secondNumber));
            break;
        case '-':
            $result = (($firstNumber - $secondNumber));
            break;
         case '*':
            $result = (($firstNumber * $secondNumber));
            break;

        case '/':
            $result = (($firstNumber / $secondNumber));
            break;
        case '%':
            $result = (($firstNumber % $secondNumber));
            break;
        case '**':
            $result = (($firstNumber ** $secondNumber));
            break;

        default:
          echo("invalid operator");
        }
        }
        }
    }
} 
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Calculator</title>
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
                  Calculator
              </div>
              <div class="col-4 offset-4 mt-3">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="Number 1">Number 1</label>
                          <input type="Number" name="num1" id="num1" class="form-control"  aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="Number 2">Number 2</label>
                          <input type="number" name="num2" id="num2" class="form-control"  aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="operator">Operator</label>
                            <select name="op" class="form-control" id="op">
                                <option value="+">+</option>
                                <option value="-">-</option>
                                <option value="*">*</option>
                                <option value="/">/</option>
                                <option value="%">%</option>
                                <option value="**">**</option>

                            </select>
                        </div>
                        <?php if(isset($result))
                        {
                            echo"Operation Is: $result";
                        }?>
                        <div class="form-group">
                        <button class="btn btn-outline-primary"  name="calc" value="Calc">Calculator</button>
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