<?php

test('get tasks', function () {
    $response = $this->get('/tasks');

    $response->assertStatus(200);
});

test('create task', function () {
    $response = $this->post('/tasks', [
        'title' => 'Task Title',
        'description' => 'Task Description',
        'status' => 'pending',
        'priority' => 1,
        'due_date' => '2022-12-31',
        'tags' => ['tag1', 'tag2'],
        'category' => 'category',
    ]);
    $response->assertStatus(201);
});

test('get task', function () {
    $taskId = 1;
    $response = $this->get("/tasks/{$taskId}");

    $response->assertStatus(200)
        ->assertJsonStructure([
            'id',
            'title',
            'description',
            'status',
            'priority',
            'due_date',
            'tags',
            'category',
            'created_at',
            'updated_at',
        ])
        ->assertJson([
            'id' => $taskId,
        ]);
});

test('edit task', function () {
    $response = $this->get('/tasks/1/edit');
    $response->assertStatus(200);
});

test('update task', function () {
    $updateTask = [
        'title' => 'Task Title Updated',
        'description' => 'Task Description Updated',
        'status' => 'completed',
        'priority' => 2,
        'due_date' => '2022-12-31',
        'tags' => ['tag1', 'tag2', 'tag3'],
        'category' => 'category',
    ];

    $this->put('/tasks/1', $updateTask)
        ->assertStatus(200)
        ->assertJson($updateTask);
});
