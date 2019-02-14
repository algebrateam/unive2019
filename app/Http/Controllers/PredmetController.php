<?php

namespace App\Http\Controllers;

use App\Predmet;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use function view;

class PredmetController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index() {
    $predmets = Predmet::all();
    //dd($predmets);
//         echo '<ul>';
//         foreach ($predmets as $key => $p) {
//          echo '<li>'.$p->nazpred.'</li>';
//         }
//         echo '</ul>';
    return view('predmet.index', compact('predmets'));
  }

  public function top10() {
    $predmets = Predmet::orderBy('upisanostud', 'desc')->take(10)->get();
    return view('childprimjer', compact('predmets'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create() {
    return view('predmet.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  Request  $request
   * @return Response
   */
  public function store(Request $request) {
    // dd($request);
    $validator = Validator::make($request->all(), [
        "kratpred" => 'string|max:8',
        "nazpred" => 'required|string|max:60',
        "siforgjed" => 'numeric|between:100000,100020',
        "upisanostud" => 'numeric|digits_between:0,2',
        "brojsatitjedno" => 'numeric|between:1,10'
    ]);
    if ($validator->fails()) {
      Session::flash('error', 'Greška!');  // $_SESSION['error']='Greška!'
      return redirect('predmets/create')
          ->withErrors($validator)
          ->withInput();
    } else {

      // store
      $p = new Predmet();
      $p->kratpred = $request->input('kratpred');
      $p->nazpred = $request->input('nazpred');
      $p->siforgjed = $request->input('siforgjed');
      $p->upisanostud = $request->input('upisanostud');
      $p->brojsatitjedno = $request->input('brojsatitjedno');
      $p->save();
      // redirect
      Session::flash('message', 'Uspješno dodan predmet!');
      //return Redirect::to('mobitels');
      return redirect()->route('predmets.index');
    }
    // validate
    // read more on validation at http://laravel.com/docs/validation
  }

  /**
   * Display the specified resource.
   *
   * @param  Predmet  $predmet
   * @return Response
   */
  public function show(Predmet $predmet) {
    // $predmet=\App\Predmet::Find($id)
    return view('predmet.show', ['predmet' => $predmet]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  Predmet  $predmet
   * @return Response
   */
  public function edit(Predmet $predmet) {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  Request  $request
   * @param  Predmet  $predmet
   * @return Response
   */
  public function update(Request $request, Predmet $predmet) {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  Predmet  $predmet
   * @return Response
   */
  public function destroy(Predmet $predmet) {
    $predmet->delete();
    Session::flash('message', 'Predmet obrisan!');
    return redirect()->route('predmets.index');
  }

}
