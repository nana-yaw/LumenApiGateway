<?php 

namespace App\Services;

use App\Traits\ConsumesExternalService;

class AuthorService
{
    use ConsumesExternalService;

    /**
     * The base uri to consume the authors service
     * @var string
     */
    public $baseUri;

    public function __construct()
    {
        $this->baseUri = env('AUTHORS_SERVICE_BASE_URL');

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
     * create an author from the author service
     * @return string
     */
    public function createAuthor()
    {
        return $this->performRequest('GET','/authors');
    }
}