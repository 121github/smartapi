<?php

/**
 * Description of RoleController
 *
 * @author stuartw
 */
class RoleController extends BaseController {
    
    /**
     * Instantiate a new UserController instance.
     */
    public function __construct()
    {
        $this->beforeFilter(
            function () {
                if(!Auth::check()) {
                    return Response::make('Unauthorised', 401);
                }
            }
        );
        $this->beforeFilter('role');
    }
    
    public function getIndex()
    {
        return Role::all();
    }
    
}
