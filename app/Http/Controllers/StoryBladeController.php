<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoryBladeController extends Controller
{
  public function index(Request $request)
  {
    $componentGroupName = $request->has('component') ? $request->get('component') : 'buttons';
    $componentGroup = config('storyblade.components.' . $componentGroupName);

    $components = config('storyblade.components');
    return view('storyblade', [
      'components' => $components,
      'componentGroup' => $componentGroup
    ]);
  }
}
