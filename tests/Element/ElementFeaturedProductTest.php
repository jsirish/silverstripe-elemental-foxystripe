<?php

namespace Dynamic\Elements\FoxyStripe\Test;

use Dynamic\Elements\FoxyStripe\Element\ElementFeaturedProducts;
use SilverStripe\Dev\SapphireTest;
use SilverStripe\Forms\FieldList;

class ElementFeaturedProductTest extends SapphireTest
{
    /**
     * @var string
     */
    protected static $fixture_file = '../fixtures.yml';

    /**
     *
     */
    public function testGetCMSFields()
    {
        $object = $this->objFromFixture(ElementFeaturedProducts::class, 'one');
        $fields = $object->getCMSFields();
        $this->assertInstanceOf(FieldList::class, $fields);
    }
}
