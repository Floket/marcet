<?php
namespace App\Http\Controllers;
use App\Models\Item;
use Illuminate\Http\Request;
class PostController extends Controller
{
    public function index(Request $request)
    {
        $descriptions = addslashes($request->input('description'));
        $file = $request->file('img');
        if ($request->method() == 'POST') {
            if ($request->input('type') == 'post') {
                //dd($request->all());

                Item::create([
                    'names' => $request->input('name'),
                    'years' => $request->input('year'),
                    'imgs' => 'img/'.$request->input('img'),
                    'genres' => $request->input('genre'),
                    'descriptions' => $descriptions,
                    'costs' => $request->input('cost'),
                    'links' => $request->input('link')
                ]);

            } else {
                $id = $request->input('id');
                Item::where('id', "$id")->update([
                    'names' => $request->input('name'),
                    'years' => $request->input('year'),
                    'genres' => $request->input('genre'),
                    'imgs' => $file->getClientOriginalName(),
                    'descriptions' => $request->input('description'),
                    'costs' => $request->input('cost')
                ]);
            }
            unset($request);
        }
        $items = Item::all();
        return view('admin', compact('items'));
    }
    public function show($id)
    {
        $item = Item::where('id', '=', "$id")->first();
        return view('update', compact('item'));
    }
}
