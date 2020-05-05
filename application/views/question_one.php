<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Play Trivia Quiz</title>

</head>
<body>

<div id="container">
	<h1>Play the Quiz!</h1>
    
    <form method="post" action="<?php echo base_url();?>index.php/Questions/question_second">
    <p><?=$que_Id?>.<?=$question?></p>
    
    <input type="text" name="quesid_<?=$que_Id?>" required><br>
    <br><br>
    <input type="submit" value="Submit!">
    
    </form>
    
</div>

</body>
</html>