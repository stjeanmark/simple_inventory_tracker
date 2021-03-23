<?php
// src/EventListener/ReplaceInsertTagsListener.php
namespace Asc\Backend\Listener\ContaoHooks;

use Contao\CoreBundle\ServiceAnnotation\Hook;

/**
 * @Hook("replaceInsertTags")
 */
class ReplaceInsertTagsListener
{
    public function __invoke(
        string $insertTag,
        bool $useCache,
        string $cachedValue,
        array $flags,
        array $tags,
        array $cache,
        int $_rit,
        int $_cnt
    )
    {
        if ('mytag' === $insertTag) {
            return 'mytag replacement';
        }
        else
            return "TAGHERE";

        return false;
    }
}
