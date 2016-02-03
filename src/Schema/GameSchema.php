<?php

/*
 * The MIT License
 *
 * Copyright 2016 LengthOfRope, Bas de Kort <bdekort@gmail.com>.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 **/

namespace LengthOfRope\JSONLD\Schema;

/**
 * The Game type represents things which are games. These are typically rule-governed recreational activities, e.g. role-playing games in which players assume the role of characters in a fictional setting. See also <a href="https://github.com/rvguha/schemaorg/issues/169">open issues list</a>.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class GameSchema extends CreativeWorkSchema
{
    public static function factory()
    {
        return new GameSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * A piece of data that represents a particular aspect of a fictional character (skill, power, character points, advantage, disadvantage).
     **/
    private $characterAttribute;
    public function setCharacterAttribute($characterAttribute) {
        $this->characterAttribute = $characterAttribute;

        return $this;
    }

    /**
     * @return ThingSchema     **/
    public function getCharacterAttribute() {
        return $this->characterAttribute;
    }

    /**
     * An item is an object within the game world that can be collected by a player or, occasionally, a non-player character.
     **/
    private $gameItem;
    public function setGameItem($gameItem) {
        $this->gameItem = $gameItem;

        return $this;
    }

    /**
     * @return ThingSchema     **/
    public function getGameItem() {
        return $this->gameItem;
    }

    /**
     * Real or fictional location of the game (or part of game).
     **/
    private $gameLocation;
    public function setGameLocation($gameLocation) {
        $this->gameLocation = $gameLocation;

        return $this;
    }

    /**
     * @return URLSchema|PlaceSchema|PostalAddressSchema     **/
    public function getGameLocation() {
        return $this->gameLocation;
    }

    /**
     * Indicate how many people can play this game (minimum, maximum, or range).
     **/
    private $numberOfPlayers;
    public function setNumberOfPlayers($numberOfPlayers) {
        $this->numberOfPlayers = $numberOfPlayers;

        return $this;
    }

    /**
     * @return QuantitativeValueSchema     **/
    public function getNumberOfPlayers() {
        return $this->numberOfPlayers;
    }

    /**
     * The task that a player-controlled character, or group of characters may complete in order to gain a reward.
     **/
    private $quest;
    public function setQuest($quest) {
        $this->quest = $quest;

        return $this;
    }

    /**
     * @return ThingSchema     **/
    public function getQuest() {
        return $this->quest;
    }


}
