<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Message
 *
 * @author witek
 */
class Message extends BaseSmf {
    protected $table = 'smf_messages';
    protected $primaryKey = 'id_msg';
    
    protected $attributes = array('IsFirstInTopic' => null);

    
    public function topic() {
        return $this->belongsTo('Topic', 'id_topic');
    }
    
    public function board() {
        return $this->hasOne('Board', 'id_board');
    }
    
    public function getIsFirstInTopicAttribute() {
        return ($this->id_msg == $this->topic->id_first_msg);
    }
}
