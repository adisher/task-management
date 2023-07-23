<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Task;


class TaskTest extends TestCase
{

    use RefreshDatabase;

    public function testTaskCreation()
    {
        $task = Task::factory()->create([
            'title' => 'Test Task',
            'description' => 'This is a test task',
            'due_date' => '2023-07-25',
            'status' => 'pending',
        ]);

        $this->assertDatabaseHas('tasks', [
            'title' => 'Test Task',
            'description' => 'This is a test task',
            'due_date' => '2023-07-25',
            'status' => 'pending',
        ]);
    }

    public function testTaskUpdate()
    {
        $task = Task::factory()->create([
            'title' => 'Test Task',
        ]);

        $task->update(['title' => 'Updated Task']);

        $this->assertDatabaseHas('tasks', [
            'title' => 'Updated Task',
        ]);
    }

    public function testTaskDeletion()
    {
        $task = Task::factory()->create();

        $task->delete();

        $this->assertDatabaseMissing('tasks', ['id' => $task->id]);
    }
}
