<?php

namespace Tests\Unit;

use App\Models\Task;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class Tasktest extends TestCase
{
    use RefreshDatabase;
    
    /**
     * @test
     *
     * @return void
     */
    public function una_tarea_tiene_un_path()
    {
        $task = new Task();

        $this->assertInstanceOf(Task::class, $task);
        // $task = Task::factory()->create();

        // $this->assertEquals('/tasks/'.$task->id, $task->path());
    }
}
