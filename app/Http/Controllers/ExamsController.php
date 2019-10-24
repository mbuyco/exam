<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illumintate\Http\Response;

use App\Repositories\ExamRepository;

class ExamsController extends Controller {
  public function index() {
    return view('exams');
  }
}
