
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Questions | Online Quiz System</title>
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
							<center><h4 style="font-family: Noto Sans;">Start the quiz</h4></center><br>
							<form action="result.php" method="post">
                                
                                <p>1- Who invented OOP?</p>
                                <input type="radio" name="one" value="A">
                                  <label for="html">Andrea Ferro</label><br>
                                <input type="radio" name="one" value="B">
                                  <label for="css"> Adele Goldberg</label><br>
                                <input type="radio" name="one" value="C">
                                  <label for="javascript"> Alan Kay</label>
                                
                                <br>  
                                
                                <p>2- Which is not a feature of OOP in general definitions?</p>
                                <input type="radio" name="two" value="A">
                                <label for="age1"> Efficient Code</label><br>
                                <input type="radio" name="two" value="B">
                                <label for="age2">Duplicate/Redundant data</label><br>  
                                <input type="radio" name="two" value="C">
                                <label for="age3">Code reusability</label><br><br>
                            </div>
                            <p>3- Which was the first purely object oriented programming language developed?</p>
                            <input type="radio" name="three" value="A">
                            <label for="age1"> SmallTalk</label><br>
                            <input type="radio" name="three" value="B">
                            <label for="age2"> Kotlin</label><br>  
                            <input type="radio" name="three" value="C">
                            <label for="age3">C++</label><br><br>
                          
                            <p>4- When OOP concept did first came into picture?</p>
                            <input type="radio" name="four" value="A">
                            <label for="age1">1995</label><br>
                            <input type="radio" name="four" value="B">
                            <label for="age2">1970’s</label><br>  
                            <input type="radio" name="four" value="C">
                            <label for="age3"> 1980’s</label><br><br>
                          
                            <p>5- Which feature of OOP indicates code reusability?</p>
                            <input type="radio" name="five" value="A">
                            <label for="age1"> Encapsulation</label><br>
                            <input type="radio" name="five" value="B">
                            <label for="age2">Abstraction</label><br>  
                            <input type="radio" name="five" value="C">
                            <label for="age3">Inheritance</label><br><br>
                          
                            <p>6- Which header file is required in C++ to use OOP?</p>
                            <input type="radio" name="six" value="A">
                            <label for="age1">OOP can be used without using any header file</label><br>
                            <input type="radio" name="six" value="B">
                            <label for="age2">iostream.h</label><br>  
                            <input type="radio" name="six" value="C">
                            <label for="age3">stdio.h</label><br><br>
                          
                          
                            <div class="form-group text-right">
									<button class="btn btn-primary btn-block" name="submit">Submit</button>
								</div>
                          </form>
					</div>
				</div>
			</div>
		</section>
	</body>
</html>