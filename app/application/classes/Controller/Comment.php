<?php defined('SYSPATH') or die('No direct access allowed.');

/**
 * Template Controller Comments
 *
 * @package SCSeed
 * @package Comments
 * @author Sergei Gladkovskiy <smgladkovskiy@gmail.com>
 */
class Controller_Comment extends Controller_Template_Main {


    public function getComments( $controller, $subject_id) {

        $scope_id = Model::factory('CommentType')->getScope( $controller, $subject_id );

        if( $scope_id !== false ) {
            return $data = Model::factory('Comment')->fulltree($scope_id);
        } else {
            return false;
        }

    }

} // End Controller_Comment