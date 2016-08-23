<?php
/**
  * This file is part of EayoCMS.
  *
  * @package EayoCMS
  * @author Alexis Rouillard / Leigende <contact@arouillard.fr>
  * @link http://arouillard.fr
  *
  * For the full copyright and license information, please view the LICENSE
  * file that was distributed with this source code.
  */

namespace Core;

defined('EAYO_ACCESS') || exit('No direct script access.');

use Symfony\Component\Yaml\Yaml;
use Symfony\Component\Yaml\Exception\ParseException;

class Controller
{
    protected static $needLogin = false;

    protected $config = null;
    protected $tools = null;

    public function __construct() {
        $this->config = \Core\Config::init();
        $this->tools = \Core\Tools::init();

        static::$needLogin ? $this->checkLogin() : '';

    }

    /* Check Login Status */
    public function checkLogin() {
        if (!isset($_SESSION['login_str'])) {
            header('location: '.$this->tools->rooturl.'login/');
        }
    }

}