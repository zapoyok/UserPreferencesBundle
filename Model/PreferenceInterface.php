<?php

/**
 * This file is part of the Zapoyok Holiday project.
 *
 * (c) Jérôme FIX <jerome.fix@zapoyok.info>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zapoyok\UserPreferencesBundle\Model;

use Symfony\Component\Validator\ExecutionContextInterface;
use Symfony\Component\Security\Core\User\UserInterface;
interface PreferenceInterface
{
    public function getId();

    public function getUser();
    public function setUser(UserInterface $user);
    public function setData($data);
    public function getData();

}
