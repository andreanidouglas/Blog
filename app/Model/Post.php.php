class Post extends AppModel {
    public $name = 'Post';

    public $validate = array(
        'title' => array('rule' => 'notEmpty'),
		   message' => "O titulo deve ser preenchido",
        'body' => array('rule' => 'notEmpty'),
		  message' => "A descrição deve ser preenchida"
    );
}