<?php

namespace App\Http\Controllers;

use App\PersonalRecord;

class RankingController extends Controller
{
    public function index()
    {

        try{
            $records = PersonalRecord::with('movements')->with('users')
                ->orderBy('value', 'DESC')->get();

            $value = 0;
            $position = 0;

            foreach ($records as $index => $record) {

                $data[$index]['name_user'] = $record->users->name;
                $data[$index]['personal_record'] = $record->value;
                $data[$index]['name_movement'] = $record->movements->name;
                $data[$index]['date'] = $record->date;

                if($record->value !== $value) {
                    $position++;
                }
                $data[$index]['position'] = $position;

                $value = $record->value;

            }
            return response($data,200);

        }catch(\Exception $e){
            response($e->getMessage(),500);
        }

    }
}
