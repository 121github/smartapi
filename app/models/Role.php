<?php

/**
 * Role
 *
 * @author stuartw
 */
class Role extends Eloquent {
    
    public function users()
    {
        return $this->hasMany('User');
    }
    
    public function rolePermissions()
    {
        return $this->hasMany('RolePermission');
    }
    
    public function permissions()
    {
        return $this->hasManyThrough('Permission', 'RolePermission', 'role_id', 'id');
    }
    
}
