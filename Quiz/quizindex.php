<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>PHP Quiz</title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<style>
.button {
  background-color: #f4511e;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 0.6;
  transition: 0.3s;
  display: inline-block;
  text-decoration: none;
  cursor: pointer;
  margin-left: 40%;

}

.button:hover {opacity: 1}

body				{ 

font-family:Arial, Sans-Serif;
background-image: url('data:image/jpeg;base64,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');
background-repeat: no-repeat;
background-size: cover ;
background-position: center;
position: relative;

}
</style>


<body>

	<div id="page-wrap">

		<h1> Quiz </h1>
		
		<form action="grade.php" method="post" id="quiz">
		
            <ol>
            
                <li>
                
                    <h3>CSS Stands for...</h3>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A">A) Computer Styled Sections </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B) Cascading Style Sheets</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C) Crazy Solid Shapes</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D) None of the above</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Internet Explorer 6 was released in...</h3>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A">A) 2001</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">B) 1998</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C">C) 2006</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D">D) 2003</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>SEO Stand for...</h3>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A">A) Secret Enterprise Organizations</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B">B) Special Endowment Opportunity</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C">C) Search Engine Optimization</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D">D) Seals End Olives</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>A 404 Error...</h3>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A">A) is an HTTP Status Code meaning Page Not Found</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">B) is a good excuse for a clever design</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C">C) should be monitored for in web analytics</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D">D) All of the above</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>who created this site?</h3>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A">A) Yajna & archana</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B">B) Khyathi & deepthi</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C">C) Prajna & nikhitha</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D">D) apeksha & rakshitha</label>
                    </div>
                
                </li>
            
            </ol>
            
            <input type="submit" class="button" value="Submit Quiz" />
		
		</form>
	
	</div>
	
	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	var pageTracker = _gat._getTracker("UA-68528-29");
	pageTracker._initData();
	pageTracker._trackPageview();
	</script>

</body>

</html>