<html>
    <head>
        <meta name="csrf_token" content="{{ csrf_token() }}">
    </head>
    <body>
        <div>
            <h3>Регистарция пользователя</h3>
            <form method="GET" action="{{ url('store_form') }}">
                @csrf
                <div>
                    <label for="firstname">Имя:</label>
                    <input type="text" id="firstname" name="firstname">
                </div>
                <div>
                    <label for="lastname">Фамилия:</label>
                    <input type="text" id="lastname" name="lastname">
                </div>
                <div>
                    <label for="email">Почта:</label>
                    <input type="email" id="email" name="email">
                </div>
                <input type="submit"></form>
            </form>            
        </div>
    </body>
</html>