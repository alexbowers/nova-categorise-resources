<?php

namespace AlexBowers\NovaCategoriseResources\Tests;

use AlexBowers\NovaCategoriseResources\Http\Controllers\ToolController;
use AlexBowers\NovaCategoriseResources\NovaCategoriseResources;
use Symfony\Component\HttpFoundation\Response;

class ToolControllerTest extends TestCase
{
    /** @test */
    public function it_can_can_return_a_response()
    {
        $this
            ->get('nova-vendor/alexbowers/nova-categorise-resources/endpoint')
            ->assertSuccessful();
    }
}
