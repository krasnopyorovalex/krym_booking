<?php

declare(strict_types=1);

namespace Domain\Room\Requests;

use App\Http\Requests\Request;

class CreateRoomRequest extends Request
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
