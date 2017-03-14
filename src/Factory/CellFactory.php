<?php

namespace Dwr\GameOfLive\Factory;

use Dwr\GameOfLive\Cell;
use Dwr\GameOfLive\ValueObject\Latitude;
use Dwr\GameOfLive\ValueObject\Longitude;
use Dwr\GameOfLive\ValueObject\Position;

class CellFactory
{
    /**
     * @param array $data
     * @return Cell
     */
    public static function createCell(array $data)
    {
        $latitude = new Latitude($data['lat']);
        $longitude = new Longitude($data['long']);
        $position = new Position($latitude, $longitude);

        return new Cell($position);
    }
}
