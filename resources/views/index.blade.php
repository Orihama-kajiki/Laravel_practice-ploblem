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
      <div class="todo">
        <form action="/todos/create" method="post" class="form">
          @csrf
          <input type="text" class="input_add" name="content">
          <input type="submit" class="btn_add" value="追加">
        </form>
        @section('content')
        <table>
          <tbody>
            @csrf
            <tr>
              <th>作成日</th>
              <th>タスク名</th>
              <th>更新</th>
              <th>削除</th>
            </tr>
            @foreach ($todos as $todo)
            <tr>
              <td>{{$todo->created_at}}</td>
              <td><input type="text" class="input_update" value="{{$todo->content}}" ></td>
              <td><button class="btn_update" value="">更新</button>
              <td><button class="btn_delete" value="">削除</button>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>    
  </div>
  
</body>
</html>