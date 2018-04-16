<?php

namespace Popcorn4dinner\StringFormat\Tests;

use PHPUnit\Framework\TestCase;
use Popcorn4dinner\StringFormat\StringFormat;
use Symfony\Component\HttpFoundation\Request;

class StringFormatTest extends TestCase
{

    /**
     * toSnakeCase
     */
    function test_toSnakeCase_WithOnlyLowercaseString()
    {
        $this->assertEquals('works', StringFormat::toSnakeCase('works'));
    }

    function test_toSnakeCase_WithOnlyUppercaseString()
    {
        $this->assertEquals('works', StringFormat::toSnakeCase('WORKS'));
    }

    function test_toSnakeCase_WithCamalcaseString()
    {
        $this->assertEquals('it_works', StringFormat::toSnakeCase('itWorks'));
    }

    function test_toSnakeCase_WithPascalcaseString()
    {
        $this->assertEquals('it_works', StringFormat::toSnakeCase('ItWorks'));
    }


    /**
     * toPascalCase
     */
    function test_toPascalCase_withLowerSnakeCaseInput()
    {
        $this->assertEquals('ItWorks', StringFormat::toPascalCase('it_works'));
    }

    function test_toPascalCase_withUpperSnakeCaseInput()
    {
        $this->assertEquals('ItWorks', StringFormat::toPascalCase('IT_WORKS'));
    }


    /**
     * toCamelCase
     */
    function test_toCamelCase_withLowerSnakeCaseInput()
    {
        $this->assertEquals('itWorks', StringFormat::toCamelCase('it_works'));
    }

    function test_toCamelCase_withUpperSnakeCaseInput()
    {
        $this->assertEquals('itWorks', StringFormat::toCamelCase('IT_WORKS'));
    }
}
