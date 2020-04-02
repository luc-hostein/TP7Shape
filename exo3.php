<?php

trait traitUn{
    function small($text){
        echo "<small>$text</small>";
    }
    function big($text){
        echo "<h4>$text</h4>";
    }
}

trait traitDeux{
    function small($text){
        echo "<i>$text</i>";
    }
    function big($text){
        echo "<h2>$text</h2>";
    }
}

class texte{
    use traitUn,traitDeux{
        traitDeux::small insteadof traitUn;
        traitUn::big insteadof traitDeux;
        traitDeux::big as gros;
        traitUn::small as petit;
    }
}


$text = new texte();
$text->small("deux small");
$text->big("un big");
$text->gros("deux big");
$text->petit("un small");


?>
