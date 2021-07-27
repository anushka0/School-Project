<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/script.js"></script>
    <link rel="stylesheet" href="css/styles1.css">
    <link rel="stylesheet" href="css/styles2.css">
    <title>Form</title>
</head>




<body id="bg">
    <div class="container">
        
        <div class="header">
            <div class="head" style="border: 1px solid red;height: 3%;">
                <div class="menu">
                    <ul>
                        <a href="index.html"><li>Home</li></a>
                        <a href="curriculam.html"><li>HS Curriculam</li></a>
                        <a href="form.html"><li>Admission Enquiry</li></a>
                        <a href="gallery.html"><li>Gallery</li></a>
                        <a href="contact.html"><li>Contact Us</li></a>
                    </ul>
                    <div class="login_ul">
                        <a href="login.php">LOGIN</a>|<a href="javascript:void(0)">SIGNUP</a>
                    </div>
                </div>
            </div>
        </div>
        

        <form id="msform">
            <!-- progressbar -->
            <ul id="progressbar">
            <li class="active"></li>
            <li></li>
            <li></li>
            </ul>
            <!-- fieldsets -->
            <fieldset id="1">
                <input type="text" name="email" placeholder="STUDENT NAME" />
                <input type="text" name="email" placeholder="RESIDENCE NUMBER" />
                <input type="text" name="email" placeholder="EMAIL ID" />
                <input type="text" name="email" placeholder="GUARDIAN NAME" />
                <input type="text" name="email" placeholder="CONTACT NUMBER" />
                <input type="button" name="next" class="next action-button" value="Next" />
            </fieldset>
            <fieldset id="2">
                <input type="text" name="email" placeholder="ADMISSION CLASS" />
                <input type="text" name="email" placeholder="AGE OF STUDENT" />
                <input type="text" name="email" placeholder="NURSERY/PREVIOUS SCHOOL NAME" />
                <input type="text" name="email" placeholder="CERTIFICATE OF COMPLETION(YES/NO)" /> 
                <input type="text" name="email" placeholder="ADDRESS OF STUDENT" />
                <input type="button" name="previous" class="previous action-button" value="Previous" />
                <input type="button" name="next" class="next action-button" value="Next" />
            </fieldset>
            <fieldset id="3">
                <input type="text" name="email" placeholder="MODE OF TRANSPORT" />
                <input type="text" name="email" placeholder="ANY POOLCAR NEEDED(YES/NO)" />
                <input type="text" name="email" placeholder="ANY DISABILITIES(YES/NO)" />
                <input type="text" name="email" placeholder="PARENT QUALIFICATION" />
                <input type="text" name="email" placeholder="ANNUAL INCOME OF PARENT" />
                <input type="button" name="previous" class="previous action-button" value="Previous" />
                <input type="submit" name="submit" class="submit action-button" value="Submit" />
            </fieldset>
        </form>
    </div>
</body>
</html>