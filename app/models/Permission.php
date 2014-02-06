<?php

/**
 * Permission
 *
 * @author stuartw
 */
class Permission extends Eloquent {
    
    public function rolePermissions()
    {
        return $this->hasMany('RolePermission');
    }
    
}
