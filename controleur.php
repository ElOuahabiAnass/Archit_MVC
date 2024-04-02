
require_once 'Modele.php';
require_once 'Vue.php';

class Controleur {
    private $modele;
    private $vue;

    function __construct() {
        $this->modele = new Modele();
        $this->vue = new Vue();
    }

    public function afficherBillets() {
        $billets = $this->modele->getBillets();
        $this->vue->generer($billets);
    }
}
