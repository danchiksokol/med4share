<?php defined('SYSPATH') OR die('No direct access allowed.');

abstract class Controller_Ajax extends Controller {

    public $error = array();
    public $data = array();

    protected $json = null;

    public function after() {

        if ( is_null( $this->json ) ) {

            $response = array(
                'success' => empty( $this->error ),
                'error' => join( '<br>', $this->error ),
                'data' => $this->data
            );

        }
        else {

            $response = $this->json;
        }

        if ( Request::initial()->is_ajax() ) {

            $this->response->headers( 'Content-type', 'text/javascript; charset=UTF-8' );
            $this->response->body( json_encode( $response ) );

        }
        else {

            $this->response->body( View::factory( 'ajax/debug_ajax' )
                ->set( 'response', $response )->render() );


        }

        parent::after();

    }


}