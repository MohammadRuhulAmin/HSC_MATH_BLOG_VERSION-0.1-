

@foreach($solution as $sln)
    <h1>{{$sln->post_solution}}</h1>
    <td>Created At: {{$sln->created_at}}</td>

    <form action="{{url('/comment-reply/'.$sln->id)}}" method="post">
        @csrf
        <table>
            <tr>
                <td>
                    <textarea rows="2" cols="50" name="comment_reply">
                    </textarea>
                </td>
            </tr>
            <tr>
                <td> <input type="submit" value="Reply">   </td>
            </tr>
        </table>
    </form>
    <form action="{{url('/view-comment-reply/'.$sln->id)}}"  method="get">
        @csrf
        <input type="submit" value="Replies...">
    </form>




    <hr>
@endforeach
