<?php

namespace PHPPeru\TicTacToe;

class Board
{
    protected $_board = array(
                            null,null,null,
                            null,null,null,
                            null,null,null,
                        );

    public function markPosition($position, $symbol)
    {
        if ($this->isPositionValid($position) && $this->_board[$position] == null) {
             $this->_board[$position] = $symbol;
        } else {
            throw new \Exception("Invalid position {$position}.");
        }
    }

    public function getPosition($position)
    {
        if ($this->isPositionValid($position)) {
            return $this->_board[$position];
        } else {
            throw new \Exception("Invalid position {$position}.");
        }
    }

    public function isFull()
    {
        foreach ($this->_board as $position) {
            if ($position == null) {
                return false;
            }
        }
        return true;
    }

    public function getAvailablePosition()
    {
        $position = null;
        foreach ($this->_board as $field => $value) {
            if ($value == null) {
                $position = $field;
                break;
            }
        }

        if ($position != null) {
            return $position;
        }

        throw new \Exception('Could not find position, board is full.');
    }

    public function isPositionValid($position)
    {
        if (array_key_exists($position, $this->_board)) {
            return true;
        }
        return false;
    }
}

