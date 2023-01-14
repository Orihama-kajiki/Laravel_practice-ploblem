<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/reset.css" />
  <link rel="stylesheet" href="/css/style.css" />
  <title>COACHTECH</title>
</head>
<body>
  <div class="containar">
    <div class="card">
      <p class=title>Todo List</p>
        @if (count($errors) > 0)
        <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
        </ul>
        @endif
      <div class="todo">
        <form action="/todos/create" method="post" class="form">
          @csrf
          <input type="text" class="input_add" name="content">
          <input type="submit" class="btn_add" value="追加">
        </form>
        @section('content')
        <table>
          <tbody>
            <tr>
              <th>作成日</th>
              <th>タスク名</th>
              <th>更新</th>
              <th>削除</th>
            </tr>
            @foreach ($todos as $todo)
            <tr>
              <td>{{$todo->created_at}}</td>
                <form action="/todos/update/{id?}" method="POST">
                  @csrf
                <input type="hidden" name="id" value="{{$todo->id}}">
                <td><input type="text" name ="content" class="input_update" value="{{$todo->content}}" ></td>
                <td><button type="submit" class="btn_update" value="{{$todo->id}}">更新</button></td>
              </form>
                @section('content')
              <form action="/todos/delete/{id?}" method="POST">
                  @csrf
                <td>
                  <input type="hidden" name="id" value="{{$todo->id}}">
                  <button type="submit" class="btn_delete" >削除</button>
                </td>
              </form>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>    
  </div>
  
</body>
</html>