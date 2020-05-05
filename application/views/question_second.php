<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Play Trivia Quiz</title>

</head>
<body>

<div id="container">
	<h1>Play the Quiz!</h1>
    
    <form method="post" action="<?php echo base_url();?>index.php/Questions/question_third">
    <p><?=$que_Id?>.<?=$question?></p>
    <input type="hidden" name="quesid_1" value="<?=$quesid_1 ?>">

    <input type="radio" name="quesid_<?=$que_Id?>" value="Sachin Tendulkar"> Sachin Tendulkar <br>
    <input type="radio" name="quesid_<?=$que_Id?>" value="Virat Kolli">  Virat Kolli <br>
    <input type="radio" name="quesid_<?=$que_Id?>" value="Adam Gilchirst"> Adam Gilchirst <br>
    <input type="radio" name="quesid_<?=$que_Id?>" value="Jacques Kallis"> Jacques Kallis <br>
    
    <br><br>
    <input type="submit" value="Submit!">
    
    </form>
    
</div>

</body>
</html>