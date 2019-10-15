<html>
    <head>
        <style>
            h1 {
                color: pink;
            }
            p {
                font-size: 20px;
                color: navy;
            }
        </style>
    </head>
    <body>
        <h1>HTML i PHP</h1>
        <p> Ovo je tekst mog prvog paragrafa <br>
         <?php
            $ime = "Petra";
            echo $ime;
         ?>
        </p>
        <?php
            $x = "Zdravo svete";
            echo $x . "<br>" . $x;
        ?>
    </body>
</html>