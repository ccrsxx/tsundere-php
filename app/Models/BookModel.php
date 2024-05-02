<?php

namespace App\Models;

use CodeIgniter\Model;

class BookModel extends Model
{
  protected $table = 'books';
  protected $primaryKey = 'id';
  protected $allowedFields = ['title_book', 'id_category', 'author', 'publisher', 'publication_year', 'isbn', 'stok', 'rented', 'booking', 'image'];
}
