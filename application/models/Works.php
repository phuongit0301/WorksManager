<?php
class Works {
	// we define 4 attributes
	public $id;
	public $title;
	public $start_date;
	public $end_date;
	public $all_day;

	public function __construct($id, $title, $start_date, $end_date, $all_day) {
		$this->id = $id;
		$this->title = $title;
		$this->start_date = $start_date;
		$this->end_date = $end_date;
		$this->all_day = $all_day;
	}

	public static function all() {
		$list = [];
		$db = Db::getInstance();
		$req = $db->query('SELECT * FROM works');

		// we create a list of Work objects from the database results
		foreach ($req->fetchAll() as $work) {
			$list[] = new Works($work['id'], $work['title'], $work['start_date'], $work['end_date'], $work['all_day']);
		}

		return $list;
	}

	public static function find($id) {
		$db = Db::getInstance();
		// we make sure $id is an integer
		$id = intval($id);
		$req = $db->prepare('SELECT * FROM works WHERE id = :id');
		// the query was prepared, now we replace :id with our actual $id value
		$req->execute(array('id' => $id));
		$work = $req->fetch();

		return new Work($work['id'], $work['title'], $work['start_date'], $work['end_date'], $work['all_day']);
	}
}