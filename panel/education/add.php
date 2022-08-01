<?php

use APP\View\Panel\Header;

require("../view/Header.php");

Header::init("Add Education");
?>
<div class="container">
<form method="post" action="../../env/education/add_education.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">University Title</label>
    <input type="text" name="University" class="form-control" id="exampleInputEmail1" maxlength="100" minlength="3">
</div>

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Start Date</label>
    <input type="date" name="Start" class="form-control" id="exampleInputEmail1" >
</div>

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">End Date</label>
    <input type="date" name="End" class="form-control" id="exampleInputEmail1" >
</div>

  
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Summary</label>
    <textarea name="Summary" class="form-control" id="exampleInputEmail1" rows="4" maxlength="250"> </textarea>
</div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>