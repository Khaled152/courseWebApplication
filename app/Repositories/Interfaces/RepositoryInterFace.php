<?php

namespace App\Repositories\interfaces;

use Illuminate\Http\Request;

interface RepositoryInterface
{

    public function store(Request $req): bool;

    public function update(Request $req): bool;

    public function delete(Request $req): bool;
}
