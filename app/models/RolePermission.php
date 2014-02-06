<?php

/**
 * RolePermission
 *
 * @author stuartw
 */
class RolePermission extends Eloquent {
    
    public function role()
    {
        return $this->belongsTo('Role');
    }
    
    public function permission()
    {
        return $this->belongsTo('permission');
    }
    
}
