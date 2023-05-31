<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = config("db");
        $comics = Comic::all();
        return view('home', compact('comics', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = config("db");
        return view('comics.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComicRequest $request)
    {
        $form_data = $request->validated();
        $newComic = Comic::create($form_data);
        return redirect()->route('home')->with('message', "The comic {$newComic->id} saved with success");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        $data = config("db");
        return view('comics.show' , compact ('comic' ,'data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        $data = config("db");
        return view('comics.edit' , compact('comic' , 'data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComicRequest $request, Comic $comic)
    {
        $form_data = $request->validated();
        $comic->update($form_data);
        $data = config("db");
        return view('comics.show', compact('comic' , 'data'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $title = $comic->title;
        $comic->delete();
        return redirect()->route('home')->with('success', $title . ' deleted');
    }

    private function validation($data)
    {
        $validator = Validator::make($data,
        [
            'title' => 'required|max:255|min:3',
            'description'=> 'required|max:500|min:15',
            'price' => 'required|max:50',
            'series'=> 'required|max:255|min:3',
            'type'=> 'required|max:255|min:3',
            'thumb' => 'required|max:255',
            'sale_date'=> 'required'
        ],
        [
                'title.required' => "You must add a title",
                'title.max' => "title is longer than 255",
                'title.min' => "title is shorter than 3",
                'description.required' => "You must add a description",
                'description.max' => "description is longer than 255",
                'description.min' => "description is shorter than 3",
                'series.required' => "You must add a series",
                'series.max' => "series is longer than 255",
                'series.min' => "series is shorter than 3",
                'type.required' => "You must add a type",
                'type.max' => "type is longer than 255",
                'type.min' => "type is shorter than 3",
                'thumb.required' => "You must add a thumb",
                'thumb.max' => "thumb is longer than 255",
                'thumb.min' => "thumb is shorter than 3",
                'price.required' => "You must add a price",
                'price.max' => "thumb is higher than 50",
                'sale_date.required' => "You must add a sale date"
        ])->validate();
        return $validator;

    }
}

