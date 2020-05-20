<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Domain\Room\Commands\CreateRoomCommand;
use Domain\Room\Requests\CreateRoomRequest;
use Domain\RoomCategory\Queries\GetRoomCategoryByUuidQuery;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class RoomController extends Controller
{
    /**
     * @param string $uuid
     * @return Application|Factory|View
     */
    public function create(string $uuid)
    {
        $roomCategory = $this->dispatch(new GetRoomCategoryByUuidQuery($uuid));

        return view('rooms.create', [
            'roomCategory' => $roomCategory
        ]);
    }

    /**
     * @param CreateRoomRequest $request
     * @param string $uuid
     * @return Application|RedirectResponse|Redirector
     */
    public function store(CreateRoomRequest $request, string $uuid)
    {
        $roomCategory = $this->dispatch(new GetRoomCategoryByUuidQuery($uuid));

        $this->dispatch(new CreateRoomCommand($request, $roomCategory));

        return redirect(route('room_categories.index'))
            ->with('info', 'dd');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
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
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
