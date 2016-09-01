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
        // checking data connection
        $host        = "host=127.0.0.1";
        $port        = "port=5432";
        $dbname      = "dbname=mwoods";
        $credentials = "user=postgres password=dope";

        $db = pg_connect( "$host $port $dbname $credentials"  );

        if (!$db) {

            echo "Error : Unable to open database\n";
        } else {
            echo "Opened database successfully\n";
            //reciveing data from form
            $firstnamess= $_POST["fname"];
            $lastnamess= $_POST["lname"];
            $locate= $_POST["location"];
            $book= $_POST["fav_book"];
            $animal= $_POST["animal"];
            $music= implode(',', $_POST['music']);
            $color= $_POST["color"];


            // inserting data from from into table

            $query= "INSERT INTO info (firstname,lastname, location, animals, book,  music,color) 
                    VALUES($1, $2,$3,$4,$5,$6,$7);";

            // d
            pg_prepare($db, "prepare", $query);
            // displays erros message when data is not posted
            $result = pg_execute($db,"prepare",array($firstnamess, $lastnamess,$locate, $animal,$book,$music,$color));
            if (!$result) {
                $errormessage = pg_last_error();
                echo "Error with query: " . $errormessage;
                exit();
            }
           // printf ("These values were inserted into the database - %s %s ", $firstnamess, $lastnamess, $locate,$animal),;
            pg_close();


        }

    }

}



