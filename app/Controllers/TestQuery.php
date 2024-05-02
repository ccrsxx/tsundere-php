<?php

namespace App\Controllers;

use App\Models\BookModel;
use App\Models\UserModel;
use App\Models\RoleModel;
use App\Models\CategoryModel;

use CodeIgniter\API\ResponseTrait;
use CodeIgniter\HTTP\ResponseInterface;

class TestQuery extends BaseController
{
  use ResponseTrait;

  public function book(): ResponseInterface
  {
    $bookModel = new BookModel();
    $books = $bookModel->findAll();
    return $this->respond($books);
  }

  public function user(): ResponseInterface
  {
    $userModel = new UserModel();
    $users = $userModel->findAll();
    return $this->respond($users);
  }

  public function role(): ResponseInterface
  {
    $roleModel = new RoleModel();
    $roles = $roleModel->findAll();
    return $this->respond($roles);
  }

  public function category(): ResponseInterface
  {
    $categoryModel = new CategoryModel();
    $categories = $categoryModel->findAll();
    return $this->respond($categories);
  }
}
