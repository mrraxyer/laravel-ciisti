<?php

namespace App\Http\Controllers;

class GameController extends Controller
{
    public function index()
    {
        $games = $this->getGames();

        $exists = count($games) > 0 ? true : false;

        return view('games.index', compact('games', 'exists'));
    }

    private function getGames()
    {
        return [
            ['id' => 1, 'image' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/108600/e0dd37d69051f7da85896d11027ab018d23893fa/ss_e0dd37d69051f7da85896d11027ab018d23893fa.1920x1080.jpg?t=1793224893', 'name' => 'The Legend of Zelda', 'genre' => 'Adventure'],
            ['id' => 2, 'image' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/108600/e0dd37d69051f7da85896d11027ab018d23893fa/ss_e0dd37d69051f7da85896d11027ab018d23893fa.1920x1080.jpg?t=1793224893', 'name' => 'Super Mario Bros.', 'genre' => 'Platformer'],
            ['id' => 3, 'image' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/108600/e0dd37d69051f7da85896d11027ab018d23893fa/ss_e0dd37d69051f7da85896d11027ab018d23893fa.1920x1080.jpg?t=1793224893', 'name' => 'Minecraft', 'genre' => 'Sandbox'],
            ['id' => 4, 'image' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/108600/e0dd37d69051f7da85896d11027ab018d23893fa/ss_e0dd37d69051f7da85896d11027ab018d23893fa.1920x1080.jpg?t=1793224893', 'name' => 'Fortnite', 'genre' => 'Battle Royale'],
            ['id' => 5, 'image' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/108600/e0dd37d69051f7da85896d11027ab018d23893fa/ss_e0dd37d69051f7da85896d11027ab018d23893fa.1920x1080.jpg?t=1793224893', 'name' => 'Call of Duty', 'genre' => 'First-Person Shooter'],
        ];
    }
}
