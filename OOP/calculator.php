<?php




class Calculator{
    var $operand1;
    var $operand2;
    var $res;
    var $operation;

    function __construct($operand1,$operand2,$operation){
        $this->operand1 = $operand1;
        $this->operand2 = $operand2;
        $this->operation = $operation;
    }

    function calculate(){
        
        switch($this->operation) {
            case "+":
                $this->res = $this->operand1 + $this->operand2; 
                
                break;

            case '-':
                $this->res = $this->operand1 - $this->operand2; 
                 
                break;

            case '*':
                $this->res = $this->operand1 * $this->operand2; 
                
                break;

            case '/':
                $this->res = $this->operand1 / $this->operand2; 
                 
                break;    

            default:
           
               
               echo 'Unknown operator';
               break;
        }

    }
  
}

if(isset($_POST['submit'])){

    $num1 = $_POST['no1'];
    $num2 = $_POST['no2'];
    $operation = $_POST['calculate'];
    
    $calc = new Calculator($num1,$num2,$operation);

    $calc->calculate();

    echo $calc->res;

}
else{
    print_r($_POST);
}




?>

<html>
 <head><title>Calculator</title></head>
 <body>
 <form method="post" action="<?php $_PHP_SELF?>">
 Number 1 <input type="number" name="no1" value=""><br><br>
 Number 2 <input type="number" name="no2" value=""><br><br>
 <input type="radio" name="calculate" value="+">Add
 <input type="radio" name="calculate" value="-">Subtract
 <input type="radio" name="calculate" value="*">Multiply
 <input type="radio" name="calculate" value="/">Division<br><br>
 <input type="submit" name="submit" value="Calculate">
 </form>
 
 </body>
</html>