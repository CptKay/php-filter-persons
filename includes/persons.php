<?php
/*  -----------------------------------------------------------------
    Definiere $PERSONS als multidimensionaler Array.
    -----------------------------------------------------------------

    !! Prüfen: Eine PHP-Konstante hat kein '$' Symbol am Anfang.
    !! die Personen aus dem JavaScript Array (unten) in PHP übernehmen
*/


 define ("Persons",array(
    array(
        "firstName" => "Peter",
        "lastName" => "Towers",
        "age"=> 86,
        "country"=> "USA"
    ),array (
        "firstName"=>"Paul",
        "lastName"=> "Miller",
        "age"=> 54,
        "country"=>"USA"
    ),
    array (
        "firstName"=>"Fritz",
        "lastName"=> "Kleiner",
        "age"=> 54,
        "country"=>"Schweiz"
    ),
    array (
        "firstName"=> "Hans",
        "lastName"=> "Müller",
        "age"=> 14,
        "country"=> "Lichtenstein"
    ),
    array (
        "firstName"=> "Jolanda",
        "lastName"=> "Frankfurter",
        "age"=> 36,
        "country"=> "Deutschland"
    ),
    array (
        "firstName"=> "Karl",
        "lastName"=> "Keller",
        "age"=> 30,
        "country"=> "Deutschland"
    ),
    array( 
        "firstName"=>"Hanspeter",
        "lastName"=> "Schröder",
        "age"=> 42,
        "country"=> "Deutschland"
    ),
    array(
        "firstName"=> "Emilio",
        "lastName"=> "Sottorno",
        "age"=> 40,
        "country"=> "Italien"
    ),
    array(
        "firstName"=> "Robert",
        "lastName"=> "Graveur",
        "age"=> 54,
        "country"=> "Frankreich"
    )
 ));
    
    // TODO);

//prettyPrint(Persons);

function writeAllPersons(){
    $personCount = count(Persons);

    for ($p = 0; $p < $personCount; $p++) {
        $person = Persons[$p]; ;
        $firstName = $person["firstName"];
        $lastName = $person["lastName"];
        $age = $person["age"];
        $country = $person["country"]; 
    
    echo "<tr><td>$firstName</td><td>$lastName</td><td>$age</td><td>$country</td></tr>";  

    }
   

}

?>