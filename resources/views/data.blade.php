<?php
$x = 0;
foreach ($project as $projects){
    if($x % 3 == 0) echo '<div class="row">';

?>     
       <div class="project">
         <div class="col-md-4">
            <div class="project_avatar" style="background-image: url('/uploads/images/{{$projects['project_avatar'] }}');">
            </div>
            <div class="project_content" style="height: 267px;">
               <div class="project_title"><h2>{{$projects['project_title'] }}</h2></div>
               <div class="project_description"><p>{{$projects['project_description'] }}</p>
               </div>
                @if (Auth::check())
               <div class="actions clearfix">
               <button  onclick="location.href='/project/edit/{{$projects['id']}}';" class="button-project btn-primary btn">Edit</button>
               <button  onclick="location.href='/project/delete/{{$projects['id']}}';" class="button-project btn-primary btn btn-right">Delete</button>
               </div>
               @else
                @endif

            </div>
         </div>
        

	
        </div>
<?php
    $x++;
    if($x % 3== 0) echo '</div>';
}
?>