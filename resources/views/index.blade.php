<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="resources/css/style.css" />
  <link rel="stylesheet" href="resources/css/reset.css" />
  <title>COACHTECH</title>
</head>
<body>
  <div class="containar">
    <div class="card">
      <p class=title>Todo List</p>
      <div class="todo">
        <form action="/todos/create" method="post" class="form">
          <input type="text" class="input_add" >
          <input type="submit" class="btn_add" value="追加">
        </form>
        <table>
          <tbody>
            <tr>
              <th>作成日</th>
              <th>タスク名</th>
              <th>更新</th>
              <th>削除</th>
            </tr>
          </tbody>
        </table> 
      </div>
    </div>    
  </div>
  
</body>
</html>