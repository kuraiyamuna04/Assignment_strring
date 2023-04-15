<?php
            
            $answer1 = $_POST['one'];
            $answer2 = $_POST['two'];
            $answer3 = $_POST['three'];
            $answer4 = $_POST['four'];
            $answer5 = $_POST['five'];
            $answer6 = $_POST['six'];

        
            $totalCorrect = 0;
            $totalwrong = 0;
            
            
            if ($answer1 == "C") { $totalCorrect++; } else {$totalwrong++ ;}
            if ($answer2 == "B") { $totalCorrect++; } else {$totalwrong++ ;}
            if ($answer3 == "A") { $totalCorrect++; } else {$totalwrong++ ;}
            if ($answer4 == "B") { $totalCorrect++; } else {$totalwrong++ ;}
            if ($answer5 == "C") { $totalCorrect++; } else {$totalwrong++ ;}
            if ($answer6 == "A") { $totalCorrect++; } else {$totalwrong++ ;}

            $marks = $totalCorrect*5;
            
            
        ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Result | Online Quiz System</title>
		<link rel="stylesheet" href="scripts/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" href="scripts/ionicons/css/ionicons.min.css">
		<link rel="stylesheet" href="css/form.css">
	</head>

	<body>
		<section class="login first grey">
			<div class="container">
				<div class="box-wrapper">				
					<div class="box box-border">
						<div class="box-body">
							<center><h4 style="font-family: Noto Sans;">Result</h4></center><br>
                            <hr>
                            <?php
                             echo "<div id='results'> Your $totalCorrect questions are correct</div>";
                             echo "<div id='results'>Your $totalwrong questions are wrong</div>";
                             echo "<div id='results'>Your got $marks/30 marks</div>";
                            ?>
                            <hr>
                            <center><h5 style="font-family: Noto Sans; color: red;">Thank You for attempting the quiz. We hope you like it</h5></center><br>
							
					</div>
				</div>
			</div>
		</section>
	</body>
</html>