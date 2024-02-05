<?

namespace application\core;
use application\lib\DB;

class Model{

    public $db;

    public function __construct()
    {
        $this->db = new DB;
    }
}
?>
