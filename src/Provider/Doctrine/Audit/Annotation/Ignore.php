<?php

namespace DH\Auditor\Provider\Doctrine\Audit\Annotation;

use Doctrine\Common\Annotations\Annotation;

/**
 * @Annotation
 *
 * @Target("PROPERTY")
 */
final class Ignore extends Annotation
{
}