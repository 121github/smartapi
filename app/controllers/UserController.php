<?php 

class UserController extends BaseController {
    
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
            }, 
            array('except' => 'getLogin')
        );
        $this->beforeFilter('role');
    }
    
    /**
     * getLogin method
     * 
     * Attempt to authenticate the user. On login success:
     * * Increment total_logins
     * * Set last_login_at timestamp
     * * Get the users permissions & format
     * 
     * @param string $username
     * @param string $password
     * @return User
     */
    public function getLogin($username = null, $password = null) 
    {        
        if (Auth::attempt(array('username' => $username, 'password' => $password))) {
            $user = Auth::user();
            $user->total_logins += 1;
            $user->last_login_at = date('Y-m-d H:i:s');
            $user->save();
            $permissions = array();
            foreach (RolePermission::where('role_id', $user->role_id)->with('permission')->get() as $rolePermission) {
                $permissions[] = $rolePermission['permission']['permission'];
            }
            $user->permissions = $permissions;
            return $user;
        }
        return Response::make('Invalid username or password', 400);
    }
    
    public function postLogout()
    {
        Auth::logout();
    }
    
    public function getAll()
    {
        $users = User::with('role')->get();
        foreach ($users as &$user) {
            $role = $user->role->role;
            unset($user->role);
            $user->role = $role;
        }
        return $users;
    }
    
    public function postCreate()
    {
        $validator = Validator::make(Input::all(), User::$rules);
        if ($validator->fails()) {
            return Response::make($validator->messages()->first(), 400);
        }
        
        $user = new User;
        $user->first_name = Input::get('first_name');
        $user->last_name  = Input::get('last_name');
        $user->username   = Input::get('username');
        $user->role_id    = Input::get('role_id');
        $user->email      = Input::get('email');
        $user->password   = Hash::make(substr(md5(rand()), 0, 8));
        $user->save();
        return $user;
    }
    
    public function missingMethod($parameters = array())
    {
        return Response::make('Invalid request method', 400);
    }
    
}
