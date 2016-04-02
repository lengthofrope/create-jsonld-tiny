# create-jsonld-tiny [![Build Status](https://travis-ci.org/lengthofrope/create-jsonld-tiny.svg?branch=master)](https://travis-ci.org/lengthofrope/create-jsonld-tiny) [![Codacy Badge](https://api.codacy.com/project/badge/grade/698e66b782eb46f5a1999d05185f5636)](https://www.codacy.com/app/bdekort/create-jsonld-tiny)

Simple PHP library to create JSON-LD output. Tiny version!

Note:
Datatypes are not yet supported

This is the TINY VERSION of the class, mainly there for the following schema's:
- Article, 
- BlogPosting, 
- Book, 
- Code, 
- Game, 
- Movie, 
- MusicRecording, 
- Painting, 
- Photograph, 
- Recipe, 
- Organization, 
- Corporation, 
- LocalBusiness, 
- SportsOrganization, 

Usage:
```php
use \LengthOfRope\JSONLD;
use \LengthOfRope\JSONLD\Schema;

$Create = JSONLD\Create::factory()->add(
    Schema\BookSchema::factory()
        ->setAuthor(Schema\PersonSchema::factory()->setName("NAME")->setEmail("email@example.com"))
        ->setAbout("PHP")
        ->setName("Superb PHP Book")
        ->setAlternateName("Book one of three")
)->add(
    Schema\OrganizationSchema::factory()
        ->setAddress(
            Schema\PostalAddressSchema::factory()
                ->setPostalCode("1234 AA")
                ->setStreetAddress("Somewhere 12")
                ->setAddressCountry("NL")
                ->setAddressLocality("Amersfoort")
                ->setEmail("email@example.com")
                ->setTelephone("033-1234567")
                ->setAddressRegion("Utrecht")
        )
        ->setName("Devver Company")
        ->setDescription("Just another developer")
);

echo $Create->getJSONLDScript();
```