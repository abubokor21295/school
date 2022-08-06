<table>
    <tr>
        <td>Admin</td>
        <td>
            <form action="{{Route('roles.destroy',$id)}}" method="post">
                @csrf 
                @method("DELETE")
                <input type="submit" value="Delete">
            </form>
        </td>
    </tr>
</table>