<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Models\Genre;
use App\Models\Track;
use Carbon\carbon;
use Log;
use DB;

class MusicController extends Controller
{

  public function addGenres(Request $request)
  {
     $name = $request['name'];

     if($name != null) {
       $gen = new Genre();
       $gen->name = $name;
       $gen->save();

       return Response::json(['success'=>'data added successfully'], 200);

     } else {

       return Response::josn(['Error'=>' Data not found!'], 405);
     }

  }

  public function showGenres(Request $request)
  {
      $geners = DB::table('genres')
                   ->select('genres.*')
                   ->where('genres.status', '=', 1)
                   ->orderBy('id', 'DESC')
                   ->get();

       return Response::json(['genres'=>$geners], 200);             
  }

  public function editGenres(Request $request)
  {
       $genres_id = $request['id'];
       $name = $request['name'];
       $date = Carbon::now();

       if(!empty($name)) {

        $update = DB::table('genres')
                     ->where('genres.id', '=', $genres_id)                     
                     ->update(['genres.name'=>$name, 'genres.updated_at'=>$date], 200);

        return Response::json(['success'=>'updated data successfully'], 200);              
       } else {
          return Response::json(['Error'=>'No data found'], 405);
       }
  }


  public function deleteGenres(Request $request)
    {
         $genres_id = $request['id'];
         Log::info($genres_id);
         $date = Carbon::now();

        
         if(!empty($genres_id)) {

          $update = DB::table('genres')
                       ->where('genres.status', '=', 1)
                       ->where('genres.id', '=', $genres_id)
                       ->update(['genres.status'=>0, 'genres.updated_at'=>$date], 200);

          return Response::json(['success'=>'deleted data successfully'], 200);              
         } else {
            return Response::json(['Error'=>'No data found'], 405);
         }
    }


//************* Track APis ****************

  public function addTrack(Request $request)
  {
     $name = $request['name'];
     $rating = $request['rating'];
     $genres_id = $request['genres_id'];

     Log::info($name);
     Log::info($rating);
     Log::info($genres_id);

     if($request != null) {
       $track = new Track();
       $track->name = $name;
       $track->rating = $rating;
       $track->genres_id = $genres_id;
       $track->save();

       return Response::json(['success'=>'data added successfully'], 200);

     } else {

       return Response::josn(['Error'=>' Data not found!'], 405);
     }

  }

  public function showTracks(Request $request)
  {
      $track = DB::table('tracks')
                   ->join('genres', 'genres.id', '=', 'tracks.genres_id')
                   ->select('tracks.id as track_id', 'tracks.name as track_name', 'tracks.rating', 'tracks.genres_id',
                            'tracks.active','genres.name','genres.status')
                   ->where('genres.status', '=', 1)
                   ->where('tracks.active', '=', 1)
                   ->orderBy('tracks.id', 'DESC')
                   ->get();

       foreach($track as $t){
        $t->rating = 'star'.'-'.$t->rating;
        $t->star = $t->rating;
       }            


          Log::info($track);

       return Response::json(['track'=>$track], 200);             
  }

  public function editTracks(Request $request)
  {
       $track_id = $request['track_id'];
       $genres_id = $request['genres_id'];
       $name = $request['name'];
       $rating = $request['rating'];
       $date = Carbon::now();

       if(!empty($request)) {

       $geners = DB::table('tracks')
                         ->join('genres', 'genres.id', '=', 'tracks.genres_id')
                         ->select('tracks.id', 'tracks.name as tracks_name', 'tracks.rating', 'tracks.genres_id',
                                  'genres.name','genres.status')
                         ->where('tracks.id', '=', $track_id)
                         ->update(['tracks.name'=>$name,'tracks.genres_id'=>$genres_id,'tracks.updated_at'=>$date,
                                   'tracks.rating'=>$rating], 200);

        return Response::json(['success'=>'updated data successfully'], 200);              
       } else {
          return Response::json(['Error'=>'No data found'], 405);
       }
  }


  public function deleteTrack(Request $request)
    {
         $track_id = $request['track_id'];
        
           Log::info($track_id);
           $date = Carbon::now();

        
         if(!empty($track_id)) {

          $update = DB::table('tracks')
                       ->where('tracks.id', '=', $track_id)
                       ->update(['tracks.active'=>0, 'tracks.updated_at'=>$date], 200);

           return Response::json(['success'=>'deleted data successfully'], 200);              
         } else {
            return Response::json(['Error'=>'No data found'], 405);
         }

          
    }

  




  } // class end
