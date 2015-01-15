<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Topic
 *
 * @author witek
 */
class Topic extends BaseSmf {
    protected $table = 'smf_topics';
    protected $primaryKey = 'id_topic';
    
    public function messages() {
        return $this->hasMany('Message', 'id_topic');
    }
    
    public function firstMessage() {
        return $this->belongsTo('Message', 'id_first_msg');
    }
    
    public function board() {
        $this->hasOne('Board', 'id_board');
    }
}
