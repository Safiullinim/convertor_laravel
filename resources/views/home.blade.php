 @extends('layouts.app')

 @section('title-block')Главная страница@endsection

 @section('content')
 <h1>Главная страница</h1>
 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus expedita eveniet quidem non laudantium officia ratione eum ipsum ipsa, beatae soluta voluptates ullam, voluptate iusto ad, suscipit obcaecati rerum itaque!</p>
 @endsection

 @section('aside')
 @parent
 <p>Дополнительный текст</p>
 @endsection