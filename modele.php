
class Modele {
    private $bdd;

    function __construct() {
        $this->bdd = new PDO('mysql:host=localhost;dbname=monblog;charset=utf8', 'root', '');
    }

    public function getBillets() {
        $billets = $this->bdd->query('SELECT BIL_ID AS id, BIL_DATE AS date, BIL_TITRE AS titre, BIL_CONTENU AS contenu FROM T_BILLET ORDER BY BIL_ID DESC');
        return $billets;
    }
}
