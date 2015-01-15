<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Board
 *
 * @author witek
 */
class Board extends BaseSmf {
    protected $table = 'smf_boards';
    protected $primaryKey = 'id_board';
    
    public function topics() {
        return $this->hasMany('Topic', 'id_board');
    }
}
