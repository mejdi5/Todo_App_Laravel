<?php

namespace App\Http\Controllers;

use App\Http\Requests\FilterRequest;
use App\Models\Tag;
use App\Http\Requests\TagRequest;
use App\Http\Requests\UpdateTagRequest;

class TagController extends Controller
{
    public function index(FilterRequest $request) {
        try {
            $tags = $request->get('status') !== null
            ? Tag::where('status', $request->get('status'))->get()
            : Tag::all();
            return response()->json($tags);
        } catch (\Throwable $th) {
            return response()->json($th->getMessage());
        }
    }

    public function store(TagRequest $request) {
        try {
            $tag = new Tag;
            $tag = $tag->newInstance([
                'title' => $request->get('title'),
                'description' => $request->get('description'),
                'status' => 0
            ]);
            $tag->save();
            return $tag;
        } catch (\Throwable $th) {
            return response()->json($th->getMessage());
        }
    }

    public function update(UpdateTagRequest $request, $id) {
        try {
            $tag = Tag::find($id);
            $tag->update([
                'title' => $request->get('title') ?? $tag->title,
                'description' => $request->get('description') ?? $tag->description,
                'status' => $request->get('status') ?? $tag->status
            ]);

            return response()->json($tag);

        } catch (\Throwable $th) {
            return response()->json($th->getMessage());
        }
    }
}
