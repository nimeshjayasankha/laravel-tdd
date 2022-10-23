<?php

namespace Tests\Feature;

use App\Models\ToDo;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TodoTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;
    public function test_get_todo_lists()
    {
        ToDo::factory()->create();
        $response = $this->getJson(route('todo-lists'));
        $this->assertEquals(1, count($response->json()));
    }
}