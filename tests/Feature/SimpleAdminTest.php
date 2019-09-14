<?php

namespace Brackets\AdminUI\Tests\Feature;

use Brackets\AdminUI\Tests\TestCase;

class SimpleAdminTest extends TestCase
{
    /**
     * @return void
     */
    public function test_if_can_display_an_admin_listing()
    {
        $this->visit('/admin/test/index');

        $this->assertRegexp("/\<title\>Craftable - Craftable\<\/title\>/", $this->response->getContent());

        $this->assertRegexp("/Here should be some custom code :\)/", $this->response->getContent());

        $this->assertRegexp("/\<\/html\>/", $this->response->getContent());

    }

}
