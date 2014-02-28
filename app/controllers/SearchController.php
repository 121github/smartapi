<?php 

class SearchController extends BaseController {
    
    /**
     * Instantiate a new UserController instance.
     */
    public function __construct()
    {
        $this->beforeFilter(
            function () {
                if(!Auth::check()) {
                    return Response::make('Unauthorised', 401);
                }
            }, 
            array('except' => 'getCompanies')
        );
        $this->beforeFilter('role');
    }
    
    /**
     * doSearch method
     * 
     * Pass in the search type - company or contact
     * * Pass in the search critera
     * 
     * @param string $searchType
     * @param string $form
     * @return results
     */
    public function getCompanies() 
    {        
      $companies = Company::where('name','like','Pau%')->get();
      return $companies->toArray();
    }
    

    public function missingMethod($parameters = array())
    {
        return Response::make('Invalid request method', 400);
    }
    
}
