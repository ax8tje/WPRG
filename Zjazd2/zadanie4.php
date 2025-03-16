<?php
$result="";
class calculator{
    var $a;
    var $b;
    function checkOperation($operator){
        switch ($operator) {
            case '+':
                return $this->a + $this->b;
                break;
            case '-':
                return $this->a - $this->b;
                break;
            case '*':
                return $this->a * $this->b;
                break;
            case '/':
                return $this->a / $this->b;
        }
    }
    function getResult($a,$b,$c){
        $this->a = $a;
        $this->b = $b;
        return $this->checkOperation($c);
    }
}
$calculator = new calculator();
if(isset($_POST['submit'])){
    $result= $calculator->getResult($_POST['n1'],$_POST['n2'],$_POST['n3']);
}
?>
<head>
    <meta charset="utf-8">
</head>
<body>
<form method="post">
    <table align="center">
        <tr>
            <td><strong><?php echo $result?></strong></td>
        </tr>
        <tr>
            <td>Enter 1st number: </td>
            <td><input type="text" name="n1"></td>
        </tr>
        <tr>
            <td>Enter 2nd number: </td>
            <td><input type="text" name="n2"></td>
        </tr>
        <tr>
            <td>Select Option</td>
            <td>
                <select name="op">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="     =     "></td>
        </tr>
    </table>
</form>
</body>

