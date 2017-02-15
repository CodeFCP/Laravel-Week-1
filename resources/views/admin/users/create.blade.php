<form method="POST" action="/users">
  {!! csrf_field() !!}
    <input type="text" name="name" placeholder="name">
    <input type="email" name="email" placeholder="email">
    <input type="password" name="password" placeholder="password">
    <input type="submit" value="Create">
</form>
