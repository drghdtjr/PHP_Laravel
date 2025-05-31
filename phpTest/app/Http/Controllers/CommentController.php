<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/**
 * @OA\Tag(
 *     name="Comments",
 *     description="Comments management API"
 * )
 */
class CommentController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/comments",
     *     tags={"Comments"},
     *     summary="Get list of commets",
     *     @OA\Response(response=200, description="OK")
     * )
     */
    public function index()
    {
        return response()->json(['message' => 'commentindex']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
