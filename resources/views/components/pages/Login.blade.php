<!DOCTYPE html>
<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="{{ asset('adminassets/') }}"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>{{ $title }}</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('adminassets/img/favicon/favicon.ico') }}" />
    <link
      href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque&display=swap"
      rel="stylesheet"
    />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('adminassets/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('adminassets/vendor/css/pages/page-auth.css') }}" />
  </head>

  <body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a href="/" class="app-brand-link gap-2">
                
                  <span class="app-brand-text demo text-body fw-bolder">SANTRIPASIR</span>
                </a>
              </div>
              <!-- /Logo -->
              <h4 class="mb-2">Alooo selamat datang? 👋</h4>
              <p class="mb-4">login disini cuy</p>

              <form id="formAuthentication" class="mb-3" action="/authanticate" method="POST">
                @method('POST')
                @csrf
                <div class="mb-3">
                  <label for="email" class="form-label">Username</label>
                  <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="username"
                    placeholder="masukkan username"
                    autofocus
                  />
                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Password</label>
                  </div>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      name="password"
                      aria-describedby="password"
                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>
                <div class="mb-3" style="text-align: right;">
                  <button style="background-color: #1A4D2E; color:#F5EFE6; border-radius:12px; padding:12px;" type="submit">Masuk</button>
                </div>
              </form>
            </div>
          </div>
          <!-- /Register -->
        </div>
      </div>
    </div>
  </body>
</html>
