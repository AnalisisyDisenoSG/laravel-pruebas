<?php

namespace Tests\Feature;

use App\Models\Task;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TasksTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @test
     *
     * @return void
     */
    public function se_muestra_una_tarea()
    {
        $task = Task::factory()->create(['name' => 'Terminar Proyecto Final']);

        $response = $this->get($task->path());

        $response->assertStatus(200);
        $response->assertViewHas('task', $task);
        $response->assertSeeText($task->name);
    }
}
