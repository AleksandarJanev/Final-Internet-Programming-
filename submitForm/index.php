<section class="signup-form">

    <h2>Sign Up</h2>
    <div class="signup-form-form">
    <form action="submit.inc.php" method="post">
        
        <input type="text" name="name" placeholder="Name">
        <br>
        <br>
        <input type="text" name="username" placeholder="Username">
        <br>
        <br>
        <input type="text" name="city" placeholder="City">
        <br>
        <br>
        <input type="text" name="pwd" placeholder="Password">
        <br>
        <br>
        <select name="tuser">
        <option value="basic">basic</option>
        <option value="premium">premium</option>
        <option value="free">free</option>
        </select>
        <input type="checkbox" id="chckbox" name="chckbox" value="useragrees">
        <label for="tuser">User Agreement</label><br>
        <br>
        <br>
        <button type="submit" name="submit">Submit</button>
    </form>
    </div>


<?php

if(isset($_GET["error"])){
    if ($_GET["error"] == "none"){
        echo "<p> You have successfully submitted!</p>";
    }else if ($_GET["error"] == "emptyinput"){
        echo "<p> Fill in all the fields</p>";
    }
}
