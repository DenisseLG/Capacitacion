<?php

namespace App\Http\Controllers\Catalogs;

use App\Core\Eloquent\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use Facades\App\Core\Facades\AlertCustom;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $categories=Category::where('name','ILIKE',
            "%".request()->get('filter')."%")->paginate(4);  //el modelo Category va a la base y trae todo
        return view('categories.index',compact('categories'));  //si trabajo con with es para renombrar y compact no

        //return view('categories.index')->with(['categories'=>Category::all()]); 



      }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        //Category::create($request->all());   //acepta todo lo que venga del formulario y guarde en la bd
        //Category::create($request->only(['name','description']));  //   
    
        Category::create($request->validate());   //solo los campos validados se insertan
        AlertCustom::success('Guardado correctamente');
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Core\Eloquent\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Core\Eloquent\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('categories.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Core\Eloquent\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, Category $category)
    {
        $category->fill($request->validated());
        $category->save();
        AlertCustom::success('Actualizado correctamente');
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Core\Eloquent\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        AlertCustom::success('Eliminado correctamente');
        return redirect()->route('categories.index');   // hace eliminacion fisica 



    }
}
