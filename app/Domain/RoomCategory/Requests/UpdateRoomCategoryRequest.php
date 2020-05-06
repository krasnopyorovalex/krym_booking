<?php

declare(strict_types=1);

namespace Domain\RoomCategory\Requests;

use App\Http\Requests\Request;

class UpdateRoomCategoryRequest extends Request
{
    /**
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255'
        ];
    }
}
