
  <!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="/">Home</a></li>
                        <li><a href="/about" class="{{ ($active == "About")? 'active' : '' }}">About</a></li>
                        <li><a href="/posting" class="{{ ($active == "Posts")? 'active' : '' }}">Post</a></li>
                        <li><a href="/categories" class="{{ ($active == "Category")? 'active' : '' }}">Category</a></li>
                        @auth
                        <li><a href="/dashboard" class="{{ ($active == "Dashboard")? 'active' : '' }}">Dashboard</a></li>
                        <li><a href="/logout">Log Out</a>
                        </li>
                        @else
                        <li><a href="/login" class="{{ ($active == "login")? 'active' : '' }}">Login</a></li>
                        @endauth
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
  <!-- ***** Header Area End ***** -->

