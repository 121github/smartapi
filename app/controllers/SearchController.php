<?php

class SearchController extends BaseController {

  /**
   * Instantiate a new UserController instance.
   */
  public function __construct() {
    $this->beforeFilter(
            function () {
              if (!Auth::check()) {
                return Response::make('Unauthorised', 401);
              }
            }, array('except' => 'getCompanies')
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
  public function getCompanies() {
    $keyword = Input::get('keyword');
    $postcode = Input::get('postcode');
    $range = Input::get('range');
    $query = DB::table('companies');
    if (isset($postcode) && isset($range)) {
      $coords = postcode_to_coords($postcode);
      $query->select(DB::raw('*,(((ACOS(SIN((' . $coords['lat'] . '*PI()/180)) * SIN((locations.lat*PI()/180))+COS((' . $coords['lat'] . '*PI()/180)) * COS((locations.lat*PI()/180)) * COS(((' . $coords['lng'] . '- locations.lng)*PI()/180))))*180/PI())*60*1.1515) AS distance '));
    }

    $query->leftJoin('records', 'records.id', '=', 'record_id')->leftJoin('record_states', 'record_state_id', '=', 'record_states.id')->leftJoin('company_addresses', 'companies.id', '=', 'company_id')->leftJoin('locations', 'company_addresses.postcode', '=', 'locations.postcode');

    if (isset($keyword)) {
      $query->where('name', 'like', $keyword . '%')
              ->orWhere('description', 'like', $keyword . '%')
              ->orWhere('website', 'like', $keyword . '%');
    }
    if (isset($postcode) && !isset($range)) {
      $query->where('postcode', '=', $postcode);
    }
    if (isset($postcode) && isset($range)) {
      $query->having('distance', '<=', $range);
    }
    $query->take(5);
    $companies = $query->get();
    return $companies;
  }

  public function getContacts() {
    $keyword = Input::get('keyword');
    $postcode = Input::get('postcode');
    $range = Input::get('range');
    $query = DB::table('contacts');
    if (isset($postcode) && isset($range)) {
      $coords = postcode_to_coords($postcode);
      $query->select(DB::raw('*,(((ACOS(SIN((' . $coords['lat'] . '*PI()/180)) * SIN((locations.lat*PI()/180))+COS((' . $coords['lat'] . '*PI()/180)) * COS((locations.lat*PI()/180)) * COS(((' . $coords['lng'] . '- locations.lng)*PI()/180))))*180/PI())*60*1.1515) AS distance '));
    }

    $query->leftJoin('records', 'records.id', '=', 'record_id')->leftJoin('record_states', 'record_state_id', '=', 'record_states.id')->leftJoin('contact_addresses', 'contacts.id', '=', 'contact_id')->leftJoin('locations', 'contact_addresses.postcode', '=', 'locations.postcode');

    if (isset($keyword)) {
      $query->where('first_name', 'like', $keyword . '%')
              ->orWhere('last_name', 'like', $keyword . '%')
              ->orWhere('company', 'like', $keyword . '%')
              ->orWhere('email', 'like', $keyword . '%');
    }
    if (isset($postcode) && !isset($range)) {
      $query->where('postcode', '=', $postcode);
    }
    if (isset($postcode) && isset($range)) {
      $query->having('distance', '<=', $range);
    }
    $query->take(5);
    $contacts = $query->get();
    Log::info(DB::getQueryLog());

    return $contacts;
  }

  public function missingMethod($parameters = array()) {
    return Response::make('Invalid request method', 400);
  }

}
