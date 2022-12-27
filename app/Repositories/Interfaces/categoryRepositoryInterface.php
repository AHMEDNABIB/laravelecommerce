<?php

namespace App\Repositories\Interfaces;

interface categoryRepositoryInterface
{
    public function all();
    public function getCategoryDropdown();
    public function create(array $attributes);
    public function show($id);
    public function update($id,array $attributes);
    public function delete($id);
}
