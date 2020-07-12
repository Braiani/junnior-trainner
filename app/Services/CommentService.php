<?php


namespace App\Services;


use App\Repositories\CommentRepository;

class CommentService
{
    protected $commentRepository;

    /**
     * CommentService constructor.
     * @param $commentRepository
     */
    public function __construct(CommentRepository $commentRepository)
    {
        $this->commentRepository = $commentRepository;
    }

    public function allComments()
    {
        return $this->commentRepository->all();
    }

    public function activeComments()
    {
        return $this->commentRepository->active();
    }
}
