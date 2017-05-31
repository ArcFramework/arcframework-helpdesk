<?php

use Arc\Testing\ArcTestCase;
use Illuminate\Contracts\Console\Kernel;

class TestCase extends ArcTestCase
{
    public function createApplication()
    {
        $plugin = new ArcFramework\HelpDesk\Plugin(realpath(__DIR__.'/../arcframework-helpdesk.php'));

        $plugin->make(Kernel::class)->bootstrap();

        $this->app = $plugin;
    }

    public function tearDown()
    {
        parent::tearDown();

        Mockery::close();
    }
}
