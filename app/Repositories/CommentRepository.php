<?php


namespace App\Repositories;


use App\Models\Comment;

class CommentRepository extends BaseRepository
{
    protected $model;

    /**
     * CommentRepository constructor.
     * @param $model
     */
    public function __construct(Comment $model)
    {
        $this->model = $model;
    }

    public function active($active = true)
    {
        $where = [
            'column' => 'active',
            'operator' => '=',
            'value' => $active
        ];
        return $this->findAndGet(['*'], [], $where);
    }
}
