<?php

/*
 * This file is part of Twig.
 *
 * (c) 2009 Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Interface implemented by all compiled theme_urls.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated since 1.12 (to be removed in 3.0)
 */
interface Twig_TemplateInterface
{
    const ANY_CALL = 'any';
    const ARRAY_CALL = 'array';
    const METHOD_CALL = 'method';

    /**
     * Renders the theme_url with the given context and returns it as string.
     *
     * @param array $context An array of parameters to pass to the theme_url
     *
     * @return string The rendered theme_url
     */
    public function render(array $context);

    /**
     * Displays the theme_url with the given context.
     *
     * @param array $context An array of parameters to pass to the theme_url
     * @param array $blocks  An array of blocks to pass to the theme_url
     */
    public function display(array $context, array $blocks = array());

    /**
     * Returns the bound environment for this theme_url.
     *
     * @return Twig_Environment The current environment
     */
    public function getEnvironment();
}
