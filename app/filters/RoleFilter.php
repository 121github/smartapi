<?php

/**
 * The RoleFilter class is responsible for checking that the authenticated user
 * has the appropriate permission to access the requested route action
 *
 * @author stuartw
 */
class RoleFilter {
    
    /**
     * @var array of controller actions with the id of the 
     * permission that protects it
     */
    private $_routeActionPermissions = array(
        'UserController@getAll' => 'access_users',
        'UserController@postCreate' => 'create_user'
    );
    
    public function filter()
    {
        $routeAction = Route::currentRouteAction();
        if (isset($this->_routeActionPermissions[$routeAction])) {
            $permissions = array();
            foreach (RolePermission::where('role_id', Auth::user()->role_id)->with('permission')->get() as $rolePermission) {
                $permissions[] = $rolePermission['permission']['permission'];
            }
            if (!in_array($this->_routeActionPermissions[$routeAction], $permissions)) {
                return Response::make('Access Denied', 403);
            }
        }
    }
    
}
