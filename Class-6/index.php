<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Simple Calculator</title>
      <link rel="stylesheet" href="assets/style.css">
</head>
<body>
      <fieldset>
            <legend> Simple Calculator</legend>
            <form action="" method="post">
                  <label for="first_number">First Number:</label>
                  <input type="number" name="first_number" id="first_number">

                  <hr>

                  <label for="second_number">Second Number:</label>
                  <input type="number" name="second_number" id="second_number">

                  <hr>

                  <label for="operation">Select Operation:</label>
                  <select name="operation" id="operation">
                        <option value="">Select Value</option>
                        <option value="add">+</option>
                        <option value="min">-</option>
                        <option value="mul">*</option>
                        <option value="div">/</option>
                  </select>

                  <hr>

                  <button type="submit">Calculate</button>
            </form>
      </fieldset>
      <section>
            <div>
            <?php 
                  if($_SERVER['REQUEST_METHOD'] =='POST'){
                        $num1 = $_POST["first_number"];
                        $num2 = $_POST["second_number"];
                        $operate = $_POST["operation"];

                        // if($operate == 'add'){
                        //       $result = $num1 + $num2;
                        //       echo $result;
                        // }else if($operate == 'min'){
                        //       $result = $num1 - $num2;
                        //       echo $result;
                        // }else if($operate == 'mul'){
                        //       $result = $num1 * $num2;
                        //       echo $result;
                        // }else if($operate == 'div'){
                        //       $result = $num1 / $num2;
                        //       echo $result;
                        // }


                        switch($operate){
                              case "add":
                                    $result = $num1 + $num2;
                                          echo $result;
                                          break;
                                          case "min":
                                                $result = $num1 - $num2;
                                                echo $result;
                                                break;
                                                case "mul":
                                                      $result = $num1 * $num2;
                                                      echo $result;
                                                      break;
                                                      case "div":
                                                            $result = $num1 / $num2;
                                                            echo $result;
                                                            break;
                         }
                  }
            ?>
            </div>
      </section>

</body>
</html>