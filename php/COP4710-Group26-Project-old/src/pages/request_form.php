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
  <label for="Book Title">Name:</label>
  <input type="text" title="title" required value="John Doe"/> 
 
<form id="orderform" method="post" target="_self">
  <label for="Authors Names">Name:</label>
  <input type="text" name="name" required value="John Doe"/>

<form id="orderform" method="post" target="_self">
  <label for="Edition">Name:</label>
  <input type="text" edition="edition" required value="John Doe"/>
 
<form id="orderform" method="post" target="_self">
  <label for="Publisher">Name:</label>
  <input type="text" publisher="publisher" required value="John Doe"/>  

<form id="orderform" method="post" target="_self">
  <label for="ISBN">Name:</label>
  <input type="text" isbn="isbn" required value="John Doe"/> 

  <label for="qty">Quantity Needed:</label>
  <input type="number" name="qty" required value="1"/> 
 
  <input type="submit" value="Place Order"/>
</form>