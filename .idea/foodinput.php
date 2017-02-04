
/**
 * Created by PhpStorm.
 * User: yanghu
 * Date: 2/4/17
 * Time: 9:56 AM
 */
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>foodinput</title>
</head>
<body>
<div style="font-family: 'Times New Roman'">
    <h2><font face="verdana">Foodinput</font></h2>
    <p><font face="arial">Input your food information.<br>
        </font>
    </p>
    </div>
<script type="text/javascript" src="formana.js"></script>
<div style="font-family: Verdana">
    <ol>
        <form id="myform" name="qualifyform" action="response03.php" onsubmit="return validateForm()" method="post" >
<li>
Marital Status:<br>
    <input type="radio" name="marriage" value="widowed"/>Widowed<br>
    <input type="radio" name="marriage" value="married"/>Married<br>
    <input type="radio" name="marriage" value="separated"/>Separated<br>
    <input type="radio" name="marriage" value="divorced"/>Divorced<br>
    <input type="radio" name="marriage" value="single"/>Single<br><br>
</li>
<li>
Race:<br>
    <input type="radio" name="race" value="African American"/>African American<br>
    <input type="radio" name="race" value="Caucasian"/>Caucasian<br>
    <input type="radio" name="race" value="Asian"/>Asian<br>
    <input type="radio" name="race" value="American India"/>American Indian/Alaska Native<br>
    <input type="radio" name="race" value="Hawaiian"/>Native Hawaiian/Pacific Islander<br>
    <input type="radio" name="race" value="Other"/>Other<br><br>
    <!--Other(please type in):<input type="text" name="_race"><br><br>-->
</li>
<!--li>
    Ethnicity:<br>
    <input type="radio" name="ethnicity" value="hispanic"/>Hispanic/Latino<br>
    <input type="radio" name="ethnicity" value="nothispanic"/>Not Hispanic/Latino<br><br>
</li-->
<!--li>
    Where were you born? <br><input type="text" name="bornplace"><br><br>
</li>
<li>
Where did you grow up? <br><input type="text" name="growup"><br><br>
</li>
<li>
Where did you go to school? What was the name of the school?<br>
    <input type="text" name="school"><br><br>
</li-->
<li>
Where do you live now? <br>
    <input type="radio" name="continent" value="Asia">Asia<br>
    <input type="radio" name="continent" value="Africa">Africa<br>
    <input type="radio" name="continent" value="Antarctica">Antarctica<br>
    <input type="radio" name="continent" value="Australia">Australia & Oceania<br>
    <input type="radio" name="continent" value="Europe">Europe<br>
    <input type="radio" name="continent" value="North America">North America<br>
    <input type="radio" name="continent" value="South America">South America<br><br>
</li>
<li>
How do you describe your region? <br>
    <input type="radio" name="region" value="rural">Rural<br>
    <input type="radio" name="region" value="urban">Urban<br><br>
</li>
<li>
What is your native language?<br>
    <input type="radio" name="language" value="English">English<br>
    <input type="radio" name="language" value="Spanish">Spanish<br>
    <input type="radio" name="language" value="Chinese">Chinese<br>
    <input type="radio" name="language" value="Hindi">Hindi<br>
    <input type="radio" name="language" value="Arabic">Arabic<br>
    <input type="radio" name="language" value="Portuguese">Portuguese<br>
    <input type="radio" name="language" value="Other">Other<br><br>
    <!--Other(please type in):<input type="text" name="_language"><br><br>-->

</li>
<li>
How many years of education have you completed ?<br>
    <input type="radio" name="education" value="elementary">1 to 8 years <br>
    <input type="radio" name="education" value="highschool">9 to 12 years <br>
    <input type="radio" name="education" value="college">13 to 16 years <br>
    <input type="radio" name="education" value="graduate">17 to 20 years <br>
    <input type="radio" name="education" value="medical">more than 20 years <br><br>

</li>
<li>
What is the highest degree you have earned ?<br>
    <input type="radio" name="degree" value="No H.S.">Did not finish HighSchool<br>
    <input type="radio" name="degree" value="H.S.Diploma/GED">H.S.Diploma/GED<br>
    <input type="radio" name="degree" value="A.A.">A.A.<br>
    <input type="radio" name="degree" value="B.A./B.S.">B.A./B.S.<br>
    <input type="radio" name="degree" value="M.S./M.A./M.B.A.">M.S./M.A./M.B.A.<br>
    <input type="radio" name="degree" value="Ph.D./M.D./J.D.">Ph.D./M.D./J.D.<br><br>
</li>
            <li>
How much do you agree(or disagree) with the following statement: 'I am comfortable using a computer.'<br>
                <input type="radio" name="computer" value="Strongly Agree"/>Strongly Agree<br>
                <input type="radio" name="computer" value="Agree"/>Agree<br>
                <input type="radio" name="computer" value="Neither agree nor disagree"/>Neither agree nor disagree<br>
                <input type="radio" name="computer" value="Disagree"/>Disagree<br>
                <input type="radio" name="computer" value="Strongly Disagree"/>Strongly Disagree<br><br>
            </li>
            <input type="hidden" name="MID" value="<?php echo $_GET['MID']; ?>">
            <input type="hidden" name="GROUP" value="<?php echo $_GET['GROUP'];?>">
            <input type="submit" value="Submit">
            </form>
        </ol>
    </div>

</body>
</html>
