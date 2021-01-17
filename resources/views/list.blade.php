<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V04</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 2px solid blue;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
<body>
	{{session('msg')}}

  <div style="text-align:center">
          <a href="registration"> Back To Add New Records </a>​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​
          </div>

		<div class="container-table100">
	
						<table id="customers"> 
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1" style="color:Maroon">Name</th>
									<th class="cell100 column2" style="color:Maroon">Email</th>
									<th class="cell100 column3"style="color:Maroon">Subject</th>
									<th class="cell100 column4" style="color:Maroon">Message</th>
									<th class="cell100 column4" style="color:Maroon">Image</th>
                  <th class="cell100 column5" style="color:Maroon">Action</th>
              
								
								</tr>
						
                </thead>
     
              @foreach($userlists as $list )
								<tr class="row100 head">
									<th>{{$list->name}}</th>
									<th>{{$list->email}}</th>
									<th>{{$list->subject}}</th>
									<th>{{$list->message}}</th>
									<th><img src="{{url('upload/'.$list->image)}}" style="height:50px;width:50px"></th>
                  <th><a href="delete/{{$list->id}}" onclick="return confirm('Are you sure?')"  style="color:black">Delete </a>
                  &nbsp;<a href="edit/{{$list->id}}" onclick="return confirm('Are you sure?')"  style="color:Purple">Edit </a></th>
                  
									</tr>
						     
							@endforeach
						
               


						</table>
            
					</div>
          
        
	

</body>
</html>