<?php
// src/EventListener/ReplaceInsertTagsListener.php
namespace App\EventListener;

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
        console.log("hit");
        if ('mytag' === $insertTag) {
            return 'mytag replacement';
        }
        if ('simple_inventory' === $insertTag) {
            return 'DING';
        }

        return false;
    }
}
?>
