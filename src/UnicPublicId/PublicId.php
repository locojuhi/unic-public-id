<?php

declare(strict_types = 1);

namespace UnicPublicId;

/**
 * Class PublicId
 * @package UnicPublicId
 */
class PublicId
{
    /**
     * It generates a unic id hashed as string
     * @param null $object
     * @return string
     * @throws \Exception
     */
    public static function generate($object = null) : string
    {
        if ($object != null && !is_object($object)) {
            throw new \Exception('parameter is not an object');
        }

        $classToHash = $object ? get_class($object) : __CLASS__;
        $publicId = sha1(uniqid($classToHash, true));

        return $publicId;
    }
}
