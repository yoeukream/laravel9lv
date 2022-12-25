<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $clients = Client::latest()->paginate(10);
        $data['clients'] = Client::latest()->paginate(10);
        // $data['users']=User::get();

        // return view('clients.index', compact('clients','users'));
        return view('clients.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Client::create(array_merge($request->only('title', 'description', 'body'),[
            'user_id' => auth()->id()
        ]));

        return redirect()->route('clients.index')
            ->withSuccess(__('Post created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Client $post)
    {
        return view('clients.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $post)
    {
        return view('clients.edit', [
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $post)
    {
        $post->update($request->only('title', 'description', 'body'));

        return redirect()->route('clients.index')
            ->withSuccess(__('Post updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $post)
    {
        $post->delete();

        return redirect()->route('clients.index')
            ->withSuccess(__('Post deleted successfully.'));
    }
}
