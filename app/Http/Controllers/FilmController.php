<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;
use App\Http\Requests\StoreFilmRequest;




class FilmController extends Controller
{
    public function index()
    {
        $films = Film::all();
        return view('films.index', compact('films'));
    }


    public function create()
    {

        return view('films.create');
    }



    public function store(StoreFilmRequest $request)
    {


        $path_image = '';
        if ($request->hasFile('cover')) {
            $file_name = $request->file('cover')->getClientOriginalName();
            $path_image = $request->file('cover')->storeAs('cover', $file_name, 'public');
            //qui images è la cartella storage/images che contiene il file ed è settato public, in piu c'è $file_name perche posso scegliere il nome con cui salvarlo 
        }
        //NB  non usando path image e if potrei usare semplicemente in create /*  'image'=>$request->file('image')->store('cover','public'), qui 'cover' è storage/cover che contiene il file uploadato  */
        Film::create([
            'title' => $request->title,
            'description' => $request->description,
            'release_year' => $request->release_year,
            'genre' => $request->genre,
            'cover' => $path_image,

            'duration' => $request->duration,
           

        ]);

        return redirect()->route('films.index')->with('success', 'film aggiunto con successo!');
    }
}
