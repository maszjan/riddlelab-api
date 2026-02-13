<?php

namespace Database\Seeders;

use App\Enums\AssetType;
use App\Models\Asset;
use Illuminate\Database\Seeder;

class AssetSeeder extends Seeder
{
    public function run(): void
    {
        foreach (range(1, 5) as $i) {
            Asset::create([
                'owner_id' => null,
                'name' => "Door Texture {$i}",
                'type' => AssetType::Door->value,
                'image_url' => "textures/door/door{$i}.png",
                'is_public' => true,
            ]);
        }

        foreach (range(1, 5) as $i) {
            Asset::create([
                'owner_id' => null,
                'name' => "Floor Texture {$i}",
                'type' => AssetType::Floor->value,
                'image_url' => "textures/floor/floor{$i}.png",
                'is_public' => true,
            ]);
        }

        foreach (range(1, 5) as $i) {
            Asset::create([
                'owner_id' => null,
                'name' => "Prop {$i}",
                'type' => AssetType::Prop->value,
                'image_url' => "textures/props/prop-{$i}.png",
                'is_public' => true,
            ]);
        }

        foreach (range(1, 2) as $i) {
            Asset::create([
                'owner_id' => null,
                'name' => "Riddle {$i}",
                'type' => AssetType::Riddle->value,
                'image_url' => "textures/riddles/riddle-{$i}.png",
                'is_public' => true,
            ]);
        }
    }
}
