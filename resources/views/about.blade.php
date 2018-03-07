@extends ('layout')
<title>About</title>
@section('content')
 <style type="text/css">
    /* Show it is fixed to the top */
body {
  padding-top: 7rem;
}
  </style>
  <script>
function relocate_home()
{
     location.href = "https://drive.google.com/open?id=1RYgUr1hLtG2u4010pD_o41pnno_TZLON";
} 
</script>
<div style="height: 70vh">
<div class="container">
    <div class="flex-center flex-column flex-down ">

        <h1 class="animated fadeIn mb-3">About Me</h1>
    	</br>
        <h4 class="animated fadeIn mb-3">PHP Developer , Graduated from computers and information , Helwan University , Lives in 5th Settlement 3rd Neighborhood 6th District, Villa no. 11 , Millitary Status is exempted , have worked for Perfect Shipments as a system creator and adminstrator , experienced with web programming languages (PHP , HTML , CSS , JavaScript) , and web technoligies (Laravel Framework , Wordpress , Bootstrap , SlimApp , JSON , APIs) , Working with Databas management system like SQL Server and work with MYSQL , Working with Version Control System Git. </h4>
        <h4 class="animated fadeIn mb-3">My English is very good , and I'm Interactive and Fast learner , Work within a team ,or individually , Develop creative solutions for unusual problems , Good listener and Communicator , and Self-Motivated.</h4>
		</br>
        <button type="button" class="btn btn-danger" target="_blank" onclick="relocate_home()" >MY CV</button>
    </div>


</div>
</div>
@endsection