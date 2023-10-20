<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Word;
use App\Models\UserWords;
class UserWordsController extends Controller
{
    public function copyWords()
    {
        $words = Word::all();
        $userId = 1; 

        $userWordsData = $words->map(function ($word) use ($userId) {
            return [
                'user_id' => $userId,
                'word_id' => $word->id,
                'review1' => false, 
                'review2' => false,
                'review3' => false,
                'review1_date' => null, 
                'review2_date' => null,
                'review3_date' => null,
            ];
        });

        UserWords::insert($userWordsData);

        return "تمام لغات با موفقیت به جدول UserWords منتقل شدند.";
    }

}
