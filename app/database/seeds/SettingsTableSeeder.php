<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SettingsTableSeeder
 *
 * @author witek
 */
class SettingsTableSeeder extends Seeder {
    public function run() {
        $newsBoardIdSetting = new Settings();
        $newsBoardIdSetting->name = 'NewsBoardId';
        $newsBoardIdSetting->value = 20;
        
        $newsBoardIdSetting->save();
    }
    
}
