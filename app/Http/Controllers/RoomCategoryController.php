<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Domain\RoomCategory\Commands\CreateRoomCategoryCommand;
use Domain\RoomCategory\Commands\DeleteRoomCategoryCommand;
use Domain\RoomCategory\Commands\UpdateRoomCategoryCommand;
use Domain\RoomCategory\Queries\GetAllRoomCategoriesQuery;
use Domain\RoomCategory\Queries\GetRoomCategoryByUuidQuery;
use Domain\RoomCategory\Requests\CreateRoomCategoryRequest;
use Domain\RoomCategory\Requests\UpdateRoomCategoryRequest;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class RoomCategoryController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $roomCategories = $this->dispatch(new GetAllRoomCategoriesQuery);

        return view('room-categories.index', [
            'roomCategories' => $roomCategories
        ]);
    }

    /**
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('room-categories.create');
    }

    /**
     * @param CreateRoomCategoryRequest $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(CreateRoomCategoryRequest $request)
    {
        $this->dispatch(new CreateRoomCategoryCommand($request));

        return redirect(route('room_categories.index'))
            ->with('info', __('room_category.added'));
    }

    /**
     * @param string $uuid
     * @return Application|Factory|View
     */
    public function edit(string $uuid)
    {
        try {
            $roomCategory = $this->dispatch(new GetRoomCategoryByUuidQuery($uuid));
        } catch (ModelNotFoundException $exception) {
            return redirect(route('room_categories.index'))
                ->with('error', $exception->getMessage());
        }

        return view('room-categories.edit', [
            'roomCategory' => $roomCategory
        ]);
    }

    /**
     * @param UpdateRoomCategoryRequest $request
     * @param string $uuid
     * @return Application|RedirectResponse|Redirector
     */
    public function update(UpdateRoomCategoryRequest $request, string $uuid)
    {
        try {
            $this->dispatch(new UpdateRoomCategoryCommand($request, $uuid));
        } catch (ModelNotFoundException $exception) {
            return redirect(route('room_categories.index'))
                ->with('error', $exception->getMessage());
        }

        return redirect(route('room_categories.index'))
            ->with('info', __('room_category.updated'));
    }

    /**
     * @param string $uuid
     * @return Application|RedirectResponse|Redirector
     */
    public function destroy(string $uuid)
    {
        try {
            $this->dispatch(new DeleteRoomCategoryCommand($uuid));
        } catch (ModelNotFoundException $exception) {
            return redirect(route('room_categories.index'))
                ->with('error', $exception->getMessage());
        }

        return redirect(route('room_categories.index'))
            ->with('info', __('room_category.deleted'));
    }
}
