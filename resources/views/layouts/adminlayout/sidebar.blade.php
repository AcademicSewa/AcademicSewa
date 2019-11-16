<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="active"><a href="{{url('admin/dashboard')}}"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <!-- <li> <a href="charts.html"><i class="icon icon-signal"></i> <span>Charts &amp; graphs</span></a> </li>
    <li> <a href="widgets.html"><i class="icon icon-inbox"></i> <span>Widgets</span></a> </li>
    <li><a href="tables.html"><i class="icon icon-th"></i> <span>Tables</span></a></li>
    <li><a href="grid.html"><i class="icon icon-fullscreen"></i> <span>Full width</span></a></li> -->
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Categorylists</span> <span class="label label-important">3</span></a>
      <ul>
        <li><a href="{{ url('/admin/add_category')}}">Add Category</a></li>
        <li><a href="{{ url('/admin/view_category')}}">View Category</a></li>
       
      </ul>
    </li>
    <li><a href="buttons.html"><i class="icon icon-tint"></i> <span>Buttons &amp; icons</span></a></li>
    <li><a href="{{url('admin/message')}}"><i class="icon icon-pencil"></i> <span>Message</span></a></li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Categorylists</span> <span class="label label-important">3</span></a></li>
    
    
   
    <li class="submenu"><a href="*"><i class="icon icon-pencil"></i> <span>Post</span></a>
    <ul> <li><a href="{{ url('/admin/addpost')}}">Add Post</a></li>
        <li><a href="{{ url('/admin/viewpost')}}">View Post</a></li>
    </ul>
    </li>
  </ul>
</div>