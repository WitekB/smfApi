<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NewsController
 *
 * @author witek
 */
class NewsController extends BaseController {
    public function getAll() {
        $newsBoardSetting = Settings::where('name', '=', 'NewsBoardId')->firstOrFail();
        $newsBoard = Board::find($newsBoardSetting->value);
        $firstMessagesIds = $newsBoard->topics()->lists('id_first_msg');
       
        $newsMessages = Message::where('id_board', '=', $newsBoardSetting->value)
                ->whereIn('id_msg', $firstMessagesIds)
                ->orderBy('poster_time', 'desc')->get();
        
        return Response::json($newsMessages);
    }
    
    public function getPage($pageNumber) {
        $newsBoardSetting = Settings::where('name', '=', 'NewsBoardId')->firstOrFail();
        $newsBoard = Board::find($newsBoardSetting->value);
        $firstMessagesIds = $newsBoard->topics()->lists('id_first_msg');
        
        $pageSize = 20;
        $skipSize = $pageSize * ($pageNumber - 1); 
        //$topics = $newsBoard->topics()->take($pageSize)->skip($skipSize)->get();
        
        $newsMessages = $newsMessages = Message::where('id_board', '=', $newsBoardSetting->value)
                ->whereIn('id_msg', $firstMessagesIds)
                ->orderBy('poster_time', 'desc')->take($pageSize)->skip($skipSize)->get();
        
        return Response::json($newsMessages);   
    }
    
    
}
