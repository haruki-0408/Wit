<?php

namespace Database\Factories;

use App\Models\Room;
use App\Models\Tag;

use Illuminate\Database\Eloquent\Factories\Factory;

class RoomTagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    

    public function definition()
    {
        return [
            'room_id' => Room::factory(),
            'tag_id'=> 'ac0df662-45ff-4053-aedf-de4515901373',          
        ];
    }
}
