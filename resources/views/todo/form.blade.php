<html>
    <head>
        <style>
            .center {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div>
            @include("todo.list")
            <form method="post" action="/todo/store">
                @csrf
                Task: <input type="text" name="task" /> <br/>
                Description: <textarea name="description"></textarea> <br/>

                <div>
                    <button type="submit">Save Task</button>
                    <a href="/todo">
                        <button type="button">Cancel</button>
                    </a>
                </div>
            </form>
        </div>
    </body>
</html>
