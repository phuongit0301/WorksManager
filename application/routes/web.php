<?php

class Route {
	static function start() {
		// defailt controller and actiom
		$controller_name = 'Works';
		$action_name = 'index';

		$routes = explode('/', $_SERVER['REQUEST_URI']);
		// get controller name
		if (!empty($routes[2])) {
			$controller_name = ucwords($routes[2]);
		}

		// get name action
		if (!empty($routes[3])) {
			$action_name = $routes[3];
		}

		// add prefix
		$model_name = $controller_name;
		$controller_name = $controller_name . 'Controller';
		$action_name = $action_name;

		// load file with model
		$model_file = $model_name . '.php';
		$model_path = __DIR__ . "/../models/" . $model_file;
		if (file_exists($model_path)) {
			include __DIR__ . "/../models/" . $model_file;
		}
		//var_dump($controller_name);exit;

		// load file this controller class
		$controller_file = $controller_name . '.php';
		$controller_path = __DIR__ . "/../controllers/" . $controller_file;
		if (file_exists($controller_path)) {
			include __DIR__ . "/../controllers/" . $controller_file;
		} else {
			// redirect to 404 page
			//Route::ErrorPage404();
			$action_name = 'error';
		}

		// create controller
		$controller = new $controller_name;
		$action = $action_name;

		if (method_exists($controller, $action)) {
			// call action of controller
			$controller->$action();
		} else {
			// redirect to 404 page
			$action = 'error';
			$controller->$action();
		}

	}

	function ErrorPage404($controller) {
		$host = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/';
		header('HTTP/1.1 404 Not Found');
		header("Status: 404 Not Found");
		header('Location:' . $host . '404');
	}
}