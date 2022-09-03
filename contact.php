<?php
home();
?>
<h1>Contacts</h1>

<form method="POST" action="action">
    <p>Name</p>
    <input type="text" name="username"/>
    <p>Phone</p>
    <input type="tel" name="usertel"/>
    <p>Adress</p>
    <input rows="2" maxlength="max" name="adress"></textarea>
    <br/>
    <button name="button">Send</button>
</form>