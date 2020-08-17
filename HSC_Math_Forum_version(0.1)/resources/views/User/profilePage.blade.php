
{{$userInfo->userEmail}}
{{$userInfo->id}}
{{$userInfo->userPassword}}
<div align="center">
    <h1>Ask a Problem Regarding HSC Math!</h1>

    <form action="{{url('/insert-post/'.$userInfo->id)}}" method="post">
        @csrf
        <div>
            <label>Which Paper</label><input type="text" name="whichPaper"><br>
            <label>Chapter Name</label><input type="text" name="chapterName"><br>
            <label></label><input type="hidden" value="{{$userInfo->id}}" name="register_id">

        </div>
           <textarea rows="10" cols="50" name="problemDescription">
            </textarea>
            <div>
                <input type="submit" value="Post">
            </div>
    </form>
    <ul>
        <li><a href="{{url('/view-posts/'.$userInfo->id)}}"> View My Post </a> </li>
        <li><a href="{{url('/view-all-user-post-list')}}">View All Recent New Post</a></li>
    </ul>
</div>

