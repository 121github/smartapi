<?php

/**
 * RolePermission
 *
 * @author stuartw
 */
class RolePermission extends Eloquent {
    
    public function role()
    {
        return $this->belongsTo('Role', 'role_id');
    }
    
    public function permission()
    {
        return $this->belongsTo('Permission', 'permission_id');
    }
    
}
