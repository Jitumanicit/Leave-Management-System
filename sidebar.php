<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
			<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
			<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
			<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
			<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
			<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
			<ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
				<!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
				<li class="sidebar-toggler-wrapper">
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler">
					</div>
					<!-- END SIDEBAR TOGGLER BUTTON -->
				</li>
				<!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
				<li class="sidebar-search-wrapper">
					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
					<!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
					<!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
					<form id="search_box" class="sidebar-search" action="search.php" method="GET">
						<a href="javascript:;" class="remove">
						<i class="icon-close"></i>
						</a>
						<div class="input-group">
							<input id="search" type="text" name="query" class="form-control" placeholder="Search..."  autocomplete="off">
							<span class="input-group-btn">
							<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
							</span>														
						</div>
						<ul id="results" class="sub-menu scrollbar">
						<!-- ajax results load here-->
						</ul>
					</form>
					<!-- END RESPONSIVE QUICK SEARCH FORM -->
				</li>

				<!--
				<li class="start ">
					<a href="javascript:;">
					<i class="icon-home"></i>
					<span class="title">Dashboard</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="index.html">
							<i class="icon-bar-chart"></i>
							Default Dashboard</a>
						</li>
						<li>
							<a href="index_2.html">
							<i class="icon-bulb"></i>
							New Dashboard #1</a>
						</li>
						<li>
							<a href="index_3.html">
							<i class="icon-graph"></i>
							New Dashboard #2</a>
						</li>
					</ul>
				</li>-->

                    <li>
                        <a href="apply_leave.php">
                        <i class="icon-home"></i>
                        <span class="title">Leave Apply</span>
                        </a>
                    </li>
                    <?php if(role()=='admin' ): ?>
                    <li>
                        <a href="users.php">
                        <i class="icon-user"></i>
                        <span class="title">Users</span>
                        </a>
                    </li>
                <?php endif ?>
                    
                    <li>
                        <a href="leave_status.php">
                        <i class="icon-magnifier"></i>
                        <span class="title">Leave Status</span>
                        </a>
                    </li>
            		
             	
            
            	<?php if(role()=='admin'  || role()=='hod'): ?>
                    <li>
                        <a href="leave_request.php">
                        <i class="icon-list"></i>
                        <span class="title">Leave Request</span>
                        </a>
                    </li>
                <?php endif;?>
              
                    <li>
                        <a href="leave_record.php">
                        <i class="icon-bar-chart"></i>
                        <span class="title">Leave Record</span>
                        </a>
                    </li>
                    </ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->