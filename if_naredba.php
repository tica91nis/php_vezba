<html>
<head>
    <style>
    img  {
        width: 200px;
        height: 200px;
    }
    .z {
        color: pink;
    }
    .m {
        color: blue;
    }
    </style>
</head>
<body>
    <?php
        $a = 5;
        $b = 10;
        if($a > $b)
        {
            echo "a je vece od b <br>";
            echo "$a je vece od $b";
        }
        else
        {
            echo "a je manje od b <br>";
            echo "$a je manje od $b";
        }
        echo "<br>";
        $x = 3;
        $y = 5;
        if($x > $y)
        {
            echo "$x je vece od $y";
        }
        elseif($x < $y)
        {
            echo "$x je manje od $y";
        }
        else 
        {
            echo "$x je jednako$y";
        }

    //u odnosu na pol da prikaze odredjenu slicicu
    echo "<br>";
    $pol = "z";
    if($pol == "z")
    {
        echo "<img src='woman.png'>";
        echo "<p class='z'> Zenski pol </p>";
    }
    else
    {
        echo "<img src='man.png'>";
        echo "<p class='m'> Muski pol </p>";
    }
    ?>
</body>
</html>