<!-- Sidebar starts -->
<div class="sidebar">
    <!-- Logo starts -->
    <div class="logo">
        <h1><a href="/">Club Curator</a></h1>
    </div>
    <!-- Logo ends -->

    <!-- Sidebar buttons starts -->
    <div class="sidebar-buttons text-center">
        <!-- User button -->
        <div class="btn-group">
            <a href="/account" class="btn btn-black btn-xs"><i class="icon-user"></i></a>
            <a href="/account" class="btn btn-danger btn-xs">Account</a>
        </div>
        <!-- Logout button -->
        <div class="btn-group">
            <a href="/logout" class="btn btn-black btn-xs"><i class="icon-off"></i></a>
            <a href="/logout" class="btn btn-danger btn-xs">Logout</a>
        </div>
    </div>
    <!-- Sidebar buttons ends -->

    <!-- Sidebar navigation starts -->

    <div class="sidebar-dropdown"><a href="#">Navigation</a></div>

    <div class="sidey">
        <ul class="nav">
            <!-- Main navigation. Refer Notes.txt files for reference. -->
            <!-- Use the class "current" in main menu to hightlight current main menu -->
            <li class="current"><a href="/"><i class="icon-home"></i> Home</a></li>
            <li><a href="/contact"><i class="icon-phone"></i> Contact</a></li>
            <li><a href="/pricing"><i class="icon-dollar"></i> Pricing</a></li>
            <li><a href="/login"><i class="icon-dashboard"></i> Login</a></li>
            <li><a href="/register"><i class="icon-user"></i> Register</a></li>
            <li class="has_submenu">
                <a href="#">
                    <i class="icon-file"></i> Members<!--  <span class="label label-darky">10</span> -->
                    <!-- Icon to show dropdown -->
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub navigation -->
                <ul>
                <!-- Use the class "active" in sub menu to hightlight current sub menu -->
                    <li><a href="errorlog.html"><i class="icon-double-angle-right"></i> ErrorLog</a></li>
                    <li><a href="gallery.html"><i class="icon-double-angle-right"></i> Gallery</a></li>
                </ul>
            </li>   
        </ul>               
    </div>
</div>
<!-- Sidebar navigation ends -->