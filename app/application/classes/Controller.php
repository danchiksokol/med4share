<?php defined('SYSPATH') OR die('No direct script access.');

abstract class Controller extends Kohana_Controller {

	protected $roles = null;

	public function before() {

		parent::before();

		if ( ! is_null( $this->roles ) ) {

			if ( ! Auth::instance()->logged_in( $this->roles ) ) {

				return $this->access_denied();
			}
		}
	}

	public function access_denied() {
        echo 'Настроить права к кон';
		$this->request->go_back();

		return false;

	}

}
