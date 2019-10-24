<?php

namespace App\Repositories;

class ExamRepository {
  public function list() {
    return [
      [
        'name' => 'Exam 1',
        'description' => 'This is exam 1'
      ],
      [
        'name' => 'Exam 2',
        'description' => 'This is exam 2'
      ],
      [
        'name' => 'Exam 3',
        'description' => 'This is exam 3'
      ]
    ];
  }
}
