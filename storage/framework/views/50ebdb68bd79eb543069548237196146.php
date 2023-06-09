<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta
      name="description"
      content="Displaying all data related to people from Li Data's Database"
    />
    <meta name="keywords" content="li data," />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>People | Li Data</title>

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <!-- Bootstrap Icons -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"
    />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>" />
    

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo e(asset('assets/images/icons/favicon.ico')); ?>" />
  </head>

  <body>
    <header>
      <!-- START NAVBAR -->
      <nav
        class="navbar navbar--user navbar-expand-md navbar-light"
        id="user-nav"
      >
        <div class="container-fluid justify-content-end">
          <a class="navbar-brand" href="index.html">
            <img class="img-fluid" src="<?php echo e(asset('assets/images/logo.svg')); ?>" alt="li data" />
          </a>

          <button
            class="navbar-toggler me-auto"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <i class="bi bi-list"></i>
          </button>
          <div
            class="collapse navbar-collapse justify-content-between"
            id="navbarSupportedContent"
          >
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item pl-4">
                <a class="nav-link" aria-current="page" href="home.html">
                  <i class="bi bi-house-door"></i>
                  Dashboard
                </a>
              </li>
              <li class="nav-item d-none d-md-block" id="search">
                <a class="nav-link nav-link__search active" href="people.html">
                  <i class="bi bi-search"></i>
                  Data Search
                </a>

                <!-- Show element on hover  -->
                <div class="search__details hide">
                  <a href="people.html">
                    <div class="search__details--left d-flex">
                      <div class="search__details--icon-box">
                        <i class="bi bi-people"></i>
                      </div>
                      <div class="search__details--text">
                        <div
                          class="fw-bold heading--sub d-flex justify-content-between"
                        >
                          People
                          <i class="bi bi-arrow-right animate-arrow"></i>
                        </div>
                        <p>
                          Search for hyper-targeted lists of people using
                          filters.
                        </p>
                      </div>
                    </div>
                  </a>

                  <a href="company.html">
                    <div class="search__details--right d-flex">
                      <div class="search__details--icon-box">
                        <i class="bi bi-building"></i>
                      </div>
                      <div class="search__details--text">
                        <div
                          class="fw-bold heading--sub d-flex justify-content-between"
                        >
                          Companies
                          <i class="bi bi-arrow-right animate-arrow"></i>
                        </div>
                        <p>
                          Search for targeted lists of companies using filters.
                        </p>
                      </div>
                    </div>
                  </a>
                </div>
              </li>

              <li class="nav-item d-md-none d-lg-none">
                <a class="nav-link" href="people.html">
                  <i class="bi bi-send px-2"></i>
                  People
                </a>
              </li>
              <li class="nav-item d-md-none d-lg-none">
                <a class="nav-link" href="company.html">
                  <i class="bi bi-building px-2"></i>
                  Companies
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="settings/upgrade.html">
                  <i class="bi bi-box-seam px-2"></i>
                  Products
                </a>
              </li>
            </ul>
          </div>

          <!-- START SHOW ELEMENT ON CLICKING USER -->

          <div class="user-div hide u-box-shadow-1">
            <h4 class="px-4 pt-5">Rowja Mehjabeen</h4>
            <div class="user--label mx-4">
              <span>Admin</span>
            </div>

            <div class="user--menu">
              <a class="user--menu-item" href="settings/account.html">
                <i class="bi bi-gear"></i>
                <span>Settings</span>
              </a>
              <a class="user--menu-item" href="settings/upgrade.html">
                <i class="bi bi-trophy"></i>
                <span>Upgrade Plan</span>
              </a>

              <a class="user--menu-item mb-3" href="login.html">
                <i class="bi bi-power"></i>
                <span>Logout</span>
              </a>
            </div>
          </div>
          <!-- END SHOW ELEMENT ON CLICKING USER -->
        </div>

        <!-- START RIGHT NAV ITEMS -->
        <div class="d-flex nav-right__box">
          <a class="btn btn-blue mx-4" href="settings/upgrade.html"
            >Get unlimited leads
          </a>
          <button type="button" class="btn">
            <i class="bi bi-telephone phone-btn"></i>
          </button>

          <!-- TODO Link to Blog site -->
          <a class="btn"><i class="bi bi-question-circle" href="#"></i></a>

          <button type="button" class="btn notification-btn">
            <i class="bi bi-bell"></i>
          </button>
          <button type="button" class="user user-btn circle-element mx-3">
            <p class="user-name">SH</p>
          </button>
        </div>
        <!-- END RIGHT NAV ITEMS -->
      </nav>
      <!-- END NAVBAR -->

      <!-- START SECOND NAVBAR -->
      <div class="navbar02 u-border-bottom">
        <a href="people.html">
          <div class="navbar02--left">
            <h2 class="nav-item nav-item--colored fs-4">
              <i class="bi bi-people pe-2"></i>
              People
            </h2>
          </div>
        </a>

        <a href="company.html">
          <div class="navbar02--right">
            <h2 class="nav-item fs-4">
              <i class="bi bi-building pe-2"></i>
              Companies
            </h2>
          </div>
        </a>
      </div>
      <!-- END SECOND NAVBAR -->

      <!-- FIXME hide when clicked somewhere else -->
      <!-- START SHOW WHEN CLICKED ON PHONE -->
      <div class="u-box-shadow-1 phone-call__div hide">
        <div class="phone-call--icon">
          <i class="bi bi-telephone-outbound text-primary"></i>
        </div>
        <div class="phone-call--text">
          Instantly click-to-call prospects from anywhere.
        </div>
        <div class="phone-call--button btn-blue">Upgrade to Professional</div>
        <a class="phone-call--link"> Learn more </a>
      </div>
      <!-- END SHOW WHEN CLICKED ON PHONE -->

      <!-- START SHOW WHEN CLICKED ON NOTIFICATION -->
      <div
        class="u-box-shadow-1 notification__sidebar hide animate__animated animate__fadeInRightBig"
      >
        <div class="notification--header">
          <div class="notification--header-title">
            <h5>NOTIFICATIONS</h5>
          </div>
          <div class="notification--header-icons">
            <div class="btn"><i class="bi bi-arrow-clockwise"></i></div>
            <div class="btn close-btn">
              <i class="bi bi-x-lg"></i>
            </div>
          </div>
        </div>
        <div class="notification--body"></div>
      </div>
      <!-- END SHOW WHEN CLICKED ON NOTIFICATION -->
    </header>

    <main id="peopleData">
      <section class="section-user-dashboard">
        <!-- START SIDEBAR -->
        <section class="section-user-dashboard--sidebar">
          <div class="heading--sub py-3 ps-4 u-border-bottom">Filters</div>

          <!-- INPUT NAME -->
          <div class="input-name u-border-bottom py-4 px-4">
            <div class="input-title pb-2">
              <i class="bi bi-person-badge pe-2"></i>
              Name
            </div>
            <input
              type="text"
              name="name"
              id="searchPeople"
              class="w-100"
              placeholder="Enter name..."
            />
            <form action="" class="d-flex justify-content-end mt-2">
              <button type="button" id="searchPeopleBtn" class="btn btn-blue rounded-1 w-100">
                Apply
              </button>
            </form>
          </div>

          <!-- INPUT JOB TITLE -->
          <div class="input-job u-border-bottom py-4 px-4">
            <div class="input-title pb-2">
              <i class="bi bi-briefcase pe-2"></i>
              Job Title
            </div>
            <input
              type="text"
              name="job"
              id="searchTitle"
              placeholder="Search for a job title"
            />
            <form action="" class="d-flex justify-content-end mt-2">
              <button type="button" id="searchTitleBtn" class="btn btn-blue rounded-1 w-100">
                Apply
              </button>
            </form>
          </div>

          <!-- INPUT COMPANY NAME -->
          <div class="input-company u-border-bottom py-4 px-4">
            <div class="input-title pb-2">
              <i class="bi bi-building pe-2"></i>
              Company
            </div>
            <input
              type="text"
              name="company"
              id="searchCompany"
              placeholder="Enter companies..."
            />
            <form action="" class="d-flex justify-content-end mt-2">
              <button type="button" id="searchCompanyBtn" class="btn btn-blue rounded-1 w-100">
                Apply
              </button>
            </form>
          </div>
        </section>
        <!-- END SIDEBAR -->

        <!-- START MAIN DASHBOARD -->
        <section class="section-user-dashboard--main">
          <div class="container">
            <div class="row">
              <div class="col-md-4 ms-auto d-flex justify-content-end mt-4">
                <button type="button" class="btn btn-download border-3">
                  <i class="bi bi-download"></i>
                  &nbsp; Download Selected Data
                </button>
              </div>
            </div>
          </div>

          <!-- START TABLE -->
          <div
            class="section-table table-scrollable mx-5 mt-4 mb-2"
            style="width: 75vw; overflow: auto; max-height: 78vh"
          >
            <table
              class="table table-hover table-bordered table-responsive"
              id="peopleTable"
            >
              <thead>
                <tr>
                  <th class="px-4">
                    <a onclick="checkAll(event)" class="selectAll"> Select All </a>
                  </th>
                  <th>Name</th>
                  <th>Title</th>
                  <th>Company</th>
                  <th>Quick Actions</th>
                  <th>Contact Location</th>
                  <th>Employees</th>
                  <th>Industry</th>
                </tr>
              </thead>
              
              
              <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tbody>
                    <tr>
                  <td>
                    <input class="form-check-input" type="checkbox" value="" />
                  </td>
                  <td>
                    <a href="user01.html" class="person-name">
                      <?php echo e($user->name); ?>

                    </a>
                  </td>
                  <td><?php echo e($user->title); ?></td>
                  <td><?php echo e($user->company); ?></td>
                  <td>
                    <a
                      type="button"
                      class="btn btn-access btn-access--phone"
                      id="accessBtn"
                      href="<?php echo e(route('admin.dashboard.access', $user->id)); ?>"
                    >
                      Access Email
                    </a>

                    <div class="message-box hide-text">
                      Verified email costs one credit.
                    </div>

                    <div class="button-group hide" id="buttonGroup">
                      <a
                        class="btn btn-access btn-access--phone"
                        href="settings/upgrade.html"
                      >
                        <i class="bi bi-phone"></i>
                        <i class="bi bi-caret-down-fill"></i>
                      </a>

                      <div
                        class="message-box message-box--phone hide-text"
                        id="messagePhone"
                      ></div>

                      <a
                        class="btn btn-access btn-access--email"
                        href="settings/upgrade.html"
                      >
                        <i class="bi bi-envelope"></i>
                        <i class="bi bi-caret-down-fill"></i>
                      </a>

                      <div
                        class="message-box message-box--email hide-text"
                        id="messageEmail"
                      >
                        <!-- Email not available -->
                      </div>
                    </div>
                  </td>
                  <td><?php echo e($user->location); ?></td>
                  <td><?php echo e($user->employees); ?></td>
                  <td><?php echo e($user->industry); ?></td>
                </tr>
                  </tbody>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
          </div>
          <!-- END TABLE -->

          <!-- Download CSV Button -->
          <div class="container">
            <div class="row">
              <div class="col-md-4 ms-auto py-4 d-flex justify-content-end">
                <button
                  type="submit"
                  class="btn btn-download border-3"
                  disabled="disabled"
                >
                  <i class="bi bi-download"></i>
                  &nbsp; Download Selected Data
                </button>
              </div>
            </div>
          </div>
        </section>
        <!-- END MAIN DASHBOARD -->
      </section>
    </main>

    <!-- Bootstrap JS -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>

    <!-- jQuery -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
      integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>

    
    <!-- Custom JS -->
    <script src="<?php echo e(asset('assets/js/navbar.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/people.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/script.js')); ?>"></script>
    <!-- axios -->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
      //filter

      //name
      $( "#searchPeopleBtn").click(function(){
        let name = $( "#searchPeople").val()
       // alert($( "#searchPeople").val())
       axios.post("<?php echo e(route('user.filter')); ?>", {
          searchField: name
        })
        .then(function (response) {
          //this.users = response.data;
          console.log(response.data);
          //console.log(this.users);
        })
        .catch(function (error) {
          console.log(error);
        });
      })

      //title
      $( "#searchTitleBtn").click(function(){
        let title = $( "#searchTitle").val()

       axios.post("<?php echo e(route('user.filter')); ?>", {
          searchField: title
        })
        .then(function (response) {
          console.log(response);
        })
        .catch(function (error) {
          console.log(error);
        });
      })

      //company
      $("#searchCompanyBtn").click(function(){
        let company = $("#searchCompany").val()

        axios.post("<?php echo e(route('user.filter')); ?>",{
          searchField: company
        })
        .then(function(response){
          console.log(response);
        })
        .catch(function(error){
          console.log(error)
        })
      })
      

    </script>
    <script>
      $(function () {
        $('.form-check-input').click(function () {
          $('.btn-download').prop(
            'disabled',
            $('input.form-check-input:checked').length == 0
          );
        });

        $('#countryDropdown').on('keyup', function () {
          var value = $(this).val().toLowerCase();
          $('.dropdown-menu li').filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
          });
        });
      });
    </script>
    <script>
      var checkboxs = document.querySelectorAll("input[type = 'checkbox']");
      var flag=false;
      function checkAll(e){
        if(flag == false){
          checkboxs.forEach(function(checkbox){
            checkbox.checked = true;
            flag = true;  
          })
        }else{
          checkboxs.forEach(function(checkbox){
            checkbox.checked = false;
            flag = false;
          })
        }
      }
    </script>
  </body>
</html>
<?php /**PATH C:\Users\User\Documents\GitHub Proj\SEO Expert\backend-task-seo-expert\backend-task-seo-expert\resources\views/filter.blade.php ENDPATH**/ ?>