<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Play Trivia Quiz</title>

</head>
<body>

<div id="container">
	<h1>Play the Quiz!</h1>
    
    <form method="post" action="<?php echo base_url();?>index.php/Questions/summary">
    <p><?=$que_Id?>.<?=$question?> Select all</p>
    <input type="hidden" name="quesid_1" value="<?=$quesid_1 ?>">
    <input type="hidden" name="quesid_2" value="<?=$quesid_2 ?>">

    <input type="checkbox" name="quesid[]" value="White"> White <br>
    <input type="checkbox" name="quesid[]" value="Yellow">  Yellow <br>
    <input type="checkbox" name="quesid[]" value="Orange"> Orange <br>
    <input type="checkbox" name="quesid[]" value="Green"> Green <br>
    
    <br> Select more than 1 <br>
    <input type="submit" name="Next" value="Next">
    
    </form>
    
</div>

</body>
</html>