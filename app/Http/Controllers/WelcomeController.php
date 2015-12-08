<?php namespace TMDCHD\Http\Controller

	class WelcomeController extends Controller {

		public function index()
		{
			$items = array
			( 'items' => [
				'Pack luggage',
				'Go to airport',
				'Arrive in Manila'
					]
			);
			dd($items);
			return
	view('welcome');
		}
	}


