<?php
class Monsters extends Controller {
    public function __construct() {
        $this->monsterModel = $this->model('Monster');
    }

    public function index() {
        $monsters = $this->monsterModel->findAllMonsters();
        $data = [
            'monsters' => $monsters
        ];
        $this->view('monsters/index', $data);
    }

}
?>