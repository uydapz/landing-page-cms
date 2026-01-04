<x-HomeLayout :title="$title">
    <style>
        .card-img-top {
            height: 300px;
        }

        .card-no-border .card {
            border-color: #d7dfe3;
            border-radius: 12px !important;
            margin-bottom: 30px;
            -webkit-box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.05);
            box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.05)
        }

        .card-body {
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            border-radius: 12px !important;
            padding: 1.25rem;
        }

        .pro-img {
            margin-top: -80px;
            margin-bottom: 20px
        }

        .little-profile .pro-img img {
            width: 128px;
            height: 128px;
            -webkit-box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            border-radius: 100%
        }

        .btn-rounded.btn-md {
            padding: 12px 35px;
            font-size: 16px
        }

        .m-t-10 {
            margin-top: 10px
        }

        .btn-primary,
        .btn-primary.disabled {
            background: #7460ee;
            border: 1px solid #7460ee;
            -webkit-box-shadow: 0 2px 2px 0 rgba(116, 96, 238, 0.14), 0 3px 1px -2px rgba(116, 96, 238, 0.2), 0 1px 5px 0 rgba(116, 96, 238, 0.12);
            box-shadow: 0 2px 2px 0 rgba(116, 96, 238, 0.14), 0 3px 1px -2px rgba(116, 96, 238, 0.2), 0 1px 5px 0 rgba(116, 96, 238, 0.12);
            -webkit-transition: 0.2s ease-in;
            -o-transition: 0.2s ease-in;
            transition: 0.2s ease-in
        }

        .btn-rounded {
            border-radius: 60px;
            padding: 7px 18px
        }

        .m-t-20 {
            margin-top: 20px
        }

        .text-center {
            text-align: center !important
        }
    </style>
    <x-Breadcrumb :title="$title" />
    <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mb-2">
                    <!-- Column -->
                    <div class="card" style="border-radius: 12px;">
                        <div class="card-body little-profile text-center">
                            <div class="pro-img"><img src="{{ asset('storage/user/' . $user->foto) }}" alt="user"></div>
                            <h3 class="m-b-0">{{ $user->username }}</h3>
                            <p>{{ $user->nama }}</p>
                            <div class="row text-center m-t-20">
                                <div class="col-lg-12 col-md-12 m-t-20">
                                    <h3 class="m-b-0 font-light">{{ $count->count() }}</h3><small>Artikel</small>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="container">
                        <div class="row">
                            @foreach ($articles as $b)
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    @include('components.atoms.ArticleCard')
                                </div>
                            @endforeach
                        </div>
            
                        <!-- Pagination -->
                        <div class="pagination-container">
                            {{ $articles->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-HomeLayout>
