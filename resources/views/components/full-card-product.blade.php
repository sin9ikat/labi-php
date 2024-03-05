<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/components/zero.css','resources/css/full-card-product.css','resources/css/header-footer.css'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">
    <title>full-card-product</title>
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
<main>




</main>
<div class="main-content">
    <div class="main-content-container">
      <div class="full-product">
          <div class="full-product-header">
             <h1> Название: {{$product->title}}</h1>
          </div>
          <div class="full-product-body">
              <div class="full-product-photo-container">
                  <div class="main-photo-product">
                      <img src="{{asset(\Illuminate\Support\Facades\Storage::url($product->image))}}" alt="">
                  </div>
              </div>
              <div class="price-block-product">
                  <div class="price-block-header">
                      <div class="price-block-header-name-pro">
                          <h1>{{$product->brand}}</h1>
                      </div>

                  </div>
                  <div class="price-block-body">

                      <div class="block-info-product">

                          <div class="step-info">
                              <span>Стоимость:</span><p>{{$product->price}}</p><p> рублей.</p>
                          </div>


                          <div class="about-product-short">
                              <span>Описание:</span><p>{!! $product->description !!}</p>
                          </div>
                          <form action="{{route('orders.store')}}" method="post" enctype="multipart/form-data">
                              @csrf
                              <input type="hidden" name="productID" value="{{$product->id}}">
                              <button type="submit" class="buy-button">Купить</button>
                          </form>

                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>

</div>



</body>

</html>
