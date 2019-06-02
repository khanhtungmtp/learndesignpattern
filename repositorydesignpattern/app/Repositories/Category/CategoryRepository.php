<?php

namespace App\Repositories\Category;

use App\Category;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Category\CategoryRepositoryInterface;

/*
*   CategoryRepository implements bản vẽ của CategoryRepositoryInterface
*   Trong bản vẽ yêu cầu các hàm trong bản vẽ, mà trong BaseReposity viết rồi nên kế thừa
*   nên extends thêm BaseRepository
*   Muốn xài model thì cần kết thừa lại hàm __construct trong BaseRepository

 */

class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface
{
    public function __construct(Category $category)
    {
        parent::__construct($category);
    }
}
