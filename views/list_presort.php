<?php
class list_presort extends list_presort_parent{ 
    public function getSorting( $sCnid ) 
    { 
        $aSorting = parent::getSorting( $sCnid ); 
        if ( !$aSorting ) { 
            //Modify to desired list order 
            $aSorting = array ( 'sortby' => 'OXINSERT', 'sortdir' => 'DESC' ); 
        } 
        return $aSorting; 
    } 
}