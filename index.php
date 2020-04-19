<!doctype html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <meta name="Description" content="opis strony" />
    <meta name="Keywords" content="wyraz1, wyraz2" />
    <title> Natalia </title>

    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
<?php
If (isset($_GET["strona"]))
$str=$_GET["strona"];
Else
            $str=1;
If ($str==2)
            Include("form.php");
Else
            Echo "strona główna";
?>

    <div id="zew">
        <div id="logo">LOGO</div>
        <div id="tresc">
            <div id="lewy">
                <div id="tresc_lewy">

                    <ul>
                        <li><a href="index.php?strona=1"></a> strona1</a></li>
                        <li><a href="index.php?strona=2"></a> strona 2</a></li>
                        <li><a href="index.php?strona=3"></a> formularz</a></li>
                        <li><a href="index.php?strona=4"></a> abcd</a></li>
                    </ul>

                </div>
            </div>

            <div id="srodkowy">
                <div id="tresc_srodkowy">
                    <form action="index.php">
                        <label for="fname">Imie:</label><br>
                        <input type="text" id="fname" name="fname" value=""><br>
                        <label for="lname">Nazwisko:</label><br>
                        <input type="text" id="lname" name="lname" value=""><br><br>
                        <input type="radio" id="male" name="gender" value="male">
                        <label for="male">Kobieta</label><br>
                        <input type="radio" id="female" name="gender" value="female">
                        <label for="female">Mężczyzna</label><br>
                        <input type="submit" value="Submit">
                        <label for="fname">Nazwisko panieńskie:</label><br>
                        <input type="text" id="fname" name="fname" value=""><br>
                        <label for="lname">Email:</label><br>
                        <input type="text" id="lname" name="lname" value=""><br><br>
                        <label for="fname">Kod pocztowy:</label><br>
                        <input type="text" id="fname" name="fname" value=""><br>

                  </form>
                        
                </div>

            </div>
            <div id="prawy">
                <div id="tresc_prawy">

                    <ul>
                        <li><a href = "https://www.google.pl/"></a> www.google.pl</li>
                        <li><a href = "https://www.wp.pl/"></a>www.wp.pl</li>
                        </ul>

                </div>
            </div>

        </div>
        <div id="stopka">STOPKA</div>

    </div>

</body>

</html>