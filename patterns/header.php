<?php
/**
 * Title: Header
 * Slug: theme_ai_center/header
 * Categories: header, theme_ai_center/ai-center
 */
?>
<div class="touch-menu" id="touchMenu">
    <header class="touch-menu-header" role="banner">
        <div class="center">
            <div class="row">
                <div class="col-sm">
                    <div class="brand">
                        <a class="logo" href="home"><span class="sr-only">EPFL AI Center</span></a>
                    </div>
                </div>
                <div class="col-sm-min">
                    <button class="button close-button"><i class="icon ph ph-x"><span class="sr-only">Close menu</span></i></button>
                </div>
            </div>
        </div>
    </header>

    <nav class="touch-menu-nav">
        <ul>
            <li><a href="index">Home<i class="icon ph ph-caret-right"></i></a></li>
            <li><a href="about">About<i class="icon ph ph-caret-right"></i></a></li>
            <li class="accordion-item">
                <button class="accordion-toggle">Research<i class="icon ph ph-caret-down"></i></button>
                <ul class="accordion-content">
                    <li><h6>Information &amp; Resources</h6></li>
                    <li><a href="research">Overview<i class="icon ph ph-caret-right"></i></a></li>
                    <li><a href="#">Our Approach<i class="icon ph ph-caret-right"></i></a></li>
                    <li><a href="#">Publications<i class="icon ph ph-caret-right"></i></a></li>
                    <li><h6>Research Areas</h6></li>
                    <li><a href="#">AI Foundations<i class="icon ph ph-caret-right"></i></a></li>
                    <li><a href="#">AI / Machine Learning Consulting Service<i class="icon ph ph-caret-right"></i></a></li>
                    <li><a href="#">AI for Good &amp; Sustainability<i class="icon ph ph-caret-right"></i></a></li>
                </ul>
            </li>
            <li class="accordion-item">
            <button class="accordion-toggle">Innovation<i class="icon ph ph-caret-down"></i></button>
            <ul class="accordion-content">
                <li><h6>Information &amp; Resources</h6></li>
                <li><a href="#">Overview<i class="icon ph ph-caret-right"></i></a></li>
                <li><a href="#">Something<i class="icon ph ph-caret-right"></i></a></li>
                <li><a href="#">Something else<i class="icon ph ph-caret-right"></i></a></li>
            </ul>
        </li>
            <li class="accordion-item">
            <button class="accordion-toggle">Education<i class="icon ph ph-caret-down"></i></button>
            <ul class="accordion-content">
                <li><h6>Information &amp; Resources</h6></li>
                <li><a href="#">Overview<i class="icon ph ph-caret-right"></i></a></li>
                <li><a href="#">Something<i class="icon ph ph-caret-right"></i></a></li>
                <li><a href="#">Something else<i class="icon ph ph-caret-right"></i></a></li>
            </ul>
        </li>
        <li><a href="news">News<i class="icon ph ph-caret-right"></i></a></li>
        <li><a href="events">Events<i class="icon ph ph-caret-right"></i></a></li>
        </ul>
    </nav>
    </div>

    <div class="search-bar">
        <div class="center">
            <div class="search-box">
                <input type="text" id="search-input" class="search-input" placeholder="Search">
                <label for="search-input" class="clear-icon" onclick="document.getElementById('search-input').value = '';"></label>
            </div>
            <button class="button close-button"><i class="icon ph ph-x"><span class="sr-only">Close menu</span></i></button>
        </div>
    </div>

    <div class="cookie-consent">
        <p>We use cookies. <a class="link-sm" href="https://www.epfl.ch/about/presidency/presidents-team/legal-affairs/epfl-privacy-policy/" target="_blank"><span>Learn more</span></a></p>
        <button class="button-secondary" id="cookieConsentOk">OK</button>
    </div>

    <div class="nav-dropdown" id="researchDropdown">
      <div class="container">
        <div class="center">
          <div class="row">
            <div class="col-12">
              <header class="nav-dropdown-header">
                <h4>Research</h4>
                <button class="button close-button"><i class="icon ph ph-x"><span class="sr-only">Close menu</span></i></button>
              </header>
            </div>
          </div>

          <div class="row">
            <div class="col-3">
              <div class="nav-dropdown-section">
                <header><h6>Information &amp; Resources</h6></header>
                <ul class="divider-link-list">
                  <li><a href="#"><span>Overview</span><i class="icon ph ph-caret-right"></i></a></li>
                  <li><a href="#"><span>Overview</span><i class="icon ph ph-caret-right"></i></a></li>
                  <li><a href="#"><span>Overview</span><i class="icon ph ph-caret-right"></i></a></li>
                </ul>
              </div>
            </div>

            <div class="col-9">
              <div class="nav-dropdown-section">
                <header><h6>Research Areas</h6></header>
                <ul class="divider-link-list list-col-3">
                  <li><a href="#"><span>Overview</span><i class="icon ph ph-caret-right"></i></a></li>
                  <li><a href="#"><span>Overview</span><i class="icon ph ph-caret-right"></i></a></li>
                  <li><a href="#"><span>Overview</span><i class="icon ph ph-caret-right"></i></a></li>
                  <li><a href="#"><span>Overview</span><i class="icon ph ph-caret-right"></i></a></li>
                  <li><a href="#"><span>Overview</span><i class="icon ph ph-caret-right"></i></a></li>
                  <li><a href="#"><span>Overview</span><i class="icon ph ph-caret-right"></i></a></li>
                  <li><a href="#"><span>Overview</span><i class="icon ph ph-caret-right"></i></a></li>
                  <li><a href="#"><span>Overview</span><i class="icon ph ph-caret-right"></i></a></li>
                  <li><a href="#"><span>Overview</span><i class="icon ph ph-caret-right"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>

    <header class="navbar" role="banner">
      <div class="center">
        <div class="row">
          <div class="col-sm col-md-4 col-6">
            <div class="logo-search">
              <div class="brand">
                <a class="logo" href="home"><span class="sr-only">EPFL AI Center</span></a>
              </div>


              <button class="button search-button"><i class="icon ph ph-magnifying-glass"><span class="sr-only">Search</span></i></button>
            </div>
          </div>

          <div class="col-sm-min col-md-8 col-6">
            <nav class="main-nav">
              <ul>
                <li><a href="/about">About</a></li>
                <li><a href="/research" class="dropdown-toggle">Research</a></li>
                <li><a href="/innovation" class="dropdown-toggle">Innovation</a></li>
                <li><a href="/education" class="dropdown-toggle">Education</a></li>
                <li><a href="/news">News</a></li>
                <li><a href="/events">Events</a></li>
              </ul> 
            </nav>

            <button class="button menu-button"><i class="icon ph ph-list"><span class="sr-only">Menu</span></i></button>
          </div>
        </div>
      </div>
    </header>
