

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Task</title>

    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
         body {
                font-family: 'Nunito', sans-serif;
                height: 100vh;
                display: flex;
                justify-content: center;
                align-content: center;
                text-align: center
            }

        input{
                padding: 5px;
                border-radius: 6px;
                margin-left: 10px;
            }

            button{
                padding: 0.7em;
                border-radius: 6px;
                color: #2d3748;
                font-weight: 600;
                cursor: pointer;
            }
            .list-container{
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-content: center;
                background-color: #718096;
                text-align: center;
                height: 100%;
                width: 100%;
            }

            h1, h4, label{
                color: #bbbbbb;
            }

            

    </style>
</head>
<body>

    <div class="list-container">          
        <h1 class="title">اضف مهمة جديدة</h1>
    
    
   
<form action="{{route('addTask')}}" method="POST" accept-charset="UTF-8">
    @csrf
    <label for="name">اضف مهمة جديدة</label>
    <input type="text" name="name">
    <button type="submit">اضف</button>
</form>

    </div>
    
</body>
</html>


