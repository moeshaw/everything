<div>
    <center>
        <form name="myform" method="post" action="" >
            {{ question1 }}<br>
            <input  id="q1" type="text" name="fname" required><br>

            {{ question2 }}<br>
            <input id="q2" type="text" name="fname" required ><br>

            {{ question3 }}<br>
            <input id="q3" type="text" name="lfname" required ><br><br>

            {{ question4 }}<br>
            <input id="q4" type="text" name="fname" required ><br><br>

            {{ question5 }}<br>
            <input id="q5" type="text" name="fname" required ><br><br>

            {{ question6 }}<br>
            <input  id="q6" type="text" name="fname" required ><br><br>

            {{ question7 }}<br>
            <input  id="q7" type="text" name="fname" required ><br><br>

            <input type="submit" value="submit" >
    </center>
    </form>
</div>











<div style="color:#0000FF;background-color:lightseagreen">
    <center>
        <form id= "form2" name="myform" method="post" action="" >
            {{ question1 }}
            &nbsp;   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   &nbsp;

            {{ question2 }}<br>
            <input    maxlength="25"  id="q1" type="text" name="fname" required >

            &nbsp; &nbsp;

            <input maxlength="25"  id="q2" type="text" name="fname" required ><br>

            {{ question3 }}<br>
            <input id="q3" type="text" name="lfname" required ><br><br>

            {{ question4 }}<br>

            <input type="checkbox" name="vehicle" value="Bike"> R&B

            <input type="checkbox" name="vehicle" value="Bike"> Rock

            <input type="checkbox" name="vehicle" value="Bike"> Jazz

            <input type="checkbox" name="vehicle" value="Car" > pop<br><br>

            {{ question5 }}<br>
            <input id="q5" type="integer" name="fname" required max="100" min="2" ><br><br>

            {{ question6 }} <br>
            <select>
                <option value="volvo">select color</option>
                <option value="saab">Purple</option>
                <option value="opel">Red</option>
                <option value="audi">Black</option>
            </select>

            <br><br>

            {{ question7 }}<br>
            <input  id="q7" type="text" name="fname" required><br><br>

            <input type="radio" name="gender" value="female">Female

            <input type="radio" name="gender" value="male">Male

            <br><br>
            <input type="submit" value="submit" >

            <p> id="q4" </p>


    </center>
    </form>

    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>
    <script src="http://cdn.jsdelivr.net/jquery.validation/1.15.0/additional-methods.min.js"></script>


</div>

<script>
    // just for the demos, avoids form submit
    jQuery.validator.setDefaults({
        debug: true,
        success: "valid"
    });
    $( "#form2" ).validate({
        rules: {
            field: {
                required: true,
                digits: true
            }
        }
    });
</script>





<button type="button" onclick="myFunction()">Submit</button>

















<div style="color:#0000FF;background-color:lightseagreen">
    <center>
        <form name="myform" method="post" action="" >


            {{ question1 }}
            &nbsp;   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   &nbsp;

            {{ question2 }}<br>
            <input    maxlength="25"  id="q1" type="text" name="fname" required >

            &nbsp; &nbsp;
            <input maxlength="25"  id="q2" type="text" name="fname" required ><br>

            {{ question3 }}<br>
            <input id="q3" type="text" name="lfname" required ><br><br>

            {{ question4 }}<br>

            <input type="checkbox" name="vehicle" value="Bike"> R&B

            <input type="checkbox" name="vehicle" value="Bike"> Rock

            <input type="checkbox" name="vehicle" value="Bike"> Jazz

            <input type="checkbox" name="vehicle" value="Car" > pop<br><br>

            {{ question5 }}<br>
            <input id="numb" type="integer"  required max="100" min="2" ><br><br>

            {{ question6 }} <br>
            <select>
                <option value="volvo">select color</option>
                <option value="saab">Purple</option>
                <option value="opel">Red</option>
                <option value="audi">Black</option>
            </select>

            <br><br>

            {{ question7 }}<br>
            <input  id="q7" type="text" name="fname" required><br><br>

            <input type="radio" name="gender" value="female">Female

            <input type="radio" name="gender" value="male">Male

            <br><br>



            <input type="submit" value="submit"  onclick="myFunction()">



            <p id="demo"></p>

            <script>
                function myFunction() {
                    var x, text;

                    // Get the value of the input field with id="numb"
                    x = document.getElementById("numb").value;

                    // If x is Not a Number or less than one or greater than 10
                    if (isNaN(x) || x < 1 || x > 10) {
                        text = "Input not valid";
                    } else {
                        text = "Input OK";

                    }
                    document.getElementById("demo").innerHTML = text;
                }


            </script>

    </center>
    </form>
