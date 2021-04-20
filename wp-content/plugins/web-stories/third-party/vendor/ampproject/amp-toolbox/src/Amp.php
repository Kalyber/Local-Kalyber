<?php

namespace Google\Web_Stories_Dependencies\AmpProject;

use Google\Web_Stories_Dependencies\AmpProject\Dom\Document;
use Google\Web_Stories_Dependencies\AmpProject\Dom\Element;
use DOMNode;
/**
 * Central helper functionality for all Amp-related PHP code.
 *
 * @package ampproject/amp-toolbox
 */
final class Amp
{
    /**
     * List of AMP attribute tags that can be appended to the <html> element.
     *
     * The *_ALT version represent a Unicode variation of the lightning emoji.
     * @see https://github.com/ampproject/amphtml/issues/25990
     *
     * @var string[]
     */
    const TAGS = [\Google\Web_Stories_Dependencies\AmpProject\Attribute::AMP, \Google\Web_Stories_Dependencies\AmpProject\Attribute::AMP_EMOJI, \Google\Web_Stories_Dependencies\AmpProject\Attribute::AMP_EMOJI_ALT, \Google\Web_Stories_Dependencies\AmpProject\Attribute::AMP4ADS, \Google\Web_Stories_Dependencies\AmpProject\Attribute::AMP4ADS_EMOJI, \Google\Web_Stories_Dependencies\AmpProject\Attribute::AMP4ADS_EMOJI_ALT, \Google\Web_Stories_Dependencies\AmpProject\Attribute::AMP4EMAIL, \Google\Web_Stories_Dependencies\AmpProject\Attribute::AMP4EMAIL_EMOJI, \Google\Web_Stories_Dependencies\AmpProject\Attribute::AMP4EMAIL_EMOJI_ALT];
    /**
     * Host and scheme of the AMP cache.
     *
     * @var string
     */
    const CACHE_HOST = 'https://cdn.ampproject.org';
    /**
     * URL of the AMP cache.
     *
     * @var string
     */
    const CACHE_ROOT_URL = self::CACHE_HOST . '/';
    /**
     * List of valid AMP formats.
     *
     * @var string[]
     */
    const FORMATS = ['AMP', 'AMP4EMAIL', 'AMP4ADS'];
    /**
     * List of dynamic components
     *
     * This list should be kept in sync with the list of dynamic components at:
     *
     * @see https://github.com/ampproject/amphtml/blob/292dc66b8c0bb078bbe3a1bca960e8f494f7fc8f/spec/amp-cache-guidelines.md#guidelines-adding-a-new-cache-to-the-amp-ecosystem
     *
     * @var array[]
     */
    const DYNAMIC_COMPONENTS = [\Google\Web_Stories_Dependencies\AmpProject\Attribute::CUSTOM_ELEMENT => [\Google\Web_Stories_Dependencies\AmpProject\Extension::GEO], \Google\Web_Stories_Dependencies\AmpProject\Attribute::CUSTOM_TEMPLATE => []];
    /**
     * Array of custom element names that delay rendering.
     *
     * @var string[]
     */
    const RENDER_DELAYING_EXTENSIONS = [\Google\Web_Stories_Dependencies\AmpProject\Extension::DYNAMIC_CSS_CLASSES, \Google\Web_Stories_Dependencies\AmpProject\Extension::EXPERIMENT, \Google\Web_Stories_Dependencies\AmpProject\Extension::STORY];
    /**
     * Standard boilerplate CSS stylesheet.
     *
     * @var string
     */
    const BOILERPLATE_CSS = 'body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}';
    // phpcs:ignore Generic.Files.LineLength.TooLong
    /**
     * Boilerplate CSS stylesheet for the <noscript> tag.
     *
     * @var string
     */
    const BOILERPLATE_NOSCRIPT_CSS = 'body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}';
    // phpcs:ignore Generic.Files.LineLength.TooLong
    /**
     * Boilerplate CSS stylesheet for Amp4Ads & Amp4Email.
     *
     * @var string
     */
    const AMP4ADS_AND_AMP4EMAIL_BOILERPLATE_CSS = 'body{visibility:hidden}';
    /**
     * AMP runtime tag name.
     *
     * @var string
     */
    const RUNTIME = 'amp-runtime';
    // AMP classes reserved for internal use.
    const LAYOUT_ATTRIBUTE = 'i-amphtml-layout';
    const NO_BOILERPLATE_ATTRIBUTE = 'i-amphtml-no-boilerplate';
    const LAYOUT_CLASS_PREFIX = 'i-amphtml-layout-';
    const LAYOUT_SIZE_DEFINED_CLASS = 'i-amphtml-layout-size-defined';
    const SIZER_ELEMENT = 'i-amphtml-sizer';
    const INTRINSIC_SIZER_ELEMENT = 'i-amphtml-intrinsic-sizer';
    /**
     * Maximum size of the CSS styles in bytes.
     *
     * @todo Max size is hard-coded for now until we ported over the generated spec into a reusable package.
     *
     * @var int
     */
    const MAX_CSS_BYTE_COUNT = 75000;
    /**
     * Check if a given node is the AMP runtime script.
     *
     * The AMP runtime script node is of the form '<script async src="https://cdn.ampproject.org...v0.js"></script>'.
     *
     * @param DOMNode $node Node to check.
     * @return bool Whether the given node is the AMP runtime script.
     */
    public static function isRuntimeScript(\DOMNode $node)
    {
        if (!$node instanceof \Google\Web_Stories_Dependencies\AmpProject\Dom\Element || !self::isAsyncScript($node) || self::isExtension($node)) {
            return \false;
        }
        $src = $node->getAttribute(\Google\Web_Stories_Dependencies\AmpProject\Attribute::SRC);
        if (\strpos($src, self::CACHE_ROOT_URL) !== 0) {
            return \false;
        }
        if (\substr($src, -6) !== '/v0.js' && \substr($src, -7) !== '/v0.mjs' && \substr($src, -14) !== '/amp4ads-v0.js' && \substr($src, -15) !== '/amp4ads-v0.mjs') {
            return \false;
        }
        return \true;
    }
    /**
     * Check if a given node is the AMP viewer script.
     *
     * The AMP viewer script node is of the form '<script async
     * src="https://cdn.ampproject.org/v0/amp-viewer-integration-...js>"</script>'.
     *
     * @param DOMNode $node Node to check.
     * @return bool Whether the given node is the AMP runtime script.
     */
    public static function isViewerScript(\DOMNode $node)
    {
        if (!$node instanceof \Google\Web_Stories_Dependencies\AmpProject\Dom\Element || !self::isAsyncScript($node) || self::isExtension($node)) {
            return \false;
        }
        $src = $node->getAttribute(\Google\Web_Stories_Dependencies\AmpProject\Attribute::SRC);
        if (\strpos($src, self::CACHE_HOST . '/v0/amp-viewer-integration-') !== 0) {
            return \false;
        }
        if (\substr($src, -3) !== '.js') {
            return \false;
        }
        return \true;
    }
    /**
     * Check if a given node is an AMP extension.
     *
     * @param DOMNode $node Node to check.
     * @return bool Whether the given node is the AMP runtime script.
     */
    public static function isExtension(\DOMNode $node)
    {
        return !empty(self::getExtensionName($node));
    }
    /**
     * Get the name of the extension.
     *
     * Returns an empty string if the name of the extension could not be retrieved.
     *
     * @param DOMNode $node Node to get the name of.
     * @return string Name of the custom node or template. Empty string if none found.
     */
    public static function getExtensionName(\DOMNode $node)
    {
        if (!$node instanceof \Google\Web_Stories_Dependencies\AmpProject\Dom\Element || $node->tagName !== \Google\Web_Stories_Dependencies\AmpProject\Tag::SCRIPT) {
            return '';
        }
        if ($node->hasAttribute(\Google\Web_Stories_Dependencies\AmpProject\Attribute::CUSTOM_ELEMENT)) {
            return $node->getAttribute(\Google\Web_Stories_Dependencies\AmpProject\Attribute::CUSTOM_ELEMENT);
        }
        if ($node->hasAttribute(\Google\Web_Stories_Dependencies\AmpProject\Attribute::CUSTOM_TEMPLATE)) {
            return $node->getAttribute(\Google\Web_Stories_Dependencies\AmpProject\Attribute::CUSTOM_TEMPLATE);
        }
        if ($node->hasAttribute(\Google\Web_Stories_Dependencies\AmpProject\Attribute::HOST_SERVICE)) {
            return $node->getAttribute(\Google\Web_Stories_Dependencies\AmpProject\Attribute::HOST_SERVICE);
        }
        return '';
    }
    /**
     * Check whether a given node is a script for a render-delaying extension.
     *
     * @param DOMNode $node Node to check.
     * @return bool Whether the node is a script for a render-delaying extension.
     */
    public static function isRenderDelayingExtension(\DOMNode $node)
    {
        $extensionName = self::getExtensionName($node);
        if (empty($extensionName)) {
            return \false;
        }
        return \in_array($extensionName, self::RENDER_DELAYING_EXTENSIONS, \true);
    }
    /**
     * Check whether a given DOM node is an AMP custom element.
     *
     * @param DOMNode $node DOM node to check.
     * @return bool Whether the checked DOM node is an AMP custom element.
     */
    public static function isCustomElement(\DOMNode $node)
    {
        return $node instanceof \Google\Web_Stories_Dependencies\AmpProject\Dom\Element && \strpos($node->tagName, \Google\Web_Stories_Dependencies\AmpProject\Extension::PREFIX) === 0;
    }
    /**
     * Check whether the given document is an AMP story.
     *
     * @param Document $document Document of the page to check within.
     * @return bool Whether the provided document is an AMP story.
     */
    public static function isAmpStory(\Google\Web_Stories_Dependencies\AmpProject\Dom\Document $document)
    {
        foreach ($document->head->childNodes as $node) {
            if ($node instanceof \Google\Web_Stories_Dependencies\AmpProject\Dom\Element && $node->tagName === \Google\Web_Stories_Dependencies\AmpProject\Tag::SCRIPT && $node->getAttribute(\Google\Web_Stories_Dependencies\AmpProject\Attribute::CUSTOM_ELEMENT) === \Google\Web_Stories_Dependencies\AmpProject\Extension::STORY) {
                return \true;
            }
        }
        return \false;
    }
    /**
     * Check whether a given node is an AMP template.
     *
     * @param DOMNode $node Node to check.
     * @return bool Whether the node is an AMP template.
     */
    public static function isTemplate(\DOMNode $node)
    {
        if (!$node instanceof \Google\Web_Stories_Dependencies\AmpProject\Dom\Element) {
            return \false;
        }
        if ($node->tagName === \Google\Web_Stories_Dependencies\AmpProject\Tag::TEMPLATE) {
            return \true;
        }
        if ($node->tagName === \Google\Web_Stories_Dependencies\AmpProject\Tag::SCRIPT && $node->hasAttribute(\Google\Web_Stories_Dependencies\AmpProject\Attribute::TEMPLATE) && $node->getAttribute(\Google\Web_Stories_Dependencies\AmpProject\Attribute::TEMPLATE) === \Google\Web_Stories_Dependencies\AmpProject\Extension::MUSTACHE) {
            return \true;
        }
        return \false;
    }
    /**
     * Check whether a given node is an async <script> element.
     *
     * @param DOMNode $node Node to check.
     * @return bool Whether the given node is an async <script> element.
     */
    private static function isAsyncScript(\DOMNode $node)
    {
        if (!$node instanceof \Google\Web_Stories_Dependencies\AmpProject\Dom\Element || $node->tagName !== \Google\Web_Stories_Dependencies\AmpProject\Tag::SCRIPT) {
            return \false;
        }
        if (!$node->hasAttribute(\Google\Web_Stories_Dependencies\AmpProject\Attribute::SRC) || !$node->hasAttribute(\Google\Web_Stories_Dependencies\AmpProject\Attribute::ASYNC)) {
            return \false;
        }
        return \true;
    }
    /**
     * Check whether a given node is an AMP iframe.
     *
     * @param DOMNode $node Node to check.
     * @return bool Whether the node is an AMP iframe.
     */
    public static function isAmpIframe(\DOMNode $node)
    {
        if (!$node instanceof \Google\Web_Stories_Dependencies\AmpProject\Dom\Element) {
            return \false;
        }
        return $node->tagName === \Google\Web_Stories_Dependencies\AmpProject\Extension::IFRAME || $node->tagName === \Google\Web_Stories_Dependencies\AmpProject\Extension::VIDEO_IFRAME;
    }
}