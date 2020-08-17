
<h1>HSC Math Forum Post List</h1>
@foreach($post as $pst)
   <div align="center">
       <table border="1px">
           <tr>
               <td>Paper</td><td><b>{{$pst->whichPaper}}</b></td>
               <td>Chapter</td><td> <b>{{$pst->chapterName}}</b></td>
           </tr>

       </table>
       <h1>{{$pst->problemDescription}}</h1>

       <table>
           <tr><td>Provide A Solution :</td></tr>
           <tr>
               <td>
                   <form action="{{url('/comment-saving/'.$pst->id)}}" method="post">
                       @csrf

                        <textarea rows="5" cols="100" name="post_solution" >

                        </textarea>
                       <input type="submit" value="save">
                   </form>
               </td>
           </tr>
           <tr>
               <td>
                   <a href="{{url('/view-Solution/'.$pst->id)}}">View Solutions</a>
               </td>
           </tr>


       </table>

       <hr>
   </div>

@endforeach
