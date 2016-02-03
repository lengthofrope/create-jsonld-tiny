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
 * A unique instance of a BroadcastService on a CableOrSatelliteService lineup.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class BroadcastChannelSchema extends IntangibleSchema
{
    public static function factory()
    {
        return new BroadcastChannelSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * The unique address by which the BroadcastService can be identified in a provider lineup. In US, this is typically a number.
     **/
    private $broadcastChannelId;
    public function setBroadcastChannelId($broadcastChannelId) {
        $this->broadcastChannelId = $broadcastChannelId;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getBroadcastChannelId() {
        return $this->broadcastChannelId;
    }

    /**
     * The type of service required to have access to the channel (e.g. Standard or Premium).
     **/
    private $broadcastServiceTier;
    public function setBroadcastServiceTier($broadcastServiceTier) {
        $this->broadcastServiceTier = $broadcastServiceTier;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getBroadcastServiceTier() {
        return $this->broadcastServiceTier;
    }

    /**
     * The CableOrSatelliteService offering the channel.
     **/
    private $inBroadcastLineup;
    public function setInBroadcastLineup($inBroadcastLineup) {
        $this->inBroadcastLineup = $inBroadcastLineup;

        return $this;
    }

    /**
     * @return CableOrSatelliteServiceSchema     **/
    public function getInBroadcastLineup() {
        return $this->inBroadcastLineup;
    }

    /**
     * The BroadcastService offered on this channel.
     **/
    private $providesBroadcastService;
    public function setProvidesBroadcastService($providesBroadcastService) {
        $this->providesBroadcastService = $providesBroadcastService;

        return $this;
    }

    /**
     * @return BroadcastServiceSchema     **/
    public function getProvidesBroadcastService() {
        return $this->providesBroadcastService;
    }


}
