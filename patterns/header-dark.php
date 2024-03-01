<?php
/**
 * Title: HeaderDark
 * Slug: theme_ai_center/headerDark
 * Categories: header, theme_ai_center/ai-center
 */
?>
<header class="navbar dark-theme" role="banner">
      <div class="center">
        <div class="row">
          <div class="col-sm col-md-4 col-6">
            <div class="logo-search">
              <div class="brand">
                <a class="logo" href="index.html"><span class="sr-only">EPFL AI Center</span></a>
              </div>

              <div class="search-box">
                <input type="text" id="search-input" class="search-input" placeholder="Search">
                <label for="search-input" class="clear-icon" onclick="document.getElementById('search-input').value = '';"></label>
              </div>

              <button class="button search-button"><i class="icon ph ph-magnifying-glass"><span class="sr-only">Search</span></i></button>
            </div>
          </div>

          <div class="col-sm-min col-md-8 col-6">
            <nav class="main-nav">
              <ul>
                <li><a href="about.html">About</a></li>
                <li><button class="dropdown-toggle" id="researchButton">Research <i class="ph ph-caret-down"></i></button></li>
                <li><a href="#" class="dropdown-toggle">Industry <i class="ph ph-caret-down"></i></a></li>
                <li><a href="#" class="dropdown-toggle">Education <i class="ph ph-caret-down"></i></a></li>
                <li><a href="news.html">News</a></li>
                <li><a href="events.html">Events</a></li>
              </ul> 
            </nav>

            <button class="button menu-button"><i class="icon ph ph-list"><span class="sr-only">Menu</span></i></button>
          </div>
        </div>
      </div>
    </header>