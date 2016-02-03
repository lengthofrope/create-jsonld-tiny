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
 * The act of conveying information to another person via a communication medium (instrument) such as speech, email, or telephone conversation.
 *
 * @author LengthOfRope, Bas de Kort <bdekort@gmail.com>
 **/
class CommunicateActionSchema extends InteractActionSchema
{
    public static function factory()
    {
        return new CommunicateActionSchema();
    }

    public function getDataArray()
    {
        return array();
    }

    /**
     * The subject matter of the content.
     **/
    private $about;
    public function setAbout($about) {
        $this->about = $about;

        return $this;
    }

    /**
     * @return ThingSchema     **/
    public function getAbout() {
        return $this->about;
    }

    /**
     * The language of the content or performance or used in an action. Please use one of the language codes from the <a href='http://tools.ietf.org/html/bcp47'>IETF BCP 47 standard</a>.
     **/
    private $inLanguage;
    public function setInLanguage($inLanguage) {
        $this->inLanguage = $inLanguage;

        return $this;
    }

    /**
     * @return TextSchema|LanguageSchema     **/
    public function getInLanguage() {
        return $this->inLanguage;
    }

    /**
     * A sub property of instrument. The language used on this action.
     **/
    private $language;
    public function setLanguage($language) {
        $this->language = $language;

        return $this;
    }

    /**
     * @return LanguageSchema     **/
    public function getLanguage() {
        return $this->language;
    }

    /**
     * A sub property of participant. The participant who is at the receiving end of the action.
     **/
    private $recipient;
    public function setRecipient($recipient) {
        $this->recipient = $recipient;

        return $this;
    }

    /**
     * @return AudienceSchema|OrganizationSchema|PersonSchema     **/
    public function getRecipient() {
        return $this->recipient;
    }


}
