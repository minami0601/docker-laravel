<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\TweetRequest;
use App\Models\Tweet;
use App\Packages\Domain\Tweet\Dto\TweetCreateInputData;
use App\Packages\UseCase\Tweet\TweetCreateUseCaseInterface;
use Packages\UseCase\Tweet\TweetCreateInteractor;

class TweetController extends Controller
{
    public function __construct(TweetCreateUseCaseInterface $tweetCreateUseCase)
    {
        $this->tweetCreateUseCase = $tweetCreateUseCase;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tweets.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tweets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TweetRequest $request)
    {
        $validated = $request->validated();
        $user_id = Auth::id();

        $tweetInputData = new TweetCreateInputData(
            $user_id,
            $validated['content']
        );
        
        $this->tweetCreateUseCase->handle($tweetInputData);

        return to_route('tweets.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}