<?php

use App\Models\Category;
use App\Repositories\interfaces\RepositoryInterface;
use Illuminate\Http\Request;

class CategoryRepository implements RepositoryInterface
{

    public function store(Request $req): bool
    {
        Category::create($req->all());

        return true;
    }

    public function update(Request $req): bool
    {
        return false;
    }

    public function delete(Request $req): bool
    {
        return false;
    }
}
