<form action="{{Route('roles.store')}}" method="post">
    @csrf 
    <div>
        Role<br/>
        <input type="text" name="rolename">
    </div>
    <div>
        <input type="submit" name="submit">
    </div>
</form>