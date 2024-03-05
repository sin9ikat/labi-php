<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::paginate(10);

        return view('admin_panel.products.index', compact('products'));
    }

    public function indexP()
    {
        $categories = Category::all();
        $products = Product::paginate(3);

        return view('catalog.catalog',compact(['products','categories']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $categories = Category::all();
        return view('admin_panel.products.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $data = $request->validated();
        $categories = $data['category_id'];
        unset($data['category_id']);

        Product::create($data)->categories()->attach($categories);

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('admin_panel.products.show',compact('product'));
    }

    public function showp(Product $product)
    {
        return view('components.full-card-product',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('admin_panel.products.edit',compact(['product','categories']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreProductRequest $request, Product $product)
    {
        $data = $request->validated();
        unset($data['category_id']);
        $product->update($data);
        $product->categories()->sync($request->category_id);

        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->categories()->detach();
        $product->delete();

        return redirect()->route('products.index');
    }

    public function search(Request $request)
    {
        $products = Product::where('title','LIKE','%'.$request->name.'%')->paginate();
        $categories = Category::all();
        return view('catalog/catalog', compact('products','categories'));
    }

    public function SortByASC(Request $request)
    {
        $sortBy = $request->input('sort_by', 'title'); // По умолчанию сортируем по названию
        $sortDirection = $request->input('sort_direction', 'asc'); // По умолчанию сортируем по возрастанию
        $categories = Category::all();
        $products = Product::orderBy($sortBy, $sortDirection)->paginate();
        return view('catalog/catalog', compact('products','categories' ));
    }

    public function SortByDESC(Request $request)
    {
        $sortBy = $request->input('sort_by', 'title'); // По умолчанию сортируем по названию
        $sortDirection = $request->input('sort_direction', 'desc'); // Теперь сортируем по убыванию
        $categories = Category::all();
        $products = Product::orderBy($sortBy, $sortDirection)->paginate();
        return view('catalog/catalog', compact('products','categories' ));
    }
    public function sortByPriceDescending(Request $request)
    {
        $products = Product::orderByRaw('CAST(price AS UNSIGNED) DESC')->paginate();
        $categories = Category::all();
        return view('catalog/catalog', compact('products', 'categories'));
    }
    public function sortByPriceAscending(Request $request)
    {
        $products = Product::orderByRaw('CAST(price AS UNSIGNED) ASC')->paginate();
        $categories = Category::all();
        return view('catalog/catalog', compact('products', 'categories'));
    }
    public function sortByCategory(Request $request, $categoryId)
    {
        $category = Category::findOrFail($categoryId);
        $products = $category->products()->paginate(); // Получаем все товары для данной категории
        $categories = Category::all(); // Можете удалить, если не используется на странице
        return view('catalog/catalog', compact('products', 'categories'));
    }





}
