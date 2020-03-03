<?php

declare(strict_types=1);

namespace FactoryMethod;

use FactoryMethod\Dialog\WebDialog;
use FactoryMethod\Dialog\WindowsDialog;

class Application
{
    /**
     * @throws \Exception
     */
    public function initialize(string $environment): void
    {
        if ($environment === 'Windows') {
            $dialog = new WindowsDialog();
        } elseif ($environment === 'Web') {
            $dialog = new WebDialog();
        } else {
            throw new \Exception('Unknown operating system.');
        }

        $dialog->render();
    }
}