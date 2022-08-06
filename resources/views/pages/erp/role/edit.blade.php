<form action="{{Route('roles.update',$id)}}" method="post">
    @csrf 
    @method("PUT")
    <div>
        Role<br/>
        <input type="text" name="rolename">
    </div>
    <div>
        <input type="submit" name="submit">
    </div>
</form>