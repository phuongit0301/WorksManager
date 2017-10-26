<?php
class WorksController {
	public function index() {
		require_once __DIR__ . '/../views/works/index.php';
	}

	public function list() {
		/* AJAX check  */
		if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
			/* special ajax here */
			header('Content-Type: application/json');

			$works = Works::all();
			$events = array();

			foreach ($works as $work) {
				$e = array();
				$e['id'] = $work->id;
				$e['title'] = $work->title;
				$e['start'] = $work->start_date;
				$e['end'] = $work->end_date;

				$allday = ($work->all_day == "true") ? true : false;
				$e['allDay'] = $allday;

				array_push($events, $e);
			}
			echo json_encode($events);
		} else {
			require_once __DIR__ . '/../views/works/error.php';
		}

	}

	public function error() {
		require_once __DIR__ . '/../views/works/error.php';
	}
}