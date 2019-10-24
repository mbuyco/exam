<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illumintate\Http\Response;

use App\Http\Controllers\Controller;
use App\Repositories\ExamRepository;

class ExamsApiController extends Controller {
  private $examRepository;

  public function __construct(
    ExamRepository $examRepository
  ) {
    $this->examRepository = $examRepository;
  }

  public function index() {
    $exams = $this->examRepository->list();
    return response()->json($exams);
  }
}
