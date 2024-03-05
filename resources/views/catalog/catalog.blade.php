<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/components/zero.css','resources/css/catalog.css','resources/css/header-footer.css','resources/css/components/card-style.css'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">
    <title>Каталог</title>
</head>

<body>
<div class="header-line">
    <div class="menu">

        <a class="menu-item" href="@">О Компании</a>


        <a class="menu-item" href="#">Проекты</a>
        <a class="menu-item" href="@">Уход за садом</a>
        <a class="menu-item" href="@">Ландшафт</a>
        <a class="menu-item" href="@">Отзывы</a>


    </div>

    <div class="phone-number">
        <div class="phone-number-img">
            <div class="phone-img">
                <img src="png/header1.png" alt="">
            </div>
            <div class="cart-img">
                <img src="png/header2.png" alt="">
            </div>
        </div>

        <div class="header-text">
            <div class="number">
                тел.+7 (981) 98-50-04
            </div>
            <div class="cart">
                Санкт-Петербург и ЛО
            </div>
        </div>

    </div>

</div>





<div class="main-content-catalog">


    <div class="catalog-section">

        <div class="catalog-content">
          <div class="catalog-content-header">
              <div class="catalog-content-header-filter">
                  <div class="catalog-content-header-filter-input">
                      <form action="{{route('products.search')}}" method="POST" enctype="multipart/form-data">
                          @csrf
                      <input placeholder="Поиск" type="text" name="name" class="input-group-text">
                      <button type="submit" class="btn btn-primary">Найти</button>
                      </form>
                  </div>
                  <div class="catalog-content-header-filter-sort"  >
                      <span>Сортировать по: </span>
                      <form action="{{route('products.SortByASC')}}" method="POST" enctype="multipart/form-data">
                          @csrf
                          <button type="submit">От А до Я</button>
                      </form>
                      <form action="{{route('products.SortByDESC')}}" method="POST" enctype="multipart/form-data">
                          @csrf
                          <button type="submit">От Я до А</button>
                      </form>
                      <form action="{{route('products.sortByPriceAscending')}}" method="POST" enctype="multipart/form-data">
                          @csrf
                          <button type="submit">Цена верх</button>
                      </form>
                      <form action="{{route('products.sortByPriceDescending')}}" method="POST" enctype="multipart/form-data">
                          @csrf
                          <button type="submit">Цена низ</button>
                      </form>



                  </div>
              </div>
              <div class="catalog-content-header-categories">
                  <a href="{{route('catalog')}}" class="all-products">Все</a>
                  @foreach($categories as $category)
                      <a href="{{ route('products.sortByCategory', ['categoryId' => $category->id]) }}">{{ $category->title }}</a>
                  @endforeach
              </div>




          </div>

            <div class="catalog-content-products">

               <div class="catalog-content-products-main">
                   @foreach($products as $product)
                       <div class="product-card">
                           <div class="product-card-title">
                               <img src="{{asset('storage/main-images/card-img/card-components-new.svg')}}" alt="">
                               <input type="checkbox" id="1" class="button-favourites">
                               <label for="1" class="label-favourites">&#9825;</label>
                           </div>
                           <div class="product-card-img">
                               <img src="{{asset(\Illuminate\Support\Facades\Storage::url($product->image))}}" alt="">
                           </div>
                           <div class="product-card-content">
                               <p class="presence-product">Есть в наличии <span>&#10004;</span></p>
                               <a href="{{route('show',$product->id)}}" class="name-product">{{$product->title}}</a>
                               <div class="rating-product-block">
                                   <span>Рейтинг:</span>
                                   <div class="star-rating">
                                       <input type="radio" name="stars" id="star-a" value="5" />
                                       <label for="star-a"></label>
                                       <input type="radio" name="stars" id="star-b" value="4" />
                                       <label for="star-b"></label>
                                       <input type="radio" name="stars" id="star-c" value="3" />
                                       <label for="star-c"></label>
                                       <input type="radio" name="stars" id="star-d" value="2" />
                                       <label for="star-d"></label>
                                       <input type="radio" name="stars" id="star-e" value="1" />
                                       <label for="star-e"></label>
                                   </div>
                               </div>
                               <div class="shopping-block">
                                   <div class="product-card-total-price">
                                      <div><span>{{$product->price}}</span><span> рублей</span></div>
                                       <a href="#" class="buy-button">
                                           <svg xmlns="http://www.w3.org/2000/svg" width="19" height="23" viewBox="0 0 19 23" fill="none">
                                               <path
                                                   d="M0.9 7.13828H17.9571V19.0002C17.9571 20.7123 16.5692 22.1002 14.8571 22.1002H4C2.28792 22.1002 0.9 20.7123 0.9 19.0002V7.13828Z"
                                                   stroke="white" stroke-width="1.8" />
                                               <path
                                                   d="M5.23624 11.4766V5.00037C5.23624 2.79123 7.0271 1.00037 9.23624 1.00037H9.61719C11.8263 1.00037 13.6172 2.79123 13.6172 5.00037V11.4766"
                                                   stroke="white" stroke-width="1.8" />
                                           </svg>
                                           Купить
                                       </a>
                                   </div>
                               </div>
                           </div>
                       </div>
                   @endforeach

                  <div class="block-more">
                      {{ $products->links() }}
                  </div>
               </div>

                </div>

            </div>
        </div>

    </div>

</body>

</html>
