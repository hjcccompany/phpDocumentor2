<?php
declare(strict_types=1);

/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author    Mike van Riel <mike.vanriel@naenius.com>
 * @copyright 2010-2018 Mike van Riel / Naenius (http://www.naenius.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Descriptor\Builder\Reflector\Tags;

use phpDocumentor\Descriptor\Builder\Reflector\AssemblerAbstract;
use phpDocumentor\Descriptor\Tag\ThrowsDescriptor;
use phpDocumentor\Reflection\DocBlock\Tags\Throws;

/**
 * Constructs a new descriptor from the Reflector for an `@throws` tag.
 *
 * This object will read the reflected information for the `@throws` tag and create a {@see ThrowsDescriptor} object
 * that can be used in the rest of the application and templates.
 */
class ThrowsAssembler extends AssemblerAbstract
{
    /**
     * Creates a new Descriptor from the given Reflector.
     *
     * @param Throws $data
     *
     * @return ThrowsDescriptor
     */
    public function create($data)
    {
        $descriptor = new ThrowsDescriptor($data->getName());
        $descriptor->setDescription($data->getDescription());
        $descriptor->setTypes($data->getType());

        return $descriptor;
    }
}
