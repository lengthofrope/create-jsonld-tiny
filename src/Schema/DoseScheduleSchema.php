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
 * A specific dosing schedule for a drug or supplement.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class DoseScheduleSchema extends MedicalIntangibleSchema
{
    public static function factory()
    {
        return new DoseScheduleSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * The unit of the dose, e.g. 'mg'.
     **/
    private $doseUnit;
    public function setDoseUnit($doseUnit) {
        $this->doseUnit = $doseUnit;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getDoseUnit() {
        return $this->doseUnit;
    }

    /**
     * The value of the dose, e.g. 500.
     **/
    private $doseValue;
    public function setDoseValue($doseValue) {
        $this->doseValue = $doseValue;

        return $this;
    }

    /**
     * @return NumberSchema     **/
    public function getDoseValue() {
        return $this->doseValue;
    }

    /**
     * How often the dose is taken, e.g. 'daily'.
     **/
    private $frequency;
    public function setFrequency($frequency) {
        $this->frequency = $frequency;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getFrequency() {
        return $this->frequency;
    }

    /**
     * Characteristics of the population for which this is intended, or which typically uses it, e.g. 'adults'.
     **/
    private $targetPopulation;
    public function setTargetPopulation($targetPopulation) {
        $this->targetPopulation = $targetPopulation;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getTargetPopulation() {
        return $this->targetPopulation;
    }


}
