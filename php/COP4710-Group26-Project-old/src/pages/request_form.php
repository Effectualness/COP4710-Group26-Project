\<?php
// (A) PROCESS ORDER FORM FOR BOOKS
if (isset($_POST["name"])) {
  require "3-process.php"; 
  echo $result == "" 
    ? "<div class='notify'>Thank You! We have received your order</div>" 
    : "<div class='notify'>$result</div>" ;
}
?>
 
<!-- (B) ORDER FORM -->
<form id="orderform" method="post" target="_self">
  <label for="Book Title">Book Title:</label>
  <input type="text" title="title" required value="Moby Dick"/> 
 
<form id="orderform" method="post" target="_self">
  <label for="Authors Names">Authors Names:</label>
  <input type="text" name="name" required value="John Doe"/>

<form id="orderform" method="post" target="_self">
  <label for="Edition">Edition:</label>
  <input type="text" edition="edition" required value="1st"/>
 
<form id="orderform" method="post" target="_self">
  <label for="Publisher">Publisher:</label>
  <input type="text" publisher="publisher" required value="Salvatore"/>  

<form id="orderform" method="post" target="_self">
  <label for="ISBN">ISBN:</label>
  <input type="text" isbn="isbn" required value="12345"/> 

  <label for="qty">Quantity Needed:</label>
  <input type="number" name="qty" required value="1"/> 
 
  <input type="submit" value="Place Order"/>
</form>
