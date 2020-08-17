<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>All Post List </h1>
    <table border="1px">
        <tr>
            <td>Post Id</td>
            <td>Post Created Date</td>
            <td>Serial</td>
            <td>Chapter Name </td>
            <td>Paper</td>
            <td>Problem Description</td>
            <td>Is solved?</td>
            <td>view Solution  </td>

        </tr>

    @foreach($userPost as $upost)
        <tr>
            <td>{{$upost->id}}</td>
            <td>{{$upost->created_at}}</td>
            <td>{{$upost->id}}</td>
            <td>{{$upost->chapterName}}</td>
            <td>{{$upost->whichPaper}}</td>
            <td>{{$upost->problemDescription}}</td>
            <td></td>
            <td><a href="{{url('/view-Solution/'.$upost->id)}}">View Solutions</a> </td>
        </tr>
    @endforeach
    </table>
</body>
</html>
