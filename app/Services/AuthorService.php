<?php 

namespace App\Services;

use Illuminate\Http\Request;
use App\Traits\ConsumesExternalService;

class AuthorService
{
    use ConsumesExternalService;

    /**
     * The base uri to consume the authors service
     * @var string
     */
    public $baseUri;

    /**
     * The secret to consume the authors service
     * @var string
     */
    public $secret;

    public function __construct()
    {
        $this->baseUri = env('AUTHORS_SERVICE_BASE_URL');
        $this->secret = env('AUTHORS_SERVICE_SECRET');

    }

    /**
     * obtain full list of authors from the author service
     * @return string
     */
    public function obtainAuthors()
    {
        return $this->performRequest('GET','/authors');
    }

    /**
     * create one author from the author service
     * @return string
     */
    public function createAuthor($data)
    {
        return $this->performRequest('POST', '/authors', $data);
    }

    /**
     * Get details from an author by id from the author service
     * @return string
     */
    public function obtainAuthor($author)
    {
        return $this->performRequest('GET', "/authors/{$author}");
    }

    /**
     * update an instance of author by id from the author service
     * @return string
     */
    public function editAuthor($data, $author)
    {
        return $this->performRequest('PUT', "/authors/{$author}", $data);
    }

    /**
     * Use author service to delete an author instance
     * @return string
     */
    public function deleteAuthor($author)
    {
        return $this->performRequest('DELETE', "/authors/{$author}");
    }
}