</div>









div style="color:#0000FF;background-color:lightseagreen">
<center>
    <form name="myform" method="post" action="" >


        {{ question1 }}
        &nbsp;   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   &nbsp;

        {{ question2 }}<br>
        <input   pattern="[a-zA-Z]+"  maxlength="25"  id="q1" type="text" name="fname" required >

        &nbsp; &nbsp;
        <input pattern="[a-zA-Z]+" maxlength="25"  id="q2" type="text" name="fname" required ><br>

        {{ question3 }}<br>
        <input pattern="[a-zA-Z]+"  id="q3" type="text" name="lfname" required ><br><br>

        {{ question4 }}<br>

        <input type="checkbox" name="vehicle" value=""> R&B

        <input type="checkbox" name="vehicle" value=""> Rock

        <input type="checkbox" name="vehicle" value=""> Jazz

        <input type="checkbox" name="vehicle" value="" > pop<br><br>

        {{ question5 }}<br>
        <input id="numb" type="number"  required max="100" min="2" ><br><br>

        {{ question6 }} <br>
        <select>
            <option value="volvo">select color</option>
            <option value="saab">Purple</option>
            <option value="opel">Red</option>
            <option value="audi">Black</option>
        </select>

        <br><br>

        {{ question7 }}<br>
        <input  id="q7" type="text" name="fname" required><br><br>

        <input type="radio" name="gender" value="female">Female

        <input type="radio" name="gender" value="male">Male

        <input type="radio" name="gender" value="male">Neutral


        <br><br>



        <input type="submit" value="submit"  >



        <p id="demo"></p>



</center>
</form>
</div>





return $this->render('form/new.html.twig',
array(

"question1" => " First Name",
"question2" =>  "Last Name",
"question3"  => " Location of work",
"question4"  => " What is your favorite catergory of music?",
"question5"  => " How many animals do you have?",
"question6"  => " What is your favorite color?",
"question7"  => " What is your favorite book?",

));
}

/**
* @Route("/form/success", name="success")
*/
public function listAction( )
{
return $this->render('form/success.html.twig');
}




$k= new dBconnection();


$j= $k->Code();
return new JsonResponse(json_encode(["my keys " => " can you see this"]));



<div style="color:#0000FF;background-color:lightseagreen">
    <center>
        <form name="myform" method="POST" action="http://localhost:8000/form" >


            {{ question1 }}
            &nbsp;   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   &nbsp;

            {{ question2 }}<br>
            <input   pattern="[a-zA-Z]+"  maxlength="25"  id="q1" type="text" name="fname" required >

            &nbsp; &nbsp;
            <input pattern="[a-zA-Z]+" maxlength="25"  id="q2" type="text" name="lname" required ><br>

            {{ question3 }}<br>
            <input pattern="[a-zA-Z]+"  id="q3" type="text" name="location" required ><br><br>

            {{ question4 }}<br>

            <input type="checkbox" name="vehicle" value=""> R&B

            <input type="checkbox" name="vehicle" value=""> Rock

            <input type="checkbox" name="vehicle" value=""> Jazz

            <input type="checkbox" name="vehicle" value="" > pop<br><br>

            {{ question5 }}<br>
            <input id="numb" type="number"  required max="100" min="2" ><br><br>

            {{ question6 }} <br>
            <select>
                <option value="volvo">select color</option>
                <option value="saab">Purple</option>
                <option value="opel">Red</option>
                <option value="audi">Black</option>
            </select>

            <br><br>

            {{ question7 }}<br>
            <input  id="q7" type="text" name="fname" required><br><br>

            <input type="radio" name="gender" value="female">Female

            <input type="radio" name="gender" value="male">Male

            <input type="radio" name="gender" value="male">Neutral


            <br><br>



            <input type="submit" value="submit"  >



            <p id="demo"></p>



    </center>
    </form>
</div>





<?php

namespace AppBundle\entity;
/**
 * Class dBconnection
 */
class dBconnection {
    /**
     *
     * @Route("/form/dBconnection")
     * @return mixed
     */
    public function Code()
    {
        $host        = "host=127.0.0.1";
        $port        = "port=5432";
        $dbname      = "dbname=mwoods";
        $credentials = "user=postgres password=dope";

        $db = pg_connect( "$host $port $dbname $credentials"  );

        if (!$db) {
            echo "Error : Unable to open database\n";
        } else {
            echo "Opened database successfully\n";
        }

        return $db;
    }

}










