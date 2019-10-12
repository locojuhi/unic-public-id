<?php

declare(strict_types = 1);

namespace UnicPublicId;


class PublicId
{
    /**
     * @param null $object
     * @return string
     * @throws \Exception
     */
    public static function generate($object = null)
    {
        if ($object != null && !is_object($object)) {
            throw new \Exception('parameter is not an object');
        }

        $classToHash = $object ? get_class($object) : __CLASS__;
        $publicId = sha1(uniqid($classToHash, true));

        return $publicId;
    }
}
