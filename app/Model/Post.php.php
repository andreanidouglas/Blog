class Post extends AppModel {
    public $name = 'Post';

    public $validate = array(
        'title' => array('rule' => 'notEmpty'),
		   message' => "O titulo deve ser preenchido",
        'body' => array('rule' => 'notEmpty'),
		  message' => "A descri��o deve ser preenchida"
    );
}