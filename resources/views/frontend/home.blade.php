<html>
    <head>
        <style>
            .container {
                max-width: 800px;
                margin: 0 auto;
            }
            .header {
                display: flex;
                align-items: center;
                justify-content: space-between;
            }
            .body {
                display: flex;
                gap: 10px;
                width: 100%;
            }
            .user-feedback, .right-side {
                width: 50%;
            }
            .right-side {
                display: flex;
                flex-direction: column;
                gap: 10px;
            }
            .bordered {
                border: 1px solid black;
                min-height: 100px;
                padding: 10px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h3>{{ $title }}</h3>
                <div class="menu">
                    @for ($i = 0; $i < sizeof($menus); $i++)
                        <span>{{$menus[$i]}}</span>
                        @if ($i < sizeof($menus)-1)
                            <span>|</span>
                        @endif
                    @endfor
                </div>
            </div>
            <div class="body">
                <div class="user-feedback bordered">
                    User Feedback content
                </div>
                <div class="right-side">
                    <div class="favorite-items bordered">
                        Favorite Items content

                        <?php $i = 0; ?>
                        <ol>
                            @while ($i < sizeof($favoriteItems))
                                <li>{{$favoriteItems[$i]}}</li>
                                <?php $i = $i +1; ?>
                            @endwhile
                        </ol>
                    </div>
                    <div class="purchased-items bordered">
                        Purchased Items content
                        <ol>
                            @foreach($purchasedItems as $purchasedItem)
                                <li>{{ $purchasedItem }}</li>
                            @endforeach
                        </ol>
                    </div>
                    <div class="blank bordered">
                        Blank content
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
