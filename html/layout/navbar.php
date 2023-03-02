<?php 
echo <<<TEXT
<div class="navbar navbar-expand-sm">
      <form class="form-inline my-2 my-lg-0 d-flex flex-nowrap px-5 py-2">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" />
        <button class="btn my-2" type="submit">Search</button>
      </form>

      <div class="header-right d-flex flex-row-reverse">
        <div class="profile-admin">
          <a href="#">
            <img src="/utilities/images/admin/ADMIN.ico" alt="" />
          </a>
        </div>

        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Language
          </button>
          <div class="dropdown-menu my-0" aria-labelledby="dropdownMenu2">
            <button class="dropdown-item" type="button">English</button>
            <button class="dropdown-item" type="button">Slovak</button>
            <button class="dropdown-item" type="button">Czech</button>
          </div>
        </div>

        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa-solid fa-envelope"></i>
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <span class="">3 New messages</span>
            <div class="dropdown-divider"></div>
            <button class="dropdown-item" type="button">message 1</button>
            <button class="dropdown-item" type="button">message 2</button>
          </div>
        </div>

        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa-solid fa-bell"></i>
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <span class="">3 New notifications</span>
            <div class="dropdown-divider"></div>
            <button class="dropdown-item" type="button">
              notification 1
            </button>
            <button class="dropdown-item" type="button">
              notification 2
            </button>
          </div>
        </div>
      </div>
    </div>
TEXT;
