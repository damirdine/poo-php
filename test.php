
<?php
class TestObj {
    public string $nom;
    public string $prenom;

    function __construct($nom,$prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    /* Ceci est une fonction de comparaison statique */
    public static function cmp_obj($a, $b)
    {
        return strtolower($a->prenom) <=> strtolower($b->prenom);
    }
}

$a[] = new TestObj("ali",'said');
$a[] = new TestObj("ali","ahamada");
$a[] = new TestObj("z","ds");

usort($a, [TestObj::class, "cmp_obj"]);

$shortArray = [];

foreach ($a as $item) {
    array_push($shortArray, $item);
}
var_dump($shortArray);


?>
