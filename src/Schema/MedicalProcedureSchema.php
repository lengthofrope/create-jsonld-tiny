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
 * A process of care used in either a diagnostic, therapeutic, or palliative capacity that relies on invasive (surgical), non-invasive, or percutaneous techniques.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class MedicalProcedureSchema extends MedicalEntitySchema
{
    public static function factory()
    {
        return new MedicalProcedureSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * Typical or recommended followup care after the procedure is performed.
     **/
    private $followup;
    public function setFollowup($followup) {
        $this->followup = $followup;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getFollowup() {
        return $this->followup;
    }

    /**
     * How the procedure is performed.
     **/
    private $howPerformed;
    public function setHowPerformed($howPerformed) {
        $this->howPerformed = $howPerformed;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getHowPerformed() {
        return $this->howPerformed;
    }

    /**
     * Typical preparation that a patient must undergo before having the procedure performed.
     **/
    private $preparation;
    public function setPreparation($preparation) {
        $this->preparation = $preparation;

        return $this;
    }

    /**
     * @return TextSchema     **/
    public function getPreparation() {
        return $this->preparation;
    }

    /**
     * The type of procedure, for example Surgical, Noninvasive, or Percutaneous.
     **/
    private $procedureType;
    public function setProcedureType($procedureType) {
        $this->procedureType = $procedureType;

        return $this;
    }

    /**
     * @return MedicalProcedureTypeSchema     **/
    public function getProcedureType() {
        return $this->procedureType;
    }


}
