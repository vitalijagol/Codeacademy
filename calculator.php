 
 
 <form method="post">
      <input type="text" name="number1">
      <input type="text" name="number2">
      <select name="operator" id="">
        <option>None</option>
        <option>Add</option>
        <option>Substract</option>
        <option>Multiply</option>
        <option>Divide</option>
        <option>Square</option>
      </select>
      <button type="submit" name="submit" value="submit">Calculate</button>
    </form>


<?php

switch ($_POST["operator"]) {
    case "Add": echo $_POST["number1"] + $_POST["number2"];
    break; 
    case "Substract": echo $_POST["number1"] - $_POST["number2"];
    break;
    case "Multiply": echo $_POST["number1"] * $_POST["number2"];
    break;
    case "Divide": echo $_POST["number1"] / $_POST["number2"];
    break;
    case "Square": echo $_POST["number1"] ** 2; 
}




?>
