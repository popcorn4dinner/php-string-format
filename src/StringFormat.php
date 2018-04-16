<?php

namespace Popcorn4dinner\StringFormat;

class StringFormat
{

    public static function toSnakeCase(string $camelCaseInput): string
    {
        preg_match_all('!([A-Z][A-Z0-9]*(?=$|[A-Z][a-z0-9])|[A-Za-z][a-z0-9]+)!', $camelCaseInput, $matches);

        $ret = $matches[0];
        foreach ($ret as &$match) {
            $match = $match == strtoupper($match) ? strtolower($match) : lcfirst($match);
        }

        return implode('_', $ret);
    }

    public static function toPascalCase(string $snakeCaseInput): string
    {
        return str_replace('_', '', ucwords(strtolower($snakeCaseInput), '_'));
    }

    public static function toCamelCase(string $snakeCaseInput): string
    {
        return lcfirst(self::toPascalCase($snakeCaseInput));
    }
}
